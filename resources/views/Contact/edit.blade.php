@extends('adminlte::page')
@section('content')
    <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Logo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('contact.update')}}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="container p-5">
                    <div class="d-flex  ">
                        <form role="form">
                          <div class="form-group ml-3">
                            <label for="titre">Titre</label>
                            <input type="text" name="titre" id="titre" class="form-control" placeholder="introduire un Titre" aria-describedby="helpId">
                          </div>
                        <form role="form">
                          <div class="form-group ml-3">
                            <label for="text">Texte</label>
                            <input type="text" name="text" id="text" class="form-control" placeholder="introduire un texte" aria-describedby="helpId">
                          </div>  
                    </div>


                    <div class="container p-5">
                    <form role="form">
                        <h5>Donnée Contact</h5>
                      <div class="form-group">
                        <label for="adress">Adresse</label>
                        <input type="text" name="adress" id="adress" class="form-control" placeholder="introduire une Adresse" aria-describedby="helpId">
                      </div>
                    <form role="form">
                      <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="introduire un phoneNumber" aria-describedby="helpId">
                      </div>    
                    <form role="form">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="introduire un Email" aria-describedby="helpId">
                      </div> 


                    <form role="form">
                      <div class="form-group">
                        <label for="nombtn">Nom boutton</label>
                        <input type="text" name="nombtn" id="nombtn" class="form-control" placeholder="introduire un nom button" aria-describedby="helpId">
                      </div> 
                    </div>
                   

                </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
            </form>
            </div>
@endsection