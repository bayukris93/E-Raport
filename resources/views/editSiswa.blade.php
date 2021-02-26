@extends('layouts.master')
@section('content')

<div class="section-header">
    <h4>Edit Siswa</h4>
</div>
    <div class="section-body">
        <form action="{{route ('updateSiswa', $siswa->id)}}" method="POST">
            @csrf
            @method('patch')
            <div class="card-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="text" name="nis" value="{{$siswa->nis}}" class="form-control">
                        <text @error('nis')
                            class="text-danger"
                        @enderror> @error('nis')
                        {{ $message }}
                        @enderror</text>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama_siswa" value="{{$siswa->nama_siswa}}"  class="form-control">
                        <text @error('nama_siswa')
                            class="text-danger"
                        @enderror> @error('nama_siswa')
                        {{ $message }}
                        @enderror</text>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="ttl" value="{{$siswa->ttl}}"  class="form-control">
                        <text @error('ttl')
                            class="text-danger"
                        @enderror> @error('ttl')
                        {{ $message }}
                        @enderror</text>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" value="{{$siswa->tgl_lahir}}"class="form-control">
                        <text @error('tgl_lahir')
                            class="text-danger"
                        @enderror> @error('tgl_lahir')
                        {{ $message }}
                        @enderror</text>
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <select name="agama" class="form-control">
                            <text @error('agama')
                            class="text-danger"
                        @enderror> @error('agama')
                        {{ $message }}
                        @enderror</text>
                          <option> ---Pilih Agama--- </option>
                          <option>Islam</option>
                          <option>Kristen</option>
                          <option>Katolik</option>
                          <option>Budha</option>
                          <option>Hindu</option>
                          <option>Atheis</option>
                        </select>
                      </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input class="form-control" name="alamat" value="{{$siswa->alamat}}" >
                        <text @error('alamat')
                            class="text-danger"
                        @enderror> @error('alamat')
                        {{ $message }}
                        @enderror</text>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Edit</button>
                    <a class="btn btn-danger " href="{{ route('siswa') }}">Cancel</a>
                </div>
            </div>
        </form>
    </div>
@endsection