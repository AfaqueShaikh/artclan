@extends('layouts.admin')
@section('title')
    Update Banner Image
@endsection
@section('content')
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <ul class="breadcrumb">
        <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
        <li><a href="{{url('/admin/banner/list')}}">Manage Banner Image</a></li>
        <li><a href="javascript:void(0)">Update Banner Image</a></li>
    </ul>
    <div class="">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Update Banner Image</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        <div class="col-md-6 center-margin">
                            <form class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Banner Image</label>
                                    <input class="form-control" type="file" name="banner_image" id="banner_image">
                                    @if ($errors->has('banner_image'))
                                        <span><strong class="text-danger">{{ $errors->first('banner_image') }}</strong></span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Button Position</label>
                                    <select class="form-control" type="text" name="button_position" id="button_position">
                                        <option value=""> -- Select Position -- </option>
                                        <option value="top" @if($banner_image->button_position == 'top')selected @endif>Top</option>
                                        <option value="middle" @if($banner_image->button_position == 'middle')selected @endif>Middle</option>
                                        <option value="down" @if($banner_image->button_position == 'down')selected @endif>Down</option>
                                    </select>
                                    @if ($errors->has('button_position'))
                                        <span><strong class="text-danger">{{ $errors->first('button_position') }}</strong></span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Button Text</label>
                                    <input class="form-control" type="text" name="button_text" id="button_text" value="{{old('button_text',$banner_image->button_text)}}">
                                    @if ($errors->has('button_text'))
                                        <span><strong class="text-danger">{{ $errors->first('button_text') }}</strong></span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Button URL</label>
                                    <input class="form-control" type="text" name="button_url" id="button_url" value="{{old('button_url',$banner_image->button_url)}}">
                                    @if ($errors->has('button_url'))
                                        <span><strong class="text-danger">{{ $errors->first('button_url') }}</strong></span>
                                    @endif
                                </div>

                                <input class="" type="checkbox" name="show_button" id="show_button" value="1" @if($banner_image->show_button == 1) checked @endif>
                                <label>Show Button</label>

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

