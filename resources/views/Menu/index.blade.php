@extends('adminlte::page')
@section('content')
  <div class="card">
              <div class="card-header ">
                <div>
                  <h3 class="card-title">Menu</h3>
                </div>
                <div class="text-center">

                  <a href="{{route('Menu.create')}}"><i class="fas fa-plus"></i></a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>

                      <th>Link 1</th>
                      <th>Link 2</th>
                      <th>Link 3</th>
                      <th>Link 4</th>
                      <th>Logo</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      {{-- <th>{{$menu->Name}} <i class="fas fa-arrow-circle-right"></i>  {{$menu->lien}} </th>
                      <th>{{$menu->Name}} <i class="fas fa-arrow-circle-right"></i>  {{$menu->lien}} </th>
                      <th>{{$menu->Name}} <i class="fas fa-arrow-circle-right"></i>  {{$menu->lien}} </th>
                      <th>{{$menu->Name}} <i class="fas fa-arrow-circle-right"></i>  {{$menu->lien}} </th>
                      <th>{{$menu->Logo}}</th> --}}
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>


    
@endsection