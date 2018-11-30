@extends('admin.layout.master')
@section('title','Business Unit')
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
                              <h4>Update Clients Unit Page</h4>
                              @else
                              <h4>Create Clients Unit Page</h4>
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
                                  action="{{url('admin/business/update/'.$data->id)}}" 
                                  @else
                                  action="{{url('admin/business/save')}}" 
                                  @endif
                                  method="post" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    @if(!empty($data))
                                      <input type="hidden" name="eximage" value="{{$data->thumbnail}}"> 
                                    @endif
                                    <input type="hidden" name="page_type" value="2">
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-sm-12 col-form-label" for="exampleName">Title</label>
                                         <div class="col-lg-8 col-md-9 col-sm-12">
                                            <input type="text" class="form-control" id="exampleName" aria-describedby="emailHelp" name="title" placeholder="Enter Title" @if(isset($data)) value="{{$data->title}}" @endif>
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-sm-12 col-form-label" for="exampleName">Thumbnail</label>
                                         <div class="col-lg-6 col-md-9 col-sm-12">
                                           @if(isset($data))
                                           <img src="{{url('upload/business/'.$data->thumbnail)}}" width="50%"> <br> <br>
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
      {{-- data list --}}
      <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Clients List </h4>
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
                                        <a href="{{url('admin/business/edit/'.$row->id)}}" class="btn btn-base btn-lm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <a href="{{url('admin/business/delete/'.$row->id.'/2')}}" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a> 
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