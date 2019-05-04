@extends('layouts.admin')
@section('title')
Update Blog
@endsection
@section('content')
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
<ul class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
    <li><a href="{{url('/admin/blog/list')}}">Manage Blog</a></li>
    <li><a href="javascript:void(0)">Update Blog</a></li>
</ul>
<div class="">
<div class="row">
<div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update Blog</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                      <div class="col-md-6 center-margin">
                          <form class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              

                              <div class="form-group">
                                  <label>Title</label>
                                  <input class="form-control" type="text" name="title" id="title" value="{{old('title',$blog_data->title)}}">
                                  @if ($errors->has('title'))
                                      <span><strong class="text-danger">{{ $errors->first('title') }}</strong></span>
                                  @endif
                              </div>

                              <div class="form-group">
                                  <label>Slug</label>
                                  <input class="form-control" type="text" name="slug" id="slug" value="{{old('slug',$blog_data->slug)}}">
                                  @if ($errors->has('slug'))
                                      <span><strong class="text-danger">{{ $errors->first('slug') }}</strong></span>
                                  @endif
                              </div>

                             

                              <div class="form-group">
                                <label>Body</label>
                              
                            <textarea name="body" id="body">{!!old('body',$blog_data->body)!!}</textarea>
                            @if ($errors->has('body'))
                            <span><strong class="text-danger">{{ $errors->first('body') }}</strong></span>
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
    CKEDITOR.replace( 'body' );
</script>

@endsection

