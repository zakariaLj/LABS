@extends('adminlte::page')
@section('content')
    <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Inbox</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" placeholder="Search Mail">
                  <div class="input-group-append">
                    <div class="btn btn-primary">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->

                <!-- /.float-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                    @foreach ($messages as $message)
                        <th>{{(!empty($message) ? $message->Nom  : '')}}</th>
                        <th>{{(!empty($message) ? $message->Email  : '')}}</th>
                        <th>{{(!empty($message) ? $message->Sujet  : '')}}</th>
                        <th>{{(!empty($message) ? $message->Message  : '')}}</th>
                    @endforeach
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->

                <!-- /.float-right -->
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
@endsection