@extends('adminlte::page')
@section('content')
    <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Ready</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('ready.update')}}" method="post"  enctype="multipart/form-data">
                @csrf
              <div class="container">
                
                  <form role="form">
                    <div class="form-group">
                      <label for="titre">Titre</label>
                      <input type="text" name="titre" id="titre" class="form-control" placeholder="introduire un Titre" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                      <label for="soustitre">Sous-Titre</label>
                      <input type="text" name="soustitre" id="soustitre" class="form-control" placeholder="introduire un sous-titre" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                      <label for="nombtn">Nom Boutton</label>
                      <input type="text" name="nombtn" id="nombtn" class="form-control" placeholder="introduire un nom pour ton Bouton Ready" aria-describedby="helpId">
                    </div>                    
            
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
              </div>
            </form>
            </div>
@endsection