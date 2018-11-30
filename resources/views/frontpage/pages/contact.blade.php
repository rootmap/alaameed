@extends('frontpage.layout.master')
@section('title','Contact us')
@section('content')
<!-- Start breadcumb section -->
        <section class="page-breadcrumb">
            <div class="page-section">
                <div class="breadcumb-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb text-center">
                                <div class="section-titleBar white-headline text-center">
                                    <h3>Contact us</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="nav-path">
                <div class="container">
                    <div class="row">
                        <ul>
                            <li class="home-bread">Home</li>
                            <li>Contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcumb section -->
        <div class="col-md-10 col-md-offset-1">
        @if (session('status'))
            <div class="alert successPlace bg-success alert-icon-left alert-arrow-left alert-dismissible fade in mb-2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>Well done!</strong> {{ session('status') }}
            </div>
            <script type="text/javascript">
                setTimeout(function(){
                    $('.successPlace').fadeOut('slow');
                }, 5000);
            </script>
            <?php 
            Session::forget('status');
            ?>
        @endif

        @if (session('success'))
            <div class="alert successPlace bg-success alert-icon-left alert-arrow-left alert-dismissible fade in mb-2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>Well done!</strong> {{ session('success') }}
            </div>
            <script type="text/javascript">
                setTimeout(function(){
                    $('.successPlace').fadeOut('slow');
                }, 5000);
            </script>
            <?php 
            Session::forget('success');
            ?>
        @endif

        @if (session('error'))
            <div class="alert allDanger bg-danger alert-icon-left alert-arrow-left alert-dismissible fade in mb-2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>Oh snap!</strong> {{ session('error') }}
            </div>
            <script type="text/javascript">
                setTimeout(function(){
                    $('.allDanger').fadeOut('slow');
                }, 5000);
            </script>
            <?php 
            Session::forget('error');
            ?>
        @endif

        @if (count($errors) > 0)
             @foreach ($errors->all() as $error)
            <div class="alert allDanger bg-danger alert-icon-left alert-arrow-left alert-dismissible fade in mb-2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>Oh snap!</strong> {{ $error }}
            </div>
            @endforeach
            <script type="text/javascript">
                setTimeout(function(){
                    $('.allDanger').fadeOut('slow');
                }, 5000);
            </script>
        @endif
    </div>
        

        <section class="contact-us bg-color sec-padding">
            <div class="container">

                <div class="rox">
                    <div class="col-md-7">

                        <div class="main-title">
                            <h3>We'd Love to Hear From You</h3>
                            <p>Do you have a question for us? we'd love to here from you and we would be happy to answer your questions. Reach out to us and we'll respond as soon as we can.</p>
                        </div>

                        <div class="form">
                            <div class="row">
                                <p class="success" id="success"></p>
                                <p class="error" id="error"></p>
                                <form name="contact_form" id="contact_form" method="post" action="{{url('contact')}}">
                                    {{csrf_field()}}
                                    <div class="col-md-4"><input type="text" data-delay="300" placeholder="Your full name" name="contact_name" id="contact_name" class="input"></div>
                                    <div class="col-md-4"><input type="text" data-delay="300" placeholder="E-mail Address" name="contact_email" id="contact_email" class="input"></div>
                                    <div class="col-md-4"><input type="text" data-delay="300" placeholder="Subject" name="contact_subject" id="contact_subject" class="input"></div>
                                    <div class="col-md-12"><textarea data-delay="500" class="required valid" placeholder="Message" name="message" id="message"></textarea></div>
                                    <div class="col-md-3"><input name=" " type="submit" value="submit"></div>
                                </form>

                            </div>
                        </div>


                    </div>

                    <div class="col-md-5">

                        <div class="contact-get">
                            <div class="main-title">
                                <h3><span>GET IN</span> Touch</h3>
                                <p>{{$SiteSetting->name}}</p>
                            </div>

                            <div class="get-in-touch">
                                <div class="detail">
                                    <?= html_entity_decode($SiteSetting->address) ?>
                                </div>

                                <div class="social-icons">
                                    <a href="#." class="fb"><i class="icon-euro"></i></a>
                                    <a href="#." class="tw"><i class="icon-yen"></i></a>
                                    <a href="#." class="gp"><i class="icon-google-plus"></i></a>
                                    <a href="#." class="vimeo"><i class="icon-vimeo4"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        
        <!-- Start map section -->
        <section class="map-section sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="our-location">
                            <div class="map" style="height:310px;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.0047982871056!2d46.69199461499954!3d24.69236178413335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDQxJzMyLjUiTiA0NsKwNDEnMzkuMSJF!5e0!3m2!1sen!2sbd!4v1543578237839" width="600" height="150" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                            <div class="get-directions">
                                <form action="http://maps.google.com/maps" method="get" target="_blank">
                                    <input type="text" name="saddr" placeholder="Enter Your Address" />
                                    <input type="hidden" name="daddr" value="Envato Pty Ltd, Elizabeth Street, Melbourne, Victoria, Australia" />
                                    <input type="submit" value="Get directions" class="direction-btn" />
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End main content -->
        </section>
        <!-- End map section -->

        <!-- Start welcome section -->
@endsection