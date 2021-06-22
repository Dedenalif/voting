@extends('layout.beranda')

@section('content')
<title>{{ $title }}</title>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
    <!-- Content Header (Page header) -->
<div class="container">
  <a href="{{ url('periode') }}" class=" btn btn-warning">Periode Voting</a>
<center>
    <h5>Voting Kandidat </h5>
     </center>
       <!-- Button trigger modal -->
        @foreach ($data as $dt)
            <center>
                <p>
                    <b>
                       <h2><i>No Urut{{ $dt->no_urut }}</i></h2>

                    </b></p>
                    <p>
                        <a href="{{ url('pemilihan/vote/'.$dt->id) }}"class="btn btn-success btn-sm">Pilih Kandidat Ini</a>
                        @include('kandidat.visi')

                    </p>
            </center>

            <div class="row">
            <div class="col-md-6">
            <div class="card card-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-warning">
                  <div class="widget-user-image">
                    <img class="img-circle elevation-2" src="{{ asset($dt->siswa_calon_ketua->photo) }}" alt="User Avatar">
                  </div>
                  <!-- /.widget-user-image -->
                  <h3 class="widget-user-username">{{ $dt->siswa_calon_ketua->nama }}</h3>
                  <h5 class="widget-user-desc">Calon Ketua</h5>
                </div>
                <div class="card-footer p-0">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        NIM : <span class="float-right badge bg-primary">{{ $dt->siswa_calon_ketua->nim }}</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Alamat : <span class="float-right badge bg-info">{{ $dt->siswa_calon_ketua->alamat }}</span>
                      </a>
                    </li>
                  </ul>
                </div>
        </div>
        </div>
        <div class="col-md-6">
            <div class="card card-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-warning">
                  <div class="widget-user-image">
                    <img class="img-circle elevation-2" src="{{ asset($dt->siswa_calon_wakil->photo) }}" alt="User Avatar">
                  </div>
                  <!-- /.widget-user-image -->
                  <h3 class="widget-user-username">{{ $dt->siswa_calon_wakil->nama }}</h3>
                  <h5 class="widget-user-desc">Calon Wakil</h5>
                </div>
                <div class="card-footer p-0">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Nim : <span class="float-right badge bg-primary">{{ $dt->siswa_calon_wakil->nim }}</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Alamat : <span class="float-right badge bg-info">{{ $dt->siswa_calon_wakil->alamat }}</span>
                      </a>
                    </li>
                  </ul>
                </div>
        </div>
        </div>
    </div>
    @endforeach
    <div class="card-footer">
        {{ $data->links() }}
    </div>
        <b><i>Note : Setiap user hanya boleh memilih satu kali Jika lebih dari satu maka data tetap tidak akan masuk</i></b>
</div>
        </div>
    </div>
</div>

<footer class="main-footer">
    @include('layout.footer')
</footer>
@include('sweetalert::alert')
@endsection
