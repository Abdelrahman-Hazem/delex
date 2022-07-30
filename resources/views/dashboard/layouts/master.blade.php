<!DOCTYPE html >
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

  <html dir="{{session('dir')}}" lang="{{app()->getLocale()}}" >
<head>
    @include('dashboard.layouts.head')
 
</head>
<body  class="hold-transition sidebar-mini">
<div  class="wrapper">

    {{-- nav bar --}}
    @include('dashboard.layouts.header')

    {{-- side bar --}}
    @include('dashboard.layouts.menu')
 


    {{-- main content --}}
    @yield('content')
  

  {{-- <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar --> --}}

  {{-- footer --}}
@include('dashboard.layouts.footer')
  

</div>
<!-- ./wrapper -->

@include('dashboard.layouts.foot')

</body>
</html>
