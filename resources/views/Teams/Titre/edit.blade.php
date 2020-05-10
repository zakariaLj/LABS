@extends('adminlte::page')
@section('content')
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modifier le titre de la section team</h3>
              </div>
              <!-- /.card-header -->
              <form action="{{route('titre.update')}}" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                    @csrf
                    {{-- @method('put') --}}
                    <form role="form">
                      <div>                                                      
                             <div class="form-group">
                            <label> Titre :</label>                                
                             <input type="text" name="titre1" class="form-control  @error('titre1') is-invalid @enderror" placeholder="Enter le description" value="{{$titre->Titre1}}"> 
                             @error('titre1')
                             <span class="text-danger"> {{$message}} </span> 
                             @enderror                                    
                             </div>
                             

                             <div class="form-group">
                               <label for="textvert">text mis en vert</label>
                               <input type="text" name="textvert" id="textvert" class="form-control" placeholder="" aria-describedby="helpId" value="{{$titre->Vert}}" >
                             
                               <div class="form-group">
                               <label for="titre2">Nom du button</label>
                               <input type="text" name="titre2" id="titre2" class="form-control" placeholder="" aria-describedby="helpId " value="{{$titre->Titre2}}" >

                             </div>
                             </div>
                            </div>
                            <button type="submit">Enregistrer</button>
                         
                        
                 </form>
                </div>
                </form>
                <!-- /.card-body -->
            </div>
@endsection