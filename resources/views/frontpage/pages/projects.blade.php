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
                                    <h3>OUR PROJECT</h3>
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
                            <li>Company Projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcumb section -->

        <section class="offer-section sec-padding">
            <div class="container">
                <div class="row">
                    <h5>Projects</h5> <hr>
                    @if(!empty($profile))
                    @foreach($profile as $row)
                   <div class="col-md-2 col-sm-3 h">
                       <a href="{{url('projectsdetails/'.$row->id)}}" title="{{$row->title}}">
                           <img src="{{url('upload/business/'.$row->thumbnail)}}" alt="tour-img">
                       </a>
                       {{$row->title}}
                   </div>
                   @endforeach
                @endif
                </div>
                
            </div>
            <!-- End main content -->
        </section>
        <!-- End single room section -->
@endsection