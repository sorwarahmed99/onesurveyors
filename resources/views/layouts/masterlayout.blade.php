<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <title>One Surveyors</title>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="One Surveyors">
        <meta name="keywords" content="Survey, Surveyors, Fire safety, project management, corporate">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Fav Icon -->
        <link rel="shortcut icon" href="favicon.ico">
        <!-- Style CSS -->
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/dist/color-default.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/dist/color-switcher.css') }}">
        <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/jquery.fancybox.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style_slider.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/rs-plugin/css/settings.css') }}" rel="stylesheet">
    </head>
<body>


    
    <div class="page-wrapper"> 
        <!--preloader start-->
        <div class="preloader"></div>
        <!--preloader end--> 
        <!--main-header start-->
        @include('includes.navigation')

        @yield('content')


        <!--footer-sec start-->
        <footer class="footer-sec"> 
        <!--container start-->
        <div class="container"> 
            <!--row start-->
            <div class="row"> 
            <!--col start-->
            <div class="col-md-4 col-sm-12">
                <div class="footer-info">
                <div class="footer-logo"> <a href="index.html"><img class="footer-logo-default" src="{{ asset('assets/images/company-logo/logo-white.svg') }}" alt=""> </a> </div>
                <p>At One Surveyors, we are a team of highly qualified and experienced Chartered Surveyors serving clients in London, Liverpool, and Bristol. Our expertise lies in providing comprehensive surveying services, specializing in areas such as Party Walls, Fire Safety Consultancy, Planning Consultancy, and more.</p>
                <ul class="footer-social">
                    <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                </ul>
                </div>
            </div>
            <!--col end--> 
            <!--col start-->
            <div class="col-md-8"> 
                <!--row start-->
                <div class="row"> 
                <!--col start-->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-info">
                    <h3 class="footer-title">Usefull Links</h3>
                    <ul class="service-link">
                        <li> <a href="/">Home</a> </li>
                        <li> <a href="/services">Services</a> </li>
                        <li> <a href="/about-us">About Us</a> </li>
                        <li> <a href="/contact-us">Contact us</a> </li>
                        <li> <a href="/news">News</a> </li>
                        <li> <a href="/projects">Projects</a> </li>
                        <li> <a href="/faq">Faq</a> </li>
                    </ul>
                    </div>
                </div>
                <!--col end--> 
                <!--col start-->
                <div class="col-md-4 col-sm-6">
                    <div class="footer-info">
                    <h3 class="footer-title">Our Services</h3>
                    <ul class="service-link">
                        <li> <a href="#">Party Walls</a> </li>
                        <li> <a href="#">Fire Safety Consultancy</a> </li>
                        <li> <a href="#">Planning Consultancy</a> </li>
                        <li> <a href="#">Building Control</a> </li>
                        <li> <a href="#">Project Management</a> </li>
                        <li> <a href="#">HMO Licensing</a> </li>
                    </ul>
                    </div>
                </div>
                <!--col end--> 
                <!--col start-->
                <div class="col-md-5 col-sm-6">
                    <div class="footer-info">
                    <h3 class="footer-title">Contact Us</h3>
                    <ul class="footer-adress">
                        <li><i class="fa fa-map-marker"></i><span>50 Woodberry Grove
                            London
                            N4 1SN </span></li>
                        <li><i class="fa fa-phone"></i><span>Call Us : 020 7117 2451</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>Email : info@onesurveyors.com</span></li>
                    </ul>
                    </div>
                </div>
                <!--col end--> 
                </div>
                <!--row end--> 
                
            </div>
            <!--col end--> 
            
            </div>
            <!--row end-->
            <div class="copyright-content"> 
            <!--row start-->
            <div class="row"> 
                <!--col start-->
            <div class="col-md-6 col-sm-6">
                    <p><a target="_blank" href="/">&copy; One Surveyors</a></p>
                </div>
                <!--col end--> 
                <!--col start-->
                <div class="col-md-6 col-sm-6">
                <ul class="footer-bottom-menu">
                    <li> <a href="#">Sitemap</a> </li>
                    <li> <a href="#">Terms of Service </a> </li>
                    <li> <a href="#">Privacy Policy</a> </li>
                </ul>
                </div>
                <!--col end--> 
            </div>
            <!--row end--> 
            </div>
        </div>
        <!--container end--> 
        </footer>
        <!--footer-secn end--> 

        <!--quote-modal start-->
        <div class="modal fade bs-example-modal-md-2" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md-2" role="document">
            <div class="modal-content">
            <div class="top_links"><a href="#" data-dismiss="modal" aria-label="Close">Close (X)</a></div>
            <h2 class="modal-title">GET A FREE QUOTE</h2>
            <form class="login-form">
                <fieldset>
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required data-error="Your Name is required.">
                </div>
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Phone Number " required data-error="Phone Number is required.">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email Address" required data-error="Valid email is required.">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" required rows="1" placeholder="Your Message"></textarea>
                </div>
                <div class="form-group">
                    <label>
                    <input type="checkbox" data-error="Last Name is required.">
                    <em>I agree with the terms and conditions</em></label>
                </div>
                <button class="tg-theme-btn tg-theme-btn-lg" type="submit">Submit</button>
                </fieldset>
            </form>
            </div>
        </div>
        </div>
        <!--quote-modal end-->
</div>



<!--scroll-to-top start-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-up"></span></div>
<!--scroll-to-top end--> 

<!--jquery start--> 
<script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script> 
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script> 
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script> 
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script> 
<script src="{{ asset('assets/js/jquery.fancybox8cbb.js?v=2.1.5') }}"></script> 
<script src="{{ asset('assets/js/owl.carousel.js') }}"></script> 
<script src="{{ asset('assets/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script> 
<script src="{{ asset('assets/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script> 
<script src="{{ asset('assets/js/counter.js') }}"></script> 

<script src="{{ asset('assets/js/script.js') }}"></script> 
<!--jquery end-->
</body>


</html>