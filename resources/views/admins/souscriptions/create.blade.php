@extends('layouts.masteradmin')
@section('content')
<div class="card md-2">
    <div class="card-head">
            <h4 class="card-header bg-secondary text-white text-center">Formulaire de Souscriptions</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4 form-group">
                <div class="">
                        <label for="">Type</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Montant</label>
                        <input type="number" name="" id="" class="form-control">
                    </div>
                 
                    <div class="">
                        <label for="">Mode de Paiement</label>
                        <select name="" id="" class="form-control">
                        <option value="">Carte de Crédit</option>
                            <option value="">Carte Visa</option>
                            <option value="">Orange Money</option>
                        </select>
                    </div>

                    <div class="">
                        <label for="">Date de Souscription</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Date d'Expiration</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>

                 </div>  
                   
             <div class="col-4 form-group">

             <div class="">
                        <label for="">Statut</label>
                        <select name="" id="" class="form-control">
                        <option value="">Actif</option>
                            <option value="">En attente</option>
                            <option value="">Suspendue</option>
                            <option value="">Expirée</option>
                            <option value="">Résiliée</option>
                            <option value="">Annulée</option>
                            <option value="">En renouvellement</option>
                            <option value="">Gratuite</option>
                            <option value="">En attente de paiement</option>
                            <option value="">Complète</option>
                        </select>
                    </div>

                    <div class="">
                        <label for="">Description</label>
                        <textarea name="" id="" cols="15" rows="4" class="form-control"></textarea>
                    </div>

                    <div class="">
                        <label for="">Nom du Client</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Nom du Propriétaire</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                 </div>
                    <div class="col-4 form-group">

                    <div class="">
                        <label for="">Nom de l'agent</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Bien</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Contrat</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <input type="submit" value="Enrregistrer" name="" id="" class="form-control mt-4 bg-primary text-white" >
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
                <th scope="col">Type</th>
                <th scope="col">Montant </th>
                <th scope="col">Mode de Paiement</th>
                <th scope="col">Date de Souscription</th>
                <th scope="col">Date d'Expiration</th>
                <th scope="col">Statut</th>
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