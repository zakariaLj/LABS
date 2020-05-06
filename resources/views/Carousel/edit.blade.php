@extends('adminlte::page')
@section('content')
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modifier le carousel</h3>
              </div>
              <!-- /.card-header -->
              <form action="{{route('Carousel.update',$carousel->id)}}" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                    @csrf
                    @method('put')
                    <form role="form">
                      <div class="row">                                                      
                         <div class="col-sm-3">
                             <div class="form-group">
                            <label> Image :</label>                                
                             <input type="file" name="img" class="form-control  @error('img') is-invalid @enderror" placeholder="Enter le titre" value="{{$carousel->Carousel_path}}">
                             @error('img')
                             <span class="text-danger"> {{$message}} </span> 
                             @enderror                                    
                             </div>
                          

                             <div class="form-group">
                            <label> Description :</label>                                
                             <input type="text" name="description" class="form-control  @error('description') is-invalid @enderror" placeholder="Enter le description" value="{{$carousel->Description}}">
                             @error('description')
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