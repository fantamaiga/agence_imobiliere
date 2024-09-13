<?php

namespace App\Http\Controllers;
use App\Models\Bien;
use App\Models\Avis;
use App\Models\Proprietaire;
use App\Models\Catalogue;
use App\Models\Contrat;
use Illuminate\Http\Request;

class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biens = Bien::all();
        $proprietaires = Proprietaire::all();
        $avis = Avis::all();
        $catalogues = Catalogue::all();
        $contrats = Contrat::all();
        return view('admins.biens.create', compact('biens', 'proprietaires', 'avis', 'catalogues', 'contrats'));
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
        $validation = Validator::make($request->all(), [
            'date_ajout' => 'required|date',
            'type_biens' => 'required|string|min:3',
            'commune' => 'required|string|min:1', 
            'ville' => 'required|string|min:1', 
            'quartier' => 'required|string|min:3',
            'superficie' => 'required|string|min:6|max:255',
            'nombre_piece' => 'required|integer|min:1', 
            'nombre_chambre' => 'required|integer|min:1', 
            'nbr_salle_de_bain' => 'required|integer|min:1', 
            'description' => 'required|string|min:1', 
            'mode_paiement' => 'required|string|min:1', 
            'prix' => 'required|numeric|min:0', 
            'devise' => 'required|string|min:3|max:255', 
            'commission' => 'required|numeric|min:0',
            'observation' => 'nullable|string', 
            'statut' => 'required|string|min:3',
            'images' => 'nullable|string|min:6|max:255', 
            'videos' => 'nullable|string|min:3|max:50', 
            'proprietaires_id' => 'required|exists:proprietaires,id',
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
           }else{
            $biens = new Bien();
            $biens->date_ajout = $request->input('date_ajout');
            $biens->type_biens = $request->input('type_biens');
            $biens->commune = $request->input('commune');
            $biens->ville = $request->input('ville');
            $biens->quartier = $request->input('quartier');
            $biens->superficie = $request->input('superficie');
            $biens->nombre_piece = $request->input('nombre_piece');
            $biens->nombre_chambre = $request->input('nombre_chambre');
            $biens->nbr_salle_de_bain = $request->input('nbr_salle_de_bain');
            $biens->description = $request->input('description');
            $biens->mode_paiement = $request->input('mode_paiement');
            $biens->prix = $request->input('prix');
            $biens->devise = $request->input('devise');
            $biens->commission = $request->input('commission');
            $biens->observation = $request->input('observation');
            $biens->statut = $request->input('statut');
            if (req->file('images') && $req->file('videos')) {
                $images = $req->file('images');
                $imagesName = time(). '_'. $images->getClientOriginalExtension();
                $uploadDestination = "contenus/images/";
                $images->move($uploadDestination, $imagesName);

                $videos = $req->file('videos');
                $videosName = time(). '_'. $videos->getClientOriginalExtension();
                $uploadDestination = "contenus/videos/";
                $videos->move($uploadDestination, $videosName);

                $biens->images = $imagesName;
                $biens->videos = $videosName;
            
            }
            $biens->proprietaires_id = $request->input('proprietaires_id');
            
            $biens->save();
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
        $biens = Bien::find($id);
        return view('admins.biens.edit',compact('biens'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'date_ajout' => 'required|date',
            'type_biens' => 'required|string|min:3',
            'commune' => 'required|string|min:1', 
            'ville' => 'required|string|min:1', 
            'quartier' => 'required|string|min:3',
            'superficie' => 'required|string|min:6|max:255',
            'nombre_piece' => 'required|integer|min:1', 
            'nombre_chambre' => 'required|integer|min:1', 
            'nbr_salle_de_bain' => 'required|integer|min:1', 
            'description' => 'required|string|min:1', 
            'mode_paiement' => 'required|string|min:1', 
            'prix' => 'required|numeric|min:0', 
            'devise' => 'required|string|min:3|max:255', 
            'commission' => 'required|numeric|min:0',
            'observation' => 'nullable|string', 
            'statut' => 'required|string|min:3',
            'images' => 'nullable|string|min:6|max:255', 
            'videos' => 'nullable|string|min:3|max:50', 
            'proprietaires_id' => 'required|exists:proprietaires,id',

       ]);
       $biens=Bien::find($id);
    $biens->date_ajout = $request->input('date_ajout');
    $biens->type_biens = $request->input('type_biens');
    $biens->commune = $request->input('commune');
    $biens->ville = $request->input('ville');
    $biens->quartier = $request->input('quartier');
    $biens->superficie = $request->input('superficie');
    $biens->nombre_piece = $request->input('nombre_piece');
    $biens->nombre_chambre = $request->input('nombre_chambre');
    $biens->nbr_salle_de_bain = $request->input('nbr_salle_de_bain');
    $biens->description = $request->input('description');
    $biens->mode_paiement = $request->input('mode_paiement');
    $biens->prix = $request->input('prix');
    $biens->devise = $request->input('devise');
    $biens->commission = $request->input('commission');
    $biens->observation = $request->input('observation');
    $biens->statut = $request->input('statut');
    if (req->file('images') && $req->file('videos')) {
        $images = $req->file('images');
        $imagesName = time(). '_'. $images->getClientOriginalExtension();
        $uploadDestination = "contenus/images/";
        $images->move($uploadDestination, $imagesName);

        $videos = $req->file('videos');
        $videosName = time(). '_'. $videos->getClientOriginalExtension();
        $uploadDestination = "contenus/videos/";
        $videos->move($uploadDestination, $videosName);

        $biens->images = $imagesName;
        $biens->videos = $videosName;
    }
    $biens->proprietaires_id = $request->input('proprietaires_id');

    $biens->save();

    return redirect()->route('biens.index')->with('success', 'Bien mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
