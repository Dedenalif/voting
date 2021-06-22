<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Kandidat;
use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $title = 'List Siswa';
        $data = Siswa::orderBy('nama','asc')->get();

        return view('Siswa.index',compact('title','data'));
    }
    public function add()
    {
        $title = 'Tambah Siswa';

        return view('Siswa.add',compact('title'));
    }
    public function store(Request $request)
    {
        $nim = $request->nim;
        $nama = $request->nama;
        $no_telp = $request->no_telp;
        $alamat = $request->alamat;

        $file = $request->file('photo');
        if($file){
            $nama_photo = rand(). $file->getClientOriginalName();
            $file->move('photo_siswa',$nama_photo);
            $photo = 'photo_siswa/'.$nama_photo;
        }else{
            $photo = '';
        }
        $data = new Siswa;
        $data->nim = $nim;
        $data->nama = $nama;
        $data->no_telp = $no_telp;
        $data->alamat = $alamat;
        $data->photo = $photo;
        $data->save();

        return redirect('siswa')->with('toast_success', 'Data Berhasil Ditambah');
    }

    public function delete($id)
        {
            $dt= Siswa::find($id);
            $dt->delete();
            return redirect('siswa')->with('toast_success', 'Data Berhasil Dihapus');
        }
}
