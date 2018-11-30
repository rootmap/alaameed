@extends('frontpage.layout.master')
@section('title','Service Details')
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
                                    <h3>Service</h3>
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
                            <li>{{$services[0]->service_type}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcumb section -->

        <!-- Start welcome section -->
        <section class="about-section sec-padding">
            <div class="container">
                
                <div class="row">
                    <div class="about-whoweare">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="about-content mrb">
                                        @if(!empty($services))
                                        <h4>{{$services[0]->title}}</h4>
                                         @foreach($services as $rows)
                                        <p><?= html_entity_decode($rows->description) ?></p>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End main content -->
                    </div>
                </div>
            </div>
            <!-- End main content -->
        </section>
        <!-- End welcome section -->

        

        <!-- Start testimonials section -->
        <section class="testimonial-section-2 sec-padding bg-color">
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
                        <div class="item">
                            <blockquote>
                                <div class="icon-holder">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>

                                </div>
                                <?= html_entity_decode($row->description) ?>
                            </blockquote>
                            <div class="testimonials-author">
                                <div class="author-img">
                                    <img class="img-responsive" src="{{url('upload/business/'.$row->thumbnail)}}" alt="author-img">
                                </div>
                                <h5>{{$row->title}}</h5>
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                            </div>

                        </div>
                        @endforeach
                         @endif
                        
                        

                    </div>


                </div>


            </div>
        </section>
        <!-- End testimonials end -->
@endsection