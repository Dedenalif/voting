<?php

namespace App\Http\Controllers;

use App\Voting;
use App\User;
use Illuminate\Http\Request;

class VotingController extends Controller
{
    public function index()
    {
        $title = 'List Voting';
        $voting = Voting::with('user')->latest()->paginate(5);
        return view('voting.index',compact('title','voting'));
    }
}
