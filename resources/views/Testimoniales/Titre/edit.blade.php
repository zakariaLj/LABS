@extends('adminlte::page')
@section('content')
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modifier le titre de la presentation</h3>
              </div>
              <!-- /.card-header -->
              <form action="{{route('testimoniale1.update')}}" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                    @csrf
                    {{-- @method('put') --}}
                    <form role="form">
                      <div>                                                      
                        <div class="form-group">
                            <label> Titre :</label>                                
                             <input type="text" name="titre" class="form-control  @error('titre') is-invalid @enderror" placeholder="Enter le description" value="{{$testimoniale1->Titre}}"> 
                             @error('titre')
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