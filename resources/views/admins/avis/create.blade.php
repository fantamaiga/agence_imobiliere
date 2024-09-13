@extends('layouts.masteradmin') 
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 bg-success text-white">
            @if(Session::has('success'))
            <span>
                {{ Session::get('success') }}
            </span>
            @endif
        </div>
    </div>
    <div class="card md-2">
        <div class="card-head">
            <h4 class="card-header bg-secondary text-white text-center">
                Formulaire des avis
            </h4>
        </div>
        <div class="card-body">
            <form action="{{ route('avis.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-4 form-group">
                        <div class="">
                            <label for="">Note</label>
                            <input  type="number" min="0" max="10" step="0.1"  name="note" id="note" placeholder="Entrez une note de 0 à 10" class="form-control" />
                            @error('note')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="">
                            <label for="">Commentaire</label>
                            <textarea name="commentaire" id="" cols="15" rows="4" class="form-control" ></textarea>
                            @error('commentaire')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-4 form-group">
                        <div class="">
                            <label for="">Date</label>
                            <input type="date" name="date"  id="" class="form-control"/>
                            @error('date')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="">
                            <label for="">Num_Client</label>
                            <select name="num_client" id="" class="form-control">
                                <option value="">Selectionner</option>
                                @foreach($clients as $client)
                                <option value="{{$client->id }}">{{ $client->nom }}</option>
                                @endforeach
                            </select>

                            @error('clients_id')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="">
                            <label for="">Num_Bien</label>
                            <select name="biens_id" id="" class="form-control">
                            <option value="">Selectionner</option>
                            @foreach($biens as $bien)
                            <option value="{{$bien->id }}">{{ $bien->nom }}</option>
                            @endforeach
                            </select>
                          
                            @error('biens_id')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-4 form-group">
                        <div class="">
                            <label for="">Num_Proprietaire</label>
                            <select name="proprietaires_id" id="" class="form-control">
                                <option value="">Selectionner</option>
                                @foreach($proprietaires as $proprietaire)
                                <option value="{{$proprietaire->id }}">{{ $proprietaire->nom }}</option>
                                @endforeach
                            </select>

                            @error('proprietaires_id')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="">
                            <input type="submit" value="Enrregistrer" name="" id="" class="form-control mt-4 bg-primary text-white" />
                        </div>

                        <div class="">
                            <input type="submit" value="Annuler" name="" id="" class="form-control mt-4 bg-danger text-white"/>
                        </div>
                    </div>
                </div>
            </form>
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
                        @foreach($avis as $avis)
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