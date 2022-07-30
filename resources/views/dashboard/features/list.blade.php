@extends('dashboard.layouts.master')

@section('content')
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Features</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('features.create')}}">Add new Feature</a></li>
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="btn  btn-info " class="card-title">Features List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Feature Title</th>
                    <th>Feature Description</th>
                    <th>Control</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($features as $feature)
                    <tr>
                      <td>{{$feature->feature_title}}</td>
                      <td>{{$feature->feature_desc}} </td>
                      <td> 
  <a href="{{route('features.edit',['feature'=>$feature->id]) }}" class="btn btn-block btn-primary">Edit</a>
                         <!-- Delete button -->
<form method="post" action="{{route('features.destroy',['feature'=>$feature->id])}}">
	@method('delete')
<button type="submit" class="btn btn-block btn-danger">Delete</button>
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
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div> 
@endsection