@extends('admin.layout.master')
@section('title','Company Projects')
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
                              <h4>Update Company Projects Page</h4>
                              @else
                              <h4>Create Company Projects Page</h4>
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
                              <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                                  <form 
                                  @if(isset($data))
                                  action="{{url('admin/profile/update/'.$data->id)}}" 
                                  @else
                                  action="{{url('admin/profile/save')}}" 
                                  @endif
                                  method="post" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    @if(!empty($data))
                                      <input type="hidden" name="eximage" value="{{$data->thumbnail}}"> 
                                    @endif
                                    <input type="hidden" name="page_type" value="5">
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-sm-12 col-form-label" for="exampleName">Title</label>
                                         <div class="col-lg-8 col-md-9 col-sm-12">
                                            <input type="text" class="form-control" id="exampleName" aria-describedby="emailHelp" name="title" placeholder="Enter Title" @if(isset($data)) value="{{$data->title}}" @endif>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-sm-12 col-form-label" for="exampleName">File </label>
                                         <div class="col-lg-6 col-md-9 col-sm-12">
                                           @if(isset($data))
                                           <a href="{{url('upload/business/'.$data->thumbnail)}}">{{$data->title}}</a>
                                           <br> <br>
                                           @endif
                                          <input type="file" id="exampleInputFile" aria-describedby="fileHelp" name="thumbnail">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-sm-12 col-form-label" for="exampleName">Content</label>
                                         <div class="col-lg-10 col-md-9 col-sm-12">
                                          <textarea id="summernote" placeholder="Enter Your Contents" name="description">@if(isset($data)) {{$data->description}} @endif</textarea>
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