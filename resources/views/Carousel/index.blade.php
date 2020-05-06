@extends('adminlte::page')
@section('content')

<div class="row">
 <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> Representation du Carousel</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                  </ol>
                  <div class="carousel-inner">
                      <div class="carousel-item active carousel-item-left">
                      <img class="d-block w-100" src="https://placehold.it/900x500/39CCCC/ffffff&amp;text=I+Love+Bootstrap" alt="First slide">
                    </div>
                    @foreach ($carousels as $carousel)
                    <div class="carousel-item  carousel-item-left">
                      <img class="d-block w-100" src="{{asset('storage/'.$carousel->Carousel_path)}}" alt="First slide">
                    </div>
                    @endforeach
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="card col-6">
              <div class="card-header ">
                  <div>
                      <h3 class="card-title">Carousel</h3>
                  </div>
                  <div class="text-center">
                      <a href="{{route('Carousel.create')}}"><i class="fas fa-plus"></i></a>
                  </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-sm">
                  <thead>
                    <tr>
                        <th>Description (Sloguan)</th>
                        <th> Image</th>
                        <th></th>
                    </tr>
                  </thead>
                  <tbody>

                   @foreach ( $carousels as $carousel)
                        <tr>
                            <th>{{$carousel->Description}}</th>
                            <th><img style="width: 100px" src="{{asset('storage/'.$carousel->Carousel_path)}}"  alt=""></th>
                            <th class="d-flex ">
                                <button class="btn btn-primary " type="submit"><a href="{{route('Carousel.edit',$carousel->id)}}"><i class="text-white fas fa-pen-square"></i></a></button>
                                <form action="{{route('Carousel.destroy',$carousel->id)}}" method="POST"  enctype="multipart/form-data">
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
</div>
   
@endsection