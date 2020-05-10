@extends('adminlte::page')
@section('content')
           <div class="card">
              <div class="card-header ">
                  <div>
                      <h3 class="card-title">Presentation</h3>
                  </div>
                  <div class="text-center">
                      <a href="{{route('titre.edit')}}"><i class="fas fa-plus"></i></a>
                  </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-sm">
                  <thead>
                    <tr>
                        <th>Titre</th>
                        <th> text en vert</th>
                        <th> Titre</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        
                        <th>{{(!empty ($titre) ? $titre->Titre1 : ' ')}}</th>
                        <th>{{(!empty ($titre) ? $titre->Vert : ' ')}}</th>
                        <th>{{(!empty ($titre) ? $titre->Titre2 : ' ')}}</th>
                    </tr>
 
                
             
             
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
@endsection