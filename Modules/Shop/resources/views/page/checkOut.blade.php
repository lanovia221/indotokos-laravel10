@extends('shop::index')

@section('content')
<div class="row">
    <div class="col-sm-10">
        <div class="card">
            <div class="card-body">
            <h3>Masukan Alamat Penerima</h3>
            <div class="row">
                <label for="nama_email" class="col-form-label col-sm-3">Nama Email</label>
                <input type="text" class="form-control col-sm-9" placeholder="Masukan nama email">
            </div>
            <div class="row">
                <label for="namaPT" class="col-form-label col-sm-3">namaPT</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="namaPT" name="namaPT" placeholder="">
                </div>
            </div>
            <div class="row">
                <label for="tlp" class="col-form-label col-sm-3">telepon</label>
                <input type="text" class="form-control col-sm-9" placeholder="No.telp penerima">
            </div>
            <div class="row">
                <label for="nama_penerima" class="col-form-label col-sm-3">Nama Penerima</label>
                <input type="text" class="form-control col-sm-9" placeholder="Masukan nama penerima">
            </div>
            <div class="row">
                <label for="nama_penerima" class="col-form-label col-sm-3">Nama Penerima</label>
                <input type="text" class="form-control col-sm-9" placeholder="Masukan nama penerima">
            </div>
            </div>
        </div>
    </div>
</div>
@endsection