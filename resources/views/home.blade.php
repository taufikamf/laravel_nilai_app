@extends('layouts.layout')

@section('content')

@if( Auth::user()->role == 3 )
<div class="col-xl-6">
    <h6 class="text-muted">Info Mahasiswa</h6>
    <div class="nav-align-top mb-4">
      <ul class="nav nav-pills mb-3" role="tablist">
        <li class="nav-item">
          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="true">
            Profile
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="false">
            Akademik
          </button>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
          <h3>{{Auth::user()->name}}</h3>
          <div class="d-flex w-100 mb-3 flex-wrap align-items-center justify-content-between gap-2">
            <div class="me-2">
              <small class="text-muted d-block mb-1">Email</small>
              <h6 class="mb-0">{{Auth::user()->email}}</h6>
            </div>
            <div class="user-progress d-flex align-items-center gap-1">
                <span class="text-muted">IPK : </span>
              <h6 class="mb-0">3.5</h6>
            </div>
          </div>
          <div class="me-2">
            <small class="text-muted d-block mb-1">NIM</small>
            <h6 class="mb-0">{{Auth::user()->nomor_identitas}}</h6>
          </div>
        </div>
        <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
            <div id="accordionIcon" class="accordion mt-3 accordion-without-arrow">
              <?php
              // $nilai_user = \App\Models\Nilai::where('id_user', Auth::user()->id)->get(); 
              // $matkul_user = \App\Models\Matkul::where('id_user', Auth::user()->id)->get();
                // dd($nilai_user);
                // dd($nilai);
                // dd($matkul);
              ?>
              @foreach($nilai as $value)
              <?php
              // dd($value);
              ?>
                  <div class="accordion-item card">
                    <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconOne">
                      <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionIcon-1" aria-controls="accordionIcon-1">
                        {{$value->nama_matkul}}
                      </button>
                    </h2>
                    <div id="accordionIcon-1" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
                      <div class="accordion-body">
                        <div class="table-responsive text-nowrap">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Kriteria</th>
                                <th>Nilai</th>
                              </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                              <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                                <td>{{$value->nama_kriteria}}</td>
                              </tr>
                              <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                                <td>Albert Cook</td>
                              </tr>
                              <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                                <td>Albert Cook</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
              @endforeach
        </div>
      </div>
    </div>
  </div>
@endif

@endsection
