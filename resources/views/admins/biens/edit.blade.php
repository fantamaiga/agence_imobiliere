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
<form action="{{ route('biens.store') }}" method="post">
@csrf
    <div class="card-head">
            <h4 class="card-header bg-secondary text-white text-center">Formulaire des biens</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4 form-group">
                <div class="">
                        <label for="">Date d'ajout</label>
                        <input type="date" name="date" id="" class="form-control">
                        @error('date')
                            {{ $message }}
                            @enderror
                    </div>

                <div class="">
                    <label for="">Type de bien</label>
                    <select name="type" id="" class="form-control">
                        <option value="">Immeuble</option>
                        <option value="">Maison</option>
                        <option value="">Bureau</option>
                        <option value="">Villa</option>
                        <option value="">Boutique</option>
                        <option value="">Garage</option>
                        <option value="">Terrain</option>
                    </select>
                         @error('type')
                            {{ $message }}
                            @enderror
                    </div>

                    <div class="">
                        <label for="">Ville</label>
                        <input type="text" name="ville" id="" class="form-control">
                        @error('ville')
                            {{ $message }}
                            @enderror
                    </div>

                    <div class="">
                        <label for="">Commune</label>
                        <input type="text" name="commune" id="" class="form-control">
                        @error('commune')
                            {{ $message }}
                            @enderror
                    </div>
                 
                    <div class="">
                        <label for="">Quartier</label>
                        <input type="text" name="quartier" id="" class="form-control">
                        @error('quartier')
                            {{ $message }}
                            @enderror   
                    </div>

                    <div class="">
                        <label for="">Superficie</label>
                        <input type="text" name="superficie" id="" class="form-control">
                        @error('superficie')
                            {{ $message }}
                            @enderror
                    </div>

                    <div class="">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="4" rows="2" class="form-control"></textarea>
                        @error('description')
                            {{ $message }}
                            @enderror
                    </div>
                 </div> 
                  
             <div class="col-4 form-group">

                    <div class="">
                        <label for="">Nombre de pièce</label>
                        <input type="number" name="nombre" class="form-control">
                        @error('nombre')
                            {{ $message }}
                            @enderror
                    </div>

                    <div class="">
                        <label for="">Nombre de chambre</label>
                        <input type="number" name="chambre" id="" class="form-control">
                        @error('chambre')
                            {{ $message }}
                            @enderror
                    </div>

                    <div class="">
                        <label for="">Nombre de salle de bain</label>
                        <input type="number" name="salle_bain" id="" class="form-control">
                        @error('salle_bain')
                            {{ $message }}
                            @enderror </div>

                    <div class="">
                        <label for="">Image</label>
                        <input type="text" name="image" id="" class="form-control">
                        @error('image')
                            {{ $message }}
                            @enderror
                    </div>
            
                    <div class="">
                        <label for="">Video</label>
                        <input type="text" name="video" id="" class="form-control">
                        @error('video')
                            {{ $message }}
                            @enderror
                    </div> 

                    <div class="">
                        <label for="">Prix</label>
                        <input type="number" name="prix" id="" class="form-control">
                        @error('prix')
                            {{ $message }}
                            @enderror
                    </div>

                    <div class="">
                    <label for="">Mode de Paiement</label>
                        <select name="paiement" id="" class="form-control">
                        <option value="">Carte de Crédit</option>
                            <option value="">Carte Visa</option>
                            <option value="">Orange Money</option>
                            <option value="">Autres</option>
                        </select>
                        @error('paiement')
                            {{ $message }}
                            @enderror
                    </div>
                </div>

                <div class="col-4 form-group">
   
                <div class="">
                        <label for="">Devise</label>
                        <select name="devise" id="" class="form-control">
                        <option value="">Franc Guinéen(FGN)</option>
                            <option value="">Franc Cfa(CFA)</option>
                            <option value="">Euro(£)</option>
                            <option value="">Dollards($)</option>
                        </select>
                        @error('devise')
                            {{ $message }}
                            @enderror
                    </div>
               
                    <div class="">
                        <label for="">Comission</label>
                        <input type="text" name="comission" id="" class="form-control">
                        @error('comission')
                            {{ $message }}
                            @enderror
                    </div>

                    <div class="">
                        <label for="">Statut</label>
                        <select name="statut" id="" class="form-control">
                            <option value="">Disponible</option>
                            <option value="">En location</option>
                            <option value="">En vente</option>
                            <option value="">En cours de rénovation</option>
                            <option value="">Déja Vendu</option>
                            <option value="">En cours de construction</option>
                        </select>
                        @error('statut')
                            {{ $message }}
                            @enderror
                    </div>

                    <div class="">
                        <label for="">Observation</label>
                        <textarea name="observation" id="" cols="7" rows="2" class="form-control"></textarea>
                        @error('observation')
                            {{ $message }}
                            @enderror
                    </div>
                    
                    <div class="">
                        <label for="">Num_Proprietaire</label>
                    <select name="num_proprietaire" id="" class="form-control">
                        <option value="">Selectionner un Propriétaire</option>
                        @foreach($proprietaires as $proprietaire)
                            <option value="{{$proprietaire->id}}">{{$proprietaire->nom}}</option>
                        @endforeach
                    </select>
                    @error('num_proprietaire')
                    {{ $message }}
                    @enderror
                    </div> 

                    <div class="">
                        <input type="submit" value="Enrregistrer" name="" id="" class="form-control mt-4 bg-primary text-white" >
                    </div>

                    <div class="">
                        <input type="submit" value="Annuler" name="" id="" class="form-control mt-4 bg-danger text-white" >
                    </div>
                    
                </div>
            
        </div>
        </form>
     </div>
</div>       

@endsection 
@section('params')