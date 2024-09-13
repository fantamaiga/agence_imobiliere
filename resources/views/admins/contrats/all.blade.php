@extends('layouts.masteradmin')
@section('content')

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
                @foreach($contrats as $contrat)
                <tr>
                    <td>{{$contrat->id}}</td>
                    <td>{{$contrat->type}}</td>
                    <td>{{$contrat->date_signature}}</td>
                    <td>{{$contrat->date_debut}}</td>
                    <td>{{$contrat->date_fin}}</td>
                    <td>{{$contrat->clients_id}}</td>
                    <td>{{$contrat->biens_id}}</td>
                    <td>{{$contrat->proprietaires_id}}</td>

                    <td><a href="{{ route('contrats.edit', $contrat->id) }}"><i class="fas fa-edit"></i></a></td>
                    <td><a href="{{ route('contrats.destroy', $contrat->id) }}"><i class="fas fa-trash"></i></a></td>
                </tr>
                @endforeach
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