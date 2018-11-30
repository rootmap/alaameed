@extends('admin.layout.master')
@section('title','Contents')
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
                              <h4>Update Contents </h4>
                              @else
                              <h4>Create Contents</h4>
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
                                  action="{{url('admin/content/update/'.$data->id)}}" 
                                  @else
                                  action="{{url('admin/content/save')}}" 
                                  @endif
                                  method="post">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="page_type" value="1">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-sm-12 col-form-label" for="exampleName">POSETIVE FEEDBACK</label>
                                         <div class="col-lg-8 col-md-9 col-sm-12">
                                            <input type="text" class="form-control" id="exampleName" aria-describedby="emailHelp" name="posetive" placeholder="Enter Title" @if(isset($data)) value="{{$data->posetive}}" @endif>
                                          </div>
                                    </div>
                                     <div class="form-group row">
                                        <label class="col-lg-3 col-sm-12 col-form-label" for="exampleName">INTERNATIONAL JOBS</label>
                                         <div class="col-lg-8 col-md-9 col-sm-12">
                                            <input type="text" class="form-control" id="exampleName" aria-describedby="emailHelp" name="jobs" placeholder="Enter Title" @if(isset($data)) value="{{$data->jobs}}" @endif>
                                          </div>
                                    </div>
                                     <div class="form-group row">
                                        <label class="col-lg-3 col-sm-12 col-form-label" for="exampleName">SUCCESSFUL PROJECT</label>
                                         <div class="col-lg-8 col-md-9 col-sm-12">
                                            <input type="text" class="form-control" id="exampleName" aria-describedby="emailHelp" name="success" placeholder="Enter Title" @if(isset($data)) value="{{$data->success}}" @endif>
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-sm-12 col-form-label" for="exampleName">Content</label>
                                         <div class="col-lg-8 col-md-9 col-sm-12">
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