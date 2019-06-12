@extends('layouts.admin')
@section('title')
Manage Recruiter
@endsection
@section('content')



<ul class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
    <li><a href="javascript:void(0)">Manage Recruiter</a></li>
</ul>

@if(Session::has('success'))
    <span id="notification" data-type="success" data-msg="{{Session::get('success')}}"></span>
@endif

   <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Manage Recruiter</h2>

                      <div class="pull-right">
                          <a href="{{url('admin/recruiter/create')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
                      </div>

                    <div class="clearfix"></div>

                  </div>
                  <div class="x_content">
                        <table id="users" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                            <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile No</th>
                        <th>Status</th>
                            <th>Login</th>
                        <th>Update</th>
                        <th>Delete</th>
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
        ajax: "{{ url('admin/recruiter/data')}}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'mobile', name: 'mobile'},

            {data: "status",
                render: function (data, type, row) {
                    if (type === 'display') {
                        if(row.user_status == 0)
                        {
                            return '<form id="status_'+row.id+'" method="post" action="{{url("change/recruiter/status")}}/' + row.id +'"> {{ method_field("POST") }}  {!! csrf_field() !!}<button type="button" class="btn btn-warning btn-xs" onclick="confirmStatus('+row.id+')" ><i class="fa fa-lock"></i> In Active</a></form>';
                        }
                        else
                        {
                            return '<form id="status_'+row.id+'" method="post" action="{{url("change/recruiter/status")}}/' + row.id +'"> {{ method_field("POST") }}  {!! csrf_field() !!}<button type="button" class="btn btn-success btn-xs" onclick="confirmStatus('+row.id+')" ><i class="fa fa-lock"></i> Active</a></form>';
                        }
                    }
                    return data;
                },
                className: "dt-body-center",
                orderable: false,
            },
            {data: "login",
                render: function (data, type, row) {
                    if (type === 'display') {
                        return '<a class="btn btn-danger btn-xs" href="{{url("recruiter/login/by/admin")}}/' + btoa(row.id) + '"><i class="fa fa-lock"></i> Login</a>';
                    }
                    return data;
                },
                className: "dt-body-center",
                orderable: false,
            },
            {data: "update",
                render: function (data, type, row) {
                    if (type === 'display') {
                        return '<a class="btn btn-primary btn-xs" href="{{url("admin/recruiter/update/")}}/' + row.id + '"><i class="fa fa-pencil"></i> Edit</a>';
                    }
                    return data;
                },
                className: "dt-body-center",
                orderable: false,
            },
            {data: "delete",
                render: function (data, type, row) {
                    if (type === 'display') {
                        return '<form id="delete_'+row.id+'" method="post" action="{{url("admin/recruiter/delete")}}/' + row.id +'"> {{ method_field("DELETE") }} {!! csrf_field() !!}<button type="button" class="btn btn-danger btn-xs" onclick="confirmDelete('+row.id+')"><i class="fa fa-trash"></i> Delete</a></form>';
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

function confirmDelete(id){
    if(confirm("Do you really want to delete this record"))
    {
        $('#delete_'+id).submit();
    }
}

function confirmStatus(id){

    $('#status_'+id).submit();
    /*if(confirm("Are You Sure"))
    {
        $('#status_'+id).submit();
    }*/
}
</script>
@endsection

