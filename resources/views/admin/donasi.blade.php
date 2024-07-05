@extends('layout.app')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Donasi </h3>
        <nav aria-label="breadcrumb">
            {{ Breadcrumbs::render('donasi') }}
        </nav>
    </div>

    <div class="row">
        <div class="col-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Bank Jago</div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="penerima">Penerima</label>
                                <input type="text" id="" class="form-control text-dark" value="Billal Fauzan" disabled>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="rekening">Nomor Rekening</label>
                                <input type="text" id="" class="form-control text-dark" value="102903600223" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Bank Rakyat Indonesia</div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="penerima">Penerima</label>
                                <input type="text" id="" class="form-control text-dark" value="Billal Fauzan" disabled>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="rekening">Nomor Rekening</label>
                                <input type="text" id="" class="form-control text-dark" value="4304 0101 0844 503" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection