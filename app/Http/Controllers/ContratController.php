<?php

namespace App\Http\Controllers;
use App\Models\Contrat;
use Illuminate\Http\Request;

class ContratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contrats = Contrat::all();
        return view('admins.contrats.create', compact('contrats'));
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
            'type_contrat'=>'required|string|min:3',
            'date_debut'=>'required|date',
            'date_fin' =>'nullable|date|after:date_publication' ,
            'date_signature'=>'required|date',
            'biens_id'=>'required|exists:biens,id',
            'proprietaires_id'=>'required|exists:proprietaires,id',
            'clients_id'=>'required|exists:clients,id'
             
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
           }else{
            $contrat->type_contrat = $request->input('type_contrat');
            $contrat->date_debut = $request->input('date_debut');
            $contrat->date_fin = $request->input('date_fin');
            $contrat->date_signature = $request->input('date_signature');
            $contrat->biens_id = $request->input('biens_id');
            $contrat->proprietaires_id = $request->input('proprietaires_id');
            $contrat->clients_id = $request->input('clients_id');
        
                $contrats->save();
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
        $contrats = Contrat::find($id);
        return view('contrats.edit',compact('contrats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'type_contrat'=>'required|string|min:3',
             'date_debut'=>'required|date',
             'date_fin' =>'nullable|date|after:date_publication' ,
             'date_signature'=>'required|date',
             'biens_id'=>'required|exists:biens,id',
             'proprietaires_id'=>'required|exists:proprietaires,id',
             'clients_id'=>'required|exists:clients,id'
 
         ]);
            $contrats=Contrat::find($id);
            $contrat->type_contrat = $request->input('type_contrat');
            $contrat->date_debut = $request->input('date_debut');
            $contrat->date_fin = $request->input('date_fin');
            $contrat->date_signature = $request->input('date_signature');
            $contrat->biens_id = $request->input('biens_id');
            $contrat->proprietaires_id = $request->input('proprietaires_id');
            $contrat->clients_id = $request->input('clients_id');

         $contrats->save();
         return redirect()->route('contrats.all')->with('success','Modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
