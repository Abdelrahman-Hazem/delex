<!DOCTYPE html>
<!--
	Delex by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html  dir="{{session('dir')}}" lang="{{app()->getLocale()}}">

<head>
 @include('frontend.includes.head')

</head>

<body data-spy="scroll" data-offset="80">

  <!-- Preloader -->
  <div class="animationload">
    <div class="loader">
        Please Wait....
    </div>
  </div> 
  <!-- End Preloader -->


  @include('frontend.includes.header')

@yield('content')

@include('frontend.includes.footer')


    <!-- Scroll top -->
    <a href="#" class="back-to-top"> <i class="fa fa-chevron-up"> </i> </a>


@include('frontend.includes.foot')
  

  </body>
</html>
