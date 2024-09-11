<?php

namespace App\Http\Controllers;
use App\Models\Document;
use App\Models\Proprietaire;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::all();
        $proprietaires = Proprietaire::all();
        return view('admins.documents.create', compact('documents', 'proprietaires'));
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
        'type' => 'required|string|min:3',
        'chemin_document' => 'required|string|min:5|max:255',
        'titre' => 'required|string|min:3|max:255',
        'description' => 'nullable|string|max:500',
        'date_creation' => 'required|date',
        'date_expiration' => 'nullable|date|after:date_creation',
        'statut' => 'required|string|min:3|max:50',
        'version' => 'nullable|string|max:50',
        'date_modification' => 'nullable|date|after:date_creation',
        'cree_par' => 'nullable|integer|exists:users,id',
        'modifie_par' => 'nullable|integer|exists:users,id', 
        'tags' => 'nullable|string|max:255',
        'confidentialite' => 'nullable|string|max:50',
        'contrats_id' => 'nullable|integer|exists:contrats,id', 
        'biens_id' => 'nullable|integer|exists:biens,id',
        'proprietaires_id' => 'nullable|integer|exists:proprietaires,id', 
        'clients_id' => 'nullable|integer|exists:clients,id', 
        'agents_id' => 'nullable|integer|exists:agents,id', 
]);
             
        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
           }else{
             // Mise à jour des champs du document avec les valeurs obtenues de la requête
        $document->type = $request->type;
        $document->chemin_document = $request->chemin_document;
        $document->titre = $request->titre;
        $document->description = $request->description;
        $document->date_creation = $request->date_creation;
        $document->date_expiration = $request->date_expiration;
        $document->statut = $request->statut;
        $document->version = $request->version;
        $document->date_modification = $request->date_modification;
        $document->cree_par = $request->cree_par;
        $document->modifie_par = $request->modifie_par;
        $document->tags = $request->tags;
        $document->confidentialite = $request->confidentialite;
        $document->contrats_id = $request->contrats_id;
        $document->biens_id = $request->biens_id;
        $document->proprietaires_id = $request->proprietaires_id;
        $document->clients_id = $request->clients_id;
        $document->agents_id = $request->agents_id;

        // Sauvegarder les modifications
        $document->save();

        // Redirection avec message de succès
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
        $documents = Document::find($id);
        return view('documents.edit',compact('documents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $document = Document::find($id);
        if (!$document) {
            return redirect()->route('documents.index')->with('error', 'Document non trouvé.');
        }
        $request->validate([
            'type' => 'required|string|min:3',
            'chemin_document' => 'required|string|min:5|max:255',
            'titre' => 'required|string|min:3|max:255',
            'description' => 'nullable|string|max:500',
            'date_creation' => 'required|date',
            'date_expiration' => 'nullable|date|after:date_creation',
            'statut' => 'required|string|min:3|max:50',
            'version' => 'nullable|string|max:50',
            'date_modification' => 'nullable|date|after:date_creation',
            'cree_par' => 'nullable|integer|exists:users,id',
            'modifie_par' => 'nullable|integer|exists:users,id', 
            'tags' => 'nullable|string|max:255',
            'confidentialite' => 'nullable|string|max:50',
            'contrats_id' => 'nullable|integer|exists:contrats,id', 
            'biens_id' => 'nullable|integer|exists:biens,id',
            'proprietaires_id' => 'nullable|integer|exists:proprietaires,id', 
            'clients_id' => 'nullable|integer|exists:clients,id', 
            'agents_id' => 'nullable|integer|exists:agents,id', 
 
         ]);
            // Mise à jour des champs du document avec les valeurs obtenues de la requête
        $document->type = $request->type;
        $document->chemin_document = $request->chemin_document;
        $document->titre = $request->titre;
        $document->description = $request->description;
        $document->date_creation = $request->date_creation;
        $document->date_expiration = $request->date_expiration;
        $document->statut = $request->statut;
        $document->version = $request->version;
        $document->date_modification = $request->date_modification;
        $document->cree_par = $request->cree_par;
        $document->modifie_par = $request->modifie_par;
        $document->tags = $request->tags;
        $document->confidentialite = $request->confidentialite;
        $document->contrats_id = $request->contrats_id;
        $document->biens_id = $request->biens_id;
        $document->proprietaires_id = $request->proprietaires_id;
        $document->clients_id = $request->clients_id;
        $document->agents_id = $request->agents_id;

        // Sauvegarder les modifications
        $document->save();

        // Redirection avec message de succès
        return redirect()->route('documents.index')->with('success', 'Document modifié avec succès.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
