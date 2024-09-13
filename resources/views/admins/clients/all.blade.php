@extends('layouts.masteradmin')
@section('content')
<div class="col-8">
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
          <table class="table table-secondary table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Matricule</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Email</th>
      <th scope="col">Type-client</th>
      <th scope="col">Statut</th>
      <th scope="col">Preférence</th>
      <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     @foreach($clients as $client)
    </tr>
    <td>{{$client->id}}</td>
    <td>{{$client->matricule}}</td>
    <td>{{$client->nom}}</td>
    <td>{{$client->prenom}}</td>
    <td>{{$client->adresse}}</td>
    <td>{{$client->telephone}}</td>
    <td>{{$client->email}}</td>
    <td>{{$client->type}}</td>
    <td>{{$client->statut}}</td>
    <td>{{$client->preference}}</td>
    <td>{{$client->documents_id}}</td>

    <td>
      <a href="{{route('agents.edit',$agent->id)}}" class="btn btn-primary btn-sm"><i class="ni ni-ruler-pencil"></i></a>
      <a href="" class="btn btn-danger btn-sm"><i class="ni ni-fat-remove"></i></a>
      </td>
      
    </tr>
    @endforeach
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