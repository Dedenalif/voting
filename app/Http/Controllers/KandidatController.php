<?php

namespace App\Http\Controllers;

use App\Kandidat;
use Illuminate\Http\Request;
use App\Siswa;
class KandidatController extends Controller
{
    public function index()
    {
        $title = 'List Kandidat';
        $data = Kandidat::orderBy('no_urut','asc')->get();
        $siswa = Siswa::orderBy('nama','asc')->get();
        return view('kandidat.index',compact('title','data','siswa'));
    }
    public function show($id)
    {
        $title = 'Detail Kandidat';
        $dt = Kandidat::find($id);


        return view('kandidat.show',compact('title','dt'));
    }
    public function add()
    {
        $title = 'Tambah Kandidat';
        $siswa = Siswa::orderBy('nama','asc')->get();
        return view('kandidat.add',compact('title','siswa'));
    }
        public function store(Request $request)
        {
            $data = new Kandidat;
            $data->no_urut = $request->no_urut;
            $data->calon_ketua = $request->calon_ketua;
            $data->calon_wakil = $request->calon_wakil;
            $data->visi_misi = $request->visi_misi;
            $data->save();

            return redirect('kandidat')->with('toast_success', 'Data Kandidat Berhasil Diinput');
        }
        public function edit($id)
        {
            $title = 'Edit Kandidat';
            $siswa = Siswa::orderBy('nama','asc')->get();
            $dt = Kandidat::find($id);
            return view('kandidat.edit',compact('title','siswa','dt'));
        }
        public function update(Request $request,$id)
        {
            $data = Kandidat::find($id);
            $data->no_urut = $request->no_urut;
            $data->calon_ketua = $request->calon_ketua;
            $data->calon_wakil = $request->calon_wakil;
            $data->visi_misi = $request->visi_misi;
            $data->save();

            return redirect('kandidat')->with('toast_success', 'Data Kandidat Berhasil Diupdate');
        }
        public function delete($id)
        {
            $dt= Kandidat::find($id);
            $dt->delete();
            return redirect('kandidat')->with('toast_success', 'Data Berhasil Dihapus');
        }
}
