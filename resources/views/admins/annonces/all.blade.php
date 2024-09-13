@extends('layouts.masteradmin')
@section('content')

<div class="card body mt-4">
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
                <th scope="col">Date d'Expiration</th>
                <th scope="col">Statut</th>
                <th scope="col">Prix</th>
                <th scope="col">Devise</th>
                <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>{{$annonce->type}}</td>
                <td>{{$annonce->date_publication}}</td>
                <td>{{$annonce->date_expiration}}</td>
                <td>{{$annonce->statut}}</td>
                <td>{{$annonce->prix}}</td>
                <td>{{$annonce->devise}}</td>
                <td>{{$annonce->description}}</td>
                <td>{{$annonce->biens_id}}</td>
                <td>{{$annonce->agents_id}}</td>
                </tr>
            </tbody>
            </table> 
            </div>
     </div>
</div>  
</div>
</div>
@endsection
@section('params')     

@endsection