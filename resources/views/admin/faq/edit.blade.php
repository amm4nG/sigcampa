@extends('layouts.master.app')
@section('title')
Tambah Artikel
@endsection
@section('content')
<div class="container">
    <div class="row">
        <form action="{{ route('faq.update', $faq->id) }}" method="post">
            @method('put')
            @csrf
            <div class="col-md-12">
                <div class="card p-3">
                    <h1 class="h3 mb-0 text-gray-600 mb-3">Form Edit FAQ</h1>
                    @if(session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session('pesan') }}
                    </div>
                    @endif
                    @csrf
                    <input type="text" value="{{ $faq->pertanyaan }}" class="form-control mb-3" name="pertanyaan" id="pertanyaan"
                        placeholder="Pertanyaan" required>
                    <textarea name="jawaban" id="jawaban" class="form-control mt-3" cols="30" placeholder="Jawaban"
                        rows="10" required>{!! $faq->jawaban !!}</textarea>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn float-end btn-primary mt-3"><i class="fas fa-save"></i>
                                Simpan</button>
                            <a href="{{ route('faq.index') }}" class="btn btn-warning float-end mt-3 me-1"><i
                                    class="fas fa-arrow-left"></i> Kembali</a>
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
                height: 200,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
</script>
@endpush
@endsection