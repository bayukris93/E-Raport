@extends('../layouts/master')
@section('content')
@include('sweetalert::alert')
<div class="section-header">
    <h4>Data Guru</h4>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-md-8">
            <a href="{{route('tambahGuru')}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Tambah Data</a>
            <table class="table table-md">
                <hr>
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama Guru</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($dtguru as $no=>$guru)
                  <tr>
                    <td>{{$dtguru->firstItem()+$no}}</td>
                    <td>{{$guru->nip}}</td>
                    <td>{{$guru->nama_guru}}</td>
                    <td>
                      {{-- <a href="#" class="btn btn-icon btn-sm btn-info"><i class="far fa-file"></i></a> --}}
                      <a href={{route('editGuru',$guru->id)}} class="btn btn-icon btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                      <a href="#" data-id={{$guru->id}} class="btn btn-danger btn-sm swal-confirm">
                        <form action="{{route('hapusGuru',$guru->id)}}" id="delete{{$guru->id}}" method="POST">
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
              {{$dtguru->links()}}

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