<?php

namespace App\Http\Controllers;
use App\Models\Bail;
use App\Models\Client;
use App\Models\Proprietaire;
use App\Models\Contrat;
use Illuminate\Http\Request;

class BailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bails = Bail::all();
        $clients = Client::all();
        $proprietaires = Proprietaire::all();
        $contrats = Contrat::all();
        return view('admins.bails.create', compact('bails', 'clients', 'proprietaires', 'contrats'));
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
            'date_debut'=>'required|date',
            'date_fin' =>'nullable|date|after:date_debut' ,
            'montant_loyer'=>'required|numeric|min:0',
            'depot_garantie'=>'required|numeric|min:0',
            'devise'=>'required|string|min:3',
            'frequence_paiement'=>'required|numeric|min:0',
            'condition'=>'required|string|min:6|max:255',
            'statut'=>'required|string|min:3|max:50',
            'clients_id'=>'required|exists:clients,id',
            'proprietaires_id'=>'required|exists:proprietaires,id',
            'contrats_id'=>'required|exists:contrats,id',
             
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
           }else{
            $bails = new Bail();
            $bails->date_debut = $request->input('date_debut');
            $bails->date_fin = $request->input('date_fin');
            $bails->montant_loyer = $request->input('montant_loyer');
            $bails->depot_garantie = $request->input('depot_garantie');
            $bails->devise = $request->input('devise');
            $bails->frequence_paiement = $request->input('frequence_paiement'); 
            $bails->condition = $request->input('condition');
            $bails->statut = $request->input('statut');
            $bails->clients_id = $request->input('clients_id');
            $bails->proprietaires_id = $request->input('proprietaires_id');
            $bails->contrats_id = $request->input('contrats_id');
            
            $bails->save();
            return redirect()->back()->with('success', 'Enregistré avec succès'); 
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
        $bails = Bail::find($id);
        return view('admins.bails.edit',compact('bails'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
             'date_debut'=>'required|date',
            'date_fin' =>'nullable|date|after:date_debut' ,
            'montant_loyer'=>'required|numeric|min:0',
            'depot_garantie'=>'required|numeric|min:0',
            'devise'=>'required|string|min:3',
            'frequence_paiement'=>'required|numeric|min:0',
            'condition'=>'required|string|min:6|max:255',
            'statut'=>'required|string|min:3|max:50',
            'clients_id'=>'required|exists:clients,id',
            'proprietaires_id'=>'required|exists:proprietaires,id',
            'contrats_id'=>'required|exists:contrats,id',

        ]);
        $bails=Bail::find($id);
        $bails->date_debut = $request->input('date_debut');
        $bails->date_fin = $request->input('date_fin');
        $bails->montant_loyer = $request->input('montant_loyer');
        $bails->depot_garantie = $request->input('depot_garantie');
        $bails->devise = $request->input('devise');
        $bails->frequence_paiement = $request->input('frequence_paiement'); 
        $bails->condition = $request->input('condition');
        $bails->statut = $request->input('statut');
        $bails->clients_id = $request->input('clients_id');
        $bails->proprietaires_id = $request->input('proprietaires_id');
        $bails->contrats_id = $request->input('contrats_id');

        $bails->save();
        return redirect()->route('bails.all')->with('success','Modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
