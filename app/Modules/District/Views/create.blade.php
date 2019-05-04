@extends('layouts.admin')
@section('title')
District
@endsection
@section('content')
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
<ul class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
    <li><a href="{{url('admin/district/list')}}">Manage District</a></li>
    <li><a href="javascript:void(0)">Create District</a></li>
</ul>
<div class="">
<div class="row">
<div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create District</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                      <div class="col-md-6 center-margin">
                          <form class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <div class="form-group">
                                  <label>Country</label>
                                  <select name="country" class="form-control" onchange="getState()" id="country">
                                      @foreach($countries as $country)
                                          <option value="{{$country->id}}">{{$country->name}}</option>
                                      @endforeach
                                  </select>
                                  @if ($errors->has('country'))
                                      <span><strong class="text-danger">{{ $errors->first('country') }}</strong></span>
                                  @endif
                              </div>
                              <div class="form-group">
                                  <label>State</label>
                                  <select name="state" class="form-control" id="state">
                                  </select>
                                  @if ($errors->has('state'))
                                      <span><strong class="text-danger">{{ $errors->first('state') }}</strong></span>
                                  @endif
                              </div>
                              <div class="form-group">
                                  <label>District Name</label>
                                  <input class="form-control" type="text" name="name">
                                  @if ($errors->has('name'))
                                      <span><strong class="text-danger">{{ $errors->first('name') }}</strong></span>
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
        <script>
            $(document).ready(function(){
                getState();
            });
            function getState()
            {
                var country = $('#country').val();
                $('#state').html('');
                $.ajax({
                    url: "get/state",
                    method:'GET',
                    data:{
                        country : country
                    },
                    success: function(result){
                        for(var i =0; i < result.length; i++)
                        {
                            $('#state').append('<option value="'+result[i].id+'">'+result[i].name+'</option>');
                        }
                    }});
            }
        </script>
@endsection