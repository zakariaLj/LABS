@extends('adminlte::page')
@section('content')
    <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Carousel</h3>
              </div>
              {{-- @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <li class="text-danger">{{$error}}</li>
                    
                @endforeach
                  
              @endif --}}

              <!-- /.card-header -->
              <div class="card-body">
                  <form action="{{route('Carousel.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <form role="form">
                      <div class="row">                                                      
                         <div class="col-sm-3">


                             <div class="form-group">
                            <label> Image :</label>                                
                             <input type="file" name="img" class="form-control  @error('img') is-invalid @enderror" placeholder="Enter le titre" value="{{old('img')}}">
                             @error('img')
                             <span class="text-danger"> {{$message}} </span> 
                             @enderror                                    
                             </div>
                          

                             <div class="form-group">
                            <label> Description :</label>                                
                             <input type="text" name="description" class="form-control  @error('description') is-invalid @enderror" placeholder="Enter la description" value="{{old('Lien')}}">
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
