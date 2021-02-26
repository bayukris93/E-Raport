@extends('../layouts/master')
@section('content')

    <div class="section-header">
        <h4>Edit Mata Pelajaran</h4>
    </div>
    <div class="section-body">
        <form action="{{route ('updateMapel', $mapel->id)}}" method="POST">
            @csrf
            @method('patch')
        <div class="card-body">
            <div class="form-group row">
              <label for="inputkdMapel" class="col-md-4 col-form-label">Kode Mata Pelajaran</label>
              <div class="col-md-5">
                <input type="text" name="kd_mapel" value="{{$mapel->kd_mapel}}"  class="form-control" id="inputkdMapel" placeholder="Kode Mata Pelajaran">
                <text @error('kd_mapel')
                class="text-danger"
                @enderror> @error('kd_mapel')
                {{ $message }}
                @enderror</text>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputMapel" class="col-md-4 col-form-label">Mata Pelajaran</label>
              <div class="col-md-5">
                <input type="text" name="nama_mapel" value="{{$mapel->nama_mapel}}" class="form-control" id="inputMapel" placeholder="Input Nama Mata Pelajaran">
                <text @error('nama_mapel')
                class="text-danger"
                @enderror> @error('nama_mapel')
                {{ $message }}
                @enderror</text>
              </div>
            </div>
            <div class="form-group row">
                <label for="inputPengajar" class="col-md-4 col-form-label">Pengajar</label>
                <div class="col-md-5">
                  <input type="text" name="pengajar" value="{{$mapel->pengajar}}" class="form-control" id="inputPengajar" placeholder="Nama Pengajar">
                  <text @error('pengajar')
                  class="text-danger"
                  @enderror> @error('pengajar')
                  {{ $message }}
                  @enderror</text>
                </div>
              </div>
              <div class="card-footer text-right">
                <button type="submit" class="btn btn-md btn-primary">Edit</button>
                <a class="btn btn-danger " href="{{ route('mapel') }}">Cancel</a>
              </div>
          </div>
    </div>


@endsection