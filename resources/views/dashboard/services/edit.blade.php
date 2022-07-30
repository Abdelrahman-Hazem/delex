@extends('dashboard.layouts.master')



 @section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Advanced Form</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- SELECT2 EXAMPLE -->
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Website Setting</h3>
            </div>
            <!-- /.card-header -->
            <form  id="quickForm" action="{{route('services.update',['service'=>$service->id])}}" method="POST">
              @method('PATCH')
              <div class="card-body">
              <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Service Title</label>
                   <input type="text" name="service_title" value="{{ old('service_title') ??$service->service_title}}"  class="form-control"  >
                  </div>
                  <!-- /.form-group -->
                </div>
              </div>
              <!-- /.row -->

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Service Description </label>
                   <input type="text" name="service_desc"  value="{{ old('service_desc') ??$service->service_desc}}" class="form-control"  >
                  </div>
                  <!-- /.form-group -->
                 
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
             
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            
              <div class="form-group">
              <button type="submit" class="btn btn-primary" class="form-control"  >Save </button>
              </div>


              
            </div>
          </div>
          <!-- /.card -->
          @csrf
        </form> 
       </div>
        <!-- /.container-fluid -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->  
@endsection 