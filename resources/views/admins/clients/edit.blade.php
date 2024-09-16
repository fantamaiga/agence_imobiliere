
@extends('layouts.masteradmin')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-4">
      <div class="card shadow-lg">
        <div class="card-header bg-secondary text-white text-center">
          Ajouter un nouveau client
        </div>
        <div class="card-body">
          <form action="{{route('clients.update', ['id' => $clients->id])}}" method="post">
            @csrf
            <div class="form-group">
              <label for="Matricule">Matricule</label> <br>
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
              <label for="Telephone">Telephone</label> <br>
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
              <label for="type">Type de Client</label> 
            <select name="type" id="" class="form-control">
               <option value="">Particulier</option>
               <option value="">Investisseur</option>
               <option value="">Locataire</option>
               <option value="">Fidèle</option>
               <option value="">Etranger</option>
               <option value="">Locataire</option>
               <option value="">Institutionnel</option>
               <option value="">Autre type de client</option>
            </select>
            <span class="text-danger">
                @error('type')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Statut">Statut</label> <br>
              <select name="" id="statut" class="form-control">
                        <option value="">Actif</option>
                            <option value="">Innactif</option>
                            <option value="">En prospection</option>
                            <option value="">Autre</option>
                        </select>
                        <span class="text-danger">
                @error('statut')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Preférence">Preférence</label> 
              <textarea name="preference" col="2" row="2" id="" class="form-control"></textarea>
              <span class="text-danger">
                @error('preference')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="document">Num_Document</label> 
              <select name="num_document" id="" class="form-control">
                        <option value="">Selectionner un Document</option>
                        @foreach($documents as $document)
                            <option value="{{$document->id}}">{{$document->nom}}</option>
                        @endforeach
                    </select>
                    @error('num_document')
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
    @endsection
@section('params')