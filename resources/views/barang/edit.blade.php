@extends('barang.layouts.app')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Barang
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                <strong>Peringatan</strong>Ada yang salah dengan inputan anda!<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('barang.update', $barang->id_barang) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="Kode Barang">Kode Barang</label>
                        <input type="text" name="kode_barang" class="form-control" id="kode_barang" value="{{ $barang->kode_barang }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Nama Barang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="{{ $barang->nama_barang }}">
                    </div>
                    <div class="form-group">
                        <label for="Kategori Barang">Kategori Barang</label>
                        <select name="kategori_barang" class="form-select" id="kategori_barang">
                            <option selected hidden value="{{ $barang->kategori_barang }}">{{ $barang->kategori_barang }}</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                            <option value="Snack">Snack</option>
                            <option value="Kebutuhan">Kebutuhan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="text" name="harga" class="form-control" id="harga" value="{{ $barang->harga }}">
                    </div>
                    <div class="form-group">
                        <label for="Qty">Qty</label>
                        <input type="text" name="qty" class="form-control" id="qty" value="{{ $barang->qty }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-danger" href="{{ route('barang.index') }}">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
