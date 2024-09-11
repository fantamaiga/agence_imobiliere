<?php

namespace App\Http\Controllers;
use App\Models\Avis;
use Illuminate\Http\Request;

class AvisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $avis = Avis::all();
        return view('admins.avis.create',compact('avis'));
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
            'note' => 'required|numeric|min:0',
            'Commentaire'=>'required|string|min:8',
            'date'=>'required|date',
            'biens_id'=>'required|exists:biens,id',
            'clients_id'=>'required|exists:clients,id',
            'proprietaires_id'=>'required|exists:proprietaires,id',
             
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
           }else{
            $avis->note = $request->input('note');
            $avis->Commentaire = $request->input('Commentaire');
            $avis->date = $request->input('date');
            $avis->biens_id = $request->input('biens_id');
            $avis->clients_id = $request->input('clients_id');
            $avis->proprietaires_id = $request->input('proprietaires_id');
              
            $avis->save();
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
        $avis = Avis::find($id);
        return view('admins.avis.edit',compact('avis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'note' => 'required|numeric|min:0',
            'Commentaire'=>'required|string|min:8',
            'date'=>'required|date',
            'biens_id'=>'required|exists:biens,id',
            'clients_id'=>'required|exists:clients,id',
            'proprietaires_id'=>'required|exists:proprietaires,id',

        ]);
        $avis=Avis::find($id);
        $avis->note = $request->note;
        $avis->Commentaire = $request->Commentaire;
        $avis->	date = $request->date;
        $avis->biens_id = $request->input('biens_id');
        $avis->clients_id = $request->input('clients_id');
         $avis->proprietaires_id = $request->input('proprietaires_id');
        $avis->save();
        return redirect()->route('avis.all')->with('success','Modifier avec success');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
