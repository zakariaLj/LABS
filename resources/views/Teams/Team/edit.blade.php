@extends('adminlte::page')

@section('content')

    <div class="container mt-5 pt-5">
        <h1 class='text-center mt-3 pt-3'>Modifier mon Employé</h1>
        <form action="{{route('Team.update',$team->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <div class="form-group">
                    <label for="nom">Nom + prenom</label>
                <input type="string" id="nom"  name='nom' class="form-control" value='{{$team->Nom}}'   >
                </div>

                <div class="form-group">
                    <label for="function">Fonction</label>
                <input type="string" id="function"  name='function' class="form-control" value='{{$team->Function}}'   >
                </div>

                <div class="form-group">
                    <label for="img">Photo de Profile</label>
                    <input type="file" id="img"  name='img' class="form-control @error ('img') is-invalid @enderror">
                    @if(!empty($team) )
                        <img src="{{asset('storage/'.$team->team_path)}}" alt="" >
                        
                        @endif
                </div>
                        <button type="submit" class="d-block mx-auto btn btn-primary">Modifier</button>

                </form>
            </div>
     
    @endsection