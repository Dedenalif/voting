
@extends('layout.beranda')

@section('content')
<title>{{ $title }}</title>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
            <center>
                <h5>List Kandidat</h5>
            </center>
            <div class="row">
      @include('kandidat.add')
        </div>
      </div>
    </div>
</div>
        <div class="content">
            <div class="card card-info card-outline">
                <div class="card-header">
        <table class="table table-hover mt-2">
            <thead>
              <tr>
                <th>Action</th>
                <th>No Urut</th>
                <th scope="col">Calon Ketua</th>
                <th>Calon Wakil</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $dt )
                  <tr>
                      <td>
                          <p>
                              <a href="{{ url('kandidat/'.$dt->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-user-edit"></i></a>
                              <a href="kandidat/{{ $dt ->id }}/delete" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i></a>
                          </p>
                      </td>
                      <td>{{ $dt->no_urut }}</td>
                      <td>{{ $dt->siswa_calon_ketua->nama }}</td>
                      <td>{{ $dt->siswa_calon_wakil->nama }}</td>
                  </tr>
              @endforeach
            </tbody>
          </table>
          </div>


        </div>
        </div>
        </div>
    <footer class="main-footer">
        @include('layout.footer')
    </footer>
@include('sweetalert::alert')
@endsection
