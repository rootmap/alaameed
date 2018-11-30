@extends('admin.layout.master')
@section('title','Dashboard')
@section('content')
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Main content -->
      <div class="content">
          <div class="row">
              <div class="col-sm-12 col-md-12">
                  <div class="panel panel-bd lobidrag">
                      <div class="panel-heading">
                          <div class="panel-title">
                            <h4>Dashboard</h4>
                          </div>
                      </div>
                      <div class="panel-body">
                          
                      	<div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
                            <strong>welcome to: </strong> {{$data->name}} , Mobile:{{$data->phone_number}} ,E-mail:{{$data->email}} 
                        </div>

                        <p><?= html_entity_decode($data->opan_close) ?> </p>

                            <div class="row stat_area">
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <div class="statistic-box dash2">
                                    	<a style="color: #ffffff" href="{{url('admin/site/setting')}}">
                                    		<i class="ti-world statistic_icon"></i>
	                                        <div class=small>Site Setting </div>
	                                        <h2><span class=count-number>GO</span> </h2>
	                                        <div class="sparkline3 text-center"></div>
                                    	</a>
                                    </div>
                                </div>
                                
                                <div class="col-xs-4 hidden-sm col-md-4 col-lg-4">
                                    <div class="statistic-box dash2">
                                    	<a style="color: #ffffff" href="{{url('admin/slider')}}">
	                                        <i class="ti-world statistic_icon"></i>
	                                        <div class=small>Slider</div>
	                                        <h2><span class=count-number>GO</span> </h2>
	                                        <div class="sparkline2 text-center"></div>
                                    	</a>
                                    </div>
                                </div>

                                <div class="col-xs-4 hidden-sm col-md-4 col-lg-4">
                                    <div class="statistic-box dash2">
                                    	<a style="color: #ffffff" href="{{url('admin/about')}}">
                                        <i class="ti-world statistic_icon"></i>
                                        <div class=small>About Us</div>
                                        <h2><span class=count-number>GO</span> </h2>
                                        <div class="sparkline2 text-center"></div>
                                    </a>
                                    </div>
                                </div>



                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <div class="statistic-box dash2">
                                    	<a style="color: #ffffff" href="{{url('admin/business')}}">
                                        <i class="ti-server statistic_icon"></i>
                                        <div class=small>Clients </div>
                                        <h2><span class=count-number>GO</span></h2>
                                        <div class="sparkline3 text-center"></div>
                                    </a>
                                    </div>
                                </div>
                                
                                <div class="col-xs-4 hidden-sm col-md-4 col-lg-4">
                                    <div class="statistic-box dash2">
                                    	<a style="color: #ffffff" href="{{url('admin/projects')}}">
                                        <i class="ti-server statistic_icon"></i>
                                        <div class=small>Projects</div>
                                        <h2><span class=count-number>GO</span></h2>
                                        <div class="sparkline2 text-center"></div>
                                    </a>
                                    </div>
                                </div>

                                <div class="col-xs-4 hidden-sm col-md-4 col-lg-4">
                                    <div class="statistic-box dash2">
                                    	<a style="color: #ffffff" href="{{url('admin/service')}}">
                                        <i class="ti-server statistic_icon"></i>
                                        <div class=small>Services</div>
                                        <h2><span class=count-number>GO</span></h2>
                                        <div class="sparkline2 text-center"></div>
                                    </a>
                                    </div>
                                </div>



                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <div class="statistic-box dash2">
                                    	<a style="color: #ffffff" href="{{url('admin/gallery')}}">
                                        <i class="ti-bag statistic_icon"></i>
                                        <div class=small>Gallery </div>
                                        <h2><span class=count-number>GO</span></h2>
                                        <div class="sparkline3 text-center"></div>
                                    </a>
                                    </div>
                                </div>
                                
                                <div class="col-xs-4 hidden-sm col-md-4 col-lg-4">
                                    <div class="statistic-box dash2">
                                    	<a style="color: #ffffff" href="{{url('admin/content')}}">
                                        <i class="ti-bag statistic_icon"></i>
                                        <div class=small>Contents</div>
                                        <h2><span class=count-number>GO</span></h2>
                                        <div class="sparkline2 text-center"></div>
                                    </a>
                                    </div>
                                </div>

                                <div class="col-xs-4 hidden-sm col-md-4 col-lg-4">
                                    <div class="statistic-box dash2">
                                    	<a style="color: #ffffff" href="{{url('admin/profile')}}">
                                        <i class="ti-bag statistic_icon"></i>
                                        <div class=small>Profile</div>
                                        <h2><span class=count-number>GO</span> </h2>
                                        <div class="sparkline2 text-center"></div>
                                    </a>
                                    </div>
                                </div>


                            </div>
                             
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
  </div>    
</div> <!-- ./wrapper -->
<!-- START CORE PLUGINS -->
        
@endsection

@section('css')
<link href="{{url('assets/adminpix/assets/plugins/datatables/dataTables.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('assets/adminpix/assets/plugins/summernote/summernote.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('js')
<!-- DataTable Js -->
<script src="{{url('assets/adminpix/assets/plugins/datatables/dataTables.min.js')}}"></script>
<script src="{{url('assets/adminpix/assets/plugins/datatables/dataTables-active.js')}}"></script>
<!-- Summernote Js -->
<script src="{{url('assets/adminpix/assets/plugins/summernote/summernote.min.js')}}"></script>
<script src="{{url('assets/adminpix/assets/plugins/summernote/summernote-active.js')}}"></script>

@endsection