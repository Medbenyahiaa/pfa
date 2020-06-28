<?php

namespace App\Http\Controllers\Admin;

use App\annonce;
use App\Beneficiare;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\AccepterRefuserAnnonce;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
            $ben = Beneficiare::findOrFail($annonces->beneficiare_id);
            $use = User::findOrFail($ben->user_id);
            Mail::to($use->email)->send( new AccepterRefuserAnnonce('accepter') );
            return back();
    }

    public function DeleteP($annonce_id){
        $annonces=annonce::findOrFail($annonce_id);
        $ben = Beneficiare::findOrFail($annonces->beneficiare_id);
        $use = User::findOrFail($ben->user_id);
        Mail::to($use->email)->send( new AccepterRefuserAnnonce('refuser') );
        $annonces->delete();
        return back();
    }

}
