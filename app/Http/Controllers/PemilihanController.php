<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandidat;
use App\Periode;
use App\Voting;
use Illuminate\Support\Facades\Auth;

class PemilihanController extends Controller
{
    public function index()
    {
        $dari = Periode::orderBy('tanggal','asc')->first();
        $sampai = Periode::orderBy('tanggal','desc')->first();

        $title = 'Voting Kandidat';
        $data = Kandidat::paginate(1);
        $visi = Kandidat::where('visi_misi')->get();
        return view('pemilihan.index',compact('title','data','visi','dari','sampai'));
    }
    public function voting($id)
    {
        $tanggal = date('Y-m-d');
        $periode = Periode::where('tanggal',$tanggal)->count();

        if($periode > 0 ){
            $data = Voting::firstOrCreate(
                ['user_id'=>Auth::user()->id],
                ['kandidat_id'=>$id,'user_id'=>Auth::user()->id]
            );
             return redirect('pemilihan')->with('toast_success', 'Kandidat Telah Dipilih');

    }else{
        return redirect('pemilihan')->with('toast_error', 'Tidak bisa melakukan voting di luar periode');
    }

    }
}
