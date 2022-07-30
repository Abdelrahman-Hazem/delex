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
            <form  id="quickForm" action="{{route('settings.update',['setting'=>$setting->id])}}" method="POST">
              @method('PATCH')

            <div class="card-body">
              <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Website Title</label>
                   <input type="text" name='site_title' value="{{$setting->site_title}}" class="form-control"  >
                  </div>
                  <!-- /.form-group -->
                </div>
               
              </div>
              <!-- /.row -->

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Description Title</label>
                   <input type="text" name='desc_title' value="{{$setting->desc_title}}" class="form-control"  >
                  </div>
                  <!-- /.form-group -->
                 
                </div>
               
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Site Description</label>
                   <input type="text" name='site_desc' value="{{$setting->site_desc}}"  class="form-control"  >
                  </div>
                  <!-- /.form-group -->
                 
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Streat Address</label>
                   <input type="text" name="streat_address" value="{{$setting->streat_address}}" class="form-control"  >
                  </div>
                  <!-- /.form-group -->
                 
                </div>
                
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>City Address</label>
                   <input type="text" name="city_address" value="{{$setting->city_address}}" class="form-control"  >
                  </div>
                  <!-- /.form-group -->
                 
                </div>
                <!-- /.col -->
              </div>

     
              <!-- /.row -->


              <!-- /.row -->
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label>Whatsapp</label>
                  <input  type="text" name="whatsapp_link" value="{{$setting->whatsapp_link}}" class="form-control"  >
                  </div>
                  <!-- /.form-group -->
                </div> 
              </div>
              <!-- /.row -->


              <!-- /.row -->
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label>Facebook</label>
                  <input type="text" name="facebook_link" value="{{$setting->facebook_link}}" class="form-control"  >
                  </div>
                  <!-- /.form-group -->
                </div> 
              </div>
              <!-- /.row -->


              <!-- /.row -->
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label>Twitter</label>
                  <input type="text" name="twitter_link" value="{{$setting->twitter_link}}" class="form-control"  >
                  </div>
                  <!-- /.form-group -->
                </div> 
              </div>
              <!-- /.row -->


              <!-- /.row -->
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label>Phone</label>
                  <input type="number" name="phone_number" value="{{$setting->phone_number}}" class="form-control"  >
                  </div>
                  <!-- /.form-group -->
                </div> 
              </div>
              <!-- /.row -->

            
              <div class="form-group">
              <button type="submit" class="btn btn-primary" class="form-control"  >Save Changes</button>
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