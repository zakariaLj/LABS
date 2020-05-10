@extends('adminlte::page')

@section('content')

    <div class="container mt-5 pt-5">
        <h1 class='text-center mt-3 pt-3'>Créer mes Testimonials</h1>

        {{-- @if (count($testimoniales)<2) --}}
        <a href="{{route('Testimoniale.create')}}">Ajouter</a>    
        {{-- @endif --}}

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Fonction</th>
                    <th scope="col">Image</th>
                    <th scope="col">Commentaire</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($testimoniales as $testimoniale)
                <tr>
                <td>{{$testimoniale->nom}}</td>    
                <td>{{$testimoniale->fonction}}</td>
                <td><img style='width:100px; border-radius:115px' src="{{asset('storage/'.$testimoniale->img_path)}}" alt="" st></td>
                <td>{{$testimoniale->commentaire}}</td>
                <td>
                <a href="{{route('Testimoniale.edit',$testimoniale->id)}}">
                        <button class="btn btn-primary"><i class="text-white fas fa-pen-square"></i></button>
                    </a>
                    <form action="{{route('Testimoniale.destroy', $testimoniale->id)}}" method="post">
                        @csrf
                        @method('delete')
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
                </tr> 
            @endforeach
            </tbody>    
        </table>

    @endsection 