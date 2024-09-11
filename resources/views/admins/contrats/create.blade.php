@extends('layouts.masteradmin')
@section('content')
<div class="card md-2">
    <div class="card-head">
            <h4 class="card-header bg-secondary text-white text-center">Formulaire des contrats</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4 form-group">
                    <div class="">
                        <label for="">Type de contrat</label>
                        <select name="" id="" class="form-control">
                            <option value="">Contrat de travail</option>
                            <option value="">Contrat de prêt</option>
                            <option value="">Contrat de partenariat</option>
                            <option value="">Contrat de vente</option>
                            <option value="">Contrat de location</option>
                            <option value="">Contrat de gestion locative</option>
                            <option value="">Contrat de syndic de copropriété</option>
                            <option value="">Autre</option>
                        </select>                  
                      </div>

                    <div class="">
                        <label for="">Date de signature</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>
                 
                    <div class="">
                        <label for="">Date de début</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>

                 </div>  
                   
             <div class="col-4 form-group">
            
             <div class="">
                        <label for="">Date de fin</label>
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
                        <label for="">Num_Propriétaire</label>
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

        <div class=card body>
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
                <th scope="col">Type_Contrat</th>
                <th scope="col">Date_signature</th>
                <th scope="col">Date_debut</th>
                <th scope="col">Date_fin</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
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
                </tr>
                <tr>
                <th scope="row">3</th>
                <td ></td>
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
                </tr>
            </tbody>
            </table> 
            </div>
     </div>
</div>       

@endsection