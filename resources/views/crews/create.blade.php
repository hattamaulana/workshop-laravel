@extends('layout.app')

@section('content')
<div class="container" style="margin-top: 50px;">
  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="card">
        <div class="card-body">
          <form action=" {{ route('crew.store') }} " method="post"> 
            @csrf()
            
            <div class="form-group form-control-">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama" name="name">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Jabatan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama" name="position">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nomor Telepon</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama" name="phonenumber">
              <small id="emailHelp" class="form-text text-muted">Nomor Telepon yang dapat dihubungi</small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama" name="email">
              <small id="emailHelp" class="form-text text-muted">Email yang digunakan saat ini</small>
            </div>

            <div class="box-footer clearfix">
              <button type="submit" class="btn btn-primary pull-right">
                Tambah
                <i class="fa fa-arrow-circle-right"></i>
              </button>

              <button type="submit" class="btn btn-danger">
                <i class="fa fa-arrow-circle-left"></i>
                Batal
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection