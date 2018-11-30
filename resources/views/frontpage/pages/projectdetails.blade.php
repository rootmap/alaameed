@extends('frontpage.layout.master')
@section('title','Home')
@section('content')
<style type="text/css">
    .h{
        padding: 10px;
        font-weight: 800;
        font-size: .8em;
        text-align: center;
        color: #153356;
    }
    .h a{
        /*background: rgba(255, 0, 0, 0.2);*/
       /* border: 1px black solid;*/
        display: block;
        padding: 20px;
        box-shadow:0px 10px 50px grey; 
        border-radius: 9px; 
        
    }
    .h img{
        height: 140px;
    }
    .h a:hover{
        /*border-bottom: 0.04em #153356 solid;*/
        border-radius: 2px;
        /*background: #153356;*/
    }
    
</style>
<!-- Start breadcumb section -->
        <section class="page-breadcrumb">
            <div class="page-section">
                <div class="breadcumb-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb text-center">
                                <div class="section-titleBar white-headline text-center">
                                    <h3>OUR PROJECT </h3>
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
                            <li>Company Projects Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcumb section -->

        <section class="offer-section sec-padding">
            <div class="container">
                <div class="row">
                    <h5>{{$profile->title}}</h5> 
                    <i>{{$profile->created_at}}</i>
                    <hr>
                    <p><?= html_entity_decode($profile->description) ?></p>
                    <img style="margin-top: 10px;" class="img-responsive" src="{{url('upload/business/'.$profile->thumbnail)}}" alt="author-img">
                    <hr>
                    
                </div>
                
            </div>
            <!-- End main content -->
        </section>
        <!-- End single room section -->
@endsection