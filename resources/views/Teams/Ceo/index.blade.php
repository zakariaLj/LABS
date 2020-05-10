@extends('adminlte::page')
@section('content')
           <div class="card">
              <div class="card-header ">
                  <div>
                      <h3 class="card-title">Ajouter un CEO</h3>
                  </div>
                  <div class="text-center">
                      <a href="{{route('ceo.edit')}}"><i class="fas fa-plus"></i></a>
                  </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-sm">
                  <thead>
                    <tr>
                        <th>Nom et Prenom</th>
                        <th>Fonction</th>
                        <th>Photo de Profile</th>

                    </tr>
                  </thead>
                  <tbody>
                    @if (!empty($teamer) != null)
                        
                    <tr>
                        <th>{{$teamer->Ceo}}</th>
                        <th>{{$teamer->FunctionCeo}}</th>
                        <th><img style="width: 100px" src="{{asset('storage/'.$teamer->Teamer_path)}}" alt="" srcset=""></th>
                    </tr>
                    @endif

             
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
@endsection