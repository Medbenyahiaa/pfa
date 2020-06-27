<?php

namespace App\Http\Controllers\Annonce;

use App\User;
use App\annonce;
use App\Beneficiare;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeAnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function validation(){
        return request()->validate([
            'ville' => ['required'],
            'sujet' => ['required'],
            'detail' => ['required'],
            'photo' => ['required'],
        ]);
    }
    public function store(Request $request)
    {
        $this->validation();
        $user=User::findOrFail(Auth::user()->id);
        $annoces=new annonce;
        $annoces->sujet=$request->input('sujet');
        $annoces->ville=$request->input('ville');
        $annoces->detail=$request->input('detail');
        $annoces->photo=$request->input('photo');
        $beneficiare=Beneficiare::where('user_id',$user->id)->first();
        $annoces->beneficiare_id=$beneficiare->id;
        $annoces->valide=false;
        $annoces->save();
        return redirect()->route('BenHome');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
