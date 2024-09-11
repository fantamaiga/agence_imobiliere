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
            <h4 class="card-header bg-secondary text-white text-center">Formulaire des visites</h4>
        </div>
        <div class="card-body">
        <form action="{{route('visites.store')}}" method="post">
        @csrf
            <div class="row">
                <div class="col-4 form-group">
                    
                    <div class="">
                        <label for="">Date de Visite</label>
                        <input type="date" name="date" id="" class="form-control">
                        @error('date')
                            {{$message}}
                         @enderror
                    </div>
              
                    <div class="">
                        <label for="">Heure de visite</label>
                        <input type="date" name="heure" id="" class="form-control">
                    @error('heure')
                        {{$message}}
                     @enderror
                    </div>

                    <div class="">
                        <label for="">Statut</label>
                        <select name="Statut" id="" class="form-control">
                            <option value="prevue">Prévue</option>
                            <option value="Réalisée">Réalisée</option>
                            <option value="Annulée ">Annulée </option>
                            <option value="Reportée">Reportée</option>
                        </select>                   
                        @error('Statut')
                            {{$message}}
                         @enderror
                    </div>

                 </div>  
                   
             <div class="col-4 form-group">

                    <div class="">
                        <label for="">Commentaire</label>
                        <textarea name="commentaire" id="" cols="15" rows="4" class="form-control"></textarea>
                        @error('commentaire')
                            {{$message}}
                         @enderror
                    </div>

                    <div class="">
                        <label for="">Num_Bien</label>
                        <input type="text" name="biens_id" id="" class="form-control">
                        @error('biens_id')
                            {{$message}}
                         @enderror
                    </div>
                    
                </div>

                <div class="col-4 form-group">
            
                    <div class="">
                        <label for="">Num_Client</label>
                        <input type="text" name="clients_id" id="" class="form-control">
                        @error('clients_id')
                            {{$message}}
                         @enderror
                    </div>

                    <div class="">
                        <label for="">Num_Agent</label>
                        <input type="text" name="agents_id" id="" class="form-control">
                        @error('agents_id')
                            {{$message}}
                         @enderror
                    </div>
                    
                    <div class="d-flex gap-3">
                        <input type="submit" value="Enrregistrer" name="" id="" class="form-control mt-4 bg-primary text-white" >
                        <input type="submit" value="Annuler" name="" id="" class="form-control mt-4 bg-danger text-white" >
                    </div>
                </div>
   
    </form>
        </div>
        </div>
        </div>

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
        
            <table class="table table-secondary table-striped mt-2 table-responsive">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Date_Visite</th>
                <th scope="col">Heure_Visite</th>
                <th scope="col">Statut</th>
                <th scope="col">Commentaire</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($visites as $visite)
      <tr>
        <td>{{$visite->id}}</td>
        <td>{{$visite->date}}</td>
        <td>{{$visite->heure}}</td>
        <td>{{$visite->Statut}}</td>
        <td>{{$visite->commentaire}}</td>
        <td>{{$visite->clients_id}}</td>
        <td>{{$visite->biens_id}}</td>
        <td>{{$visite->agents_id}}</td>
        <td>
      <a href="{{route('visites.edit',$visite->id)}}" class="btn btn-primary btn-sm"><i class="ni ni-ruler-pencil"></i></a>
      <a href="" class="btn btn-danger btn-sm"><i class="ni ni-fat-remove"></i></a>
      </td>
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