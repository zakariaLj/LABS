@extends('adminlte::page')
@section('content')
                  <div class="card-header ">
                <div>
                  <h3 class="card-title">Menu</h3>
                </div>
                <div class="text-center">
                    @if (count($links) < 4)
                    <a href="{{route('Liens.create')}}"><i class="fas fa-plus"></i></a>
                        
                    @endif
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>


                      <th>Nom du lien</th>
                      <th>URL</th>
                      <th>Modifier/Supprimer</th>

                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($links as $link)
                        <tr>
                            <th>{{$link->Name}}</th>
                            <th>{{$link->Lien}}</th>

                            <th class="d-flex ">
                                <button class="btn btn-primary " type="submit"><a href="{{route('Liens.edit',$link->id)}}"><i class="text-white fas fa-pen-square"></i></a></button>
                                <form action="{{route('Liens.destroy',$link->id)}}" method="POST"  enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <button  type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
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