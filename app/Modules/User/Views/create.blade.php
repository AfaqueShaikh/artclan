@extends('layouts.admin')
@section('title')
{{__('user.Create_'.Request::segment(4))}}
@endsection
@section('content')
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
<ul class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
    <li><a href="{{url('admin/user/list/'.Request::segment(4))}}">{{__('user.Manage_'.Request::segment(4))}}</a></li>
    <li><a href="javascript:void(0)">{{__('user.Create_'.Request::segment(4))}}</a></li>
</ul>
<div class="">
<div class="row">
<div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{{__('user.Create_'.Request::segment(4))}}</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                      <div class="col-md-6 center-margin">
                          <form id="admin_create_artist_form" class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <div class="form-group">
                                  <label>Name</label>
                                  <input class="form-control" type="text" id="name" name="name">
                                  @if ($errors->has('name'))
                                      <span><strong class="text-danger">{{ $errors->first('name') }}</strong></span>
                                  @endif
                              </div>
                              <div class="form-group">
                                  <label>Email</label>
                                  <input class="form-control" type="email" id="email" name="email">
                                  @if ($errors->has('email'))
                                      <span><strong class="text-danger">{{ $errors->first('email') }}</strong></span>
                                  @endif
                              </div>
                              <div class="form-group">
                                  <label>Password</label>
                                  <input class="form-control" type="password" id="password" name="password">
                                  @if ($errors->has('password'))
                                      <span><strong class="text-danger">{{ $errors->first('password') }}</strong></span>
                                  @endif
                              </div>
                              <div class="form-group">
                                  <label>Confirm Password</label>
                                  <input class="form-control" type="password" id="password_confirmation" name="password_confirmation">
                                  @if ($errors->has('password_confirmation'))
                                      <span><strong class="text-danger">{{ $errors->first('password_confirmation') }}</strong></span>
                                  @endif
                              </div>
                              <div class="form-group form-group has-feedback">
                                  <label>Mobile</label>
                                  <input class="form-control" type="number" id="mobile" name="mobile">
                                  @if ($errors->has('mobile'))
                                      <span><strong class="text-danger">{{ $errors->first('mobile') }}</strong></span>
                                  @endif
                              </div>
                              <div class="form-group">
                                  <label>City</label>
                                  <input class="form-control" type="text" id="city" name="city">
                                  @if ($errors->has('city'))
                                      <span><strong class="text-danger">{{ $errors->first('city') }}</strong></span>
                                  @endif
                              </div>
                              <div class="form-group">
                                  <label>State</label>
                                  <input class="form-control" type="text" id="state" name="state">
                                  @if ($errors->has('state'))
                                      <span><strong class="text-danger">{{ $errors->first('state') }}</strong></span>
                                  @endif
                              </div>
                              <div class="form-group">
                                  <label>Address</label>
                                  <textarea class="form-control" id="address" name="address"></textarea>
                                  @if ($errors->has('address'))
                                      <span><strong class="text-danger">{{ $errors->first('address') }}</strong></span>
                                  @endif
                              </div>
                              
                              <div class="form-group">
                                  <label>User Type</label>
                                  <input type="text" class="form-control" name="user_type" value="{{Request::segment(4)}}" readonly="">
                                  @if ($errors->has('user_type'))
                                      <span><strong class="text-danger">{{ $errors->first('user_type') }}</strong></span>
                                  @endif
                              </div>
                              
                              <div class="form-group">
                                  <label>Status</label>
                                  <input type="radio" name="status" value="1" checked>Active
                                  <input type="radio" name="status" value="0">Inactive
                              </div>
                              <div class="ln_solid"></div>

                              <div class="form-group">
                                  <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-5">
                                      <input type="submit" class="btn btn-success" value="Submit">
                                  </div>
                              </div>

                          </form>
                    </div>
                  </div>
                </div>
              </div>
</div>
</div>


@endsection

@section('footer')
        <script>
            $(function () {
                var javascript_site_path = '{{url('/')}}';
                $('#admin_create_artist_form').validate({

                    errorClass:'text-danger',
                    rules:{
                        name:{
                            required:true,
                        },
                        city:{
                            required:true,
                        },
                        email:{
                            required:true,
                        },
                        mobile:{
                            required:true,
                            remote: {
                                url: javascript_site_path + '/chk-mobile-duplicate',
                                method: 'get'
                            }
                        },
                        state:{
                            required:true,
                        },
                        password:{
                            required:true,
                        },
                        password_confirmation:{
                            required:true,
                            equalTo: "#password",
                        },
                        address:{
                            required:true,
                        },

                    } ,
                    messages:{
                        name:{
                            required:'Please Enter Your Name',
                        },
                        city:{
                            required:'Please Enter City',
                        },
                        email:{
                            required:'Please Enter Your Email Id',
                        },
                        mobile:{
                            required:'Please Enter Your Mobile No',
                            remote:"Mobile Number Already Exits",
                        },
                        state:{
                            required:'Please Enter State',
                        },
                        password:{
                            required:'Please Enter Password',
                        },
                        password_confirmation:{
                            required:'Please Confirm Password',
                            equalTo:'Confirm Password Should Be Same As Password',
                        },
                        address:{
                            required:'Please Enter Address',
                        }
                    },
                    submitHandler:function(form)
                    {

                        form.submit();

                    }

                });
            })



        </script>
@endsection

