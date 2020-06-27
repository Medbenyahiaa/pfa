<?php

namespace App\Http\Controllers\Admin;

use App\annonce;
use App\Beneficiare;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeAdminController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view ('admin.insp')->with('users',$users);
    }
    public function inspedit(Request $request, $id)
    {
        $users = User::findOrfail($id);
        return view('admin.insp-edit')->with('users',$users);
    }
    public function inspupdate(Request $request, $id)
    {
        $users = User::find($id);
        $users ->nom = $request->input('username');
        $users ->role = $request->input('role');
        $users -> update();
        return redirect('/role-users')->with('status','Your data is updated');
    }
    public function inspdelete($id)
    {
        $users = User::findOrfail($id);
        $users -> delete();
        return redirect('/role-users')->with('status','Your data is deleted');
    }
    public function Admin(){
        $admins = user::all();
        return view('admin.AddAdmin',[
            'users' => $admins,
        ]);
    }
    public function checkPartenaire(){
        $users = user::all();
        $beneficiares= Beneficiare::all();
        $annonces= annonce::all();

        return view('admin.validation',[
            'users' => $users,
            'beneficiares'=>$beneficiares,
            'annonces'=>$annonces,
        ]);
    }
        public function AddP($annonce_id){
            $annonces=annonce::findOrFail($annonce_id);
            $annonces->valide=true;
            $annonces->save();
            return back();
    }

    public function DeleteP($annonce_id){
        $annonces=annonce::findOrFail($annonce_id);
        $annonces->delete();
        return back();
    }

}
