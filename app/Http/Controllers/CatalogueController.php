<?php

namespace App\Http\Controllers;
use App\Models\Catalogue;
use App\Models\Agent;
use App\Models\Bien;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogues = Catalogue::all();
        $agents = Agent::all();
        $biens = Bien::all();
        return view('admins.catalogues.create', compact('catalogues', 'agents', 'biens'));
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
            'nom'=>'required|string|min:3',
            'description'=>'required|string|min:8|max:255',
            'date_creation'=>'required|date',
            'date_modification' =>'nullable|date|after:date_publication' ,
            'statut'=>'required|string|min:3',
            'agents_id'=>'required|exists:agents,id',
            'biens_id'=>'required|exists:biens,id',

        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
           }else{
                $catalogues = new Catalogue();
                $catalogues->nom = $request->input('nom');
                $catalogues->description = $request->input('description');
                $catalogues->date_creation = $request->input('date_creation');
                $catalogues->date_modification = $request->input('date_modification');
                $catalogues->statut = $request->input('statut');
                $catalogues->agents_id = $request->input('agents_id');
                $catalogues->biens_id = $request->input('biens_id');
                $catalogue->save();
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
        $catalogues = Catalogue::find($id);
        $biens = Bien::all();
        $agents = Agent::all();
        return view('catalogues.edit',compact('catalogues', 'biens', 'agents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom'=>'required|string|min:3',
            'description'=>'required|string|min:8|max:255',
            'date_creation'=>'required|date',
            'date_modification' =>'nullable|date|after:date_publication' ,
            'statut'=>'required|string|min:3',
            'agents_id'=>'required|exists:agents,id',
            'biens_id'=>'required|exists:biens,id',
 
         ]);
         $catalogues=Catalogue::find($id);
         $catalogues->nom = $request->input('nom');
         $catalogues->description = $request->input('description');
         $catalogues->date_creation = $request->input('date_creation');
         $catalogues->date_modification = $request->input('date_modification');
         $catalogues->statut = $request->input('statut');
         $catalogues->agents_id = $request->input('agents_id');
         $catalogues->biens_id = $request->input('biens_id');
         $catalogue->save();
         return redirect()->route('catalogues.all')->with('success','Modifier avec success');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $catalogue = Catalogue::findorFail($id);
        $catalogue->delete();

        return redirect()->route('catalogues.all')->with('success','Supprimer avec success');
    }
}
