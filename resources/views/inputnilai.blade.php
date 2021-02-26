@extends('layouts.master')
@section('content')

    <div class="section-header">
        <h4>Input Nilai Siswa</h4>
    </div>
    <div class="section-body">
        <form action="{{route('simpanimput', $siswa->id)}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Mata Pelajaran</label>
                        <select id="matapelajaran" class="form-control" name="mapel">
                            @foreach ($mapel as $mp)
                                <option value="{{$mp->id}}">{{$mp->nama_mapel}}</option>
                            @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label>
                        <input type="text" name="nilai" class="form-control">
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Simpan</button>
                        <a class="btn btn-danger" href="{{route('siswa')}}">Cancel</a>
                    </div>
        </form>
    </div>
@endsection
