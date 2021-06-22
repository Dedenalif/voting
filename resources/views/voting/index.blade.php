@extends('layout.beranda')
@section('content')
<title>{{ $title }}</title>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
          <center>
              <h5>List Siswa Yang Sudah Voting</h5>
          </center>
          <div class="content">
            <div class="card card-info card-outline mt-2">
                <div class="card-header">
                    <div class="row">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Waktu</th>
                </tr>
                </thead>

                    @foreach ($voting as $e=>$vot)
                <tbody>
                    <tr>
                        <td>{{ $e+1 }}</td>
                        <td>{{ $vot->user->name }}</td>
                        <td>{{date('d-m-Y', strtotime($vot->created_at))}}</td>
                    </tr>
                </tbody>

                    @endforeach
            </table>
        </div>
            <div class="card-footer">
                {{ $voting->links() }}
            </div>
                </div>
                </div>
            </div>
      </div>
    </div>
</div>
@include('sweetalert::alert')
<footer class="main-footer">
@include('layout.footer')
</footer>
@endsection
