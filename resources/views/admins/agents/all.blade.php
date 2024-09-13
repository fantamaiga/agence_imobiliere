@extends('layouts.masteradmin')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="row text-white">
        Contact
      </div>
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
          <button class="btn btn-success form-control">Lister</button>
        </div>
        <div class="row">
          <div class="col-12">
            
          </div>
          <table class="table table-secondary table-striped table-responsive">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Matricule</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Email</th>
      <th scope="col">Poste</th>
      <th scope="col">Date embauche</th>
      <th scope="col">Statut</th>
      <th scope="col">Salaire</th>
      <th scope="col">Devise</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>{{$agent->id}}</td>
        <td>{{$agent->matricule}}</td>
        <td>{{$agent->nom}}</td>
        <td>{{$agent->prenom}}</td>
        <td>{{$agent->adresse}}</td>
        <td>{{$agent->telephone}}</td>
        <td>{{$agent->email}}</td>
        <td>{{$agent->poste}}</td>
        <td>{{$agent->date_embauche}}</td>
        <td>{{$agent->salaire}}</td>
        <td>{{$agent->devise}}</td>
        <td>{{$agent->statut}}<</td>
    </tr>
  </tbody>
</table> 
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('params')
  
@endsection