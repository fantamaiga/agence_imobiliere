<?php

namespace App\Http\Controllers;
use App\Models\Proprietaire;
use App\Models\Document;
use Illuminate\Http\Request;

class ProprietaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proprietaires = Proprietaire::all();
        $documents = document::all();
        return view('admins.proprietaires.create',compact('proprietaires', 'documents'));
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
            'matricule'=> 'required|matricule|unique:proprietaires,matricule',
            'nom'=>'required|string|min:2',
            'prenom'=>'required|string|min:2',
            'adresse'=>'required|string|min:4',
            'telephone'=>'required|numeric|min:8',
            'email' => 'required|email|unique:proprietaires,email',
            'type_document'=>'required|string|min:3', 
            'date_exp_doc'=>'required|date',
            'description'=>'required|string|min:10|max:255',
            'documents_id'=>'required|exists:documents,id'
 
        ]);;
        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
           }else{
                $proprietaires = new Proprietaire();
                $proprietaires->matricule = $request->matricule;
                $proprietaires->nom = $request->nom;
                $proprietaires->prenom = $request->prenom;
                $proprietaires->adresse = $request->adresse;
                $proprietaires->telephone = $request->telephone;
                $proprietaires->email = $request->email;
                $proprietaires->type_document = $request->type_document;
                $proprietaires->date_exp_doc = $request->date_exp_doc;
                $proprietaires->description = $request->description;
                $proprietaires->documents_id = $request->documents_id;
                $proprietaires->save();
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
        $proprietaires = Proprietaire::find($id);
        return view('admins.proprietaires.edit',compact('proprietaires'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'matricule'=> 'required|matricule|unique:proprietaires,matricule',
            'nom'=>'required|string|min:2',
            'prenom'=>'required|string|min:2',
            'adresse'=>'required|string|min:4',
            'telephone'=>'required|numeric|min:8',
            'email' => 'required|email|unique:proprietaires,email',
            'type_document'=>'required|string|min:3', 
            'date_exp_doc'=>'required|date',
            'description'=>'required|string|min:10|max:255',
            'documents_id'=>'required|exists:documents,id'

        ]);
        $proprietaires=Agent::find($id);
        $proprietaires->matricule = $request->matricule;
        $proprietaires->nom = $request->nom;
        $proprietaires->prenom = $request->prenom;
        $proprietaires->adresse = $request->adresse;
        $proprietaires->telephone = $request->telephone;
        $proprietaires->email = $request->email;
        $proprietaires->type_document = $request->type_document;
        $proprietaires->date_exp_doc = $request->date_exp_doc;
        $proprietaires->description = $request->description;
        $proprietaires->documents_id = $request->documents_id;
        $proprietaires->save();
        return redirect()->route('proprietaires.all')->with('success','Modifier avec success');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
