@extends('admin.layout.master')
@section('title','services')
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
                              <h4>Update services Page</h4>
                              @else
                              <h4>Create services Page</h4>
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
                                  action="{{url('admin/service/update/'.$data->id)}}" 
                                  @else
                                  action="{{url('admin/service/save')}}" 
                                  @endif
                                  method="post">
                                    {!! csrf_field() !!}
                                    <?php 
                                    $selected = "selected";
                                    ?>
                                    <input type="hidden" name="page_type" value="3">
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-sm-12 col-form-label" for="exampleName">Service Type</label>
                                         <div class="col-lg-8 col-md-9 col-sm-12">
                                            <select class="form-control" id="exampleName" name="service_type">
                                              <option>Select Option</option>

                                              <option @if(isset($data)) @if($data->service_type=="Manpower Supply") {{$selected}} @endif @endif value="Manpower Supply">Manpower Supply</option>

                                              <option @if(isset($data)) @if($data->service_type=="Operation & Maintenance") {{$selected}} @endif @endif value="Operation & Maintenance">Operation & Maintenance</option>

                                              <option @if(isset($data)) @if($data->service_type=="Construction Worker") {{$selected}} @endif @endif
                                                value="Construction Worker">Construction Worker</option>

                                              <option @if(isset($data)) @if($data->service_type=="Cleaning Worker") {{$selected}} @endif @endif value="Cleaning Worker">Cleaning Worker</option>

                                              <option @if(isset($data)) @if($data->service_type=="IT & Security Solution") {{$selected}} @endif @endif value="IT & Security Solution">IT & Security Solution</option>

                                              <option @if(isset($data)) @if($data->service_type=="Industrial Workers") {{$selected}} @endif @endif value="Industrial Workers">Industrial Workers</option>
                                            </select>
                                          </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-2 col-sm-12 col-form-label" for="exampleName">Title</label>
                                         <div class="col-lg-8 col-md-9 col-sm-12">
                                            <input type="text" class="form-control" id="exampleName" aria-describedby="emailHelp" name="title" placeholder="Enter Title" @if(isset($data)) value="{{$data->title}}" @endif>
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
      {{-- data list --}}
      <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>services List </h4>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th style="width: 100px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($pagedata))
                                @foreach($pagedata as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->title}}</td>
                                    <td>
                                        <a href="{{url('admin/service/edit/'.$row->id)}}" class="btn btn-base btn-lm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                         <a href="{{url('admin/service/delete/'.$row->id.'/3')}}" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>

                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- data list end --}}
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