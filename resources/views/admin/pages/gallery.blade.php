@extends('admin.layout.master')
@section('title','Gallery')
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
                              <h4>Update Gallery File Upload </h4>
                              @else
                              <h4>Create Gallery File Upload</h4>
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
                                  action="{{url('admin/gallery/update/'.$data->id)}}" 
                                  @else
                                  action="{{url('admin/gallery/save')}}" 
                                  @endif
                                  method="post" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    @if(isset($data))
                                      <input type="hidden" name="eximage" value="{{$data->image}}">
                                      <input type="hidden" name="exfile" value="{{$data->source_file}}">
                                    @endif
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-sm-12 col-form-label" for="exampleName">Title</label>
                                         <div class="col-lg-8 col-md-9 col-sm-12">
                                            <input type="text" class="form-control" id="exampleName" aria-describedby="emailHelp" name="title" placeholder="Enter Title" @if(isset($data)) value="{{$data->title}}" @endif>
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-sm-12 col-form-label" for="exampleName">Image</label>
                                         <div class="col-lg-8 col-md-9 col-sm-12">
                                           @if(isset($data))
                                           <img src="{{url('upload/download/'.$data->image)}}" width="50%"> <br> <br>
                                           @endif
                                          <input type="file" id="exampleInputFile" aria-describedby="fileHelp" name="image">
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
                        <h4>Gallery File Upload List </h4>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th style="width: 100px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($pagedata))
                                @foreach($pagedata as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->title}}</td>
                                    <td><img src="{{url('upload/download/'.$row->image)}}" width="20%" style="text-align: center"/></td>
                                    <td>
                                        <a href="{{url('admin/gallery/edit/'.$row->id)}}" class="btn btn-base btn-lm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <a href="{{url('admin/gallery/delete/'.$row->id)}}" class="btn btn-danger btn-lm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
<link href="{{url('theme/adminpix/assets/plugins/datatables/dataTables.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('theme/adminpix/assets/plugins/summernote/summernote.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('js')
<!-- DataTable Js -->
<script src="{{url('theme/adminpix/assets/plugins/datatables/dataTables.min.js')}}"></script>
<script src="{{url('theme/adminpix/assets/plugins/datatables/dataTables-active.js')}}"></script>
<!-- Summernote Js -->
<script src="{{url('theme/adminpix/assets/plugins/summernote/summernote.min.js')}}"></script>
<script src="{{url('theme/adminpix/assets/plugins/summernote/summernote-active.js')}}"></script>

@endsection