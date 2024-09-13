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
            <h4 class="card-header bg-secondary text-white text-center">Formulaire des Bails</h4>
        </div>
        <div class="card-body">
        <form action="{{ route('bails.store') }}" method="post">
        @csrf
            <div class="row">
                <div class="col-4 form-group">                   
                    <div class="">
                        <label for="">Date de Début</label>
                        <input type="date" name="" id="" class="form-control">
                        <span class="text-danger">
                @error('date')
                  {{$message}}
                @enderror
              </span>
                    </div>

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
                        <label for="">Montant du Loyer</label>
                        <input type="number" name="montant" id="" class="form-control">
                        <span class="text-danger">
                @error('montant')
                  {{$message}}
                @enderror
              </span>
                    </div>

                    <div class="">
                        <label for="">Depot de Garantie</label>
                        <input type="number" name="depot" id="" class="form-control">
                        <span class="text-danger">
                @error('depot')
                  {{$message}}
                @enderror
              </span>
                    </div>
                    
                    <div class="">
                    <label for="">Mode de Paiement</label>
                        <select name="mode" id="" class="form-control">
                        <option value="">Carte de Crédit</option>
                            <option value="">Carte Visa</option>
                            <option value="">Orange Money</option>
                        </select>
                        <span class="text-danger">
                @error('mode')
                  {{$message}}
                @enderror
              </span>
                </div>

                </div>  
                
                <div class="col-4 form-group">
            
                    <div class="">
                        <label for="">Devise</label>
                        <select name="devise" id="" class="form-control">
                        <option value="">Franc Guinéen(FGN)</option>
                            <option value="">Franc Cfa(CFA)</option>
                            <option value="">Euro(£)</option>
                            <option value="">Dollards(§)</option>
                        </select>
                        <span class="text-danger">
                @error('devise')
                  {{$message}}
                @enderror
              </span>
                    </div>
                    
                    <div class="">
                        <label for="">Frequence de Paiement</label>
                        <input type="text" name="frequence" id="" class="form-control">
                        <span class="text-danger">
                @error('frequence')
                  {{$message}}
                @enderror
              </span>
                    </div>

                    <div class="">
                        <label for="">Statut</label>
                        <select name="statut" id="" class="form-control">
                        <option value="">Actif</option>
                            <option value="">En cours de Signature</option>
                            <option value="">Résilié</option>
                            <option value="">Expiré</option>
                            <option value="">Suspendu</option>
                            <option value="">En Attente de Renouvellement</option>
                            <option value="">En cours de Résiliation</option>
                            <option value="">Annulé</option>
                        </select>
                        <span class="text-danger">
                @error('statut')
                  {{$message}}
                @enderror
              </span>
                    </div>
                    
                    <div class="">
                        <label for="">Condition</label>
                        <textarea name="condition" id="" cols="15" rows="7" class="form-control"></textarea>
                        <span class="text-danger">
                @error('condition')
                  {{$message}}
                @enderror
              </span>
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
                        <label for="">Num_Client</label>
                        <select name="num_client" id="" class="form-control">
                                <option value="">Selectionner</option>
                                @foreach($clients as $client)
                                <option value="{{$client->id }}">{{ $client->nom }}</option>
                                @endforeach
                            </select>

                            @error('agents_id')
                            {{ $message }}
                            @enderror
                    </div>

                    <div class="">
                        <label for="">Num_Contrat</label>
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
                        <input type="submit" value="Enrregistrer" name="" id="" class="form-control mt-4 bg-primary text-white" >
                        <input type="submit" value="Annuler" name="" id="" class="form-control mt-4 bg-danger text-white" >
                    </div>
                </div>
             </form>
        </div>

        <div class="card body mt-3">
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
                <div class="col-3">
                <button class="btn btn-secondary form-control">Lister</button>
            </div>
        
            <table class="table table-secondary table-striped">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Date de début</th>
                <th scope="col">Date de fin</th>
                <th scope="col">Montant_loyer</th>
                <th scope="col">Depot_Garantie</th>
                <th scope="col">Devise</th>
                <th scope="col">Frequence</th>
                <th scope="col">Condition</th>
                <th scope="col">Statut</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($bails as $bail)
    <tr>
        <td>{{$bail->id}}</td>
        <td>{{$bail->date_debut}}</td>
        <td>{{$bail->date_fin}}</td>
        <td>{{$bail->montant_loyer}}</td>
        <td>{{$bail->depot_Garantie}}</td>
        <td>{{$bail->devise}}</td>
        <td>{{$bail->frequence}}</td>
        <td>{{$bail->condition}}</td>
        <td>{{$bail->statut}}</td>
        <td>{{$bail->contrats_id}}</td>
        <td>{{$bail->clients_id}}</td>
        <td>{{$bail->proprietaires_id}}</td>
      <td>
      <a href="{{route('bails.edit',$bail->id)}}" class="btn btn-primary btn-sm"><i class="ni ni-ruler-pencil"></i></a>
      <a href="" class="btn btn-danger btn-sm"><i class="ni ni-fat-remove"></i></a>
      </td>
      
    </tr>
    @endforeach
            
            </tbody>
            </table> 
            </div>
     </div>
</div>       
@endsection
@section('params')
@endsection