<?php

namespace App\Http\Controllers\Donateur;

use App\annonce;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeDonateurController extends Controller
{
    public function pub()
    {
        $annonces = annonce::all();
        return view ('donateur.homeDonateur')->with('annonces',$annonces);
    }
    public function messa(Request $request, $id , $ben_mail){
        $donateurs = user::all();
        return view('donateur.message',[
            'users' => $donateurs,
            'ben_mail' => $ben_mail,
        ]);
    }
}

