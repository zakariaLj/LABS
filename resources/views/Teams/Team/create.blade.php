@extends('adminlte::page')
@section('content')
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modifier le titre de la section team</h3>
              </div>
              <!-- /.card-header -->
              <form action="{{route('Team.store')}}" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                    @csrf
                    {{-- @method('put') --}}
                    <form role="form">
                      <div>                                                      
                             <div class="form-group">
                            <label> Nom et Prenom :</label>                                
                             <input type="text" name="nom" class="form-control  @error('nom') is-invalid @enderror" placeholder="Enter le description" value=""> 
                             @error('nom')
                             <span class="text-danger"> {{$message}} </span> 
                             @enderror                                    
                             </div>
                             

                             <div class="form-group">
                               <label for="function">Function</label>
                               <input type="text" name="function" id="function" class="form-control" placeholder="" aria-describedby="helpId" value="" >
                             @error('function')
                             <span class="text-danger"> {{$message}} </span> 
                             @enderror 
                             </div>
                             
                             <div class="form-group">
                            <label>Photo de Porfile</label>                                
                             <input type="file" name="img" class="form-control  @error('img') is-invalid @enderror" placeholder="Enter le description" value=""> 
                             @error('img')
                             <span class="text-danger"> {{$message}} </span> 
                             @enderror                                    
                             </div>
                             
                            </div>
                            <button type="submit">Enregistrer</button>
                         
                        
                 </form>
                </div>
                </form>
                <!-- /.card-body -->
            </div>
@endsection