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
          Ajouter un nouveau agent
        </div>
        <div class="card-body">
          <form action="{{route('agents.store')}}" method="post">
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
              <label for="Poste">Poste</label> <br>
              <input type="text" name="poste"  class="form-control">
              <span class="text-danger">
                @error('poste')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Date Embauche">Date Embauche</label> <br>
              <input type="date" name="date_embauche"  class="form-control">
              <span class="text-danger">
                @error('date_embauche')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="Salaire">Salaire</label> <br>
              <input type="number" name="salaire"  class="form-control">
              <span class="text-danger">
                @error('salaire')
                  {{$message}}
                @enderror
              </span>
            </div>

            <div class="">
              <label for="">Devise</label>
                <select name="devise" id="" class="form-control">
                  <option value="GNF">Franc Guinéen(FGN)</option>
                  <option value="CFA">Franc Cfa(CFA)</option>
                  <option value="EUR">Euro(£)</option>
                  <option value="DOL">Dollards($)</option>
                  </select>
                  <span class="text-danger">
                @error('devise')
                  {{$message}}
                @enderror
              </span>
              </div>

            <div class="form-group">
              <label for="Statut">Statut</label> <br>
              <select name="statut" id="" class="form-control">
                        <option value="ac">Actif</option>
                            <option value="Inn">Innactif</option>
                            <option value="Attente">En attente de Validation</option>
                            <option value="Sus">Suspendu</option>
                            <option value="CON">En congé</option>
                            <option value="Retr">Retraité</option>
                            <option value="Lic">Licencié</option>
                            <option value="For">En Formation</option>
                        </select>
                        <span class="text-danger">
                @error('statut')
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
          <button class="btn btn-success form-control">Lister</button>
        </div>
        <div class="row">
          <div class="col-12">
            
          </div>
          <table class="table table-secondary table-striped  table-responsive">
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
      <th scope="col">Salaire</th>
      <th scope="col">Devise</th>
      <th scope="col">Statut</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($agents as $agent)
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