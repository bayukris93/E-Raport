@extends('layouts.master')
@section('content')
@include('sweetalert::alert')
<div class="section-header">
    <h4>Daftar Siswa</h4>
</div>
<div class="section-body">
  
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <a href="{{route('tambahSiswa')}}" class="btn btn-icon icon-center btn-primary"><i class="far fa-edit"></i> Tambah Siswa</a>
            <div class="card">
                </div>
                <div class="card-body">
                  <table class="table table-md">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($siswa as $no=>$data)
                      <tr>
                        <td>{{$siswa->firstItem()+$no}}</td>
                        <td>{{$data->nis}}</td>
                        <td>{{$data->nama_siswa}}</td>
                        <td>{{$data->ttl}}</td>
                        <td>{{$data->tgl_lahir}}</td>
                        <td>{{$data->agama}}</td>
                        <td>{{$data->alamat}}</td>
                        <td>
                          <a href="{{route('inputnilai', $data->id)}}" class="btn btn-icon btn-sm btn-warning"><i class="fas fa-info"></i></a>

                          <a href="{{route('editSiswa', $data->id)}}" class="btn btn-icon btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        </a>
                        <a href="#" data-id={{$data->id}} class="btn btn-danger btn-sm swal-confirm">
                          <form action="{{route('hapusSiswa',$data->id)}}" id="delete{{$data->id}}" method="POST">
                            @csrf
                            @method('delete')
                          </form>
                          <i class="fas fa-times"></i>
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{$siswa->links()}}
        </div>
    </div>
</div>
</section>
@endsection

@push('page-script')
  <script src="{{asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
@endpush

@push('after-script')
<script>
$(".swal-confirm").click(function(e) {
  id = e.target.dataset.id;

  swal({
      title: 'Yakin mau di hapus?',
      // text: 'Data yang dihapus tidak!',
      icon: 'warning',
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        swal('Data berhasil di Hapus', {
        icon: 'success',
      });
      $(`#delete${id}`).submit();
      }
      // } else {
      //   swal('Your imaginary file is safe!');
      // }
    });
});
</script>
@endpush