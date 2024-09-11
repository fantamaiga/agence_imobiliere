<?php

namespace App\Http\Controllers;
use App\Models\Visite;
use Illuminate\Http\Request;

class VisiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visites = Visite::all();
        return view('admins.visites.create',compact('visites'));
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
            'date'=>'required|min:6',
            'heure'=>'required|min:4',
            'statut'=>'required|string|min:2',
            'commentaire'=>'required|string|min:10',
            'clients_id'=>'required|exists:clients,id',
            'biens_id'=>'required|exists:biens,id',
            'agents_id'=>'required|exists:agents,id',
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
           }else{
                $visites = new Visite();
                $visites->date = $request->matricule;
                $visites->heure = $request->heure;
                $visites->statut = $request->statut;
                $visites->commentaire = $request->commentaire;
                $visites->clients_id = $request->clients_id;
                $visites->biens_id = $request->biens_id;
                $visites->agents_id = $request->agents_id;
                $visites->save();
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
        $visites = Visite::find($id);
        return view('admins.visites.edit',compact('visites'));    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'date'=>'required|min:6',
            'heure'=>'required|min:4',
            'statut'=>'required|string|min:2',
            'commentaire'=>'required|string|min:10',
            'clients_id'=>'required|exists:clients,id',
            'biens_id'=>'required|exists:biens,id',
            'agents_id'=>'required|exists:agents,id',
        ]);
        $visites=Visite::find($id);
        $visites->date = $request->matricule;
        $visites->heure = $request->heure;
        $visites->statut = $request->statut;
        $visites->commentaire = $request->commentaire;
        $visites->clients_id = $request->clients_id;
        $visites->biens_id = $request->biens_id;
        $visites->agents_id = $request->agents_id;
        $visites->update();
        return redirect()->route('visites.all')->with('success','Modifier avec success');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
