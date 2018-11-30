@extends('frontpage.layout.master')
@section('title','Company Profile')
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
                                    <h3>Company Profile</h3>
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
                            <li>Company Profile</li>
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
        <!-- Start map section -->
        <section class="map-section sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h3>{{$profile->title}}</h3>
                        <?= html_entity_decode($profile->description) ?>
                        <hr>
                        <?php  if($profile->title){ ?>
                            <a href="{{ url ('upload/business/'.$profile->thumbnail)}}">
                                <img style="height: 100px" src="{{ url ('assets/logo.png')}}" /><br> Download Company Profile
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- End main content -->
        </section>
        <!-- End map section -->

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

        <!-- Start welcome section -->
@endsection