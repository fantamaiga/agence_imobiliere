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
                Formulaire d'Annonce
            </h4>
        </div>
        <div class="card-body">
            <form action="{{route('annonces.update', ['id' => $annonces->idnnonce" method="post">
                @csrf
                <div class="row">
                    <div class="col-4 form-group">
                        <div class="">
                            <label for="">Type</label>
                            <select name="type" id="" class="form-control">
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
                            @error('type')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="">
                            <label for="">Date de Publication</label>
                            <input type="date" name="date_publication" id="" class="form-control" />
                            @error('date_publication')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="">
                            <label for="">Date d'Expiration</label>
                            <input type="date" name="date_expiration" id="" class="form-control" />
                            @error('date_expiration')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="">
                            <label for="">Statut</label>
                            <select name="statut" id="" class="form-control">
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
                            @error('statut')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="col-4 form-group">
                        <div class="">
                            <label for="">prix</label>
                            <input type="number" name="prix" id="" class="form-control" />
                            @error('prix')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="">
                            <label for="">Devise</label>
                            <select name="devise" id="" class="form-control">
                                <option value="GNF">Franc Guinéen(FGN)</option>
                                <option value="CFA">Franc Cfa(CFA)</option>
                                <option value="EUR">Euro(£)</option>
                                <option value="DOL">Dollards($)</option>
                            </select>
                            @error('devise')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="">
                            <label for="">Nom du Bien</label>
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

                        <div class="">
                            <label for="">Nom de l'Agent</label>
                            <select name="num_agent" id="" class="form-control">
                                <option value="">Selectionner</option>
                                @foreach($agents as $agent)
                                <option value="{{$agent->id }}">{{ $agent->nom }}</option>
                                @endforeach
                            </select>

                            @error('agents_id')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="col-4 form-group">
                       

                        <div class="">
                            <label for="">Description</label>
                            <textarea name="description" id="" cols="15" rows="5" class="form-control"></textarea>
                            @error('description')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="">
                            <input type="submit" value="Enrregistrer" name="" id=""
                                class="form-control mt-4 bg-primary text-white" />
                        </div>

                        <div class="">
                            <input type="submit" value="Annuler" name="" id=""
                                class="form-control mt-4 bg-danger text-white" />
                        </div>
                    </div>
                </form>
            </div>
    </div>
</div>
@endsection 
@section('params')
