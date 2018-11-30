@extends('frontpage.layout.master')
@section('title','Home')
@section('content')
<style type="text/css">
    .h{
        padding: 10px;
    }
    .h a{
        /*background: rgba(255, 0, 0, 0.2);*/
       /* border: 1px black solid;*/
        display: block;
        padding: 20px;
    }
    .h img{
        height: 140px;
    }
    .h a:hover{
        border-bottom: 0.04em #A9A9A9 solid;
        border-radius: 2px;
        /*background: #153356;*/
    }
    
</style>
<!-- Start Slider section -->
        <section class="slider-section">
           <div class="slider-overly"></div>
            <div class="intro-carousel">
            @if(!empty($Slider))
            @foreach($Slider as $row)
                <div class="intro-content">
                    <div class="slider-images">
                        <img style="height: 340px;" src="{{url('upload/slider/'.$row->image)}}" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- layer 1 -->
                                            <div class="layer-1-2">
                                                <h1 class="title2">{{$row->slidertitle}}</h1>
                                            </div>
                                            <!-- layer 2 -->
                                            <div class="layer-1-1 ">
                                                <p>{{$row->desc}}</p>
                                            </div>
                                           <!-- layer3 -->
                                           <!--  <div class="layer-1-3">
                                                <a href="#" class="ped-btn left-btn" >Our Services</a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
            </div>
        </section>
        <!-- End Slider section -->

        <!-- Start listing section -->
        
        <!-- End listing section -->

        <!-- Start welcome section -->
        <section class="welcome-section sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-titleBar text-center">
                            <h3>Our Service Advantages</h3>
                            <p>QUALIFIED TECHNICAL EVALUATION FOR EXCELLENT ON TIME DELIVERY</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center;" >
                        <div class="h col-md-4 col-sm-4 col-xs-12">
                            <a href="{{ url ('services/1')}}">
                                <img src="{{ url ('assets/download.png')}}"><br><br>
                               <h5> Operation</h5>
                            </a>
                        </div>
                        <div class="h col-md-4 col-sm-4 col-xs-12">
                            <a href="{{ url ('services/2')}}">
                                <img src="{{ url ('assets/s2.png')}}"><br><br>
                                <h5> Maintenance</h5>
                            </a>
                        </div>
                        <div class="h col-md-4 col-sm-4 col-xs-12">
                            <a href="{{ url ('services/3')}}">
                                <img src="{{ url ('assets/s5.png')}}"><br><br>
                                <h5>Construction </h5>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center;" >
                        <div class="h col-md-4 col-sm-4 col-xs-12">
                            <a href="{{ url ('services/4')}}">
                                <img src="{{ url ('assets/s1.png')}}"><br><br>
                                <h5>Cleaning </h5>
                            </a>
                        </div>
                        <div class="h col-md-4 col-sm-4 col-xs-12">
                            <a href="{{ url ('services/5')}}">
                                <img src="{{ url ('assets/s3.png')}}"><br><br>
                                <h5> IT & Security Solution</h5>
                            </a>
                        </div>
                        <div class="h col-md-4 col-sm-4 col-xs-12">
                            <a href="{{ url ('services/6')}}">
                                <img src="{{ url ('assets/s4.png')}}"><br><br>
                                <h5>Industrial </h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End main content -->
        </section>
        <!-- End welcome section -->
        <!-- Start numbers section -->
        <section class="numbers-section-3 sec-padding parallax-bg fix">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="section-titleBar text-left">
                            <h3>We are proud<br>with our achivness</h3>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="single-count-box">
                            <div class="box">
                                <div class="number-box"><span class="counter">{{$contents->success}}</span></div>
                                <div class="text-box">
                                    <p>SUCCESSFUL PROJECT</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-count-box">
                            <div class="box">
                                <div class="number-box"><span class="counter">{{$contents->jobs}}</span></div>
                                <div class="text-box">
                                    <p>INTERNATIONAL JOBS</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-count-box">
                            <div class="box">
                                <div class="number-box"><span class="counter">{{$contents->posetive}}</span></div>
                                <div class="text-box">
                                    <p>POSETIVE FEEDBACK</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End numbers section -->
        <!-- Start project section -->
        
        <!-- End project section -->

        <!-- Start testimonials section -->
        <section class="testimonial-section sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-titleBar text-center">
                            <h3>Clients Testimonials</h3>
                            <p>Our Support Service is always available 24 hours a day, 7 days a week to help you create your own business solution.</p>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="testimonial-carousel">
                        @if(!empty($business))
                    @foreach($business as $row)
                        <div class="single-testi">
                            <div class="testi-img ">
                                <img src="{{url('upload/business/'.$row->thumbnail)}}" alt="">

                            </div>
                            <div class="texti-name">
                                <h5>{{$row->title}}</h5>
                                <span class="guest-rev"><a href="#">Genarel Clients</a></span>
                            </div>
                            <div class="client-rating">
                                <a href="#"><i class="icon icon-star"></i></a>
                                <a href="#"><i class="icon icon-star"></i></a>
                                <a href="#"><i class="icon icon-star"></i></a>
                                <a href="#"><i class="icon icon-star"></i></a>
                                <a href="#"><i class="icon icon-star"></i></a>
                            </div>
                            <div class="testi-text">
                                <p><?= html_entity_decode($row->description) ?></p>
                            </div>
                        </div>
                         @endforeach
                         @endif

                    </div>


                </div>


            </div>
        </section>
        <!-- End testimonials end -->
        <!-- Start Overview -->
        <section class="our-overview sec-padding">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="about-wd">
                               <?= html_entity_decode($contents->description) ?>
                        </div>
                         
                    </div>
                    <div class="col-md-6 col-sm-6">
                            <img src="{{url('assets/img/service/map.png')}}" class="mb-15-xs" alt="map">
                    </div>
                  </div>
                </div>
              </section>
        <!-- End Overview -->
        <!--Galery section Start-->
        
@endsection