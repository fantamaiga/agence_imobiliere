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
@section('params')
@endsection