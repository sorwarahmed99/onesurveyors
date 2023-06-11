@extends('layouts.masterlayout')
  
@section('content')

  <!--inner-heading start-->
  <section class="inner-heading">
    <div class="container">
      <h1>Contact Us</h1>
      <ul class="xs-breadcumb">
        <li><a href="/"> Home  / </a> Contact</li>
      </ul>
    </div>
  </section>
  <!--inner-heading end--> 
  
  <!--inner content start-->
  <section class="contactWrap"> 
    <!--container start-->
    <div class="container">
      <div class="section-title">
        <h3>Get in <span>touch</span></h3>
        <p>Write us your business query and we will get back to you as soon as possible.</p>
      </div>
      <!--row start-->
      <div class="row serviceList"> 
        <!--col start-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="contact-item">
            <div class="fig_caption">
              <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i> </div>
              <div class="details">
                <h3>Visit our office</h3>
                <p> <strong>50 Woodberry Grove
                    
                    </strong> <br>
                    London, N4 1SN</p>
              </div>
            </div>
          </div>
        </div>
        <!--col end--> 
        <!--col start-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="contact-item">
            <div class="fig_caption">
              <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i> </div>
              <div class="details">
                <h3>Mail us</h3>
                <p> <strong>info@onesurveyors.com</strong></p>
              </div>
            </div>
          </div>
        </div>
        <!--col end--> 
        <!--col start-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="contact-item">
            <div class="fig_caption">
              <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i> </div>
              <div class="details">
                <h3>Call us</h3>
                <p> <strong> 020 7117 2451</strong>
                    </p>
              </div>
            </div>
          </div>
        </div>
        <!--col end--> 
        <!--col start-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="contact-item">
            <div class="fig_caption">
              <div class="icon"><i class="fa fa-clock-o" aria-hidden="true"></i> </div>
              <div class="details">
                <h3>Working hour</h3>
                <p> <strong>Mon - Sat : 8am to 7pm</strong> <br>
                  Sunday : Closed</p>
              </div>
            </div>
          </div>
        </div>
        <!--col end--> 
      </div>
      <!--row end--> 
            <div class="section-title margin_t40">
        <h3>Drop <span>your massege</span></h3>
        
      </div>
<form action="#" method="POST" id="xs-contact-form" class="xs-form">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" placeholder="Your name" id="xs_contact_name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control invaild" name="email" placeholder="Your email" id="xs_contact_email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone-number" placeholder="Your phone number" id="xs_contact_phone">

                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Subject" placeholder="Subject" id="xs_contact_subject">
                            </div>
                        </div>

                        <textarea name="massage" placeholder="Message" id="x_contact_massage" class="form-control message-box" cols="30" rows="10"></textarea>
 <div class="readmore text-center">
              <button class="main-btn btn-1 btn-1e">SEND MESSAGE</button>
            </div>
                        
                    </form>
    </div>
    <!--container end--> 
    
  </section>
  <!--inner content end--> 
  

  
                    
                    
                    
  <div class="xs-map-sec">
    <div class="xs-maps-wraper">
        <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=50%20Woodberry%20Grove%20London%20N4%201SN+(One%20Surveyors)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure area map</a></iframe></div>
    </div>
</div>
@endsection