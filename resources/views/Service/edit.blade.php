@extends('adminlte::page')


@section('content')

    <div class="container mt-5 pt-5">
        <h1 class='text-center mt-3 pt-3'>Modifier le Service</h1>
        <form action="{{route('Service.update',$service->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <div class="form-group">
                    <label for="titre">Titre</label>
                <input type="string" id="titre"  name='titre' class="form-control" value='{{$service->Titre}}'   >
                </div>
                <label for="icone">Icone</label>
                <div class="row form-group">
                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio1" value="fas fa-poll">
                            <label class="form-check-label"></i></label>
                            <i class="fas fa-poll"></i>poll
                          </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio1" value="fas fa-briefcase">
                            <label class="form-check-label"></i></label>
                            <i class="fas fa-briefcase"></i>case
                          </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio1" value="fas fa-building">
                            <label class="form-check-label"></i></label>
                            <i class="fas fa-building"></i>building
                          </div>
                                                 
                    </div>
                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio1" value="fab fa-wordpress-simple">
                            <label class="form-check-label"></i></label>
                            <i class="fab fa-wordpress-simple"></i> Wordpress
                          </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio1" value="fas fa-network-wired">
                            <label class="form-check-label"></i></label>
                            <i class="fas fa-network-wired"></i>network
                          </div>                          
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio1" value="fas fa-globe-europe">
                            <label class="form-check-label"></i></label>
                            <i class="fas fa-globe-europe"></i>world
                          </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio1" value="fas fa-blog">
                            <label class="form-check-label"></i></label>
                            <i class="fas fa-blog"></i> blog
                          </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio1" value="fas fa-utensils">
                            <label class="form-check-label"></i></label>
                            <i class="fas fa-utensils"></i> restaurant
                          </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio1" value="fas fa-praying-hands">
                            <label class="form-check-label"></i></label>
                            <i class="fas fa-praying-hands"></i> clear
                          </div>
                    </div>

                </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class='form-control' >
                            {{!empty($service) ? $service->Description : ''}}
                        </textarea>
                        <button type="submit" class="d-block mx-auto btn btn-primary">Modifier</button>
                </form>
        </div>
    @endsection
