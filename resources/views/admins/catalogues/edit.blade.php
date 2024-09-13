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
            <h4 class="card-header bg-secondary text-white text-center">Formulaire des Catalogues</h4>
        </div>
        <div class="card-body">
        <form action="{{ route('catalogues.store') }}" method="post">
        @csrf
            <div class="row">
                <div class="col-6 form-group">
                    <div class="">
                        <label for="">Nom</label>
                        <input type="text" name="nom" id="" class="form-control">
                        <span class="text-danger">
                @error('nom')
                  {{$message}}
                @enderror
              </span>
                    </div>

                    <div class="">
                        <label for="">Date de Création</label>
                        <input type="date" name="date_creation" id="" class="form-control">
                        <span class="text-danger">
                @error('date_creation')
                  {{$message}}
                @enderror
              </span>
                    </div>
                 
                    <div class="">
                        <label for="">Date de Modification</label>
                        <input type="date" name="date_modification" id="" class="form-control">
                        <span class="text-danger">
                @error(date_modification')
                  {{$message}}
                @enderror
              </span>
                    </div>

                    <div class="">
                        <label for="">Statut</label>
                        <select name="statut" id="" class="form-control">
                            <option value="">Actif</option>
                            <option value="">Innactif</option>
                            <option value="">Publié</option>
                            <option value="">Non Publié</option>
                            <option value="">Archivé</option>
                            <option value="">En revision</option>
                            <option value="">En attente de validation</option>
                            <option value="">Retiré</option>
                            <option value="">En cours de création</option>
                            <option value="">Complété</option>
                        </select>
                        <span class="text-danger">
                @error('statut')
                  {{$message}}
                @enderror
              </span>
                    </div>

                 </div>  
                   
             <div class="col-6 form-group">
            
             <div class="">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="15" rows="2" class="form-control"></textarea>
                        <span class="text-danger">
                @error('description')
                  {{$message}}
                @enderror
              </span>
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
                        <label for="">Num_Bien </label>
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
                    
                    <div class="d-flex gap-3">
                        <input type="submit" value="Enrregistrer" name="" id="" class="form-control mt-3 bg-primary text-white" >
                        <input type="submit" value="Annuler" name="" id="" class="form-control mt-3 bg-danger text-white " >
                    </div>  
                </div>
            </div>
         </div>
    </div>
@endsection 
@section('params')