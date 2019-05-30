@extends('layouts.admin')
@section('title')
Create Contact Us
@endsection
@section('content')
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
<ul class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
    <li><a href="{{url('/admin/contactus/list')}}">Manage Contact Us</a></li>
    <li><a href="javascript:void(0)">Create Contact Us</a></li>
</ul>
<div class="">
<div class="row">
<div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create Contact Us</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                      <div class="col-md-6 center-margin">
                          <form class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <!-- <input type="file" name="csv[]" multiple> -->
                              <div class="form-group">
                                  <label>Image</label>
                                  <input class="form-control" type="file" name="image" id="image">
                                  @if ($errors->has('image'))
                                      <span><strong class="text-danger">{{ $errors->first('image') }}</strong></span>
                                  @endif
                              </div>

                                  <div class="form-group">
                                      <label>Category</label>
                                      <select class="form-control" id="category" name="category">
                                          <option value="">-- Select Category --</option>
                                          <option value="4">Writer</option>
                                          <option value="5">Painter</option>
                                          <option value="6">Singer</option>
                                          <option value="7">Dancer</option>
                                          <option value="8">Costume Designer</option>
                                          <option value="9">Makeup Artist</option>
                                          <option value="10">Photographer</option>
                                          <option value="11">Film Maker</option>
                                          <option value="12">Actor</option>
                                          <option value="13">Fashion Model</option>
                                      </select>
                                      @if ($errors->has('category'))
                                          <span><strong class="text-danger">{{ $errors->first('category') }}</strong></span>
                                      @endif
                                  </div>

                              <div class="form-group">
                                  <label>Email</label>
                                  <input class="form-control" type="email" name="email" id="email">
                                  @if ($errors->has('email'))
                                      <span><strong class="text-danger">{{ $errors->first('email') }}</strong></span>
                                  @endif
                              </div>

                                  <div class="form-group">
                                      <label>Phone Number</label>
                                      <input class="form-control" type="text" name="phone_number" id="phone_number">
                                      @if ($errors->has('phone_number'))
                                          <span><strong class="text-danger">{{ $errors->first('phone_number') }}</strong></span>
                                      @endif
                                  </div>

                              
                              
                              <div class="form-group">
                                <label>Message</label>
                              
                            <textarea name="message" id="message">{!!old('message')!!}</textarea>
                            @if ($errors->has('message'))
                            <span><strong class="text-danger">{{ $errors->first('message') }}</strong></span>
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
    CKEDITOR.replace( 'message' );
</script>

@endsection


