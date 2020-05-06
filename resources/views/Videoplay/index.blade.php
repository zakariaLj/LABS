@extends('adminlte::page')
@section('content')
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <div class="text-center">

                  <a href="{{route('video.edit')}}"><i class="fas fa-plus"></i></a>
              </div>
           
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>Video</th>
                    </tr>
                  </thead>
                  <tbody>
                   <tr>
                       <th>
                           {{$video->Video}}
                       </th>
                   </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

            </div>
@endsection