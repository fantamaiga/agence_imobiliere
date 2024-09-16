@extends('layouts.masteradmin')

 @section('content')

    <div class="container">
        <h2>Liste des Notifications</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
<div class="row">
        <div class="col-3">
          <input type="text" class="form-control">
        </div>
        <div class="col-3">
          <button class="btn btn-secondary form-control">Rechercher</button>
        </div>
        <div class="col-3">
          <button class="btn btn-secondary form-control">Actualiser</button>
        </div>
        <div class="row">
          <div class="col-12">
          </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Titre</th>
                    <th>Message</th>
                    <th>Date d'envoi</th>
                    <th>Date d'expiration</th>
                    <th>Statut</th>
                    <th>Utilisateur</th>
                    <th>Bien</th>
                    <th>Contrat</th>
                    <th>Propriétaire</th>
                    <th>Client</th>
                    <th>Agent</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($notifications as $notification)
                    <tr>
                        <td>{{ $notification->id }}</td>
                        <td>{{ $notification->type }}</td>
                        <td>{{ $notification->titre }}</td>
                        <td>{{ $notification->message }}</td>
                        <td>{{ $notification->date_envoie }}</td>
                        <td>{{ $notification->date_expiration }}</td>
                        <td>{{ $notification->statut }}</td>
                        <td>{{ $notification->utilisateurs_id }}</td>
                        <td>{{ $notification->biens_id }}</td>
                        <td>{{ $notification->contrats_id }}</td>
                        <td>{{ $notification->proprietaires_id }}</td>
                        <td>{{ $notification->clients_id }}</td>
                        <td>{{ $notification->agents_id }}</td>
                        <td>
                            <!-- Lien pour modifier -->
                            <a href="{{ route('notifications.edit', $notification->id) }}" class="btn btn-primary">Modifier</a>

                            <!-- Formulaire pour supprimer -->
                            <form action="{{ route('notifications.destroy', $notification->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cette notification ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
