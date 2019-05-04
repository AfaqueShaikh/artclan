@extends('layouts.admin')
@section('title')
Update Featured Partner
@endsection
@section('content')
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
<ul class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
    <li><a href="{{url('/admin/featured-patner/list')}}">Manage Featured Partner</a></li>
    <li><a href="javascript:void(0)">Update Featured Partner</a></li>
</ul>
<div class="">
<div class="row">
<div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update Featured Partner</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                      <div class="col-md-6 center-margin">
                          <form class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <div class="form-group">
                                  <label>Image</label>
                                  <input class="form-control" type="file" name="image" id="image">
                                  @if ($errors->has('image'))
                                      <span><strong class="text-danger">{{ $errors->first('image') }}</strong></span>
                                  @endif
                              </div>

                              <div class="form-group">
                                  <label>Name</label>
                                  <input class="form-control" type="text" name="name" id="name" value="{{old('name',$featured_patner_data->name)}}">
                                  @if ($errors->has('name'))
                                      <span><strong class="text-danger">{{ $errors->first('name') }}</strong></span>
                                  @endif
                              </div>

                              <div class="form-group">
                                  <label>Url</label>
                                  <input class="form-control" type="text" name="url" id="url" value="{{old('url',$featured_patner_data->url)}}">
                                  @if ($errors->has('url'))
                                      <span><strong class="text-danger">{{ $errors->first('url') }}</strong></span>
                                  @endif
                              </div>

                              <div class="form-group">
                                <label>Description</label>
                              
                            <textarea name="description" id="description">{!!old('description',$featured_patner_data->description)!!}</textarea>
                            @if ($errors->has('description'))
                            <span><strong class="text-danger">{{ $errors->first('description') }}</strong></span>
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
@section('footer')
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>

@endsection

