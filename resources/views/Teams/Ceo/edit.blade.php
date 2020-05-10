@extends('adminlte::page')
@section('content')
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modifier le CEO</h3>
              </div>
              <!-- /.card-header -->
              <form action="" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                    @csrf
                    {{-- @method('put') --}}
                    <form role="form">
                      <div>                                                      
                        <div class="form-group">
                            <label> CEO :</label>                                
                             <input type="text" name="ceo" class="form-control  @error('ceo') is-invalid @enderror" placeholder="Enter le nom +prenom du CEO" value="{{(!empty($teamer) ? $teamer->Ceo : '')}}">
                             @error('ceo')
                             <span class="text-danger"> {{$message}} </span> 
                             @enderror                                    
                             </div>
                        <div class="form-group">
                            <label> Fonction :</label>                                
                             <input type="text" name="function" class="form-control  @error('function') is-invalid @enderror" placeholder="Enter la fonction" value="{{(!empty($teamer) ? $teamer->FunctionCeo :'')}}"> 
                             @error('function')
                             <span class="text-danger"> {{$message}} </span>
                             @enderror                                    
                             </div>
                        <div class="form-group">
                            <label> Photo de Profile :</label>                                
                             <input type="file" name="img" class="form-control  @error('img') is-invalid @enderror" placeholder="Enter la photo de profile" value="{{(!empty($teamer) ? $teamer->Teamer_path :'')}}">
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