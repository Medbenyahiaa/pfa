<?php

namespace App\Http\Controllers\Beneficiare;

use App\User;
use App\annonce;
use App\Beneficiare;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeBeneficiareController extends Controller
{
    public function pubu()
    {
        $annonces = annonce::all();
        $user=User::findOrFail(Auth::user()->id);
        $beneficiare=Beneficiare::where('user_id',$user->id)->first();
        return view ('beneficiare.homeBeneficiare',[
            'annonces'=>$annonces,
            'benficiare'=>$beneficiare,
        ]);
    }
    public function edit(Request $request, $id)
    {
        $annonces = annonce::findOrfail($id);
        return view('beneficiare.edit')->with('annonces',$annonces);
    }
    public function update(Request $request, $id)
    {
        $annonces = annonce::find($id);
        $annonces ->sujet = $request->input('sujet');
        $annonces ->detail = $request->input('detail');
        $annonces -> update();
        return redirect('/homeBeneficiare')->with('status','Your data is updated');
    }
    public function ben_delete($id)
    {
        $annonces = annonce::findOrfail($id);
        $annonces -> delete();
        return redirect('/homeBeneficiare')->with('status','Your data is deleted');
    }
    public function annonce(){
        $beneficiares = user::all();
        return view('beneficiare.write',[
            'users' => $beneficiares,
        ]);
    }
}
