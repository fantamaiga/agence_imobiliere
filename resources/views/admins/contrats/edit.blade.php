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
            <h4 class="card-header bg-secondary text-white text-center">Formulaire des contrats</h4>
        </div>
        <div class="card-body">
        <form action="{{ route('contrats.store') }}" method="post">
        @csrf
            <div class="row">
                <div class="col-4 form-group">
                    <div class="">
                        <label for="">Type de contrat</label>
                        <select name="type" id="" class="form-control">
                            <option value="">Contrat de travail</option>
                            <option value="">Contrat de prêt</option>
                            <option value="">Contrat de partenariat</option>
                            <option value="">Contrat de vente</option>
                            <option value="">Contrat de location</option>
                            <option value="">Contrat de gestion locative</option>
                            <option value="">Contrat de syndic de copropriété</option>
                            <option value="">Autre</option>
                        </select> 
                        <span class="text-danger">
                @error('type')
                  {{$message}}
                @enderror
              </span>                 
                      </div>

                    <div class="">
                        <label for="">Date de signature</label>
                        <input type="date" name="date" id="" class="form-control">
                        <span class="text-danger">
                @error('date')
                  {{$message}}
                @enderror
              </span>
                    </div>
                 
                    <div class="">
                        <label for="">Date de début</label>
                        <input type="date" name="date_debut" id="" class="form-control">
                        <span class="text-danger">
                @error('date_debut')
                  {{$message}}
                @enderror
              </span>
                    </div>

                 </div>  
                   
             <div class="col-4 form-group">
            
             <div class="">
                        <label for="">Date de fin</label>
                        <input type="date" name="date_fin" id="" class="form-control">
                        <span class="text-danger">
                @error('date_fin')
                  {{$message}}
                @enderror
              </span>
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
                        <label for="">Num_Propriétaire</label>
                        <select name="proprietaires_id" id="" class="form-control">
                                <option value="">Selectionner</option>
                                @foreach($proprietaires as $proprietaire)
                                <option value="{{$proprietaire->id }}">{{ $proprietaire->nom }}</option>
                                @endforeach
                            </select>

                            @error('proprietaires_id')
                            {{ $message }}
                            @enderror
                    </div>
                    
                    <div class="">
                        <input type="submit" value="Enrregistrer" name="" id="" class="form-control mt-4 bg-primary text-white" >
                    </div>

                    <div class="">
                        <input type="submit" value="Annuler" name="" id="" class="form-control mt-4 bg-danger text-white" >
                    </div>
                    
                </div>
        </div>
        </div>
        </div>
        @endsection
@section('params')