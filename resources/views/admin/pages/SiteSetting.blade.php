@extends('admin.layout.master')
@section('title','Site Setting')
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
                              @if(isset($data))
                              <h4>Update Site Setting</h4>
                              @else
                              <h4>Create Site Setting</h4>
                              @endif
                          </div>
                      </div>
                      <div class="panel-body">
                          <div class="row">
                              <div class="col-md-6 col-md-offset-3">
                                  @include('admin.include.msg')
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-2">
                                  <form 
                                  @if(isset($data))
                                  action="{{url('admin/site/setting/update/'.$data->id)}}" 
                                  @else
                                  action="{{url('admin/site/setting/save')}}" 
                                  @endif
                                  method="post"  enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    @if(!empty($data))<input type="hidden" name="eximage" value="{{$data->logo}}"> @endif
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-sm-12 col-form-label" for="exampleName">Site Name</label>
                                         <div class="col-lg-8 col-md-9 col-sm-12">
                                            <input type="text" class="form-control" id="exampleName" aria-describedby="emailHelp" name="name" placeholder="Enter Your Site Name" @if(isset($data)) value="{{$data->name}}" @endif>
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-sm-12 col-form-label" for="exampleName">Image</label>
                                         <div class="col-lg-6 col-md-9 col-sm-12">
                                           @if(isset($data))
                                           <img src="{{url('upload/SiteSetting/'.$data->logo)}}" width="50%"> <br> <br>
                                           @endif
                                          <input type="file" id="exampleInputFile" aria-describedby="fileHelp" name="logo">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-sm-12 col-form-label" for="exampleName">Email</label>
                                         <div class="col-lg-8 col-md-9 col-sm-12">
                                            <input type="text" class="form-control" id="exampleName" aria-describedby="emailHelp" name="email" placeholder="Enter Your Email Address" @if(isset($data)) value="{{$data->email}}" @endif>
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-sm-12 col-form-label" for="exampleName">Contact Number</label>
                                         <div class="col-lg-8 col-md-9 col-sm-12">
                                          <input type="text" class="form-control" id="exampleName" aria-describedby="emailHelp" name="phone_number" placeholder="Enter Your Contact Number" @if(isset($data)) value="{{$data->phone_number}}" @endif>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-sm-12 col-form-label" for="exampleName">Address</label>
                                         <div class="col-lg-8 col-md-9 col-sm-12">
                                          <textarea id="summernote" placeholder="Enter Your Office Address" name="address">@if(isset($data)) {{$data->address}} @endif</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-sm-12 col-form-label" for="exampleName">Open & Close Time</label>
                                         <div class="col-lg-8 col-md-9 col-sm-12">
                                          <textarea class="summernote" placeholder="Enter Your opan_close" name="opan_close">@if(isset($data)) {{$data->opan_close}} @endif</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                      <div class="col-lg-6 col-md-9 col-sm-12">
                                        <button type="submit" class="btn btn-base pull-right">Submit</button>
                                      </div>
                                    </div>
                                </form>
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
<link href="{{url('assets/adminpix/assets/plugins/summernote/summernote.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('js')
<!-- Summernote Js -->
<script src="{{url('assets/adminpix/assets/plugins/summernote/summernote.min.js')}}"></script>
<script src="{{url('assets/adminpix/assets/plugins/summernote/summernote-active.js')}}"></script>
<script type="text/javascript">
  $('.summernote').summernote({
    //airMode: true,
    placeholder: 'write here...'
  });
  $('#summernote').summernote({
    placeholder: 'Enter Your Office Address...'
  });
</script>
@endsection