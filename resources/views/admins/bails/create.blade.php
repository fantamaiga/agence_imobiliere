@extends('layouts.masteradmin')
@section('content')
<div class="card md-2">
    <div class="card-head">
            <h4 class="card-header bg-secondary text-white text-center">Formulaire des Bails</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4 form-group">

                    <div class="">
                        <label for="">Date d'Enrregistrement</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>

                    
                    <div class="">
                        <label for="">Date de Début</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>

                    <div class="">
                    <label for="">Date de fin</label>
                    <input type="date" name="" id="" class="form-control">  
                    </div>

                    
                    <div class="">
                        <label for="">Montant du Loyer</label>
                        <input type="number" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Depot de Garantie</label>
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

                </div>  
                
                <div class="col-4 form-group">
            
                    <div class="">
                        <label for="">Devise</label>
                        <select name="" id="" class="form-control">
                        <option value="">Franc Guinéen(FGN)</option>
                            <option value="">Franc Cfa(CFA)</option>
                            <option value="">Euro(£)</option>
                            <option value="">Dollards(§)</option>
                        </select>
                    </div>
                    
                    <div class="">
                        <label for="">Frequence de Paiement</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Statut</label>
                        <select name="" id="" class="form-control">
                        <option value="">Actif</option>
                            <option value="">En cours de Signature</option>
                            <option value="">Résilié</option>
                            <option value="">Expiré</option>
                            <option value="">Suspendu</option>
                            <option value="">En Attente de Renouvellement</option>
                            <option value="">En cours de Résiliation</option>
                            <option value="">Annulé</option>
                        </select>
                    </div>
                    
                    <div class="">
                        <label for="">Condition</label>
                        <textarea name="" id="" cols="15" rows="7" class="form-control"></textarea>
                    </div>
                 
                </div>
                
                <div class="col-4 form-group">
                <div class="">
                        <label for="">Num_Propriétaire</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
            
                    <div class="">
                        <label for="">Num_Bien</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Num_Client</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Num_Contrat</label>
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
                <th scope="col">Date de début</th>
                <th scope="col">Date de fin</th>
                <th scope="col">Montant_loyer</th>
                <th scope="col">Depot_Garantie</th>
                <th scope="col">Devise</th>
                <th scope="col">Frequence</th>
                <th scope="col">Condition</th>
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
                <td></td>
                </tr>
            </tbody>
            </table> 
            </div>
     </div>
</div>       

@endsection