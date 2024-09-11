@extends('layouts.masteradmin')
@section('content')
    <div class="card md-2">
        <div class="card-head">
            <h4 class="card-header bg-secondary text-white text-center">Formulaire des messages</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-6 form-group">
                    <div class="">
                        <label for="">Nom de l'expéditeur</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Nom du recepteur</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Contenu</label>
                        <textarea name="" id="" cols="15" rows="3" class="form-control"></textarea>
                    </div>

                    </div>
                    <div class="col-6 form-group">
                    <div class="">
                        <label for="">Heure</label>
                        <input type="text" name="heure_utc" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Date</label>
                        <input type="date" name="" id="" class="form-control">
                    
              <div class="mt-3">
                <button type="submit" class="btn btn-primary form-control">Enregistrer</button>
              </div>
              <div class="">
                <button type="reset" class="btn btn-danger form-control">Annuler</button>
              </div>
            </div>
            </div>
                </div>
@endsection