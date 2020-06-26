@extends('layouts.app')

@section('title', 'Tambah data Mahasiswa')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-6">
            <h3>Edit</h3>
            <form method="post" action="{{ url('/student-update') }}" class="mt-4">
                @csrf
                <input type="hidden" name="id" value="{{ $robi->id }}">
                <div class="form-group">
                    <label for="nama">Masukan nama</label>
                    <input type="text" value="{{$robi->nama}}" class="form-control @error('nama') is-invalid @enderror"
                        id="nama" placeholder="Masukna nama" name="nama">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nim">Masukan nim</label>
                    <input type="text" value="{{$robi->nim}}" class="form-control @error('nama') is-invalid @enderror"
                        id="nim" placeholder="Masukna nim" name="nim">
                    @error('nim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Masukan email</label>
                    <input type="text" value="{{$robi->email}}" class="form-control @error('nama') is-invalid @enderror"
                        id="email" placeholder="Masukna email" name="email">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Masukan jurusan</label>
                    <input type="text" value="{{$robi->jurusan}}"
                        class="form-control @error('nama') is-invalid @enderror" id="jurusan"
                        placeholder="Masukna jurusan" name="jurusan">
                    @error('jurusan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Edit</button>

            </form>
        </div>
    </div>
</div>
@endsection