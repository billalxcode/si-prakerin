@extends('layout.app')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Guru </h3>
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
                    <h4 class="card-title">Guru table</h4>
                    <p class="card-description">Menampilkan semua data dalam bentuk table</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> Name </th>
                                    <th>Whatsapp</th>
                                    <th>Mapel</th>
                                    <th>Kelas</th>
                                    <th>Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $guru)
                                    <tr>
                                        <td> {{ $guru->name }} </td>
                                        <td>{{ $guru->whatsapp }}</td>
                                        <td>{{ $guru->mapel }}</td>
                                        <td> {{ $guru->kelas->name ?? '-' }} </td>
                                        <td>
                                            <button class="btn btn-primary mx-1" data-toggle="modal" data-target="#editDataModal-{{ $guru->id }}"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteDataModal-{{ $guru->id }}"><i class="fa fa-trash"></i></button>
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
@include('admin.guru.modals.create')
@foreach ($datas as $guru)
    @include('admin.guru.modals.edit', ['guru' => $guru])
    @include('admin.guru.modals.delete', ['guru' => $guru])
@endforeach
@endsection