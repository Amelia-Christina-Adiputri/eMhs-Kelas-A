@extends('layouts.main')
@section('title','Form Edit')
@section('content')
    <div class="card mt-4">
        <div class="card-header"><strong>Form Data Mahasiswa</strong></div>
        <div class="card-body">
            @php
                $minat = explode(',', $mhs->minat);
            @endphp
            <form action="/mahasiswa/update/{{$mhs->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group w-25">
                    <label>NIM</label>
                    <input type="number" name="nim" class="form-control" value="{{$mhs->nim}}">
                </div>

                <div class="form-group w-50">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{$mhs->nama}}">
                </div>

                <label>Gender</label>
                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value="Pria" {{ ($mhs->gender == 'Pria') ? 'checked':''}}><Label>Pria</Label>
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value="Wanita" {{ ($mhs->gender == 'Wanita') ? 'checked':''}}><Label>Wanita</Label>
                </div>

                <label>Program Studi</label>
                <div class="form-group">
                    <select name="prodi" class="form-control">
                        <option value="0">>---Pilih Program Studi---<</option>
                        <option value="Sistem Informasi" {{ ($mhs->prodi == 'Sistem Informasi') ? 'selected':''}}>Sistem Informasi</option>
                        <option value="Informatika" {{ ($mhs->prodi == 'Informatika') ? 'selected':''}}>Informatika</option>
                        <option value="Teologi" {{ ($mhs->prodi == 'Teologi') ? 'selected':''}}>Teologi</option>
                        <option value="Kedokteran" {{ ($mhs->prodi == 'Kedokteran') ? 'selected':''}}>Kedokteran</option>
                    </select>
                </div>

                <label>Minat</label>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="AI" {{in_array('AI', $minat) ? 'checked':''}}><Label>Artificial Intelegent</Label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="DBMS" {{in_array('DBMS', $minat) ? 'checked':''}}><Label>Database Management System</Label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="WEB" {{in_array('WEB', $minat) ? 'checked':''}}><Label>Web Enginieer</Label>
                </div>
                <div class="form-group mt-4">
                    <button type="submit" role="button" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection