@extends('layouts.masteradmin')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-4">
      <div class="card shadow-lg">
        <div class="card-header bg-secondary text-white text-center">
          Ajouter un nouveau Temoin
        </div>
        <div class="card-body">
          <form action="" method="post">
            @csrf
            <div class="form-group">
              <label for="Nom">Nom</label> 
              <input type="text" class="form-control">
            </div>

            <div class="form-group">
              <label for="Prenom">Prenom</label> 
              <input type="text" class="form-control">
            </div>

            <div class="form-group">
              <label for="Adresse">Adresse</label> 
              <input type="text" class="form-control">
            </div>

            <div class="form-group">
              <label for="Telephone">Telephone</label> 
              <input type="text" class="form-control">
            </div>

            <div class="form-group">
              <label for="Email">Email</label> 
              <input type="email" class="form-control">
            </div>

            <div class="form-group">
              <label for="signature">Date de Signature</label> 
              <input type="date" class="form-control">
            </div>

            <div class="form-group">
              <label for="role">Rôle</label> 
              <input type="text" class="form-control">
            </div>

            <div class="">
                        <label for="">Description</label>
                        <textarea name="" id="" cols="15" rows="3" class="form-control"></textarea>
                    </div>

            <div class="form-group">
              <label for="document">Num_Contrat</label> 
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
          <table class="table table-secondary table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Email</th>
      <th scope="col">Date de Signature</th>
      <th scope="col">Role</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
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
      <td></td>
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
      <td ></td>
      <td></td>
      <td></td>
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
      <td></td>
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
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
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