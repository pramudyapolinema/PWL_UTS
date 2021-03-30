@extends('barang.layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-sm-10">
        <h2>Data Barang</h2>
    </div>

</div>

<div class="row justify-content-end">
    <div class="col-md-4">
        <form action="{{ route('barang.index') }}" accept-charset="UTF-8" method="get">
            <div class="input-group">
                <input type="text" name="cari" id="search" placeholder="Cari" class="form-control">
                <span class="input-group-btn">
                    <input type="submit" value="Cari" class="btn btn-primary">
                </span>
            </div>
        </form>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Id Barang</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Kategori Barang</th>
        <th>Harga</th>
        <th>Qty</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($barang as $Barang)
    <tr>

        <td>{{ $Barang->id_barang }}</td>
        <td>{{ $Barang->kode_barang }}</td>
        <td>{{ $Barang->nama_barang }}</td>
        <td>{{ $Barang->kategori_barang }}</td>
        <td>{{ $Barang->harga }}</td>
        <td>{{ $Barang->qty }}</td>
        <td>
            <form action="{{ route('barang.destroy',$Barang->id_barang) }}" method="POST">

                <a class="btn btn-info" href="{{ route('barang.show', $Barang->id_barang) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('barang.edit', $Barang->id_barang) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $barang->links('barang.layouts.pagination') }}

<div class="row justify-content-end">
    <div class="col-md-2">
        <a class="btn btn-success" href="{{ route('barang.create') }}"> Input Barang</a>
    </div>
</div>
@endsection
