@extends('layouts.masteradmin') @section('content')
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
                Formulaire des messages
            </h4>
        </div>
        <div class="card-body">
            <form action="{{ route('messages.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-6 form-group">
                        <div class="">
                            <label for="">Nom de l'expéditeur</label>
                            <input type="text" class="form-control" name="expediteur" id="" />
                            <span>
                                @error('expediteur')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </span>
                        </div>

                        <div class="">
                            <label for="">Nom du recepteur</label>
                            <input type="text" class="form-control"  name="recepteur" id="" />
                            <span>
                                @error('recepteur')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </span>
                        </div>

                        <div class="">
                            <label for="">Contenu</label>
                            <textarea class="form-control" name="contenu" id="" cols="15" rows="6"></textarea>
                            <span>
                                @error('contenu')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-6 form-group">
                        <div class="">
                            <label for="">Heure</label>
                            <input type="text" class="form-control" name="heure_utc" id="" />
                            <span>
                                @error('heure_utc')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </span>
                        </div>

                        <div class="">
                            <label for="">Date</label>
                            <input type="date" class="form-control" name="date_utc" id=""/>
                            <span>
                                @error('date_utc')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </span>

                            <div class="">
                                <label for="">Num_Utilisateur</label>
                                <select name="utilisateurs_id" id="" class="form-control">
                                    <option value="">Selectionner</option>
                                    @foreach($utilisateurs as $utilisateur)
                                    <option value="{{$utilisateur->id }}">
                                        {{ $utilisateur->nom }}
                                    </option>
                                    @endforeach
                                </select>

                                @error('utilisateurs_id')
                                {{ $message }}
                                @enderror
                            </div>

                            <div class="mt-3">
                                <input type="submit" value="Enrregistrer" name="" id=""
                                    class="form-control mt-4 bg-primary text-white" />
                                <input type="reset" value="Annuler" name="" id=""
                                    class="form-control mt-4 bg-danger text-white"/>
                            </div>
                        </div>
                    </div>
                </div>
                @endsection
            </form>
        </div>
    </div>
</div>
