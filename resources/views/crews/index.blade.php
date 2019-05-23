@extends('layout.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <h4 class="box-header" style="text-align: center">
          Data Crew Comunity
      </h4>

      <div class="row center">
          <div class="col-md-6" style="margin: 0px auto;">
            <form>
              <div class="input-group input-group-lg">
                <input type="text" name="search" id="" class="form-control">
              
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
                    <th class="border-0">Jabatan</th>
                    <th class="border-0">Nomor Handpone</th>
                  </tr>
                </thead>

                <tbody>
                  @forelse ($crews as $crew)
                      <tr>
                        <td> {{ $crew->id }} </td>
                        <td> {{ $crew->name }} </td>
                        <td> {{ $crew->email }} </td>
                        <td> {{ $crew->position }} </td>
                        <td> {{ $crew->phonenumber }} </td>
                        <td> 
                          <a href=" {{ route('crew.edit', ['id' => $crew->id]) }} ">
                            <button type="submit" class="btn btn-warning">
                              <i class="fa fa-edit"></i>
                            </button>
                          </a>
                          <a href=" {{ route('crew.delete', ['id' => $crew->id]) }} ">
                            <button type="submit" class="btn btn-danger">
                              <i class="fa fa-remove"></i>
                            </button>
                          </a>
                        </td>
                      </tr>
                  @empty
                      <tr>
                        <td colspan="5">
                          Data Crew Kosong
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