@extends('../layouts/master')
@section('content')
<div class="section-header">
    <h4>Tambah Data Guru</h4>
</div>

<div class="section-body">
    <form action="{{route ('simpanGuru')}}" method="POST">
        @csrf
<div class="row">
    <div class="col-md-8">
        <div class="form-group row">
            <label for="inputnip" class="col-md-4 col-form-label">NIP</label>
            <div class="col-sm-8">
              <input type="text" name="nip" class="form-control" id="inputMapelnip" placeholder="Input NIP">
              <text @error('nip')
              class="text-danger"
              @enderror> @error('nip')
              {{ $message }}
              @enderror</text>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputnm" class="col-md-4 col-form-label">Nama Guru</label>
            <div class="col-md-8">
              <input type="text" name="nama_guru" class="form-control" id="inputnm" placeholder="Input Nama Guru">
              <text @error('nama_guru')
              class="text-danger"
              @enderror> @error('nama_guru')
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
@endsection