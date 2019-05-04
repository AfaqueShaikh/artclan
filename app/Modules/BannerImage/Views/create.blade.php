@extends('layouts.admin')
@section('title')
Create Banner Image
@endsection
@section('content')
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
<ul class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
    <li><a href="{{url('/admin/banner/list')}}">Manage Banner Images</a></li>
    <li><a href="javascript:void(0)">Create Banner Image</a></li>
</ul>
<div class="">
<div class="row">
<div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create Banner Image</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                      <div class="col-md-6 center-margin">
                          <form class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <!-- <input type="file" name="csv[]" multiple> -->
                              <div class="form-group">
                                  <label>Banner Image</label>
                                  <input class="form-control" type="file" name="banner_image" id="banner_image">
                                  @if ($errors->has('banner_image'))
                                      <span><strong class="text-danger">{{ $errors->first('banner_image') }}</strong></span>
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

