@extends('layouts.masteradmin')
@section('content')
    <div class="card md-2">
        <div class="card-head">
            <h4 class="card-header bg-secondary text-white text-center">Formulaire des avis</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4 form-group">
                    <div class="">
                        <label for="">Note</label>
                        <input type="number" name="note" min="0" max="10" step="0.1" id="note" placeholder="Entrez une note de 0 à 10" class="form-control">
                    </div>
                    <div class="">
                        <label for="">Commentaire</label>
                        <textarea name="" id="" cols="15" rows="4" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-4 form-group">
                    <div class="">
                        <label for="">Date</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>
                    <div class="">
                        <label for="">Num_Client</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="">
                        <label for="">Num_Bien</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                </div>
                <div class="col-4 form-group">
                    <div class="">
                        <label for="">Num_Proprietaire</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <input type="submit" value="Enrregistrer" name="" id="" class="form-control mt-4 bg-primary text-white" >
                    </div>

                    <div class="">
                        <input type="submit" value="Annuler" name="" id="" class="form-control mt-4 bg-danger text-white" >
                    </div>
                </div>
               
            </div>
            <div class="card body mt-3">
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
        
            <table class="table table-secondary table-striped">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Note</th>
                <th scope="col">Commentaire</th>
                <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td ></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <th scope="row">4</th>
                <td></td>
                <td></td>
                <td></td>
                </tr>
            </tbody>
            </table> 
            </div>
    </div>
    </div>
@endsection