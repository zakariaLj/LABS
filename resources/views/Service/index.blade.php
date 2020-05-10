@extends('adminlte::page')

@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste de Service</h3>
              </div>
               <div class="text-center">
                   <a href="{{route('Service.create')}}">Ajouter</a>    

               </div>
                
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-condensed">
                  <thead>
                      <tr>
                        <th scope="col">Titre</th>
                        <th scope="col">Icone</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($services as $service)
                        <tr>
                        <td>{{$service->Titre}}</td>    
                        <td><i class="{{$service->Icone}}"></i></td>
                        <td>{{$service->Description}}</td>
                        <td>
                        <a href="{{route('Service.edit',$service->id)}}">
                                <button class="btn btn-primary"><i class="text-white fas fa-pen-square"></i></button>
                            </a>
                            <form action="{{route('Service.destroy', $service->id)}}" method="post">
                                @csrf
                                @method('delete')
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                        </tr> 
                    @endforeach               
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              {{$services->links()}}
            </div>

 @endsection
