@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')

<!-- Detail(show) Mahasiswa -->
<div class="container">
    <div class="row">
        <div class="col-6">
            <h3>{{ $judul }}</h3>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" name="nama">Nama : {{ $data->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted" name="email">Email : {{ $data->email }}</h6>
                    <p class="card-text" name="nim">NIM : {{ $data->nim }}</p>
                    <p class="card-text" name="jurusan">Jurusan : {{ $data->jurusan }}</p>
                    <a class="btn btn-primary" href="{{ url('student-edit/' . $data->id)}}">Edit</a>


                    <a href="{{ url('student-destroy/' . $data->id)}}" class="btn btn-danger">Hapus</a>

                    <br>
                    <hr>
                    <a href="/students" class="card-link">
                        <==Kembali </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection