@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Email</th>
                        <th scope="col">Fakultas</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $mahasiswa as $mhs)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{ $mhs->nama}}</td>
                        <td>{{ $mhs->nim}}</td>
                        <td>{{ $mhs->email}}</td>
                        <td>{{ $mhs->fakultas}}</td>
                        <td>{{ $mhs->jurusan}}</td>
                        <td>{{ $mhs->prodi}}</td>
                        <td>
                            <a href="" class="badge rounded-pill bg-success">Edit</a>
                            <a href="" class="badge rounded-pill bg-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>      
</div>
@endsection

  