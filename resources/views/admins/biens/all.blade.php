@extends('layouts.masteradmin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="row text-white">
                bien
            </div>
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
                    <button class="btn btn-success form-control">Lister</button>
                </div>
                <div class="row">
                    <div class="col-12">

                    </div>
                    <table class="table table-secondary table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Date_ajout</th>
                                <th scope="col">Type_biens</th>
                                <th scope="col">Commune</th>
                                <th scope="col">Ville</th>
                                <th scope="col">Quartier</th>
                                <th scope="col">Superficie</th>
                                <th scope="col">Nombre_piece</th>
                                <th scope="col">Nombre_chambre</th>
                                <th scope="col">Nbr_salle_de_bain</th>
                                <th scope="col">Description</th>
                                <th scope="col">Mode_paiement</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Devise</th>
                                <th scope="col">Commission</th>
                                <th scope="col">Observation</th>
                                <th scope="col">Statut</th>
                                <th scope="col">Images</th>
                                <th scope="col">Videos</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($biens as $bien)
                            <tr>
                                <td>{{ $bien->id }}</td>
                                <td>{{ $bien->date_ajout }}</td>
                                <td>{{ $bien->type_biens }}</td>
                                <td>{{ $bien->commune }}</td>
                                <td>{{ $bien->ville }}</td>
                                <td>{{ $bien->quartier }}</td>
                                <td>{{ $bien->superficie }}</td>
                                <td>{{ $bien->nombre_piece }}</td>
                                <td>{{ $bien->nombre_chambre }}</td>
                                <td>{{ $bien->nbr_salle_de_bain }}</td>
                                <td>{{ $bien->description }}</td>
                                <td>{{ $bien->mode_paiement }}</td>
                                <td>{{ $bien->prix }}</td>
                                <td>{{ $bien->devise }}</td>
                                <td>{{ $bien->commision }}</td>
                                <td>{{ $bien->observation }}</td>
                                <td>{{ $bien->statut }}</td>
                                <td>{{ $bien->image }}</td>
                                <td>{{ $bien->video }}</td>
                                
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