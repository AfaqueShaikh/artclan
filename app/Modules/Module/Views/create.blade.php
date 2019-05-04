@extends('layouts.admin')
@section('title')
Module
@endsection
@section('content')
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
<ul class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
    <li><a href="{{url('admin/module/list')}}">Manage Module</a></li>
    <li><a href="javascript:void(0)">Create Module</a></li>
</ul>
@if(Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        {{Session::get('error')}}
    </div>
@endif
<div class="">
<div class="row">
<div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create Module</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                      <div class="col-md-6 center-margin">
                          <form class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <div class="form-group">
                                  <label>Copy Of Module</label>
                                  <select class="form-control" name="model_copy">
                                      <option value="">None</option>
                                      @foreach($modules as $module)
                                      <option value="{{$module}}">{{$module}}</option>
                                      @endforeach
                                  </select>
                                  @if ($errors->has('module'))
                                      <span><strong class="text-danger">{{ $errors->first('module') }}</strong></span>
                                  @endif
                              </div>
                              
                              <div class="form-group">
                                  <label>Module Name</label>
                                  <input class="form-control" type="text" name="module" value="{{old('module')}}">
                                  @if ($errors->has('module'))
                                      <span><strong class="text-danger">{{ $errors->first('module') }}</strong></span>
                                  @endif
                              </div>

                              <div class="ln_solid"></div>

                              <div class="form-group">
                                  <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-5">
                                      <button type="submit" class="btn btn-success">Submit</button>
                                  </div>
                              </div>

                          </form>
                    </div>
                  </div>
                </div>
              </div>
</div>
@endsection

