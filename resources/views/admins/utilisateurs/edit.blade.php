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
  <div class="row">
    <div class="col-12">
      <div class="card shadow-lg">
        <div class="card-header bg-secondary text-white text-center">
          Ajouter un nouvel utilisateur
        </div>
        <div class="card-body">
          <form action="{{route('users.update', ['id' => $users->id])}}" method="post">
            @csrf
            <div class="form-group">
              <label for="Matricule">Matricule</label> <br>
              <input type="text" name="matricule" class="form-control" value="{{$users->matricule}}">
              <span class="text-danger">
                @error('matricule')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Nom">Nom</label> <br>
              <input type="text" name="nom" class="form-control" value="{{$users->nom}}">
              <span class="text-danger">
                @error('nom')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Prenom">Prenom</label> <br>
              <input type="text" name="prenom" class="form-control" value="{{$users->prenom}}">
              <span class="text-danger">
                @error('prenom')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Adresse">Adresse</label> <br>
              <input type="text" name="adresse" class="form-control" value="{{$users->adresse}}">
              <span class="text-danger">
                @error('adresse')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Telephone">Telephone</label> <br>
              <input type="tel" name="telephone" placeholder="Entrez votre numero de telephone" class="form-control" value="{{$users->telephone}}">
              <span class="text-danger">
                @error('telephone')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Email">Email</label> <br>
              <input type="email" name="email" class="form-control" value="{{$users->email}}">
              <span class="text-danger">
                @error('email')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Role">Role</label> <br>
              <input type="text" name="role" class="form-control" value="{{$users->role}}">
              <span class="text-danger">
                @error('role')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Password">Mot de passe</label> <br>
              <input type="password" name="password" class="form-control" >
              <span class="text-danger">
                @error('password')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="row">
              <div class="col-6">
                <button type="submit" class="btn btn-primary form-control">Enrregistrer</button>
              </div>
              <div class="col-6">
                <button type="reset" class="btn btn-danger form-control">Annuler</button>
              </div>
             
            </div>
            </div>
</div>
@endsection
@section('params')