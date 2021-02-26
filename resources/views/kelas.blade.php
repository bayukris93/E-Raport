@extends('layouts.master')
@section('content')
<div class="section-header">
    <h4>Daftar Kelas</h4>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                </div>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Wali Kelas</th>
                        <th scope="col">Action</th>
                        <th scope="col">Catatan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>1234</td>
                        <td>Otto Maniani</td>
                        <td>
                            <a href="#" class="btn btn-icon btn-sm btn-info"><i class="far fa-file"></i></a>
                            <a href="#" class="btn btn-icon btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-icon btn-sm btn-danger"><i class="fas fa-times"></i></a>
                        </td>
                        <td>Baik</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>123</td>
                        <td>Thornton</td>
                        <td>
                            <a href="#" class="btn btn-icon btn-sm btn-info"><i class="far fa-file"></i></a>
                            <a href="#" class="btn btn-icon btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-icon btn-sm btn-danger"><i class="fas fa-times"></i></a>
                        </td>
                        <td>Baik</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>
                            <a href="#" class="btn btn-icon btn-sm btn-info"><i class="far fa-file"></i></a>
                            <a href="#" class="btn btn-icon btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-icon btn-sm btn-danger"><i class="fas fa-times"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
        </div>
    </div>
</div>
</section>
@endsection