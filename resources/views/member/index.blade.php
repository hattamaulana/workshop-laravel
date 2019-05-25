@extends('layout.app')
  @section('dashboard-name')
    Member
      <small>List Member</small>
  @endsection

  @section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <h1 class="box-header" style="text-align: center">
            <b>DATA MEMBER</b>
        </h1>

        <div class="row">
            <div class="col-md-6" style="width: 50%; margin: 15px 25%">
              <form>
                <div class="input-group input-group-lg">
                  <input type="text" name="search" id="" class="form-control" placeholder="Masukkan Nama atau Jabatan">
                
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-info btn-flat">
                      <i class="fa fa-search"></i>
                    </button>
                  </span>
                </div>
              </form>
            </div>
          </div>

          <div class="box-body p-0">
              <div class="table-responsive">
                <table class="table">
                  <thead class="bg-light">
                    <tr class="border-0">
                      <th class="border-0">No.</th>
                      <th class="border-0">Nama</th>
                      <th class="border-0">Email</th> 
                      <th class="border-0">Nomor Handpone</th>
                    </tr>
                  </thead>

                  <tbody>
                    @forelse ($members as $Member)
                        <tr>
                          <td> {{ $Member->id }} </td>
                          <td> {{ $Member->name }} </td>
                          <td> {{ $Member->email }} </td>
                          <td> {{ $Member->phonenumber }} </td>
                          <td> 
                            <a href=" {{ route('member.edit', ['id' => $Member->id]) }} ">
                              <button type="submit" class="btn btn-warning">
                                <i class="fa fa-edit"></i>
                              </button>
                            </a>
                            <a href=" {{ route('member.delete', ['id' => $Member->id]) }} ">
                              <button type="submit" class="btn btn-danger">
                                <i class="fa fa-remove"></i>
                              </button>
                            </a>
                          </td>
                        </tr>
                    @empty
                        <tr>
                          <td colspan="5">
                            Data Member Kosong
                          </td>
                        </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
      </div>
    </div>
  </div>
  @endsection

  @section('breadcumb')
    <li>
      <a href="/member"><i class="fa fa-user"></i> Member</a>
    </li>
      <li class="active">List Member</li>
  @endsection