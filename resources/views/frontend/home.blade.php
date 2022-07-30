
 @foreach ($settings as $setting) 
 @endforeach
@extends('frontend.layout')

 @section('content')
    

    <!-- /HOME -->
    <section class="main-home" id="home">
      <div class="home-page-photo"></div> <!-- Background image -->
      <div class="home__header-content">
        <div id="main-home-carousel" class="owl-carousel">

          <div>
            <h1 class="intro-title">{{$setting->desc_title}}</h1>
            <p class="intro-text">{{$setting->site_desc}}</p>
            <a class="btn btn-custom" href="#contact">{{__('site.Get started')}}</a>
          </div><!--slide item like paragraph-->

         
        </div>
      </div>
    </section>
    <!-- /End HOME -->

    <!-- / SERVICES -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title text-center">{{__('site.Best Services')}}</h3>
            <div class="titleHR"><span></span></div>
          </div>
        </div>
        
        @foreach ($services as $service)

        <div class="row">
          <div class="col-sm-4"> <!-- Service-item -->
            <div class="text-center services-item">
              <div class="col-wrapper">
               
                <h5> {{$service->service_title}}</h5>
                <p> {{$service->service_desc}}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div> <!--/.row -->

   
      </div> <!--/.container -->
    </section>
    <!-- / End services-->


 <!-- / Features -->
 <section id="features">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <h3 class="title text-center">{{__('site.Best Features')}}</h3>
        <div class="titleHR"><span></span></div>
      </div>
    </div>


    @foreach ($features as $feature)
    <div class="row">
      <div class="col-sm-4"> <!-- Service-item -->
        <div class="text-center services-item">
          <div class="col-wrapper">
            <h5>{{$feature->feature_title}}</h5>
            <p>{{$feature->feature_desc}}</p>
          </div>
        </div>
      </div>
      @endforeach
    

    
    </div> <!--/.row -->


  </div> <!--/.container -->
</section>
<!-- / End services-->


  

    <!-- CONTACT -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title text-center">{{__('site.Contact Us')}}</h3>
            <div class="titleHR"><span></span></div>

            <form role="form" name="ajax-form" id="ajax-form" action="{{route('webmails.store')}}" method="post" class="form-main">
              <div class="col-xs-12">
                <div class="row">            
                  <div class="form-group col-xs-6">
                    <label for="name2">{{__('site.Name')}}</label>
                    <input class="form-control" id="name2" name="name" onblur="if(this.value == '') this.value='{{__('site.Name')}}'" onfocus="if(this.value == '{{__('site.Name')}}') this.value=''" type="text" value="{{__('site.Name')}}">
                    <div class="error" id="err-name" style="display: none;">{{__('site.Please enter name')}}</div>
                  </div>
                  <div class="form-group col-xs-6">
                    <label for="email2">{{__('site.Email')}}</label>
                    <input class="form-control" id="email2" name="email" type="text" onfocus="if(this.value == '{{__('site.Email')}}') this.value='';" onblur="if(this.value == '') this.value='{{__('site.Email')}}';" value="{{__('site.Email')}}">
                    <div class="error" id="err-emailvld" style="display: none;">{{__('site.E-mail is not a valid format')}}</div> 
                  </div>
                </div>

                <div class="row"> 
                <div class="form-group col-xs-6">
                  <label for="name2">{{__('site.Phone Number')}}</label>
                  <input class="form-control" id="name2" name="phone" onblur="if(this.value == '') this.value='{{__('site.Phone Number')}}'" onfocus="if(this.value == '{{__('site.Phone Number')}}') this.value=''"
                   type="number" value="{{__('site.Phone Number')}}">
                  <div class="error" id="err-name" style="display: none;">{{__('site.Please enter Number')}}</div>
                </div>

                <div class="form-group col-xs-6">
                  <label for="name2">{{__('site.Services')}}</label>
                  <select class="form-control" name="service_choosen">
                    <option disabled=""  >{{__('site.Services')}}</option>
                    @foreach ($services as $service)
                    <option>{{$service->service_title}}</option>
                    @endforeach
                  </select>
                  <div class="error" id="err-name" style="display: none;">{{__('site.Please Choose the service you want')}}</div>
                </div>
                </div>
                
                <div class="row">            
                  <div class="form-group col-xs-12">
                    <label for="message2">{{__('site.Message')}}</label>
                    <textarea class="form-control" id="message2" name="message" onblur="if(this.value == '') this.value='{{__('site.Message')}}'" onfocus="if(this.value == '{{__('site.Message')}}') this.value=''">{{__('site.Message')}}</textarea>
                    <div class="error" id="err-message" style="display: none;">{{__('site.Please enter message')}}</div>
                  </div>
                </div> 
              
                <div class="row">            
                  <div class="col-xs-12 text-center">
                    <div id="ajaxsuccess">{{__('site.E-mail was successfully sent')}}</div>
                    <div class="error" id="err-form" style="display: none;">{{__('site.There was a problem validating the form please check!')}}</div>
                    <div class="error" id="err-timedout">{{__('site.The connection to the server timed out!')}}</div>
                    <div class="error" id="err-state"></div>
                    <button type="submit" class="btn btn-custom" id="send">{{__('site.Send')}}</button>
                    @csrf
                  </div>
                </div>
              </div>  
             
            </form>
          </div> <!-- end col-md-12 -->
        </div> <!-- end row -->
      </div> <!-- container -->
    </section>
    <!-- End CONTACT -->
@endsection 