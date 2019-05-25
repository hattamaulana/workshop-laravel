@extends('layout.app')
  @section('dashboard-name')
    Member
      <small>Tambah Member Baru</small>
  @endsection

  @section('content')
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="box">
          <h3 class="box-header">Tambah Data</h3>
          <div class="box-body">
            <form action=" {{ route('member.store') }} " method="post"> 
              @csrf()
              
              <div class="form-group form-control-">
                <label for="exampleInputEmail1">Nama Lengkap</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Example E" name="name">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Alamat Email</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="example@localhost.id" name="email">
                <small id="emailHelp" class="form-text text-muted">Email yang digunakan saat ini</small>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Nomor Telepon</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="+62123456789" name="phonenumber">
                <small id="emailHelp" class="form-text text-muted">Nomor Telepon yang dapat dihubungi</small>
              </div>

              <div class="box-footer clearfix">
                <button type="submit" class="btn btn-primary pull-right">
                  Tambah
                  <i class="fa fa-arrow-circle-right"></i>
                </button>

                <a href="/member">
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
      <a href="/member"><i class="fa fa-user"></i> Member</a>
    </li>
      <li class="active">Tambah Member</li>
  @endsection