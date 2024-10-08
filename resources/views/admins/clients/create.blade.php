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
          <form action="" method="post">
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