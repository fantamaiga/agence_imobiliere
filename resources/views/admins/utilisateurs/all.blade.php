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
          <button class="btn btn-primary form-control">Actualiser</button>
        </div>
        <div class="col-3">
          <button class="btn btn-secondary form-control">Lister</button>
        </div>
        <div class="row">
          <div class="col-12">
            
          </div>
          <table class="table table-secondary table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>{{$user->id}}</td>
        <td>{{$user->matricule}}</td>
        <td>{{$user->nom}}</td>
        <td>{{$user->prenom}}</td>
        <td>{{$user->adresse}}</td>
        <td>{{$user->telephone}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role}}</td>
        <td>
          <!-- Lien pour modifier -->
          <a href="{{ route('agents.edit', $agent->id) }}" class="btn btn-primary">Modifier</a>

          <!-- Formulaire pour supprimer -->
          <form action="{{ route('agents.destroy', $agent->id) }}" method="POST" style="display:inline-block;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cette notification ?')">Supprimer</button>
          </form>
      </td>
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