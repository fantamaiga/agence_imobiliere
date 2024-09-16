<?php

namespace App\Http\Controllers;
use App\Models\Message;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::all();
        $utilisateurs = Utilisateur::all();
        return view('admins.messages.create', compact('messages', 'utilisateurs'));
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
         // Validation des données
         $request->validate([
            'contenu' => 'required|string',
            'heure' => 'required|date_format:H:i',
            'date' => 'required|date',
            'utilisateurs_id' => 'required|exists:utilisateurs,id',
        ]);

        // Création du message
        Message::create($request->all());

        // Redirection avec message de succès
        return redirect()->route('messages.create')->with('success', 'Message ajouté avec succès.');
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
        $message = Message::findOrFail($id);
        return view('messages.edit', compact('message'));    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validation des données
        $request->validate([
            'contenu' => 'required|string',
            'heure' => 'required|date_format:H:i',
            'date' => 'required|date',
            'utilisateurs_id' => 'required|exists:utilisateurs,id',
        ]);

        // Récupération et mise à jour du message
        $message = Message::findOrFail($id);
        $message->update($request->all());

        // Redirection avec message de succès
        return redirect()->route('messages.index')->with('success', 'Message mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message = Message::findOrFail($id);
        $message->delete();

        return redirect()->route('messages.index')->with('success', 'Message supprimé avec succès.');
    }
}
