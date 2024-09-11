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
          Ajouter un nouveau agent
        </div>
        <div class="card-body">
          <form action="{{route('agents.update', ['id' => $agents->id])}}" method="post">
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
                        <option value="Act">Actif</option>
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
            </div>
</div>
@endsection
@section('params')