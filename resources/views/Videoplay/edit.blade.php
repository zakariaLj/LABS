@extends('adminlte::page')
@section('content')
    <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Lien de la video de présentation</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('video.update')}}" method="post"  enctype="multipart/form-data">
                @csrf

                <form role="form">
                  <div class="form-group">
                    <label for="lien">URL</label>
                    <input type="text" name="lien" id="lien" class="form-control" placeholder="introduire un lien de video" aria-describedby="helpId" value="{{$video->Video}}">
                  </div>
           
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
            </form>
            </div>
@endsection