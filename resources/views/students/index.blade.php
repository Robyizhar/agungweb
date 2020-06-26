@extends('layouts.app')

@section('title', 'Mahasiswa List')

@section('content')

<!-- Daftar Mahasiswa -->
<div class="container">
    <div class="row">
        <div class="col-6">
            <h3>{{ $judul }}</h3>
            <a href="{{ url('/students/create') }}" class="btn btn-secondary my-3">Tambah</a>
            @if (session('stat'))
            <div class="alert alert-success">
                {{ session('stat') }}
            </div>
            @endif
            <ul class="list-group">
                @foreach($data as $d)

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $loop->iteration }} . {{ $d->nama }}
                    <a href="students/{{ $d->id }}" class="badge badge-info">Detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection