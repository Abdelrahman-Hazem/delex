@extends('dashboard.layouts.master')

@section('content')
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Messages</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

@if ($webmails->isEmpty())
  <div class="col-lg-10">
    <div class="card">
      <div class="card-body">

        <h3 class="card-text">
         No Messages yet
        </h3>
      </div>
    </div>
  </div>

<!-- /.row -->


@else
<div class="col-12">
  <div class="card">
    <div class="card-header">
      <h2  class="card-title">Messages List :</h2>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>Name</th>
          <th>Message</th>
      
        </tr>
        </thead>
        <tbody>
          @foreach ($webmails as $webmail)
      
          <tr>
            
            <td>{{$webmail->name}}</td>
            <td>{{$webmail->message}}</td>
            <td><a href="{{route('webmails.show',['webmail' =>$webmail->id])}}" class="btn btn-info">Show</a>
            
                               <!-- Delete button -->
<form method="post" action="{{route('webmails.destroy',['webmail'=>$webmail->id])}}">
	@method('delete')
<button type="submit" class="btn btn-danger">Delete</button>
@csrf 
</form>
          
            
            </td>
         
          </tr> 
       
          @endforeach
      
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
@endif    
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div> 
@endsection