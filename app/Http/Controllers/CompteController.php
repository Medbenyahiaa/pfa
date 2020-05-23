<?php

namespace App\Http\Controllers;

use App\Beneficiare;
use App\Donateur;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class CompteController extends Controller
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
    public function store(Request $request)
    {

        $valide = $request->validate([
            'role' => ['required'],
            'nom' => ['required'],
            'prenom' => ['required'],
            'pays' => ['required'],
            'ville' => ['required'],
            'sexe' => ['required'],
            'img' => ['required'],
            'telephone' => ['required'],
            'adresse' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            ]);
        
        $user = User::create([
            'role' => $request->input('role'),
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'pays' => $request->input('pays'),
            'ville' => $request->input('ville'),
            'sexe' => $request->input('sexe'),
            'img' => $request->input('img'),
            'telephone' => $request->input('telephone'),
            'adresse' => $request->input('adresse'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        if($user->role == 'donateur')
        {
            $donateur=new Donateur ;
            $donateur->user_id=$user->id;
            $donateur->save();
            return route('home');
        }
        else if( $user->role == 'beneficiare'){
            $beneficiare=new Beneficiare ;
            $beneficiare->user_id=$user->id;
            $beneficiare->save();
            return route('home');
        }
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
