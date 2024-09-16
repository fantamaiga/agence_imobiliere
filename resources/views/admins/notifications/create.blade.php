@extends('layouts.masteradmin') @section('content')
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
                Formulaire de Notification
            </h4>
        </div>
        <div class="card-body">
            <form action="{{ route('notifications.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-4 form-group">
                        <div class="">
                            <label for="">Type</label>
                            <input type="text" name="type" id="" class="form-control"/>
                            <span>
                                @error ('type')
                                <span class="text-danger">{{ message }}</span>
                                @enderror
                            </span>
                        </div>

                        <div class="">
                            <label for="">Titre</label>
                            <input type="text" name="titre" id="" class="form-control"/>
                            <span>
                                @error ('titre')
                                <span class="text-danger">{{ message }}</span>
                                @enderror
                            </span>
                        </div>

                        <div class="">
                            <label for="">Message</label>
                            <textarea name="message" id="" cols="15"
                            rows="4" class="form-control" ></textarea>
                            <span>
                                @error('message')
                                <span class="text-danger">{{ message }}</span>
                                @enderror
                            </span>
                        </div>

                        <div class="">
                            <label for="">Date d'Envoie</label>
                            <input type="date" name="date" id="" class="form-control"/>                           <span>
                                @error ('date')
                                <span class="text-danger">{{ message }}</span>
                            </span>
                        </div>
                    </div>

                    <div class="col-4 form-group">
                        <div class="">
                            <label for="">Date d'Expiration</label>
                            <input type="date" name="date_exp" id="" class="form-control"/>
                            <span>
                                @error ('date_exp')
                                <span class="text-danger">{{ message }}</span>
                                @enderror()
                            </span>
                        </div>

                        <div class="">
                            <label for="">Statut</label>
                            <input type="text" name="statut" id="" class="form-control"/>
                            <span>
                                @error ('statut')
                                <span class="text-danger">{{ message }}</span>
                            </span>
                        </div>

                        <div class="">
                            <label for="">Contrat</label>
                            <select name="num_contrat" id="" class="form-control">
                                <option value="">Selectionner</option>
                                @foreach($contrats as $contrat)
                                <option value="{{$contrat->id }}">{{ $contrat->nom }}</option>
                                @endforeach
                            </select>

                            @error('contrats_id')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="">
                            <label for="">Num_Utilisateur</label>
                            <select name="utilisateurs_id" id="" class="form-control">
                                <option value="">Selectionner</option>
                                @foreach($utilisateurs as $utilisateur)
                                <option value="{{$utilisateur->id }}">
                                    {{ $utilisateur->nom }}
                                </option>
                                @endforeach
                            </select>

                            @error('utilisateurs_id')
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
                    </div>

                    <div class="col-4 form-group">
                        <div class="">
                            <label for="">Num_Proprietaire</label>
                            <select name="num_proprietaire" id="" class="form-control">
                                <option value="">Selectionner un Propriétaire</option>
                                @foreach($proprietaires as $proprietaire)
                                <option value="{{$proprietaire->id}}">{{$proprietaire->nom}}</option>
                                @endforeach
                            </select>

                            @error('num_proprietaire')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="">
                            <label for="">Num_Client</label>
                            <select name="num_client" id="" class="form-control">
                                <option value="">Selectionner</option>
                                @foreach($clients as $client)
                                <option value="{{$client->id }}">{{ $client->nom }}</option>
                                @endforeach
                            </select>

                            @error('clients_id')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="">
                            <label for="">Num_Agent</label>
                             <select name="num_agent" id="" class="form-control">
                                <option value="">Selectionner</option>
                                @foreach($agents as $agent)
                                <option value="{{$agent->id }}">{{ $agent->nom }}</option>
                                @endforeach
                            </select>

                            @error('agents_id')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="">
                            <input type="submit" value="Enrregistrer" name="" id=""
                             class="form-control mt-4 bg-primary text-white"/>   
                        </div>

                        <div class="">
                            <input type="submit" name="" id=""
                             class="form-control mt-4 bg-danger text-white"/>  
                        </div>
                    </div>

                    <div class="card" body>
                        <div class="row mt-3">
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
                        </div>
                    </div>

                    @endsection
                </div>
            </form>
        </div>
    </div>
</div>
