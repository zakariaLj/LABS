@extends('adminlte::page')
@section('content')
           <div class="card">
              <div class="card-header ">
                  <div>
                      <h3 class="card-title">Titre Testimonial</h3>
                  </div>
                  <div class="text-center">
                      <a href="{{route('testimoniale1.edit')}}"><i class="fas fa-plus"></i></a>
                  </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-sm">
                  <thead>
                    <tr>
                        <th>Titre</th>

                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <th>
                        {{(!empty ($testimoniale1) ? $testimoniale1->Titre : '') }}
                      </th>
                    </tr>

             
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
@endsection