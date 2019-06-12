@extends('layouts.admin')
@section('title')
Create Recruiter
@endsection
@section('content')
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
<ul class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
    <li><a href="{{url('/admin/recruiter/list')}}">Manage Recruiter</a></li>
    <li><a href="javascript:void(0)">Create Recruiter</a></li>
</ul>
<div class="">
<div class="row">
<div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create Recruiter</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                      <div class="col-md-6 center-margin">
                          <form id="admin_create_recruiter_form" class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">
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
                                  <label>Company Name</label>
                                  <input class="form-control" type="text" id="company_name" name="company_name">
                                  @if ($errors->has('company_name'))
                                      <span><strong class="text-danger">{{ $errors->first('company_name') }}</strong></span>
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
                                  <label>User Type</label>
                                  <input type="text" class="form-control" name="user_type" value="3" readonly="">
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
                $('#admin_create_recruiter_form').validate({

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
                        company_name:{
                            required:true,
                        },
                        mobile:{
                            required:true,
                            remote: {
                                url: javascript_site_path + '/chk-mobile-duplicate/recruiter',
                                method: 'get'
                            }
                        },

                        password:{
                            required:true,
                        },
                        password_confirmation:{
                            required:true,
                            equalTo: "#password",
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
                        company_name:{
                            required:'Please Enter Your Company Name',
                        },
                        mobile:{
                            required:'Please Enter Your Mobile No',
                            remote:"Mobile Number Already Exits",
                        },

                        password:{
                            required:'Please Enter Password',
                        },
                        password_confirmation:{
                            required:'Please Confirm Password',
                            equalTo:'Confirm Password Should Be Same As Password',
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

