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
<div class="container-fluid">
<form action="{{ route('proprietaires.store') }}" method="post">
@csrf
  <div class="row">
    <div class="col-4">
      <div class="card shadow-lg">
        <div class="card-header bg-secondary text-white text-center">
          Ajouter un nouveau propriétaire
        </div>
        <div class="card-body">
          <form action="" method="post">
            @csrf

            <div class="form-group">

            <div class="form-group">
              <label for="matricule">Matricule</label> <br>
              <input type="text" name="matricule" class="form-control">
              <span class="text-danger">
                @error('matricule')
                  {{$message}}
                @enderror
              </span>
            </div>
            
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
              <input type="text" name="prenom"  class="form-control">
              <span class="text-danger">
                @error('prenom')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Adresse">Adresse</label> <br>
              <input type="text" name="adresse"  class="form-control">
              <span class="text-danger">
                @error('adresse')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Telephone">Numéro de Téléphone</label> <br>
              <input type="tel" name="telephone"  class="form-control">
              <span class="text-danger">
                @error('telephone')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Email">Email</label> <br>
              <input type="email" name="email"  class="form-control">
              <span class="text-danger">
                @error('email')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Type_doc">Type document</label> <br>
              <select name="type" id="" class="form-control">
               <option value="">Carte d'identité</option>
               <option value="">Passeport</option>
               <option value="">Autres</option>
               <span class="text-danger">
                @error('type')
                  {{$message}}
                @enderror
              </span>  
            </select>
            </div>

            <div class="form-group">
              <label for="Date_exp_doc">Date d'expiration du document</label> <br>
              <input type="date" name="date" class="form-control">
              <span class="date">
                @error('date')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Commentaire">Description</label> <br>
              <textarea name="description" id="" cols="15" rows="2" class="form-control"></textarea>
              <span class="text-danger">
                @error('description')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="doc">Num_Document</label> <br>
              <select name="num_document" id="" class="form-control">
                                <option value="">Selectionner</option>
                                @foreach($documents as $document)
                                <option value="{{$document->id }}">{{ $document->nom }}</option>
                                @endforeach
                            </select>

                            @error('agents_id')
                            {{ $message }}
                            @enderror
              
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
      <th scope="col">Type document</th>
      <th scope="col">Date expiration_document </th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
  @foreach($proprietaires as $proprietaire)
    <tr>
        <td>{{$proprietaire->id}}</td>
        <td>{{$proprietaire->matricule}}</td>
        <td>{{$proprietaire->nom}}</td>
        <td>{{$proprietaire->prenom}}</td>
        <td>{{$proprietaire->adresse}}</td>
        <td>{{$proprietaire->telephone}}</td>
        <td>{{$proprietaire->email}}</td>
        <td>{{$proprietaire->poste}}</td>
        <td>{{$proprietaire->date_embauche}}</td>
        <td>{{$proprietaire->salaire}}</td>
        <td>{{$proprietaire->devise}}</td>
        <td>{{$proprietaire->statut}}<</td>
        
      <td>
      <a href="{{route('proprietaires.edit',$proprietaire->id)}}" class="btn btn-primary btn-sm"><i class="ni ni-ruler-pencil"></i></a>
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