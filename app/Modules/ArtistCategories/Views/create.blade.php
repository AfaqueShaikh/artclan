@extends('layouts.admin')
@section('title')
Taluka
@endsection
@section('content')
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
<ul class="breadcrumb">
    <li><a href="{{url('customer/dashboard')}}">Dashboard</a></li>
    <li><a href="{{url('admin/artist/list')}}">Manage Artists Category</a></li>
    <li><a href="javascript:void(0)">Manage Artists Category</a></li>
    <li><a href="javascript:void(0)">Create Category</a></li>
</ul>
<div class="">
<div class="row">
<div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create Category</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                      <div class="col-md-6 center-margin">
                          <form class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">
                              {{ csrf_field() }}
                            
                              <div class="form-group">
                                  <label>Category Name</label>
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
                getDistricts();
            }});
    }
    function getDistricts()
        {
            var state = $('#state').val();
            $('#district').html('');
            $.ajax({
                url: "get/district",
                method:'GET',
                data:{
                    state : state
                },
                success: function(result){
                    for(var i =0; i < result.length; i++)
                    {
                        $('#district').append('<option value="'+result[i].id+'">'+result[i].name+'</option>');
                    }
                }});
        }
</script>
@endsection

