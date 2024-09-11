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
          Ajouter un nouveau rôle
        </div>
        <div class="card-body">
          <form action="{{route('roles.store')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="Nom">Nom</label> <br>
              <input type="text" name="nom" class="form-control">
              <span class="text-danger">
                @error('nom')
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
       Nom
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
       </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td ></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td ></td>
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