
@extends('layout.beranda')

@section('content')
<title>{{ $title }}</title>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
       <center>
        <h5>Data Siswa</h5>
       </center>
          <div class="row">
      @include('siswa.add')
        </div>
        <div class="content">
            <div class="card card-info card-outline mt-2">
                <div class="card-header">
        <table class="table table-hover mt-2">
            <thead>
              <tr>
                <th>Action</th>
                <th scope="col">#</th>
                <th>Photo</th>
                <th scope="col">Nim</th>
                <th scope="col">Nama</th>
                <th scope="col">No Telp</th>
                <th>Alamat</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $e=>$dt )
                  <tr>
                      <td>
                    <form action="{{ url('kandidat/'.$dt->id) }}" method="POST">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger btn-sm fas fa-trash-alt"></button>
                    </form>
                      </td>
                      <td>{{ $e+1 }}</td>
                      <td><img src="{{ asset($dt->photo) }}" style="width: 100px"></td>
                      <td>{{ $dt->nim }}</td>
                      <td>{{ $dt->nama }}</td>
                      <td>{{ $dt->no_telp }}</td>
                      <td>{{ $dt->alamat }}</td>
                  </tr>
              @endforeach
            </tbody>
          </table>
          </div>
      </div>
    </div>
</div>
</div>

    <footer class="main-footer">
        @include('layout.footer')
    </footer>
@include('sweetalert::alert')
@endsection
