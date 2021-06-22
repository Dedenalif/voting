<!-- Button trigger modal -->
@extends('layout.beranda')
@section('content')
<title>{{ $title }}</title>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
          <center>
              <h5>Periode Voting</h5>
          </center>
          <div class="content">
            <div class="card card-info card-outline mt-2">
                <div class="card-header">
                    <div class="row">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Dari Tanggal</th>
                <th scope="col">Sampai Tanggal</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{date('d-m-Y', strtotime($dari->tanggal))}}</td>
                <td>{{date('d-m-Y', strtotime($sampai->tanggal))}}</td>
              </tr>
          </table>
                    </div>
                </div>
            </div>
          </div>
      </div>
    </div>
</div>
<footer class="main-footer">
@include('layout.footer')
</footer>
@endsection
