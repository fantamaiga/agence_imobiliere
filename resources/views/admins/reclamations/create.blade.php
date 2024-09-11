@extends('layouts.masteradmin')
@section('content')
<div class="card md-2">
    <div class="card-head">
            <h4 class="card-header bg-secondary text-white text-center">Formulaire des Réclamations</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4 form-group">
                    <div class="">
                        <label for="">Type de Réclamation</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Date de Réclamation</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>
                 
                    <div class="">
                        <label for="">Date de Résolution</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Description</label>
                        <textarea name="" id="" cols="15" rows="3" class="form-control"></textarea>
                    </div>

                 </div>  
                   
             <div class="col-4 form-group">
            
             <div class="">
                        <label for="">Statut</label>
                        <select name="" id="" class="form-control">
                        <option value="">Receptionnée</option>
                            <option value="">En cours de traitement</option>
                            <option value="">En attente de documents</option>
                            <option value="">Résolue</option>
                            <option value="">Rejetée</option>
                            <option value="">Clôturée</option>
                            <option value="">Autres</option>
                    </div>

                    <div class="">
                        <label for="">Action de l'entreprise</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Commentaire</label>
                        <textarea name="" id="" cols="15" rows="7" class="form-control"></textarea>
                    </div>

                </div>

                <div class="col-4 form-group">
            
                    <div class="">
                        <label for="">Num_Client</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Num_Bien</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Num_Agent</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    
                    <div class="">
                        <input type="submit" value="Enrregistrer" name="" id="" class="form-control mt-3 bg-primary text-white" >
                    </div>

                    <div class="">
                        <input type="submit" value="Annuler" name="" id="" class="form-control mt-3 bg-danger text-white" >
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
                <th scope="col">Type de Réclamation</th>
                <th scope="col">Date de Réclamation</th>
                <th scope="col">Date de Résolution</th>
                <th scope="col">Description</th>
                <th scope="col">Statut</th>
                <th scope="col">Action de l'entreprise</th>
                <th scope="col">Commentaire</th>
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
                </tr>
                <tr>
                <th scope="row">3</th>
                <td ></td>
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

@endsection