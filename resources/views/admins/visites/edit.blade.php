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
<div class="card md-2">
    <div class="card-head">
            <h4 class="card-header bg-secondary text-white text-center">Formulaire des visites</h4>
        </div>
        <div class="card-body">
        <form action="{{route('visites.update', ['id' => $visites->id])}}" method="post">
        @csrf
            <div class="row">
                <div class="col-4 form-group">
                    
                    <div class="">
                        <label for="">Date de Visite</label>
                        <input type="date" name="date" id="" class="form-control">
                        @error('date')
                            {{$message}}
                         @enderror
                    </div>
              
                    <div class="">
                        <label for="">Heure de visite</label>
                        <input type="date" name="heure" id="" class="form-control">
                    @error('heure')
                        {{$message}}
                     @enderror
                    </div>

                    <div class="">
                        <label for="">Statut</label>
                        <select name="Statut" id="" class="form-control">
                            <option value="prevue">Prévue</option>
                            <option value="Réalisée">Réalisée</option>
                            <option value="Annulée ">Annulée </option>
                            <option value="Reportée">Reportée</option>
                        </select>                   
                        @error('Statut')
                            {{$message}}
                         @enderror
                    </div>

                 </div>  
                   
             <div class="col-4 form-group">

                    <div class="">
                        <label for="">Commentaire</label>
                        <textarea name="commentaire" id="" cols="15" rows="4" class="form-control"></textarea>
                        @error('commentaire')
                            {{$message}}
                         @enderror
                    </div>

                    <div class="">
                        <label for="">Num_Bien</label>
                        <input type="text" name="biens_id" id="" class="form-control">
                        @error('biens_id')
                            {{$message}}
                         @enderror
                    </div>
                    
                </div>

                <div class="col-4 form-group">
            
                    <div class="">
                        <label for="">Num_Client</label>
                        <input type="text" name="clients_id" id="" class="form-control">
                        @error('clients_id')
                            {{$message}}
                         @enderror
                    </div>

                    <div class="">
                        <label for="">Num_Agent</label>
                        <input type="text" name="agents_id" id="" class="form-control">
                        @error('agents_id')
                            {{$message}}
                         @enderror
                    </div>
                    
                    <div class="d-flex gap-3">
                        <input type="submit" value="Enrregistrer" name="" id="" class="form-control mt-4 bg-primary text-white" >
                        <input type="submit" value="Annuler" name="" id="" class="form-control mt-4 bg-danger text-white" >
                    </div>
                </div>
                </div>
</div>
@endsection
@section('params')