@extends('layout.app')
@section('dashboard-name')
  Crew
    <small>Edit</small>
  @endsection

@section('content')
  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="box">
        <h3 class="box-header">Edit Data Crew</h3>
        <div class="box-body">
          <form action=" {{ route('crew.update', ['id' => $crew->id]) }} " method="post"> 
            @csrf()
            
            <div class="form-group form-control-">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $crew->name }}" name="name">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $crew->email }}" name="email">
              <small id="emailHelp" class="form-text text-muted">Email yang digunakan saat ini</small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Jabatan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $crew->position }}" name="position">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nomor Telepon</label>
              <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $crew->phonenumber }}" name="phonenumber">
              <small id="emailHelp" class="form-text text-muted">Nomor Telepon yang dapat dihubungi</small>
            </div>

            <div class="box-footer clearfix">
              <button type="submit" class="btn btn-primary pull-right">
                Tambah
                <i class="fa fa-arrow-circle-right"></i>
              </button>

              <a href="/crew">
                <button type="button" class="btn btn-danger">
                  <i class="fa fa-arrow-circle-left"></i>
                  Batal
                </button>
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

  @section('breadcumb')
    <li>
      <a href="/crew"><i class="fa fa-user"></i> Crew</a>
    </li>
      <li class="active">Edit Crew</li>
      <li class="active"> {{ $crew->id }} </li>
  @endsection