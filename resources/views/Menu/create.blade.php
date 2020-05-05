@extends('adminlte::page')
@section('content')
    <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Menu</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <form action="{{route('Menu.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <form role="form">
                      <div class="row">                                                      
                         <div class="col-sm-3">
                           <div class="form-group">
                             <label>Link 1 :</label>
                             <input type="text" name='Nom' placeholder="Nom">
                             <input type="text" name="lien" class="form-control" placeholder="Enter le lien">
                           </div>
                         </div>
                         
                         <div class="col-sm-3">                     
                           <div class="form-group">
                             <label>Link 2 :</label>
                             <input type="text" name='Nom' placeholder="Nom">                        
                             <input type="text" name="lien" class="form-control" placeholder="Enter le lien">
                           </div>
                         </div>
                         
                         <div class="col-sm-3">                     
                           <div class="form-group">
                             <label>Link 3 :</label>
                             <input type="text" name='Nom' placeholder="Nom">
                             <input type="text" name="lien" class="form-control" placeholder="Enter le lien">
                           </div>
                         </div>
                         
                         <div class="col-sm-3">                      
                           <div class="form-group">
                             <label>Link 4 :</label>
                             <input type="text" name='Nom' placeholder="Nom">                       
                             <input type="text" name="lien" class="form-control" placeholder="Enter le lien">
                           </div>
                         </div>
                        <div class="form-group">
                          <label for="logo">Logo</label>
                          <input type="file" class="form-control-file" name="logo" id="logo" placeholder="logo" aria-describedby="fileHelpId">
                        </div> 
                        <div>
                        </div>
                        <button type="submit">Enregistrer</button>
                 </form>
               </div>
                    </form>
              <!-- /.card-body -->
            </div>
@endsection