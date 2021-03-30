@extends('barang.layouts.app')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

@section('content')
  <h1 class="display"><strong>Data Barang</strong></h1>
<br>
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

<div class="table-responsive">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-xs-6">
                    <h2>Atur <b>Data Barang</b></h2>
                </div>
                <div class="col-xs-6">
                    <a href="#addBarangModal" class="btn btn-success" data-toggle="modal"><i
                            class="material-icons">&#xE147;</i> <span>Tambah Barang</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Id Barang</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Kategori Barang</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang as $Barang)
                <tr>
                    <td>{{ $Barang->id_barang }}</td>
                    <td>{{ $Barang->kode_barang }}</td>
                    <td>{{ $Barang->nama_barang }}</td>
                    <td>{{ $Barang->kategori_barang }}</td>
                    <td>{{ $Barang->harga }}</td>
                    <td>{{ $Barang->qty }}</td>
                    <td>
                        <span style="display:inline;">
                            <a href="{{ route('barang.show', $Barang->id_barang) }}" class="delete" data-toggle="modal"><button
                                    class="btn btn-primary"><i class="material-icons" data-toggle="tooltip"
                                        title="Show">&#xe417;</i></button></a>
                            <a href="{{ route('barang.edit', $Barang->id_barang) }}" class="edit" data-toggle="modal"><button
                                    class="btn btn-warning"><i class="material-icons" data-toggle="tooltip"
                                        title="Edit">&#xE254;</i></button></a>
                            <form class="hapus" action="{{ route('barang.destroy',$Barang->id_barang) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="material-icons"
                                        data-toggle="tooltip" title="Delete">&#xE872;</i></button>
                            </form>
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $barang->links('barang.layouts.custom') }}
    </div>
</div>
<!-- Edit Modal HTML -->
<div id="addBarangModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{ route('barang.store') }}" id="myForm">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Barang</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Kode Barang</label>
                        <input type="text" class="form-control" name="kode_barang" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" required>
                    </div>
                    <div class="form-group">
                        <label>Kategori Barang</label>
                        <select name="kategori_barang" class="form-select" required>
                            <option selected disabled hidden>Pilih Kategori</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                            <option value="Snack">Snack</option>
                            <option value="Kebutuhan">Kebutuhan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" name="harga" required>
                    </div>
                    <div class="form-group">
                        <label>Qty</label>
                        <input type="text" class="form-control" name="qty" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                    <input type="submit" class="btn btn-success" value="Tambah">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
