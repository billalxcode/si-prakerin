@extends('layout.app')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Jurusan </h3>
        <nav aria-label="breadcrumb">
            {{ Breadcrumbs::render('jurusan') }}
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
                    <h4 class="card-title">Jurusan table</h4>
                    <p class="card-description">Menampilkan semua data dalam bentuk table</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> Name </th>
                                    <th>Jumlah Kelas</th>
                                    <th>Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jurusans as $jurusan)
                                    <tr>
                                        <td> {{ $jurusan->name }} </td>
                                        <td> {{ $jurusan->kelas()->count() }} </td>
                                        <td>
                                            <button class="btn btn-primary mx-1" data-toggle="modal" data-target="#editDataModal-{{ $jurusan->id }}"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteDataModal-{{ $jurusan->id }}"><i class="fa fa-trash"></i></button>
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
@include('admin.jurusan.modals.create')
@foreach ($jurusans as $jurusan)
    @include('admin.jurusan.modals.edit', ['jurusan' => $jurusan])
    @include('admin.jurusan.modals.delete', ['jurusan' => $jurusan])
@endforeach
@endsection