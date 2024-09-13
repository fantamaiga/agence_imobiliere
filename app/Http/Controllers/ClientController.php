<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Avis;
use App\Models\Bail;
use App\Models\Document;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        $avis = Avis::all();
        $bails =Bail::all();
        $contrats = Contrat::all();
        $documents = Document::all();
        return view('admins.clients.create',compact('clients', 'avis', 'bails', 'documents', 'contrats'));
    }
    public function show ()
    {
      return view('admins.clients.all');
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
            'type_client'=>'required|string|min:3', 
            'preferences'=>'required|string|min:3',
            'status'=>'required|string|min:3',
            'documents_id'=>'required|exists:documents,id'
 
            
        ]);;
        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
           }else{
                $clients = new Client();
                $clients->matricule = $request->matricule;
                $clients->nom = $request->nom;
                $clients->prenom = $request->prenom;
                $clients->adresse = $request->adresse;
                $clients->telephone = $request->telephone;
                $clients->email = $request->email;
                $clients->type_client = $request->type_client;
                $clients->preferences = $request->preferences;
                $clients->status = $request->status;
                $clients->documents_id = $request->input('documents_id');
                $clients->save();
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
        $clients = Client::find($id);
        return view('admins.clients.edit',compact('clients'));
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
            'type_client'=>'required|string|min:3', 
            'preferences'=>'required|string|min:3',
            'status'=>'required|string|min:3',
            'documents_id'=>'required|exists:documents,id'

        ]);
        $clients=Client::find($id);
        $clients->matricule = $request->matricule;
        $clients->nom = $request->nom;
        $clients->prenom = $request->prenom;
        $clients->adresse = $request->adresse;
        $clients->telephone = $request->telephone;
        $clients->email = $request->email;
        $clients->type_client = $request->type_client;
        $clients->preferences = $request->preferences;
        $clients->status = $request->status;
        $clients->documents_id = $request->input('documents_id');
        $clients->save();
        return redirect()->route('clients.all')->with('success','Modifier avec success');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
