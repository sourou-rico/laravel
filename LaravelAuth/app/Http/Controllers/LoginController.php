<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        $users = User::orderBy('id', 'desc')->get();
        return view("welcome", compact("users"));
    }

    public function login (){
        return view("login");
    }

    public function register (Request $request) {

        try {
            //code...
            $user = new User;
            $passwordHashed = Hash::make($request->password);
            $user->name = trim($request->name);
            $user->email = trim($request->email);
            $user->role = $request->role;
            $user->password = $passwordHashed;
            $user->save();

            return redirect("")->with("success","Utilisateur crée avec succès");

        } catch (\Exception $e) {
            //
            return redirect("login")->with("error", $e->getMessage());
        }

    }

    public function edit(User $user ) {
       return view('edit', compact("user"));
    }

    public function update(Request $request, $id) {
       
        try {
            $user = User::find($id);
            $user->name = trim($request->name);
            $user->email = trim($request->email);
            $user->role = $request->role;
            $user->password = Hash::make($request->password);
            $user->save();
          return redirect('');
        } catch (\Exception $e) {
            return redirect("login")->with("error", $e->getMessage());
        }
    }

    public function delete(User $user){
        User::destroy($user->id);
        return redirect("")->with("success","Element supprimé");
    }




}
