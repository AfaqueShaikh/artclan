@extends('layouts.admin')
@section('title')
    Manage Artist Request For Recruiter Account
@endsection
@section('content')
<ul class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
    <li><a href="javascript:void(0)">Manage Artist Request For Recruiter Account</a></li>
</ul>
   <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Manage Artist Request For Recruiter Account</h2>
                      {{--<div class="pull-right">
                          <a href="{{url('/admin/add-contact-request')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
                      </div>--}}
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  @if(Session::has('success'))
                        <span id="notification" data-type="success" data-msg="{{Session::get('success')}}"></span>
                    @endif
                    <table id="users" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                        <th>Id</th>
                            <th>Artist Id</th>
                        <th>Artist Name</th>
                            <th>Artist Email</th>
                            <th>Artist Mobile No</th>
                            <th>Artist Category</th>
                            <th>Approve</th>
                        <th>Reject</th>
                        </tr>
                      </thead>
                    
                    </table>
					
					
                  </div>
                </div>
              </div>
@endsection
@section('footer')
<script src="{{url('/public/backend/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('#users').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('/admin/artist-recruiter/data') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'artist_id', name: 'artist_id'},
            {data: 'artist_name', name: 'artist_name'},
            {data: 'artist_email', name: 'artist_email'},
            {data: 'artist_mobile_no', name: 'artist_mobile_no'},
            {data: 'artist_category', name: 'artist_category'},
            /*{data: 'artist_requirement', name: 'artist_requirement'},
            {data: 'reply', name: 'reply'},*/

            {data: "approve",
                render: function (data, type, row) {
                    if (type === 'display') {
                        if(row.request_status == 'Pending')
                        {
                            return '<a class="btn btn-success btn-xs" href="{{url("admin/approve-artist-recruiter-request/")}}/' + row.id + '"><i class="fa fa-check-square-o"></i> Approve</a>';

                        }
                        else
                        {
                            return '<a class="btn btn-success btn-xs" href="javascript:void(0)"><i class="fa fa-check-square-o"></i> Approved</a>';

                        }
                    }
                    return data;
                },
                className: "dt-body-center",
                orderable: false,
                'defaultContent':'-'

            },
            {data: "reject",
                render: function (data, type, row) {
                    if (type === 'display') {
                        return '<a class="btn btn-danger btn-xs" href="javascript:void(0)"><i class="fa fa-times"></i> Reject</a>';
                    }
                    return data;
                },
                className: "dt-body-center",
                orderable: false,
                'defaultContent':'-'

            }
        ]
    });
});
</script>
@endsection