@extends('layout.app')

@section('content')
<div class="container" style="margin-top: 50px;">
  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="box">
        <h3 class="box-header">Data Crew</h3>

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
</div>
@endsection