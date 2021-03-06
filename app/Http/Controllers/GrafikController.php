<?php

namespace App\Http\Controllers;

use App\Kandidat;
use Illuminate\Http\Request;
use App\Voting;
class GrafikController extends Controller
{
    public function index()
    {
        $title = 'Hasil Voting';
        //$data = [['name'=>'ITE','y'=>50],['name'=>'AA','y'=>60]];
        $hasil = [];
        $kandidat = Kandidat::get();
        foreach ($kandidat as $key => $kd){
            $id_kandidat = $kd->id;
            $no_urut = $kd->no_urut;
            $total = Voting::where('kandidat_id',$id_kandidat)->count();

            $a['name'] = 'No Urut'.$no_urut;
            $a['y'] = $total;
            array_push($hasil,$a);
        }
        return view('grafik.index',compact('title','hasil'));
    }
}
