
@extends('layouts.masteradmin')

@section('content')
<div class="card body mt-4">
    <div class="row mb-3">
        <!-- Barre de recherche -->
        <div class="col-3">
            <input type="text" class="form-control" placeholder="Rechercher un message..." />
        </div>
        <div class="col-3">
            <button class="btn btn-secondary form-control">
                Rechercher
            </button>
        </div>
        <div class="col-3">
            <button class="btn btn-secondary form-control">
                Actualiser
            </button>
        </div>
        <div class="col-3">
            <a href="{{ route('messages.create') }}" class="btn btn-primary form-control">
                Ajouter Message
            </a>
        </div>
    </div>

    <table class="table table-secondary table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Titre</th>
                <th scope="col">Contenu</th>
                <th scope="col">Date de Création</th>
                <th scope="col">Dernière Modification</th>
                <th scope="col">Créé par</th>
                <th scope="col">Modifié par</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
            <tr>
                <td>{{ $message->id }}</td>
                <td>{{ $message->nom_expediteur }}</td>
                <td>{{ $message->nom_recepteur }}</td>
                <td>{{ $message->contenu}}</td>
                <td>{{ $message->heure}}</td>
                <td>{{ $message->date }}</td>
                <td>{{ $message->utilisateurs_id}}</td>
                <td>
                    <a href="{{ route('messages.edit', $message->id) }}" class="btn btn-primary btn-sm">
                        <i class="ni ni-ruler-pencil"></i> Modifier
                    </a>
                    <form action="{{ route('messages.destroy', $message->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="ni ni-fat-remove"></i> Supprimer
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


    

