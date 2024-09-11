<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $users = User::all();
      return view('admins.utilisateurs.create',compact('users'));
    }

    public function show ()
    {
      return view('admins.utilisateurs.all');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'matricule'=> 'required|matricule|unique:users',
            'nom'=>'required|string|min:2',
            'prenom'=>'required|string|min:2',
            'adresse'=>'required|string|min:4',
            'telephone'=>'required|numeric|min:8',
            'email' => 'required|email|unique:users',
            'role'=>'required|string|min:3',
            'password' => 'required|string|min:8|confirmed',
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
           }else{
                $users = new User();
                $users->matricule = $request->matricule;
                $users->nom = $request->nom;
                $users->prenom = $request->prenom;
                $users->adresse = $request->adresse;
                $users->telephone = $request->telephone;
                $users->role = $request->role;
                $users->email = $request->email;
                $users->password = $request->password;
                $users->save();
                return redirect()->back()->with('success','Enrregistrer avec success');
           }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $users = User::find($id);
        return view('admins.utilisateurs.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
           'matricule'=> 'required|matricule|unique:users',
            'nom'=>'required|string|min:2',
            'prenom'=>'required|string|min:2',
            'adresse'=>'required|string|min:4',
            'telephone'=>'required|numeric|min:8',
            'email' => 'required|email|unique:users',
            'role'=>'required|string|min:3', 
            'password' => 'required|string|min:8|confirmed',

        ]);
        $users=User::find($id);
        $users->matricule = $request->matricule;
        $users->nom = $request->nom;
        $users->prenom = $request->prenom;
        $users->adresse = $request->adresse;
        $users->telephone = $request->telephone;
        $users->role = $request->role;
        $users->email = $request->email;
        $users->password = $request->password;
        // $teacher->update($request->matricule());
        // $teacher->update($request->nom());
        // $teacher->update($request->prenom());
        // $teacher->update($request->adresse());
        // $teacher->update($request->telephone());
        // $teacher->update($request->role());
        // $teacher->update($request->email());
        $users->save();
        return redirect()->route('users.all')->with('success','Modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
