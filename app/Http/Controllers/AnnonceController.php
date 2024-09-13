<?php

namespace App\Http\Controllers;
use App\Models\Annonce;
use App\Models\Agent;
use App\Models\Bien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $annonces = Annonce::all();
        $agents = Agent::all();
        $biens = Bien::all();
        return view('admins.annonces.create',compact('annonces', 'biens','agents'));
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
            'type'=>'required|string|min:3',
            'date_publication'=>'required|date',
            'date_expiration' =>'nullable|date|after:date_publication' ,
            'statut'=>'required|string|min:3',
            'prix'=>'required|numeric|min:0',
            'devise'=>'required|string|min:3',
            'description'=>'required|string|min:6',
            'biens_id'=>'required|exists:biens,id',
            'agents_id'=>'required|exists:agents,id'
             
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
           }else{
                $annonces = new Annonce();
                $annonces->type = $request->type;
                $annonces->date_publication = $request->date_publication;
                $annonces->	date_expiration = $request->date_expiration;
                $annonces->statut = $request->statut;
                $annonces->prix = $request->prix;
                $annonces->devise = $request->devise;
                $annonces->description = $request->description;
                $annonces->biens_id = $request->input('biens_id');
                $annonces->agents_id = $request->input('agents_id');           
                $annonces->save();
                return redirect()->back()->with('success','Enrregistrer avec success');
           } 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $annonces = Annonce::find($id);
        return view('annonces.edit',compact('annonces'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
           'type'=>'required|string|min:3',
            'date_publication'=>'required|date',
            'date_expiration' =>'nullable|date|after:date_publication' ,
            'statut'=>'required|string|min:3',
            'prix'=>'required|numeric|min:0',
            'devise'=>'required|string|min:3',
            'description'=>'required|string|min:6',
            'biens_id'=>'required|exists:biens,id',
            'agents_id'=>'required|exists:agents,id'

        ]);
        $annonces=Annonce::find($id);
        $annonces->type = $request->type;
        $annonces->date_publication = $request->date_publication;
        $annonces->	date_expiration = $request->date_expiration;
        $annonces->statut = $request->statut;
        $annonces->prix = $request->prix;
        $annonces->devise = $request->devise;
        $annonces->description = $request->description;
        $annonces->agents_id = $request->input('agents_id');
        $annonces->proprietaires_id = $request->input('proprietaires_id');
        $annonces->save();
        return redirect()->route('annonces.all')->with('success','Modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
