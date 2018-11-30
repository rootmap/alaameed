@extends('frontpage.layout.master')
@section('title','Home')
@section('content')
<!--Galery section Start-->
        <section class="gallery-3 sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-titleBar text-center">
                            <h3> Gallery</h3>
                            <p>Hotel analytics (BA) is the practice of iterative, methodical exploration of an
                                organization's data with emphasis on statistical analysis.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-section">
                @if(!empty($gallery))
                @foreach($gallery as $row=>$val)
                <figure class="gallery__item gallery__item--{{$row+1}} lightbox">
                    <a href="{{url('upload/download/'.$val->image)}}" class="tt-gallery-1 lightbox">
                        <img src="{{url('upload/download/'.$val->image)}}" alt="{{$val->title}}" class="gallery__img lightbox">
                        <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                @endforeach
                @endif
                


            </div>
        </section>
        <!--End of Galery section-->



        <!-- Start testimonials section -->
        <section class="testimonial-section-2 sec-padding">
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
                                    <img class="img-responsive" src="{{url('upload/business/'.$row->thumbnail)}}" alt="author">
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

        <!-- Start map section -->
        <section class="map-section">
                        <div class="our-location">
                            <div class="map"><iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Envato+Pty+Ltd,+Elizabeth+Street,+Melbourne,+Victoria,+Australia&amp;aq=0&amp;oq=envato+&amp;sll=37.0625,-95.677068&amp;sspn=39.235538,86.572266&amp;ie=UTF8&amp;hq=Envato+Pty+Ltd,&amp;hnear=Elizabeth+St,+Melbourne+Victoria+3000,+Australia&amp;ll=-37.817942,144.964977&amp;spn=0.01918,0.008866&amp;t=m&amp;output=embed"></iframe></div>
                        </div>
            <!-- End main content -->
        </section>
        <!-- End map section -->
@endsection