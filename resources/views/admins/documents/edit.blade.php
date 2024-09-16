@extends('layouts.masteradmin')
 @section('content')
 <div class="container-fluid">
    <div class="row">
        <div class="col-12 bg-success text-white">
            @if(Session::has('success'))
            <span>
                {{ Session::get('success') }}
            </span>
            @endif
        </div>
    </div>

<div class="card md-2">
    <div class="card-head">
        <h4 class="card-header bg-secondary text-white text-center">
            Formulaire des Documents
        </h4>
    </div>
    <div class="card-body">
        <form action="{{route('documents.update', ['id' => $documents->id])}}" method="post">
            @csrf
            <div class="row">
                <div class="col-4 form-group">
                    <div class="">
                        <label for="">Titre</label>
                        <input type="text" name="titre" id="" class="form-control"/>   
                    </div>
        <div class="row">
            <div class="col-4 form-group">
                <div class="">
                    <label for="">Titre</label>
                    <input type="text" name="titre" id="" class="form-control"/>   
                </div>

                <div class="">
                    <label for="">Type</label>
                    <input type="text" name="" id="" class="form-control" />
                </div>

                <div class="">
                    <label for="">Chemin Du Document</label>
                    <input type="text" name="" id="" class="form-control" />
                </div>

                <div class="">
                    <label for="">Date de Création</label>
                    <input type="date" name="" id="" class="form-control" />
                </div>

                <div class="">
                    <label for="">Date d'Expiration</label>
                    <input type="date" name="" id="" class="form-control" />
                </div>

                <div class="">
                    <label for="">Tags</label>
                    <input type="text" name="" id="" class="form-control" />
                </div>

                <div class="">
                    <label for="">Statut</label>
                    <select name="" id="" class="form-control">
                        <option value="">Archivé</option>
                        <option value="">En cours de création</option>
                        <option value="">En revision</option>
                        <option value="">Annulé</option>
                        <option value="">Confidentiel</option>
                        <option value="">Rejetée</option>
                        <option value="">En cours de traitements</option>
                        <option value="">Autres</option>
                    </select>
                </div>
            </div>

            <div class="col-4 form-group">
                <div class="">
                    <label for="">Date de Modification</label>
                    <input type="date" name="" id="" class="form-control" />
                </div>

                <div class="">
                    <label for="">Crée par:</label>
                    <input type="text" name="" id="" class="form-control" />
                </div>

                <div class="">
                    <label for="">Modifié(e) par:</label>
                    <input type="text" name="" id="" class="form-control" />
                </div>

                <div class="">
                    <label for="">Date de Connexion</label>
                    <input type="date" name="" id="" class="form-control" />
                </div>

                <div class="">
                    <label for="">Confidentialité</label>
                    <input type="text" name="" id="" class="form-control" />
                </div>

                <div class="">
                    <label for="">Description</label>
                    <textarea name="" id="" cols="15" rows="2" class="form-control"></textarea>
                </div>

                <div class="">
                    <label for="">Version</label>
                    <input type="text" name="" id="" class="form-control" />
                </div>

            </div>
            <div class="col-4 form-group">

                <div class="">
                    <label for="">Bail</label>
                    <select name="num_bail" id="" class="form-control">
                       <option value="">Selectionner</option>
                        @foreach($bails as $bail)
                        <option value="{{$bail->id }}">
                            {{ $bail->nom }}
                        </option>
                        @endforeach
                        
                    </select>
                    @error('bails_id')
                    {{ $message }}
                    @enderror
                </div>

                <div class="">
                    <label for="">Num_Client</label>
                    <select name="num_client" id="" class="form-control">
                        <option value="">Selectionner</option>
                        @foreach($clients as $client)
                        <option value="{{$client->id }}">
                            {{ $client->nom }}
                        </option>
                        @endforeach
                    </select>

                    @error('clients_id')
                    {{ $message }}
                    @enderror
                </div>

                <div class="">
                    <label for="">Num_Propriétaire</label>
                    <select name="proprietaires_id" id="" class="form-control">
                        <option value="">Selectionner</option>
                        @foreach($proprietaires as $proprietaire)
                        <option value="{{$proprietaire->id }}">
                            {{ $proprietaire->nom }}
                        </option>
                        @endforeach
                    </select>

                    @error('proprietaires_id')
                    {{ $message }}
                    @enderror
                </div>

                <div class="">
                    <label for="">Num_agent</label>
                    <select name="agents_id" id="" class="form-control">
                        <option value="">Selectionner</option>
                        @foreach($agents as $agent)
                        <option value="{{$agent->id }}">
                            {{ $agent->nom }}
                        </option>
                        @endforeach
                    </select>

                    @error('agents_id')
                    {{ $message }}
                    @enderror
                </div>

                <div class="">
                    <label for="">Num_Bien</label>
                    <select name="biens_id" id="" class="form-control">
                        <option value="">Selectionner</option>
                        @foreach($biens as $bien)
                        <option value="{{$bien->id }}">{{ $bien->nom }}</option>
                        @endforeach
                    </select>

                    @error('biens_id')
                    {{ $message }}
                    @enderror
                </div>

                <div class="">
                    <label for="">Num_Contrat</label>
                    <select name="contrats_id" id="" class="form_control">
                        <option value="">Selectionner</option>
                        @foreach($contrats as $contrat)
                        <option value="{{$contrat->id }}">
                            {{ $contrat->nom }}
                        </option>
                        @endforeach
                    </select>

                    @error('contrats_id')
                    {{ $message }}
                    @enderror
                </div>

                <div class="d-flex gap-3">
                  <input type="submit" value="Enrregistrer" name="" id="" class="form-control mt-4 bg-primary text-white">
                  <input type="submit" value="Annuler" name="" id="" class="form-control mt-4 bg-danger text-white">
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
 @section('params')
