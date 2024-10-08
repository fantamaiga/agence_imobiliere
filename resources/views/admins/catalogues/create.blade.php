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
            <h4 class="card-header bg-secondary text-white text-center">Formulaire des Catalogues</h4>
        </div>
        <div class="card-body">
        <form action="{{ route('catalogues.store') }}" method="post">
        @csrf
            <div class="row">
                <div class="col-6 form-group">
                    <div class="">
                        <label for="">Nom</label>
                        <input type="text" name="nom" id="" class="form-control">
                        <span class="text-danger">
                @error('nom')
                  {{$message}}
                @enderror
              </span>
                    </div>

                    <div class="">
                        <label for="">Date de Création</label>
                        <input type="date" name="date_creation" id="" class="form-control">
                        <span class="text-danger">
                @error('date_creation')
                  {{$message}}
                @enderror
              </span>
                    </div>
                 
                    <div class="">
                        <label for="">Date de Modification</label>
                        <input type="date" name="date_modification" id="" class="form-control">
                        <span class="text-danger">
                @error('date_modification')
                  {{$message}}
                @enderror
              </span>
                    </div>

                    <div class="">
                        <label for="">Statut</label>
                        <select name="statut" id="" class="form-control">
                            <option value="">Actif</option>
                            <option value="">Innactif</option>
                            <option value="">Publié</option>
                            <option value="">Non Publié</option>
                            <option value="">Archivé</option>
                            <option value="">En revision</option>
                            <option value="">En attente de validation</option>
                            <option value="">Retiré</option>
                            <option value="">En cours de création</option>
                            <option value="">Complété</option>
                        </select>
                        <span class="text-danger">
                @error('statut')
                  {{$message}}
                @enderror
              </span>
                    </div>

                 </div>  
                   
             <div class="col-6 form-group">
            
             <div class="">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="15" rows="2" class="form-control"></textarea>
                        <span class="text-danger">
                @error('description')
                  {{$message}}
                @enderror
              </span>
                    </div>

                    <div class="">
                        <label for="">Num_Agent</label>
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

                    <div class="">
                        <label for="">Num_Bien </label>
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
                    
                    <div class="d-flex gap-3">
                        <input type="submit" value="Enrregistrer" name="" id="" class="form-control mt-3 bg-primary text-white" >
                        <input type="submit" value="Annuler" name="" id="" class="form-control mt-3 bg-danger text-white " >
                    </div>
                </div>
            </form>    
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
        
            <table class="table table-secondary table-striped">
            <thead>
                
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom </th>
                <th scope="col">Date de Création</th>
                <th scope="col">Date de Modification</th>
                <th scope="col">Statut</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
                
                </tr>
            </thead>
            <tbody>
                 @foreach($catalogues as $catalogue)
                <tr>
                <td>{{catalogue->id}}</td>
                <td>{{catalogue->nom}}</td>
                <td>{{catalogue->date_creation}}</td>
                <td>{{catalogue->date_modification}}</td>
                <td>{{catalogue->statut}}</td>
                <td>{{catalogue->description}}</td>
                <td>{{catalogue->biens_id}}</td>
                <td>{{catalogue->agents_id}}</td>
                <td>
                <a href="{{route('catalogues.edit',$catalogue->id)}}" class="btn btn-primary btn-sm"><i class="ni ni-ruler-pencil"></i></a>
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