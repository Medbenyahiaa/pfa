<?php

namespace App\Http\Controllers\Beneficiare;

use App\User;
use App\annonce;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeBeneficiareController extends Controller
{
    public function pubu()
    {
        $annonces = annonce::all();
        return view ('beneficiare.homeBeneficiare')->with('annonces',$annonces);
    }
}
