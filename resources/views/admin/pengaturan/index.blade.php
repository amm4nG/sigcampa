@extends('layouts.master.app')
@section('title')
    Pengaturan
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card p-3">
                    <h1 class="h3 text-gray-600 mb-3 text-center">Ganti Password</h1>
                    <input type="password" placeholder="Password" class="form-control" name="password">
                    <input type="password" placeholder="Konfirmasi password" class="form-control mt-3" name="password_confirmed">
                    <button class="btn btn-primary mt-3 mb-2">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection