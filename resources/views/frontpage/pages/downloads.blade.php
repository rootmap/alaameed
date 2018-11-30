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
                                    <h3>Download</h3>
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
                            <li>Download File</li>
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
                            <h3>Download PDF Files</h3>

                        </div>
                        <div class="questions">
                            <div id="accordion" role="tablist">
                                
                                	@if(!empty($Download))
                                    @foreach($Download as $row)
                                    <div class="toggle">
                                    <div class="toggle-heading" role="tab">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{$row->id}}" aria-expanded="false" aria-controls="collapseOne"> <i class="fa fa-plus"></i>{{$row->title}}<i class="fa fa-minus"></i></a>
                                    </div>
                                    <div id="collapseOne{{$row->id}}" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                        <div class="toggle-body">
                                           <a href="{{url('upload/download/'.$row->source_file)}}" target="_blank">
							               @if(!empty($row->image))
							                  <img src="{{url('upload/download/'.$row->image)}}" alt="{{$row->title}}"/>
							               @else
							                  <img src="{{url('theme/frontEnd/images/Archivo-PDF.jpg')}}" alt="{{$row->title}}"/>
							               @endif
							            </a> 
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