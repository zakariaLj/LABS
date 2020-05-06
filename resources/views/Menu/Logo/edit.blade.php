@extends('adminlte::page')
@section('content')
    <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Logo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('logo.update')}}" method="post"  enctype="multipart/form-data">
                @csrf

                <form role="form">
                  <div class="form-group">
                    <label for="img">Logo</label>
                    <input type="file" name="img" id="img" class="form-control" placeholder="introduire un fichier" aria-describedby="helpId">
                  </div>
           
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
            </form>
            </div>
@endsection