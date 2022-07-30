@extends('dashboard.layouts.master')


@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">{{$webmail->name}} Message :</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-10">
            <div class="card">
              <div class="card-body">
              

                <h3 class="card-text">
              Message : {{$webmail->message}}
                </h3>
              <h5>Name : {{$webmail->name}}</h5>
              <h5>Phone : {{$webmail->phone}}</h5>
              <h5>E-mail : {{$webmail->email}}</h5>
              <h5>Service Choosen : {{$webmail->service_choosen}}</h5>
              <h5>Sent Time : {{$webmail->created_at}}</h5>
               
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
      
@endsection