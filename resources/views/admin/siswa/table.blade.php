@extends('layout.app')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Siswa </h3>
        <nav aria-label="breadcrumb">
            {{ Breadcrumbs::render('siswa') }}
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
                    <h4 class="card-title">Siswa table</h4>
                    <p class="card-description">Menampilkan semua data dalam bentuk table</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>NIS</th>
                                    <th> Name </th>
                                    <th>Kelas</th>
                                    <th>Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswas as $siswa)
                                    <tr>
                                        <td>{{ $siswa->nis }}</td>
                                        <td> {{ $siswa->name }} </td>
                                        <td> {{ $siswa->kelas->name ?? '-' }} </td>
                                        <td>
                                            <button class="btn btn-primary mx-1" data-toggle="modal" data-target="#editDataModal-{{ $siswa->id }}"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteDataModal-{{ $siswa->id }}"><i class="fa fa-trash"></i></button>
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
@include('admin.siswa.modals.create')
@foreach ($siswas as $siswa)
    @include('admin.siswa.modals.edit', ['siswa' => $siswa, 'kelas' => $kelas])
    @include('admin.siswa.modals.delete', ['siswa' => $siswa])
@endforeach
@endsection