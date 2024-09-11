@extends('layouts.masteradmin')
@section('content')
<div class="card md-2">
    <div class="card-head">
            <h4 class="card-header bg-secondary text-white text-center">Formulaire des Documents</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4 form-group">
                <div class="">
                        <label for="">Titre</label>
                        <input type="text" name="titre" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Type</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Chemin Du Document</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Date de Création</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Date d'Expiration</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Tags</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Statut</label>
                        <select name="" id="" class="form-control">
                            <option value="">Archivé</option>
                            <option value="">En cours de création</option>
                            <option value="">En revision</option>
                            <option value="">Annulé</option>
                            <option value="">Confidentiel</option>
                            <option value="">Rejetée</option>
                            <option value="">En cours de traitements</option>
                            <option value="">Autres</option>
                        </select>  
                    </div>

                 </div>  
                   
             <div class="col-4 form-group">
                
                    <div class="">
                        <label for="">Date de Modification</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Crée par:</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Modifié(e) par:</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                 
                    <div class="">
                        <label for="">Date de Connexion</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Confidentialité</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Description</label>
                        <textarea name="" id="" cols="15" rows="4" class="form-control"></textarea>
                    </div>
                 </div>
                    <div class="col-4 form-group">

                    <div class="">
                        <label for="">Version</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="">
                        <label for="">Num_Client</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Num_Propriétaire</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Num_agent</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Num_Bien</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Num_Contrat</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>

                    <div class="d-flex gap-3">
                        <input type="submit" value="Enrregistrer" name="" id="" class="form-control mt-4 bg-primary text-white" >
                        <input type="submit" value="Annuler" name="" id="" class="form-control mt-4 bg-danger text-white" >
                    </div>

                </div>

        </div>

        <div class="card body mt-4">
         <div class="row ">
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
                <th scope="col">Titre</th>
                <th scope="col">Type</th>
                <th scope="col">Description </th>
                <th scope="col">Date de Création</th>
                <th scope="col">Date d'Expiration</th>
                <th scope="col">Statut</th>
                <th scope="col">Version</th>
                <th scope="col">Date de Modification</th>
                <th scope="col">Crée par:</th>
                <th scope="col">Modifié par:</th>
                <th scope="col">Date de Connexion</th>
                <th scope="col">Tags</th>
                <th scope="col">Confidentialité</th>
                <th>Action</th>

                </tr>
            </thead>
            <tbody>
            @foreach($agents as $agent)
    <tr>
       <td>{{$document->-type}}</td>
       <td>{{$document->-chemin_document}}</td> 
       <td>{{$document->titre}}</td>
       <td>{{$document->-description}}</td>
       <td>{{$document->-date_creation}}</td>
       <td>{{$document->-date_expiration}}</td>
       <td>{{$document->-statut}}</td>
       <td>{{$document->-version}}</td>
       <td>{{$document->-date_modification}}</td>
       <td>{{$document->-cree_par:}}</td>
       <td>{{$document->-modifie_par:}}</td>
       <td>{{$document->tags}}</td>
       <td>{{$document->-confidentialite}}</td>
 
       <td>
      <a href="{{route('documents.edit',$document->id)}}" class="btn btn-primary btn-sm"><i class="ni ni-ruler-pencil"></i></a>
      <a href="" class="btn btn-danger btn-sm"><i class="ni ni-fat-remove"></i></a>
      </td>
      
    </tr>
    @endforeach
            </tbody>
            </table> 
            </div>
     </div>
</div>       

@endsection