@extends('frontpage.layout.master')
@section('title','Home')
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
                                    <h3> SERVICES</h3>
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
                            <li>Our Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcumb section -->
<!-- Start welcome section -->
        <section class="our-overview-2 sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="">
                            <h3>OUR SERVICES</h3>
                            <p>Integer placerat arcu quis sem aliquet tempor. Maecenas in dictum arcu. Curabitur cursus est libero, id accumsan sapien ullamcorper quis. Pellentesque imperdiet mi quis volutpat facilisis. In facilisis sit amet lacus ut convallis. Aenean congue porta dolor, in rutrum orci. In id lacinia ligula.</p>

                        </div>
                        <div class="questions">
                            <div id="accordion" role="tablist">
                                
                                	@if(!empty($services))
                                    @foreach($services as $rows)
                                    <div class="toggle">
                                    <div class="toggle-heading" role="tab">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{$rows->id}}" aria-expanded="false" aria-controls="collapseOne"> <i class="fa fa-plus"></i>{{$rows->service_type}}<i class="fa fa-minus"></i></a>
                                    </div>
                                    <div id="collapseOne{{$rows->id}}" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                        <div class="toggle-body">
                                           <p><?= html_entity_decode($rows->description) ?></p> 
                                        </div>
                                    </div>
                                </div>
                                    @endforeach
                                    @endif

                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>
        <!-- End welcome section -->
@endsection