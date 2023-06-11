@extends('layouts.masterlayout')
  
@section('content')
<div class="staticSlider">
    <div class="container">
      <div class="slidewrap">
        <h3>We are One Surveyors </h3>
        <h1>Surveying Solutions for <span>Smarter Strategies</span></h1>
        <p>At One Surveyors, we are a team of highly qualified and experienced Chartered Surveyors serving clients in London, Liverpool, and Bristol. Our expertise lies in providing comprehensive surveying services, specializing in areas such as Party Walls, Fire Safety Consultancy, Planning Consultancy, and more.

        </p>
        <a href="#" class="btn btn-default section-btn" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".bs-example-modal-md-2">Get a Quote</a><a class="btn btn-default section-btn span_color" href="contact.html">Schedule a Consultation</a> </div>
    </div>
</div>
<div class="quick-quote">
    <div class="container"> 
      <!--Row Start-->
      <div class="row">
        <div class="col-md-9">
          <h2>For professional advice, please Dial </h2>
        </div>
        <div class="col-md-3">
          <div class="quote-btn"><a href="#"> 020 7117 2451</a></div>
        </div>
      </div>
      <!--Row End--> 
    </div>
</div>
<!--services start-->
<section class="services bg-gray"> 
    <!--container start-->
    <div class="container">
      <div class="section-title">
        <h3>OUR <span>SERVICES</span></h3>
        <p>
            Our comprehensive range of surveying services is tailored to meet the diverse needs of our clients. From accurate land surveys to detailed topographic surveys, our expert team employs advanced technology and industry best practices to deliver precise measurements and valuable insights. </p>
      </div>
      <!--row start-->
      <div class="row serviceList"> 
        <!--col start-->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="single-item">
            <div class="fig_caption">
              <div class="icon"><i class="fa fa-building"></i> </div>
              <div class="details">
                <h3><a href="service-signle.html">Party Walls</a></h3>
                <p>Our Party Wall services are designed to assist property owners in effectively managing and resolving party wall disputes. .</p>
              </div>
            </div>
          </div>
        </div>
        <!--col end--> 
        <!--col start-->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="single-item">
            <div class="fig_caption">
              <div class="icon"><i class="fa fa-fire"></i> </div>
              <div class="details">
                <h3><a href="service-signle.html">Fire Safety Consultancy</a></h3>
                <p>With our Fire Safety Consultancy services, we help clients ensure compliance with fire safety regulations and create a safe environment for their properties.</p>
              </div>
            </div>
          </div>
        </div>
        <!--col end--> 
        <!--col start-->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="single-item">
            <div class="fig_caption">
              <div class="icon"> <i class="fa fa-home"></i> </div>
              <div class="details">
                <h3><a href="service-signle.html">Planning Consultancy</a></h3>
                <p>Our Planning Consultancy services provide clients with expert guidance and support throughout the planning process.</p>
              </div>
            </div>
          </div>
        </div>
        <!--col end--> 
        <!--col start-->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="single-item">
            <div class="fig_caption">
              <div class="icon"><i class="fa fa-map-signs"></i> </div>
              <div class="details">
                <h3><a href="service-signle.html">Building Control</a></h3>
                <p>Our Building Control services offer comprehensive oversight and guidance to ensure that your construction projects meet all necessary building regulations and standards.</p>
              </div>
            </div>
          </div>
        </div>
        <!--col end--> 
        <!--col start-->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="single-item">
            <div class="fig_caption">
              <div class="icon"><i class="fa fa-universal-access"></i> </div>
              <div class="details">
                <h3><a href="service-signle.html">Project Management</a></h3>
                <p>Our Project Management services provide clients with professional expertise and leadership to ensure the successful execution of their construction projects.</p>
              </div>
            </div>
          </div>
        </div>
        <!--col end--> 
        <!--col start-->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="single-item">
            <div class="fig_caption">
              <div class="icon"><i class="fa fa-rocket"></i> </div>
              <div class="details">
                <h3><a href="service-signle.html">HMO Licensing</a></h3>
                <p>Our HMO Licensing services assist landlords and property owners in navigating the requirements and regulations related to Houses in Multiple Occupation (HMOs). </p>
              </div>
            </div>
          </div>
        </div>
        <!--col end--> 
      </div>
      <!--row end-->
      
      <div class="readmore text-center">
        <a class="main-btn btn-1 btn-1e" href="/services">All Services</a>
      </div>
    </div>
    <!--container end--> 
</section>
  <!--services end--> 

<!--whychoose-wrap start-->
<section class="whychoose-wrap"> 
    <!--container start-->
    <div class="container"> 
      <!--row start-->
      <div class="row"> 
        <!--col start-->
        <div class="col-md-6">
          <div class="section-title">
            <h3>Our special support<br>
              <span>Why Choose Us </span></h3>
            <p>At One Surveyors, we pride ourselves on being the leading choice for surveying services. Here's why our clients choose us:</p>
          </div>
          <div class="whychoose-description">
            <ul class="row">
              <li class="col-md-6">Expertise </li>
              <li class="col-md-6">Client-Centric Approach</li>
              <li class="col-md-6"> High Quality Work</li>
              <li class="col-md-6">Transparent Communication</li>
              <li class="col-md-6"> Proven Track Record</li>
              <li class="col-md-6">Comprehensive Services</li>
              <li class="col-md-6">Trusted Partner</li>
            </ul>
          </div>
        </div>
        <!--col end--> 
        <!--col start-->
        <div class="col-md-6">
          <div class="about-video-item">
            <div class="about-video-img"> <img src="{{ asset('assets/images/welcome-1.jpg') }}" alt=""> <a href="https://www.youtube.com/watch?v=Vn_FGpZJqUs" class="video-play mfp-iframe xs-video"><i class="fa fa-play"></i></a> </div>
          </div>
        </div>
        <!--col end--> 
      </div>
      <!--row end--> 
    </div>
    <!--container end--> 
  </section>
  <!--whychoose-wrap end--> 
@endsection