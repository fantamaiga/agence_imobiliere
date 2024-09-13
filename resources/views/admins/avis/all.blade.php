@extends('layouts.masteradmin') 
@section('content')
<div class="card body mt-3">
                <div class="row">
                    <div class="col-3">
                        <input type="text" class="form-control" />
                    </div>
                    <div class="col-3">
                        <button class="btn btn-secondary form-control">
                            Rechercher
                        </button>
                    </div>
                    <div class="col-3">
                        <button class="btn btn-secondary form-control">
                            Actualiser
                        </button>
                    </div>
                    <div class="col-3">
                        <button class="btn btn-secondary form-control">
                            Lister
                        </button>
                    </div>

                    <table class="table table-secondary table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Note</th>
                                <th scope="col">Commentaire</th>
                                <th scope="col">Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$avis->id}}</td>
                                <td>{{$avis->note}}</td>
                                <td>{{$avis->commentaire}}</td>
                                <td>{{$avis->date}}</td>
                                <td>{{$avis->biens_id}}</td>
                                <td>{{$avis->clients_id}}</td>
                                <td>{{$avis->proprietaires_id}}</td>
                                <td>
                                    <a href="{{route('avis.edit',$avis->id)}}" class="btn btn-primary btn-sm"><i class="ni ni-ruler-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="ni ni-fat-remove"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @section('params')
        @endsection
    </div>
</div>
@endsection