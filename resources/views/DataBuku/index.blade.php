@extends('layouts.app')

@section('content')
    
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card border-0">
            <div class="card-body">
              <div class="d-flex px-2 py-2">
                <div>
                <a href="{{route('databuku.create')}}" class="btn btn-info">Tambah Data</a>
                </div>
              </div>
              <div>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>JK</th>
                      <th>Tanggal Daftar</th>
                      <th>Status</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>Tya</th>
                      <th>Armed</th>
                      <th>perempuan</th>
                      <th>240320</th>
                      <th>Waitting</th>
                      <th>action</th>
                      
                       </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection