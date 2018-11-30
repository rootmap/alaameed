<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title') || alaameed.com</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon -->        
        <link rel="shortcut icon" type="image/x-icon" href="{{url('upload/SiteSetting/'.$SiteSetting->logo)}}">

        <!-- all css here -->

        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="{{url('assets/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/owl.transitions.css')}}">

        <!-- font-awesome css -->
        <link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/icon.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/flaticon.css')}}">
        <!-- magnific css -->
        <link rel="stylesheet" href="{{url('assets/css/zebra_datepicker.css')}}">
        <!-- magnific css -->
        <link rel="stylesheet" href="{{url('assets/css/magnific.min.css')}}">
        <!-- venobox css -->
        <link rel="stylesheet" href="{{url('assets/css/venobox.css')}}">
        <!-- style css -->
        <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
        <!-- responsive css -->
        <link rel="stylesheet" href="{{url('assets/css/responsive.css')}}">

        <!-- modernizr css -->
        <script src="{{url('assets/js/marco/modernizr-2.8.3.min.js')}}"></script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
    </script>
    </head>
        <body>

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<style type="text/css">
    .socials li{
        /*padding: 5px;
        width: 40px;
        height: 40px;
        border: 2px #ffffff solid;
        border-radius: 50%;
        */
        line-height: 30px;
        width: 35px;
    height: 35px;
    border: 1px solid #d2d2d2;
    color: #ffffff;
    text-align: center;
    border-radius: 50%;
    -webkit-transition: all .4s ease;
    transition: all .4s ease;
    margin-right: 5px;
    }
    .socials li a{
        color: #ffffff;
        font-weight: 900;
    }
    .goog-te-gadget-simple{
      /*  background-color: #fff; 

     border-left: 1px solid #d5d5d5; */
    /* border-top: 1px solid #9b9b9b; */
    /* border-bottom: 1px solid #e8e8e8; */
    /* border-right: 1px solid #d5d5d5; */
    /* font-size: 10pt; */
    /* display: inline-block; */
    /* padding-top: 1px; */
    /* padding-bottom: 2px; */
    /* cursor: pointer; */
    /* zoom: 1; */
    *display: inline;
    }
    .j{
        overflow: hidden;
    }
</style>
        <div id="preloader"></div>
        <!-- header -->
        <header class="header" style="line-height: 27px;">
            <div class="container clearfix">
                <div class="col-sm-4">
                    <div class="header-right-info">
                    <ul>
                        <li>
                            <div class="single-header-right-info">
                                <div class="icon-box"><i class="fa fa-phone"></i></div>
                                <div class="text-box">
                                    <p>{{$SiteSetting->phone_number}} <br>{{$SiteSetting->email}} </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                </div>
                <div class="col-sm-3" style="text-align: center;">
                    <ul class="socials list-inline">
                        <li><a target="_blank" href="https://www.facebook.com/alameed201/"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://plus.google.com"><i class="fa fa-google-plus"></i></a></li>

                           

                    </ul>
                </div>

                <div class="col-sm-1" style="text-align: center;">
                    <a id="google_translate_element"></a>
                </div>

                <div class="col-sm-4">
                     <div class="header-right-info" style="float: right;">
                  <ul>
                        <li>
                            <div class="single-header-right-info">
                                <div class="icon-box"><i class="fa fa-clock-o"></i></div>
                                <div class="text-box">
                                    <p><?= html_entity_decode($SiteSetting->opan_close) ?></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                </div>
                
              
               
            </div>
        </header>
        <!-- header end -->
        <!-- Main menu -->
        <section class="main-menu-one finance-navbar">
            <nav id="main-navigation-wrapper" class="navbar navbar-default Marcho-navbar">
                <div class="container">
                    <div class="float-left">
                        <div  class="logo pull-left" style="margin: 2px 0 2px !important;"><a href="">
                            <img style="height:100px;" src="{{url('upload/SiteSetting/'.$SiteSetting->logo)}}" alt="{{$SiteSetting->name}}">
                        </a></div>
                    </div>
                    <div class="float-right">
                        <div class="navbar-header">
                            <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        </div>
                        <div id="main-navigation" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown"><a href="{{ url ('main')}}">Home</a></li>
                                <li class="dropdown"><a href="{{ url ('about')}}">about us</a></li>
                                <li class="dropdown"><a href="{{ url ('projects')}}">Project</a></li>
                                <li class="dropdown"><a href="{{ url ('services')}}">Service</a>
                                    <ul class="dropdown-submenu">
                                        <li><a href="{{ url ('services/1')}}">Manpower Supply</a></li>
                                        <li><a href="{{ url ('services/2')}}">Operation &  Maintenance</a></li>
                                        <li><a href="{{ url ('services/3')}}">Construction Worker</a></li>
                                        <li><a href="{{ url ('services/4')}}">Cleaning Worker</a></li>
                                        <li><a href="{{ url ('services/5')}}">IT & Security Solution </a></li>
                                        <li><a href="{{ url ('services/6')}}">Industrial Workers</a></li>
                                    </ul> 
                                </li>
                                <li class="dropdown"><a href="{{ url ('clients')}}">Clients</a></li>
                                <li class="dropdown"><a href="{{ url ('gallery')}}">Gallery</a></li> 
                                <li><a href="{{ url ('contact')}}">contact us</a></li>
                                <li><a href="{{ url ('profile')}}">Profile</a></li>
                            </ul>

                        </div>
                    </div>

                </div>
            </nav>
        </section>
        <!-- MAin menu ends -->

         @yield('content')

        <!-- Start Footer bottom section -->
        <footer class="footer sec-padding">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                   
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-widget links-widget links-widget-pac">
                          <div class="title">
                            <h4>Site Map</h4>
                    
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-sm-12">
                              <ul>
                                <li><a href="{{ url ('main')}}">Home</a></li>
                                <li><a href="{{ url ('about')}}">About</a></li>
                                <li><a href="{{ url ('services')}}">Services</a></li>
                                <li><a href="{{ url ('clients')}}">Clients</a></li>
                                <li><a href="{{ url ('gallery')}}">Gallery</a></li>
                                <li><a href="{{ url ('contact')}}">Contact us</a></li>
                                <li><a href="{{ url ('download')}}">Download</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-widget links-widget links-widget-pac">
                          <div class="title">
                            <h4>Our Services</h4>
                    
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-sm-12">
                              <ul>
                                <li><a href="{{ url ('services/1')}}">Manpower Supply</a></li>
                                <li><a href="{{ url ('services/2')}}">Operation &  Maintenance</a></li>
                                <li><a href="{{ url ('services/3')}}">Construction Worker</a></li>
                                <li><a href="{{ url ('services/4')}}">Cleaning Worker</a></li>
                                <li><a href="{{ url ('services/5')}}">IT & Security Solution </a></li>
                                <li><a href="{{ url ('services/6')}}">Industrial Workers</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-widget links-widget links-widget-pac">
                          <div class="fb-page" data-href="https://www.facebook.com/alameed201/" data-tabs="timeline" data-width="230" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/alameed201/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/alameed201/">Hackman Fashion Textile Ltd</a></blockquote></div>
                        </div>
                      </div>

                      

                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-widget subscribe-widget">
                          <div class="title">
                            <h4>Connect us from</h4>
                          </div>
                          
                          <ul class="social list-inline">
                            <li><a target="_blank" href="https://www.facebook.com/alameed201/"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                          </ul>
                        </div>
                      </div>


                       

          
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                    
                      



                       

                    </div>
          
                  </div>
                </div>
              </footer>
        <!-- End Footer bottom section -->
        <section class="footer-bottom">
                    <div class="container clearfix">
                      <div class="pull-left">
                        <p>Copyright © alaameed 2018. All rights reserved. </p>
                      </div>
                      <div class="pull-right">
                        <p>Design & Developed by: <a href="mailto:support@bhuyianhost.com">Bhuyian Host</a></p>
                      </div>
                    </div>
                  </section>
        
        <!-- all js files -->

        <!-- jquery latest version -->
        <script src="{{url('assets/js/marco/jquery-1.12.4.min.js')}}"></script>
        <!-- bootstrap js -->
        <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
        <!-- owl.carousel js -->
        <script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
        <!-- Counter js -->
        <script src="{{url('assets/js/jquery.counterup.min.js')}}"></script>
        <!-- waypoint js -->
        <script src="{{url('assets/js/waypoints.js')}}"></script>
        <!-- isotope js -->
        <script src="{{url('assets/js/isotope.pkgd.min.js')}}"></script>
        <!-- stellar js -->
        <script src="{{url('assets/js/jquery.stellar.min.js')}}"></script>
        <!-- stellar js -->
        <script src="{{url('assets/js/imagelightbox.min.js')}}"></script>
        <!-- magnific js -->
        <script src="{{url('assets/js/magnific.min.js')}}"></script>
        <!-- venobox js -->
        <script src="{{url('assets/js/venobox.min.js')}}"></script>
        <!-- meanmenu js -->
        <script src="{{url('assets/js/jquery.meanmenu.js')}}"></script>
        <!-- tabs js -->
        <script src="{{url('assets/js/tabs.js')}}"></script>
        <!-- Form validator js -->
        <script src="{{url('assets/js/form-validator.min.js')}}"></script>
        <!-- plugins js -->
        <script src="{{url('assets/js/plugins.js')}}"></script>
        <!-- datapicker js -->
        <script src="{{url('assets/js/zebra_datepicker.min.js')}}"></script>
        <!-- main js -->
        <script src="{{url('assets/js/main.js')}}"></script>
    </body>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Mirrored from www.mylamarena.com/marco/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Nov 2018 09:37:20 GMT -->
</html>