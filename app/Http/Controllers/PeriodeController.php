<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    public function index()
    {
        $title = 'Set Periode Voting';
        $dari = Periode::orderBy('tanggal','asc')->first();
        $sampai = Periode::orderBy('tanggal','desc')->first();
        return view('periode.index',compact('title','dari','sampai'));
    }
    public function set_periode(Request $request)
    {
        $dari = $request->dari;
        $sampai = $request->sampai;

        $tgl1 = date('Y-m-d',strtotime($dari));
        $tgl2 = date('Y-m-d',strtotime($sampai));

        DB::table('periode')->delete();

        while ($tgl1 <= $tgl2){
        $data = new Periode;
        $data ->tanggal = $tgl1;
        $data->save();

        $tgl1 = date('Y-m-d',strtotime('+1 days',strtotime($tgl1)));
        }
    return redirect('set_periode')->with('toast_success','Data Berhasil Disimpan');
    }
    public function periode()
    {
        $title = 'Periode Voting';
        $dari = Periode::orderBy('tanggal','asc')->first();
        $sampai = Periode::orderBy('tanggal','desc')->first();
        return view('periode.tgl',compact('title','dari','sampai'));
    }
}
