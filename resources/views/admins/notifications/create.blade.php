@extends('layouts.masteradmin')
@section('content')
<div class="card md-2">
    <div class="card-head">
            <h4 class="card-header bg-secondary text-white text-center">Formulaire de Notification</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4 form-group">

                    <div class="">
                        <label for="">Type</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                 
                    <div class="">
                        <label for="">Titre</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Message</label>
                        <textarea name="" id="" cols="15" rows="4" class="form-control"></textarea>
                    </div>

                    <div class="">
                        <label for="">Date d'Envoie</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>

                 </div>  
                   
             <div class="col-4 form-group">
                
             <div class="">
                        <label for="">Date d'Expiration</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>

             <div class="">
                        <label for="">Statut</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Contrat</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    
                    <div class="">
                        <label for="">Num_Utilisateur</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Num_Bien</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

              </div>

                <div class="col-4 form-group">
        
                    <div class="">
                        <label for="">NumPropiétaire</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Num_Client</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Num_Agent</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    
                    <div class="">
                        <input type="submit" value="Enrregistrer" name="" id="" class="form-control mt-4 bg-primary text-white" >
                    </div>

                    <div class="">
                        <input type="submit" value="Annuler" name="" id="" class="form-control mt-4 bg-danger text-white" >
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
     </div>
</div>       

@endsection