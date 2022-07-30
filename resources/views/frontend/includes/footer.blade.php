
    <!-- FOOTER begings -->
    <footer id="footer">    
        <div class="footer-widgets-wrap">
          <div class="container text-center">    
            <div class="row">
              <div class="col-sm-4 col-md-4">
                <div class="footer-content">
                  <h4>{{__('site.Keep in touch')}}</h4>
                  <div class="footer-socials">
                    <a href="{{$setting->facebook_link}}"><i class="fa fa-facebook"></i></a>
                    <a href="{{$setting->twitter_link}}"><i class="fa fa-twitter"></i></a>
                  </div>
                </div> <!-- end footer-content -->
              </div> <!-- end col-sm-4 -->
              <div class="col-sm-4 col-md-4">
                <div class="footer-content">
                  <h4>{{__('site.Address')}}</h4>
                  <p>{{$setting->streat_address}}<br>
                    {{$setting->city_address}}</p>
                  <p>{{$setting->phone_number}}<br>
                 
                </div> <!-- end footer-content -->

              </div> <!-- end col-sm-4 -->
              <div class="col-sm-4 col-md-4">
                <div class="footer-content">
                  {{-- <h4>SUPPORT</h4>
                  <p>You need support? Visit our support forum and open tickets for you questions.</p>
                  <p><button type="button" class="btn btn-custom-sm">forum</button></p> --}}
<a href="{{$setting->whatsapp_link}}" class="whatsApp wow fadeInRight animated" 
style="visibility: visible; animation-name: fadeInRight;">
<img src="{{asset('assets/frontend/images/whatsapp.png')}}">
</a>

                </div>  <!-- end footer-content -->   
              </div> <!-- end col-sm-4 -->
            </div> <!-- end row -->
          </div> <!-- container -->
        </div>
        <div class="footer-bottom text-center"> <!-- Footer-copyright -->
          <p>©2016 Delex. Design By <a href="http://templatestock.co">TEMPLATE STOCK</a></p>
        </div>
      </footer>
      <!-- End footer begings -->
  
  