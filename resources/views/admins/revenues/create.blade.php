@extends('layouts.masteradmin')
@section('content')
<div class="card md-2">
    <div class="card-head">
            <h4 class="card-header bg-secondary text-white text-center">Formulaire des Revenues</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4 form-group">
                    <div class="">
                        <label for="">Type de Revenue</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Montant</label>
                        <input type="number" name="" id="" class="form-control">
                    </div>

                    <div class="">
                    <label for="">Devise</label>
                        <select name="" id="" class="form-control">
                        <option value="">Franc Guinéen(FGN)</option>
                            <option value="">Franc Cfa(CFA)</option>
                            <option value="">Euro(£)</option>
                            <option value="">Dollards(§)</option>
                        </select>
                    </div>
                 </div>

                <div class="col-4 form-group">
                    <div class="">
                        <label for="">Date de Revenue </label>
                        <input type="date" name="" id="" class="form-control">
                    </div>
                 
                    <div class="">
                        <label for="">Date de Paiement</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>

                    <div class="">
                            <label for="">Statut</label>
                            <select name="" id="" class="form-control">
                            <option value="">Locatif</option>
                            <option value="">Vente</option>
                            <option value="">Comission</option>
                            <option value="">d'Investissement</option>
                            <option value="">d'Ammende ou Pénalité</option>
                            <option value="">Revenue divers</option>
                        </select>
                        </div>
             
                 </div>  
                   
             <div class="col-4 form-group">
                 
             <div class="">
                        <label for="">Description</label>
                        <textarea name="" id="" cols="15" rows="2" class="form-control"></textarea>
                    </div>

                    <div class="">
                            <label for="">Num_Contrat</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
             

                <div class="d-flex gap-3">
                 <input type="submit" value="Enrregistrer" name="" id="" class="form-control mt-2 bg-primary text-white" >
                 <input type="submit" value="Annuler" name="" id="" class="form-control mt-2 bg-danger text-white" >
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
                <th scope="col">Montant</th>
                <th scope="col">Devise</th>
                <th scope="col">Date de Revenue</th>
                <th scope="col">Date de Paiement</th>
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