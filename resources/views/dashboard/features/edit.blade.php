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
            <form  id="quickForm" action="{{route('features.update',['feature'=>$feature->id])}}" method="POST">
            @method('PATCH')
            <div class="card-body">
              <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Feature Title</label>
                   <input type="text" name="feature_title" value="{{ old('feature_title_en') ??$feature->feature_title_en}}" class="form-control"  >
                  </div>
                  <!-- /.form-group -->
                </div>
                
              </div>
              <!-- /.row -->

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Feature Description </label>
                   <input type="text" name="feature_desc" value="{{ old('feature_desc_en') ??$feature->feature_desc_en}}" class="form-control"  >
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