@extends('../layouts/master')
@section('content')
<div class="section-header">
    <h4>Edit Data Guru</h4>
</div>
<div class="section-body">
    <div class="card-body">
    <form action="{{route ('updateGuru', $dtguru->id)}}" method="POST">
        @csrf
        @method('patch')
        <div class="form-group row">
            <label for="inputnip" class="col-md-3 col-form-label">NIP</label>
            <div class="col-md-5">
              <input type="text" name="nip" value="{{$dtguru->nip}}"  class="form-control" id="inputnip" placeholder="Input NIP">
              <text @error('nip')
              class="text-danger"
              @enderror> @error('nip')
              {{ $message }}
              @enderror</text>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputnm" class="col-md-3 col-form-label">Nama Guru</label>
            <div class="col-md-5">
              <input type="text" name="nama_guru" value="{{$dtguru->nama_guru}}"  class="form-control" id="inputnm" placeholder="Input Nama Guru">
              <text @error('nama_guru')
              class="text-danger"
              @enderror> @error('nama_guru')
              {{ $message }}
              @enderror</text>
            </div>
          </div>
          <div class="card-footer text-right">
            <button type="submit" class="btn btn-md btn-primary">Edit</button>
            <a class="btn btn-danger " href="{{ route('guru') }}">Cancel</a>
          </div>
          
</div>
@endsection
