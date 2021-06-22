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
                    <form method="POST" action="{{ url('set_periode') }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Dari Tanggal</label>
                          <input type="date" name="dari" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                          value="{{ $dari->tanggal }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Sampai Tanggal</label>
                          <input type="date" name="sampai" class="form-control" id="exampleInputPassword1"
                          value="{{ $sampai->tanggal }}">
                        </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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
