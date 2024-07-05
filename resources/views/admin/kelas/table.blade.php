@extends('layout.app')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Kelas </h3>
        <nav aria-label="breadcrumb">
            {{ Breadcrumbs::render('kelas') }}
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
                    <h4 class="card-title">kelas table</h4>
                    <p class="card-description">Menampilkan semua data dalam bentuk table</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> Kelas </th>
                                    <th>Jurusan</th>
                                    <th>Wali Kelas</th>
                                    <th>Jumlah Siswa</th>
                                    <th>Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $kelas)
                                    <tr>
                                        <td> {{ $kelas->name }} </td>
                                        <td>{{ $kelas->jurusan->name }}</td>
                                        <td> {{ $kelas->guru->name ?? '-' }} </td>
                                        <td>{{ $kelas->siswas->count() }} siswa</td>
                                        <td>
                                            <button class="btn btn-primary mx-1" data-toggle="modal" data-target="#editDataModal-{{ $kelas->id }}"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteDataModal-{{ $kelas->id }}"><i class="fa fa-trash"></i></button>
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
@include('admin.kelas.modals.create')
@foreach ($datas as $kelas)
    @include('admin.kelas.modals.edit', ['kelas' => $kelas, 'gurus' => $gurus, 'jurusans' => $jurusans])
    @include('admin.kelas.modals.delete', ['kelas' => $kelas])
@endforeach
@endsection