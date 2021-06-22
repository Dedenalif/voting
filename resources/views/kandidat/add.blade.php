
<div class="col-12">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-right fas fa-plus-square" data-toggle="modal" data-target="#exampleModal">

</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header bg bg-primary">
    <h5 class="modal-title" id="exampleModalLabel">Tambah List Kandidat</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
        <form method="POST" action="{{ url('kandidat/add') }}">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">No Urut</label>
              <input type="number" name="no_urut" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="No Urut">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Calon Ketua</label>
             <select class="form-control select2" name="calon_ketua">
                 @foreach ($siswa as $sw)
                    <option value="{{ $sw->id }}">{{ $sw->nama }}</option>
                 @endforeach
             </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Calon Wakil</label>
             <select class="form-control select2" name="calon_wakil">
                 @foreach ($siswa as $sw)
                    <option value="{{ $sw->id }}">{{ $sw->nama }}</option>
                 @endforeach
             </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Visi Misi</label>
                <textarea name="visi_misi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
</div>
</div>
</div>
