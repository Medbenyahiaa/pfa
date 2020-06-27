<?php

namespace App\Http\Controllers\Donateur;

use App\annonce;
use App\user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeDonateurController extends Controller
{
    public function pub()
    {
        $annonces = annonce::all();
        return view ('donateur.homeDonateur')->with('annonces',$annonces);
    }
    public function messa(Request $request, $id){
        $donateurs = user::all();
        return view('donateur.message',[
            'users' => $donateurs,
        ]);
    }
}

