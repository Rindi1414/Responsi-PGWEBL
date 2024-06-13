@extends('layouts.template')

@section('styles')
    <style>
        html,
        body {
            height: 100%;
            width: 100%;
        }

        #map {
            height: calc(100vh - 56px);
            width: 100%;
            margin: 0%;
        }

        .distance-marker {
            background-color: rgb(0, 255, 128) !important;
            width: 8px !important;
            height: 8px !important;
            border-radius: 50%;
            border: 1px solid rgb(0, 255, 119) !important;
        }

        .leaflet-popup-content-wrapper {
            background: #ffffff !important;
            color: #000;
        }
        .leaflet-popup-tip {
            background: #ffffff !important;
        }

        .custom-popup {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 8px;
            border: 2px solid #4caf50;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        .custom-popup h4 {
            margin: 0;
            padding: 0;
            font-size: 18px;
            color: #4caf50;
        }
        .custom-popup p {
            margin: 5px 0;
            padding: 0;
            font-size: 14px;
            color: #333;
        }
    </style>
@endsection

@section('content')
    <div id="map"></div>
@endsection

@section('script')
    <script>
        // Map
        var map = L.map('map').setView([-7.7713, 110.3770], 13); // Coordinates for UGM

        //Basemap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        //Menampilkan SHP
        $.getJSON("{{ asset('geojson/sleman.geojson') }}", function(data) {
            var geojsonLayer = L.geoJson(data, {
            style: function(feature) {
                if (feature.properties.administrative) {
                    return { color: 'darkred', fillColor: 'lightcoral', fillOpacity: 0.5 };
                } else {
                    return { color: 'red', fillColor: 'lightpink', fillOpacity: 0.5 };
                }
            },
        onEachFeature: function(feature, layer) {
            var popupContent = "<b>Kecamatan: </b>" + feature.properties.kecamatan
            layer.bindPopup(popupContent); // Tambahkan popup pada klik fitur
        }
    });
    map.addLayer(geojsonLayer);
});


        //Inisialisasi Leaflet.draw
        var drawnItems = new L.FeatureGroup();
        map.addLayer(drawnItems);

        var drawControl = new L.Control.Draw({
            edit: {
                featureGroup: drawnItems
            },
            draw: {
                polygon: false,
                polyline: false,
                rectangle: false,
                circle: false,
                circlemarker: false,
                marker: true
            }
        });
        map.addControl(drawControl);

        // Marker untuk pengukuran jarak
        var distanceMarkerIcon = L.divIcon({
            className: 'distance-marker'
        });

        var points = [];
        var polyline = null;

        map.on('draw:created', function (event) {
            var layer = event.layer;
            layer.setIcon(distanceMarkerIcon);
            drawnItems.addLayer(layer);

            if (event.layerType === 'marker') {
                points.push(layer.getLatLng());

                if (points.length === 2) {
                    if (polyline) {
                        map.removeLayer(polyline);
                    }

                    // Gambar garis antara dua titik
                    polyline = L.polyline(points, {color: 'green'}).addTo(map);
                    drawnItems.addLayer(polyline);

                    // Hitung jarak antara dua titik
                    var distance = points[0].distanceTo(points[1]) / 1000; // distance in kilometers

                    // Tampilkan popup
                    L.popup({
                        className: 'custom-popup'
                    })
                    .setLatLng(points[1])
                    .setContent("<div class='custom-popup'>Jarak yang anda tempuh adalah: " + distance.toFixed(2) + " km</div>")
                    .openOn(map);


                    points = []; // Reset points untuk pengukuran berikutnya
                    polyline = null;
                }
            }
        });

        // Menangani penghapusan layer
        map.on('draw:deleted', function (event) {
            if (polyline) {
                map.removeLayer(polyline);
                polyline = null;
            }
        });

        /* GeoJSON Point */
        var point = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent = feature.properties.name + "<br>" +

                " <img src='{{ asset('storage/images') }}/" + feature.properties.image +

                "'class='img-thumbnail' alt='' width='200'>";


                layer.on({
                    click: function(e) {
                        point.bindPopup(popupContent);
                    },
                    mouseover: function(e) {
                        point.bindTooltip(feature.properties.name);
                    },
                });
            },
        });
        $.getJSON("{{ route('api.points') }}", function(data) {
            point.addData(data);
            map.addLayer(point);
        });
        /* GeoJSON Polyline */
        var polyline = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent = "Nama: " + feature.properties.name + "<br>" +
                    "Deskripsi: " + feature.properties.description + "<br>" +
                    "Foto: <img src='{{ asset('storage/images/') }}/" + feature.properties.image +
                    "' class='img-thumbnail' alt='' width='200'>";
                layer.on({
                    click: function(e) {
                        polyline.bindPopup(popupContent);
                    },
                    mouseover: function(e) {
                        polyline.bindTooltip(feature.properties.name);
                    },
                });
            },
        });
        $.getJSON("{{ route('api.polylines') }}", function(data) {
            polyline.addData(data);
            map.addLayer(polyline);
        });
        /* GeoJSON Polygon */
        var polygon = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent = "Nama: " + feature.properties.name + "<br>" +
                    "Deskripsi: " + feature.properties.description + "<br>" +
                    "Foto: <img src='{{ asset('storage/images/') }}/" + feature.properties.image +
                    "' class='img-thumbnail' alt='' width='200'>";
                layer.on({
                    click: function(e) {
                        polygon.bindPopup(popupContent);
                    },
                    mouseover: function(e) {
                        polygon.bindTooltip(feature.properties.name);
                    },
                });
            },
        });
        $.getJSON("{{ route('api.polygons') }}", function(data) {
            polygon.addData(data);
            map.addLayer(polygon);
        });

        //layer control
        var overlayMaps = {
            "Point": point,
            "Polyline": polyline,
            "Polygon": polygon
        };
        var layerControl = L.control.layers(null, overlayMaps).addTo(map);


    </script>
@endsection
