@extends('adminlte::page')
@section('content')
    <div class="card">
        <div class="card-header">
            <div> 
                 <h3 class="card-title">Contact</h3>
          </div>
            <div class="text-center">
                <button class="btn btn-primary " type="submit"><a href="{{route('contact.edit')}}"><i class="text-white fas fa-pen-square"></i></a></button>  
            </div>

        </div>

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Titre</th>
                      <th>texte</th>
                    </tr>

                  </thead>
                  <tbody>
                      @if (!empty($contact) != null)
                      <tr>
                          <th>{{$contact->Titre}}</th>
                          <th>{{$contact->Texte}}</th>
                      </tr>
                          
                      @endif
                      
                  </tbody>
                </table>
              </div>
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Adress</th>
                      <th>Email</th>
                      <th>phone</th>
                      <th>NomBtn</th>
                    </tr>

                  </thead>
                  <tbody>
                      @if (!empty($contact) != null)
                      <tr>
                        
                          <th>{{$contact->Adress}}</th>
                          <th>{{$contact->Email}}</th>
                          <th>{{$contact->Phone}}</th>
                          <th>{{$contact->Nombtn}}</th>
                       
                      </tr>
                          
                      @endif
                  </tbody>
                </table>
              </div>


              <!-- /.card-body -->
            </div>
@endsection