@extends('layouts.admin')
@section('title')
Update Recruiter
@endsection
@section('content')
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
<ul class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
    <li><a href="{{url('admin/user/list')}}">Manage Recruiter </a></li>
    <li><a href="javascript:void(0)">Update Recruiter</a></li>
</ul>
<div class="">
<div class="row">
<div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update Recruiter</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                      <div class="col-md-6 center-margin">
                          <form class="form-horizontal form-label-left" id="admin_update_recruiter_form" action="" method="post" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <input type="hidden" name="recruiter_id" id="recruiter_id" value="{{$user->id}}" >
                              <div class="form-group">
                                  <label>Name</label>
                                  <input class="form-control" type="text" value="{{$user->name}}" name="name">
                                  @if ($errors->has('name'))
                                      <span><strong class="text-danger">{{ $errors->first('name') }}</strong></span>
                                  @endif
                              </div>
                              <div class="form-group">
                                  <label>Email</label>
                                  <input class="form-control" type="email" name="email" placeholder="{{$user->email}}">
                                  <span class="text text-warning">Note: Enter email if you want to change</span>
                                  @if ($errors->has('email'))
                                      <span><strong class="text-danger">{{ $errors->first('email') }}</strong></span>
                                  @endif
                              </div>
                              <div class="form-group">
                                  <label>Company Name</label>
                                  <input class="form-control" type="text" name="company_name" value="{{$user->company_name}}">
                                  @if ($errors->has('company_name'))
                                      <span><strong class="text-danger">{{ $errors->first('company_name') }}</strong></span>
                                  @endif
                              </div>
                              <div class="form-group">
                                  <label>Password</label>
                                  <input class="form-control" type="password" name="password">
                                  <span class="text text-warning">Note: Enter password if you want to change</span>
                                  @if ($errors->has('password'))
                                      <span><strong class="text-danger">{{ $errors->first('password') }}</strong></span>
                                  @endif
                              </div>
                              <div class="form-group">
                                  <label>Confirm Password</label>
                                  <input class="form-control" type="password" name="password_confirmation">
                                  <span class="text text-warning">Note: Enter password if you want to change</span>
                                  @if ($errors->has('password_confirmation'))
                                      <span><strong class="text-danger">{{ $errors->first('password_confirmation') }}</strong></span>
                                  @endif
                              </div>
                              <div class="form-group form-group has-feedback">
                                  <label>Mobile</label>
                                  <input class="form-control" type="number" name="mobile" placeholder="{{$user->mobile}}">
                                  <span class="text text-warning">Note: Enter mobile if you want to change</span>
                                  @if ($errors->has('mobile'))
                                      <span><strong class="text-danger">{{ $errors->first('mobile') }}</strong></span>
                                  @endif
                              </div>
                              <div class="form-group">
                                  <label>City</label>
                                  <input class="form-control" type="text" name="city" value="{{$user->city}}">
                                  @if ($errors->has('city'))
                                      <span><strong class="text-danger">{{ $errors->first('city') }}</strong></span>
                                  @endif
                              </div>


                              <div class="form-group">
                                  <label>User Type</label>
                                  <input class="form-control" type="text" name="user_type" value="{{$user->user_type}}"  readonly="">
                                  
                                  @if ($errors->has('email'))
                                      <span><strong class="text-danger">{{ $errors->first('email') }}</strong></span>
                                  @endif
                              </div>
                              <div class="form-group">
                                  <label>Status</label>
                                  <input type="radio" name="status" value="1" @if($user->user_status == 1) checked @endif>Active
                                  <input type="radio" name="status" value="0" @if($user->user_status == 0) checked @endif>Inactive
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
</div>
@endsection
@section('footer')
    <script>
        $(function () {
            var javascript_site_path = '{{url('/')}}';
            $('#admin_update_recruiter_form').validate({

                errorClass:'text-danger',
                rules:{
                    name:{
                        required:true,
                    },
                    city:{
                        required:true,
                    },
                    /*email:{
                        required:true,
                    },*/
                    company_name:{
                        required:true,
                    },
                    mobile:{
                        //required:true,
                        remote: {
                            url: javascript_site_path + '/chk-mobile-update-duplicate/recruiter',
                            data:
                                { id: function() {
                                    return $('#recruiter_id').val();
                                }
                                },
                            method: 'get'
                        }
                    },

                    /*password:{
                        required:true,
                    },
                    password_confirmation:{
                        required:true,
                        equalTo: "#password",
                    },*/


                } ,
                messages:{
                    name:{
                        required:'Please Enter Your Name',
                    },
                    city:{
                        required:'Please Enter City',
                    },
                    /*email:{
                        required:'Please Enter Your Email Id',
                    },*/
                    company_name:{
                        required:'Please Enter Your Company Name',
                    },
                    mobile:{
                        //required:'Please Enter Your Mobile No',
                        remote:"Mobile Number Already Exits",
                    },

                    /*password:{
                        required:'Please Enter Password',
                    },
                    password_confirmation:{
                        required:'Please Confirm Password',
                        equalTo:'Confirm Password Should Be Same As Password',
                    }*/

                },
                submitHandler:function(form)
                {
                    form.submit();
                }

            });
        })



    </script>
@endsection

