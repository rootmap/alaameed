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
                                    <h3>OUR CLIENTS</h3>
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
                            <li>OUR CLIENTS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcumb section -->

        <section class="offer-section sec-padding">
            <div class="container">
                <div class="row">
<h5>Clients</h5>
<p>* We have the privilege of working with some of the most well known companies in Saudi Arabia and the world.</p> <hr>
                    @if(!empty($business))
                    @foreach($business as $row)
                   <div class="col-md-2 col-sm-3 h">
                       
                           <a class="" title="{{$row->title}}">
                               <img src="{{url('upload/business/'.$row->thumbnail)}}" alt="tour-img">
                           </a>
                       
                   </div>
                   @endforeach
                @endif
                </div>
                
            </div>
            <!-- End main content -->
        </section>
        <!-- End single room section -->
@endsection