@extends('layouts.master.app')
@section('title')
Tambah Artikel
@endsection
@section('content')
<div class="container">
    <div class="row">
        <form action="" method="post">
            <div class="col-md-12">
                <div class="card p-3">
                    <h1 class="h3 mb-0 text-gray-600 mb-3">Form Tambah FAQ</h1>
                    @csrf
                    <input type="text" class="form-control mb-3" name="pertanyaan" id="pertanyaan" placeholder="Pertanyaan">
                    <textarea name="jawaban" id="jawaban" class="form-control mt-3" cols="30"
                        placeholder="Jawaban" rows="30"></textarea>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn float-end btn-primary mt-3"><i class="fas fa-save"></i> Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@push('scripts')
<script>
    $('#jawaban').summernote({
                placeholder: 'Masukkan jawaban dari pertanyaan....',
                tabsize: 2,
                height: 200
            });
</script>
@endpush
@endsection