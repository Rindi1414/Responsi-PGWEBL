<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container py-12">
        <div class="card shadow">
            <div class="card-header">
                <h3 class="card-title">Data</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="alert alert-primary" role="alert">
                            <h4><i class="fa-solid fa-location-dot"></i> Total Points</h4>
                            <p style="font-size: 32pt">{{$total_points}}</p>
                        </div>
                    </div>

                </div>
                <hr>
                <p>Anda login sebagai <b> {{ Auth::user()->name}}</b> dengan email <i>{{ Auth::user()->email}}</i></p>
            </div>
        </div>
    </div>

    <div class="container py-12">
        <div class="card shadow">
            <div class="card-header">
                <h3 class="card-title">Add/Edit Point</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('store.point') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Kuliner">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Deskripsi Kuliner" rows="1"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="geom" class="form-label">Geometry</label>
                        <textarea class="form-control" id="geom_point" name="geom" placeholder="POINT(10.1111,-7.1111)" rows="1"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image_point" name="image" onchange="document.getElementById('preview-image-point').src = window.URL.createObjectURL(this.files[0])">
                        <input type="hidden" class="form-control" id="image_old" name="image_old">
                    </div>
                    <div class="mb-3">
                        <img src="" alt="Preview" id="preview-image-point" class="img-thumbnail" width="400">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>



</x-app-layout>
@section('script')
<script>
    map.on('draw:edited', function(e) {
            var layer = e.layers;


            layer.eachLayer(function (layer) {
              var geojson = layer.toGeoJSON();

              var wkt = Terraformer.geojsonToWKT(geojson.geometry);


            $('#name').val(layer.feature.properties.name);
            $('#description').val(layer.feature.properties.description);
            $('#geom_point').val(wkt);
            $('#image_old').val(layer.feature.properties.image);
            $('#preview-image-point').attr('src', '{{ asset('storage/images') }}/' + layer.feature.properties.image);
            $('#PointModal').modal('show')
        });
    });
</script>

@endsection






