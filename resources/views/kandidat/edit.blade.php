@extends('summer')
@extends('layout.beranda')
@section('content')

<title>{{ $title }}</title>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <center>
            <h5>Edit Data Kandidat</h5>
        </center>
        <div class="container-fluid">
<!-- Button trigger modal -->

            <form method="POST" action="{{ url('kandidat/'.$dt->id) }}">
                @csrf
                {{ method_field('PUT') }}
                <div class="form-group">
                  <label for="exampleInputEmail1">No Urut</label>
                  <input type="number" name="no_urut" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                  placeholder="No Urut" value="{{ $dt->no_urut }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Calon Ketua</label>
                 <select class="form-control select2" name="calon_ketua">
                     @foreach ($siswa as $sw)
                        <option value="{{ $sw->id }}" {{ ($dt->calon_ketua == $sw->id) ? 'selected' : '' }}>
                            {{ $sw->nama }}</option>
                     @endforeach
                 </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Calon Wakil</label>
                 <select class="form-control select2" name="calon_wakil">
                     @foreach ($siswa as $sw)
                        <option value="{{ $sw->id }}" {{ ($dt->calon_wakil == $sw->id) ? 'selected' : '' }}>
                            {{ $sw->nama }}</option>
                     @endforeach
                 </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Visi Misi</label>
                    <textarea name="visi_misi" id="summernote" rows="3">{{ $dt->visi_misi }}</textarea>
                  </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
      </div>
        </div>
      </div>
    </div>

<footer class="main-footer">
    @include('layout.footer')
</footer>
</div>
</div>
</div>
</div>
</div>
</div>
@include('sweetalert::alert')

@endsection

