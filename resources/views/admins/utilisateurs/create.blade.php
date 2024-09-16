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
    <div class="col-4">
      <div class="card shadow-lg">
        <div class="card-header bg-secondary text-white text-center">
          Ajouter un nouvel utilisateur
        </div>
        <div class="card-body">
          <form action="{{route('users.store')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="matricule">Matricule</label> <br>
              <input type="text" name="matricule" class="form-control">
              <span class="text-danger">
                @error('matricule')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Nom">Nom</label> <br>
              <input type="text" name="nom" class="form-control">
              <span class="text-danger">
                @error('nom')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Prenom">Prenom</label> <br>
              <input type="text" name="prenom" class="form-control">
              <span class="text-danger">
                @error('prenom')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Adresse">Adresse</label> <br>
              <input type="text" name="adresse" class="form-control">
              <span class="text-danger">
                @error('adresse')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Telephone">Telephone</label> <br>
              <input type="tel" name="telephone" placeholder="Entrez votre numero de telephone" class="form-control">
              <span class="text-danger">
                @error('telephone')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Email">Email</label> <br>
              <input type="email" name="email" class="form-control">
              <span class="text-danger">
                @error('email')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Role">Role</label> <br>
              <input type="text" name="role" class="form-control">
              <span class="text-danger">
                @error('role')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Password">Mot de passe</label> <br>
              <input type="password" name="password" class="form-control">
              <span class="text-danger">
                @error('password')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="row">
              <div class="col-6">
                <button type="submit" class="btn btn-primary form-control">Enregistrer</button>
              </div>
              <div class="col-6">
                <button type="reset" class="btn btn-danger form-control">Annuler</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
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
          <button class="btn btn-secondary form-control">Lister</button>
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
      <th scope="col">Role</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
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
      <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary btn-sm"><i class="ni ni-ruler-pencil"></i></a>
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