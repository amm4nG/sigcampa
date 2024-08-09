@extends('layouts.master.app')
@section('title')
    FAQ
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-600">Daftar FAQ</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12">
            <div class="card p-3">
                @if (session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session('pesan') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-3">
                        <a href="{{ route('faq.create') }}" class="btn btn-primary mb-2"><i class="fas fa-plus"></i>
                            Tambah FAQ</a>
                    </div>
                </div>
                <div class="table-responsive mt-3">
                    <table class="table table-bordered table-sm" id="daftar-artikel">
                        <thead>
                            <tr>

                                <th>No</th>
                                <th>Pertanyaan</th>
                                <th>Jawaban</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faqs as $faq)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $faq->pertanyaan }}</td>
                                    {{-- <td>{!! Str::limit($faq->jawaban, 20, '...') !!}</td> --}}
                                    <td>{!! $faq->jawaban !!}</td>
                                    <td class="text-center">
                                        <form action="{{ route('faq.destroy', $faq->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('faq.edit', $faq->id) }}" style="width: 5rem" class="btn btn-warning btn-sm mb-1"><i class="fas fa-pen"></i>
                                                Ubah</a>
                                            <button type="submit" style="width: 5rem" class="btn btn-danger btn-sm mb-1"><i
                                                    class="fas fa-trash"></i>
                                                Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
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
