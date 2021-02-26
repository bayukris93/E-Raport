@extends('../layouts/master')
@section('content')
@include('sweetalert::alert')
<div class="section-header">
    <h4>Mata Pelajaran</h4>
</div>

<div class="section-body">
  
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <a href="{{route('tambahMapel')}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Tambah Mata Pelajaran</a>
            <div class="card">
                </div>
                <div class="card-body">
                  <table class="table table-md">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Mata Pelajaran</th>
                        <th scope="col">Nama Mata Pelajaran</th>
                        <th scope="col">Nama Pengajar</th>
                        <th scope="col">Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($mapel as $no=>$dataMapel)
                      <tr>
                        <td>{{$mapel->firstItem()+$no}}</td>
                        <td>{{$dataMapel->kd_mapel}}</td>
                        <td>{{$dataMapel->nama_mapel}}</td>
                        <td>{{$dataMapel->pengajar}}</td>
                        <td>
                          <a href="{{route('editMapel', $dataMapel->id)}}" class="btn btn-icon btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                          <a href="#" data-id={{$dataMapel->id}} class="btn btn-danger btn-sm swal-confirm">
                            <form action="{{route('hapusMapel',$dataMapel->id)}}" id="delete{{$dataMapel->id}}" method="POST">
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
                  {{$mapel->links()}}

        </div>
    </div>
</div>

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