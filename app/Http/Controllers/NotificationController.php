<?php

namespace App\Http\Controllers;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifications = Notification::all();
        return view('admins.notifications.create', compact('notifications'));
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
        // Validation des données entrantes
        $validation = $request->validate([
            'type' => 'required|string|max:255',
            'titre' => 'required|string|max:255',
            'message' => 'required|string',
            'date_envoie' => 'required|date',
            'date_expiration' => 'nullable|date|after:date_envoie',
            'statut' => 'required|string|max:50',
            'utilisateurs_id' => 'required|exists:utilisateurs,id',
            'biens_id' => 'required|exists:biens,id',
            'contrats_id' => 'required|exists:contrats,id',
            'proprietaires_id' => 'required|exists:proprietaires,id',
            'clients_id' => 'required|exists:clients,id',
            'agents_id' => 'required|exists:agents,id',
        ]);

        // Création de la nouvelle notification
        Notification::create($validation);

        // Redirection après enregistrement
        return redirect()->back()->with('success', 'Notification enregistrée avec succès');
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
        $notifications = Notification::find($id);
        return view('admins.notifications.edit',compact('notifications'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validation des données entrantes
    $validation = $request->validate([
        'type' => 'required|string|max:255',
        'titre' => 'required|string|max:255',
        'message' => 'required|string',
        'date_envoie' => 'required|date',
        'date_expiration' => 'nullable|date|after:date_envoie',
        'statut' => 'required|string|max:50',
        'utilisateurs_id' => 'required|exists:utilisateurs,id',
        'biens_id' => 'required|exists:biens,id',
        'contrats_id' => 'required|exists:contrats,id',
        'proprietaires_id' => 'required|exists:proprietaires,id',
        'clients_id' => 'required|exists:clients,id',
        'agents_id' => 'required|exists:agents,id',
    ]);

    // Récupérer la notification par son ID
    $notification = Notification::findOrFail($id);

    // Mise à jour des données
    $notification->update($validation);

    // Redirection après modification
    return redirect()->back()->with('success', 'Notification modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Récupérer la notification par son ID
        $notification = Notification::findOrFail($id);

        // Supprimer la notification
        $notification->delete();

        // Redirection après suppression avec un message de succès
        return redirect()->back()->with('success', 'Notification supprimée avec succès');
    }
}

