@extends('layout.app')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Industri </h3>
        <nav aria-label="breadcrumb">
            {{ Breadcrumbs::render('industri') }}
        </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Call to Action</div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#createDataModal"><i
                                    class="fa fa-plus"></i> Tambah Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Industri table</h4>
                    <p class="card-description">Menampilkan semua data dalam bentuk table</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> Name </th>
                                    <th>Owner</th>
                                    <th>Kontak</th>
                                    <th>Jumlah Siswa</th>
                                    <th>Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($perusahaans as $perusahaan)
                                    <tr>
                                        <td> {{ $perusahaan->name }} </td>
                                        <td> {{ $perusahaan->owner }} </td>
                                        <td>{{ $perusahaan->contact }}</td>
                                        <td>-</td>
                                        <td>
                                            <button class="btn btn-primary mx-1" data-toggle="modal" data-target="#editDataModal-{{ $perusahaan->id }}"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteDataModal-{{ $perusahaan->id }}"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('modals')
@include('admin.perusahaan.modals.create')
@foreach ($perusahaans as $perusahaan)
    @include('admin.perusahaan.modals.edit', ['perusahaan' => $perusahaan])
    @include('admin.perusahaan.modals.delete', ['perusahaan' => $perusahaan])
@endforeach
@endsection