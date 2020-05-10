@extends('adminlte::page')
@section('content')
    <div class="card">
        <div class="card-header">
            <div> 
                 <h3 class="card-title">Logo Principale</h3>
          </div>
            <div class="text-center">
                <button class="btn btn-primary " type="submit"><a href="{{route('logo.edit')}}"><i class="text-white fas fa-pen-square"></i></a></button>  
            </div>

        </div>

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Logo</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                      @if (!empty($logo))
                          
                          <img  style='width:100px' src="{{asset('storage/'.$logo->Logo_path)}}">
                      @endif
                      </td>
                      
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
@endsection