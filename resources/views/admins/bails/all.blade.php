@extends('layouts.masteradmin')
@section('content')

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