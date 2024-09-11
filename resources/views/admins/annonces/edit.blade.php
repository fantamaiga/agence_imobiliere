@extends('layouts.masteradmin')
@section('content')
<div class="card md-2">
    
    <div class="card-head">
            <h4 class="card-header bg-secondary text-white text-center">Formulaire d'Annonce</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4 form-group">

                    <div class="">
                        <label for="">Type</label>
                        <select name="" id="" class="form-control">
                        <option value="">Annonce de Vente</option>
                            <option value="">Annonce de Location</option>
                            <option value="">Annonce de Colocation</option>
                            <option value="">Annonce de Bureau</option>
                            <option value="">Annonce de Vacance</option>
                            <option value="">Annonce de Nouvelle Construction</option>
                            <option value="">Annonce de Recherche</option>
                            <option value="">Annonce de Partenaire ou Investisseur</option>
                            <option value="">Annonce d'Evènement</option>
                        </select>
                    </div>

                    <div class="">
                        <label for="">Date de Publication</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>
                 
                    <div class="">
                        <label for="">Date d'Expiration</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Statut</label>
                        <select name="" id="" class="form-control">
                        <option value="pub">Publié</option>
                            <option value="cours">En cours de rédaction</option>
                            <option value="att">En attente de Validation</option>
                            <option value="sus">Suspendu</option>
                            <option value="exp">Expiré</option>
                            <option value="ret">Retiré</option>
                            <option value="ven">Vendu</option>
                            <option value="lou">Loué</option>
                            <option value="rese">Reservé</option>
                            <option value="nego">En cours de négociation</option>
                            <option value="non">Non approuvé</option>
                        </select>
                    </div>

                 </div>  
                   
             <div class="col-4 form-group">

             <div class="">
                        <label for="">prix</label>
                        <input type="number" name="" id="" class="form-control">
                    </div>
                    
             <div class="">
                    <label for="">Devise</label>
                    <select name="devise" id="" class="form-control">
                  <option value="GNF">Franc Guinéen(FGN)</option>
                  <option value="CFA">Franc Cfa(CFA)</option>
                  <option value="EUR">Euro(£)</option>
                  <option value="DOL">Dollards($)</option>
                  </select>
                    </div>

                    <div class="">
                        <label for="">Nom du Bien</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Nom du proprietaire</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                </div>

                <div class="col-4 form-group">

               
                    
                    <div class="">
                        <label for="">Nom de l'Agent</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    
                    <div class="">
                        <label for="">Description</label>
                        <textarea name="" id="" cols="15" rows="2" class="form-control"></textarea>
                    </div>

                    <div class="">
                        <input type="submit" value="Enrregistrer" name="" id="" class="form-control mt-4 bg-primary text-white" >
                    </div>

                    <div class="">
                        <input type="submit" value="Annuler" name="" id="" class="form-control mt-4 bg-danger text-white" >
                    </div>
                    
                </div>
        </div>
        </div>
</div>
@endsection
@section('params')