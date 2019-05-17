@extends('layouts.admin')
@section('title')
Contact Us
@endsection
@section('content')
<ul class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
    <li><a href="javascript:void(0)">Manage Contact Us</a></li>
</ul>
   <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Manage Contact Us</h2>
                      <div class="pull-right">
                          <a href="{{url('/admin/add-contact-request')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
                      </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  @if(Session::has('success'))
                        <span id="notification" data-type="success" data-msg="{{Session::get('success')}}"></span>
                    @endif
                    <table id="users" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                        <th>Category</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Reply</th>
                        <th>Status</th>
                        <th>Action</th>
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
        ajax: "{{ url('/admin/contactus/data') }}",
        columns: [
            {data: 'category', name: 'category'},
            {data: 'email', name: 'email'},
            {data: 'message', name: 'message'},
            {data: 'reply', name: 'reply'},
            {data: 'status', name: 'status'},
            {data: "reply",
                render: function (data, type, row) {
                    if (type === 'display') {
                        return '<a class="btn btn-primary btn-xs" href="{{url("admin/contactus/reply/")}}/' + row.id + '"><i class="fa fa-reply"></i> Reply</a>';
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