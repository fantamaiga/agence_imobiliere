@extends('layouts.masteradmin')
@section('content')
<div class="card md-2">
    <div class="card-head">
            <h4 class="card-header bg-secondary text-white text-center">Formulaire des Catalogues</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-6 form-group">
                    <div class="">
                        <label for="">Nom</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Date de Création</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>
                 
                    <div class="">
                        <label for="">Date de Modification</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Statut</label>
                        <select name="" id="" class="form-control">
                            <option value="">Actif</option>
                            <option value="">Innactif</option>
                            <option value="">Publié</option>
                            <option value="">Non Publié</option>
                            <option value="">Archivé</option>
                            <option value="">En revision</option>
                            <option value="">En attente de validation</option>
                            <option value="">Retiré</option>
                            <option value="">En cours de création</option>
                            <option value="">Complété</option>
                        </select>
                    </div>

                 </div>  
                   
             <div class="col-6 form-group">
            
             <div class="">
                        <label for="">Description</label>
                        <textarea name="" id="" cols="15" rows="2" class="form-control"></textarea>
                    </div>

                    <div class="">
                        <label for="">Num_Agent</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Num_Bien </label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    
                    <div class="d-flex gap-3">
                        <input type="submit" value="Enrregistrer" name="" id="" class="form-control mt-3 bg-primary text-white" >
                        <input type="submit" value="Annuler" name="" id="" class="form-control mt-3 bg-danger text-white " >
                    </div>

                    
                </div>
        </div>

        <div class=card body>
         <div class="row mt-3">
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
                <th scope="col">Nom </th>
                <th scope="col">Date de Création</th>
                <th scope="col">Date de Modification</th>
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