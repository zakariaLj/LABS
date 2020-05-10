@extends('adminlte::page')
@section('content')
    <div class="card">
        <div class="card-header">
            <div> 
                 <h3 class="card-title">Logo Principale</h3>
          </div>
            <div class="text-center">
                <button class="btn btn-primary " type="submit"><a href="{{route('ready.edit')}}"><i class="text-white fas fa-pen-square"></i></a></button>  
            </div>

        </div>

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Titre</th>
                      <th>Sous-titre</th>
                      <th>Nom Boutton</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>{{$ready->Titre}}</th>
                      <th>{{$ready->Soustitre}}</th>
                      <th>{{$ready->Nombtn}}</th>
                    </tr>
                     
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
@endsection