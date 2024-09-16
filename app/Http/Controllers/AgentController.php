<?php

namespace App\Http\Controllers;
use App\Models\Agent;
use App\Models\Catalogue;
use App\Models\Document;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = Agent::all();
        $catalogues = Catalogue::all();
        $documents = Document::all();
        $notifications = Notification::all();

        return view('admins.agents.create',compact('agents','notifications', 'catalogues', 'documents'));
    }

    public function show ()
    {
      return view('admins.agents.all');
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
            'poste'=>'required|string|min:3', 
            'date_embauche'=>'required|date',
            'salaire'=>'required|numeric|min:0',
            'devise'=>'required|string|min:2',
            'statut'=>'required|string|min:3', 
            
        ]);;
        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
           }else{
                $agents = new Agent();
                $agents->matricule = $request->matricule;
                $agents->nom = $request->nom;
                $agents->prenom = $request->prenom;
                $agents->adresse = $request->adresse;
                $agents->telephone = $request->telephone;
                $agents->email = $request->email;
                $agents->poste = $request->poste;
                $agents->date_embauche = $request->date_embauche;
                $agents->salaire = $request->salaire;
                $agents->devise = $request->devise;
                $agents->statut = $request->statut;
                $agents->documents_id = $request->input('documents_id');
                $agents->save();
                return redirect()->back()->with('success','Enrregistrer avec success');
           }
    }

    /**
     * Display the specified resource.
     */
   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $agents = Agent::find($id);
        return view('admins.agents.edit',compact('agents'));
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
            'poste'=>'required|string|min:3', 
            'date_embauche'=>'required|date',
            'salaire'=>'required|numeric|min:0',
            'devise'=>'required|string|min:2',
            'statut'=>'required|string|min:3', 

        ]);
        $agents=Agent::find($id);
        $agents->matricule = $request->matricule;
        $agents->nom = $request->nom;
        $agents->prenom = $request->prenom;
        $agents->adresse = $request->adresse;
        $agents->telephone = $request->telephone;
        $agents->email = $request->email;
        $agents->poste = $request->poste;
        $agents->date_embauche = $request->date_embauche;
        $agents->salaire = $request->salaire;
        $agents->devise = $request->devise;
        $agents->statut = $request->statut;
        $agents->save();
        return redirect()->route('agents.all')->with('success','Modifier avec success');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agent = Agent::findOrFail($id);
        $agent->delete();

        return redirect()->route('agents.index')->with('success', 'supprimé avec succès.');
    }
}
