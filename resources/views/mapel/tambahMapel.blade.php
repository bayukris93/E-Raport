@extends('../layouts/master')
@section('content')
<div class="section-header">
    <h4>Tambah Mata Pelajaran</h4>
</div>

<div class="section-body">
  <form action="{{route ('simpanMapel')}}" method="POST">
    @csrf
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group row">
                    <label for="inputkdMapel" class="col-md-4 col-form-label">Kode Mapel</label>
                    <div class="col-sm-8">
                      <input type="text" name="kd_mapel" class="form-control" id="inputMapel" placeholder="Kode Mata Pelajaran">
                      <text @error('kd_mapel')
                      class="text-danger"
                  @enderror> @error('kd_mapel')
                  {{ $message }}
                  @enderror</text>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputMapel" class="col-md-4 col-form-label">Nama Mata Pelajaran</label>
                    <div class="col-md-8">
                      <input type="text" name="nama_mapel" class="form-control" id="inputMapel" placeholder="Nama Mata Pelajaran">
                      <text @error('nama_mapel')
                      class="text-danger"
                      @enderror> @error('nama_mapel')
                      {{ $message }}
                      @enderror</text>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPengajar" class="col-md-4 col-form-label">Nama Pengajar</label>
                    <div class="col-sm-8">
                      <input type="text" name="pengajar" class="form-control" id="inputPengajar" placeholder="Nama Pengajar">
                      <text @error('pengajar')
                      class="text-danger"
                      @enderror> @error('pengajar')
                      {{ $message }}
                      @enderror</text>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
            </div>
        </div>

    </div>
</div>

@endsection