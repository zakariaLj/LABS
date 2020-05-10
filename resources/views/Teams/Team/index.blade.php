@extends('adminlte::page')
@section('content')
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Table des employés</h3>
              </div>
              @if (count($teams) <2 )
                <div class="text-center">
                    <a href="{{route('Team.create')}}"><i class="fas fa-plus"></i></a>
                </div>
              @endif

              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>Nom + Prénom</th>
                      <th>Function</th>
                      <th>Photo de profile</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($teams as $team)
                    <tr>
                      <th>{{$team->Nom}}</th>
                      <th>{{$team->Function}}</th>
                      <th><img style="width: 100px" src="{{asset('storage/'.$team->Team_path)}}" alt="" srcset=""> </th>
                      <th>
                        <a href="{{route('Team.edit',$team->id)}}">
                        <button class="btn btn-primary"><i class="text-white fas fa-pen-square"></i></button>
                    </a>
                    <form action="{{route('Team.destroy', $team->id)}}" method="post">
                        @csrf
                        @method('delete')
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                      </th>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

            </div>
@endsection