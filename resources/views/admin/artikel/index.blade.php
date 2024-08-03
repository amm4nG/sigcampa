@extends('layouts.master.app')
@section('title')
    Artikel
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-600">Daftar Artikel</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12">
            <div class="card p-3">
                <div class="row">
                    <div class="col-md-3">
                        <a href="{{ route('artikel.create') }}" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Artikel</a>
                    </div>
                </div>
                <div class="table-responsive mt-3">
                    <table class="table table-bordered table-sm" id="daftar-artikel">
                        <thead>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th class="text-center">Aksi</th>
                        </thead>
                        <tbody>
                            <td>1</td>
                            <td>dsadbasdhavsd</td>
                            <td>fasfvashfvahsvfavsfnasvfnsabvfa</td>
                            <td class="text-center">
                                <a href="" class="btn btn-danger btn-sm mb-1"><i class="fas fa-trash"></i> Hapus</a>
                                <a href="" class="btn btn-primary btn-sm mb-1"><i class="fas fa-eye"></i> Lihat</a>
                                <a href="" class="btn btn-warning btn-sm mb-1"><i class="fas fa-pen"></i> Ubah</a>
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#daftar-artikel').DataTable();
         });
    </script>
@endpush