@extends('layouts.masteradmin')
@section('content')
<div class="card md-2">
    <div class="card-head">
            <h4 class="card-header bg-secondary text-white text-center">Formulaire de Paiement</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-6 form-group">
                    <div class="">
                        <label for="">Montant</label>
                        <input type="number" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Date de Paiemnet</label>
                        <input type="date" name="" id="" class="form-control">
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
                        <label for="">Statut</label>
                        <select name="" id="" class="form-control">
                            <option value="">Payé</option>
                            <option value="">En attente</option>
                            <option value="">Echoué</option>
                            <option value="">Annulé</option>
                            <option value="">Remboursé</option>
                            <option value="">Partiellement payé</option>
                            <option value="">En revision</option>
                        </select>                  
                    </div>

                 </div>  
                   
             <div class="col-6 form-group">
            
                    <div class="">
                        <label for="">Num_Client</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Num_Propriétaire</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Num_Transaction</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    
                    <div class="d-flex gap-3">
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
                <th scope="col">Montant </th>
                <th scope="col">Date de Paiement</th>
                <th scope="col">Mode de Paiement</th>
                <th scope="col">Description</th>
                <th scope="col">Statut</th>
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
                </tr>
                <tr>
                <th scope="row">2</th>
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
                </tr>
            </tbody>
            </table> 
            </div>
     </div>
</div>       

@endsection