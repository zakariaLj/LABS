@extends('adminlte::page')
@section('content')
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Menu</h3>
              </div>
              <!-- /.card-header -->
              <form action="{{route('Liens.update',$link->id)}}" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                    @csrf
                    @method('put')
                    <form role="form">
                      <div class="row">                                                      
                         <div class="col-sm-3">
                             <div class="form-group">
                            <label> Titre :</label>                                
                             <input type="text" name="Nom" class="form-control  @error('Nom') is-invalid @enderror" placeholder="Enter le titre" value="{{$link->Name}}">
                             @error('Nom')
                             <span class="text-danger"> {{$message}} </span> 
                             @enderror                                    
                             </div>
                          

                             <div class="form-group">
                            <label> lien :</label>                                
                             <input type="text" name="Lien" class="form-control  @error('Lien') is-invalid @enderror" placeholder="Enter le lien" value="{{$link->Lien}}">
                             @error('Lien')
                             <span class="text-danger"> {{$message}} </span> 
                             @enderror                                    
                             </div>
                          
                           <button type="submit">Enregistrer</button>
                         </div>
                         
                        
                 </form>
                </div>
                </form>
                <!-- /.card-body -->
            </div>
@endsection