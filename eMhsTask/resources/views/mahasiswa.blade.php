@extends('layouts.main')
@section('title','Mahasiswa')
@section('content')
    <h1>Mahasiswa</h1>

    <div>
      @if(session('alert'))
        @if(session('alert')=='Data telah berhasil ditambahkan!')
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{{session('alert')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @elseif(session('alert')=='Data telah berhasil diubah!')
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>{{session('alert')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @elseif(session('alert')=='Data telah berhasil dihapus!')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>{{session('alert')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
        @endif
      @endif
    </div>

    <div class="card text-left mt-4">
        <div class="card-header">
            <a href="/mahasiswa/formadd" class="btn btn-primary" role="button"><i class="bi bi-plus-square-fill"></i> Mahasiswa</a>
            <form action="/mahasiswa/search" method="GET" class="form-inline my-2 my-lg-0 float-right">
            <input name="q" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="card-body">
        <h1>Daftar Mahasiswa</h1>
        </div>
    </div>

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Gender</th>
      <th scope="col">Prodi</th>
      <th scope="col">Minat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($mhs as $idx=>$m)
        <tr>
            <th scope="row">{{$mhs->firstItem() + $idx}}</th>
            <td>{{$m->nim}}</td>
            <td>{{$m->nama}}</td>
            <td>{{$m->gender}}</td>
            <td>{{$m->prodi}}</td>
            <td>{{$m->minat}}</td>
            <td>
              <a href="/mahasiswa/formedit/{{$m->id}}" class="btn btn-success" role="button"><i class="bi bi-pencil-square"></i></a>
            </td>
            <td>
              <a onclick="return confirm('Apakah anda yakin mau menghapus?')" href="/mahasiswa/delete/{{$m->id}}" class="btn btn-danger" role="button"><i class="bi bi-x-square"></i></a>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
Total Data: {{$mhs->total()}} <br>
Data di Halaman ini: {{$mhs->count()}}<br>
Halaman yang dikunjungi: {{$mhs->currentPage()}} <br>
<span class="float-right">{{$mhs->links()}}</span>
@endsection