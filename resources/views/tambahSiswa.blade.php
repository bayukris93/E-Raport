@extends('layouts.master')
@section('content')
<div class="section-header">
    <h4>Tambah Siswa</h4>
</div>

    <div class="section-body">
        <form action="{{route ('simpanSiswa')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="text" name="nis"  class="form-control" placeholder="Input NIS">
                        <text @error('nis')
                            class="text-danger"
                        @enderror> @error('nis')
                        {{ $message }}
                        @enderror</text>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama_siswa" value="{{old('nama')}}" class="form-control" placeholder="Input Nama">
                        <text @error('nama_siswa')
                            class="text-danger"
                        @enderror> @error('nama_siswa')
                        {{ $message }}
                        @enderror</text>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="ttl" class="form-control" placeholder="Input Tempat Lahir">
                        <text @error('ttl')
                            class="text-danger"
                        @enderror> @error('ttl')
                        {{ $message }}
                        @enderror</text>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" placeholder="Input Tanggal Lahir">
                        <text @error('tgl_lahir')
                            class="text-danger"
                        @enderror> @error('tgl_lahir')
                        {{ $message }}
                        @enderror</text>
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <select name="agama" class="form-control">
                          <option> ---Pilih Agama--- </option>
                          <option>Islam</option>
                          <option>Kristen</option>
                          <option>Katolik</option>
                          <option>Budha</option>
                          <option>Hindu</option>
                          <option>Atheis</option>
                        </select>
                            <text @error('agama')
                            class="text-danger"
                            @enderror> @error('agama')
                            {{ $message }}
                            @enderror</text>
                      </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input class="form-control" name="alamat" placeholder="Input Alamat">
                        <text @error('alamat')
                            class="text-danger"
                        @enderror> @error('alamat')
                        {{ $message }}
                        @enderror</text>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-danger" type="reset">Reset</button>
                </div>
            </div>
        </form>
    </div>
@endsection