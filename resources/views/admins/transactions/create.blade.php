@extends('layouts.masteradmin')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-4">
      <div class="card shadow-lg">
        <div class="card-header bg-secondary text-white text-center">
          Ajouter une nouvelle transaction
        </div>
        <div class="card-body">
          <form action="" method="post">
            @csrf
            <div class="form-group">
              <label for="Nom">Date</label> 
              <input type="date" class="form-control">
            </div>

            <div class="form-group">
              <label for="Prenom">Montant</label> 
              <input type="number" class="form-control">
            </div>

            <div class="">
                        <label for="">Devise</label>
                        <select name="" id="" class="form-control">
                        <option value="">Franc Guinéen(FGN)</option>
                            <option value="">Franc Cfa(CFA)</option>
                            <option value="">Euro(£)</option>
                            <option value="">Dollards($)</option>
                        </select>
                    </div>

            <div class="form-group">
              <label for="Adresse">Type</label> 
              <input type="text" class="form-control">
            </div>

            <div class="form-group">
              <label for="">Num_Contrat</label> 
              <input type="text" class="form-control">
            </div>

            <div class="form-group">
              <label for="Email">Num_Bien</label> 
              <input type="email" class="form-control">
            </div>

            <div class="form-group">
              <label for="type">Num_Client</label> 
              <input type="text" class="form-control">
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
          <table class="table table-secondary table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Date</th>
      <th scope="col">Montant</th>
      <th scope="col">Devise</th>
      <th scope="col">Type</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td ></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td ></td>
      <td></td>
      <td></td>
      <td></td>
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