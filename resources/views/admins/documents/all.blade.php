@extends('layouts.masteradmin')
@section('content')
<div class="card body mt-4">
            <div class="row">
                <div class="col-3">
                    <input type="text" class="form-control" />
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
                    <button class="btn btn-secondary form-control">
                        Lister
                    </button>
                </div>

                <table class="table table-secondary table-striped">
                    <thead>
                    @foreach($documents as $document)
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Type</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date de Création</th>
                            <th scope="col">Date d'Expiration</th>
                            <th scope="col">Statut</th>
                            <th scope="col">Version</th>
                            <th scope="col">Date de Modification</th>
                            <th scope="col">Crée par:</th>
                            <th scope="col">Modifié par:</th>
                            <th scope="col">Date de Connexion</th>
                            <th scope="col">Tags</th>
                            <th scope="col">Confidentialité</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($agents as $agent)
                        <tr>
                            <td>{{$document->type}}</td>
                            <td>{{$document->chemin_document}}</td>
                            <td>{{$document->titre}}</td>
                            <td>{{$document->description}}</td>
                            <td>{{$document->date_creation}}</td>
                            <td>{{$document->date_expiration}}</td>
                            <td>{{$document->statut}}</td>
                            <td>{{$document->version}}</td>
                            <td>{{$document->date_modification}}</td>
                            <td>{{$document->cree_par}}</td>
                            <td>{{$document->modifie_par}}</td>
                            <td>{{$document->tags}}</td>
                            <td>{{$document->confidentialite}}</td>
                            <td>{{$document->clients_id}}</td>
                            <td>{{$document->proprietaires_id}}</td>
                            <td>{{$document->agents_id}}</td>
                            <td>{{$document->biens_id}}</td>
                            <td>{{$document->contrats_id}}</td>
                            <td>{{$document->bails_id}}</td>

                            <td>
                                <a   href="{{route('documents.edit',$document->id)}}" class="btn btn-primary btn-sm"><i class="ni ni-ruler-pencil"></i ></a>

                                <a href="" class="btn btn-danger btn-sm"><i class="ni ni-fat-remove"></i ></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection
</div
@section('params')