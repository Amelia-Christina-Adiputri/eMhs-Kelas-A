@extends('layouts.main')
@section('title','Form Mahasiswa')
@section('content')
    <div class="card mt-4">
        <div class="card-header"><strong>Form Data Mahasiswa</strong></div>
        <div class="card-body">
            <form action="/mahasiswa/save" method="POST">
                @csrf
                <div class="form-group w-25">
                    <label>NIM</label>
                    <input type="number" name="nim" class="form-control" placeholder="Masukkan NIM">
                </div>

                <div class="form-group w-50">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                </div>

                <label>Gender</label>
                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value="Pria"><Label>Pria</Label>
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value="Wanita"><Label>Wanita</Label>
                </div>

                <label>Program Studi</label>
                <div class="form-group">
                    <select name="prodi" class="form-control">
                        <option value="0">>---Pilih Program Studi---<</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Informatika">Informatika</option>
                        <option value="Teologi">Teologi</option>
                        <option value="Kedokteran">Kedokteran</option>
                    </select>
                </div>

                <label>Minat</label>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="AI"><Label>Artificial Intelegent</Label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="DBMS"><Label>Database Management System</Label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="WEB"><Label>Web Enginieer</Label>
                </div>
                <div class="form-group mt-4">
                    <button type="submit" role="button" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection