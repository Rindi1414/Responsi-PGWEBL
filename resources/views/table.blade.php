@extends('layouts.template')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header">
           <h3>Data Mahasiswa</h3>
    </div>
    <div class="card-body"></div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Kelas</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>RINDI</td>
                <td>A</td>
            </tr>
            <tr>
                <td>2</td>
                <td>TRI</td>
                <td>B</td>
            </tr>
            <tr>
                <td>3</td>
                <td>SETYANINGSIH</td>
                <td>C</td>
            </tr>
        </tbody>
    </table>
</div>
</div>

@endsection
