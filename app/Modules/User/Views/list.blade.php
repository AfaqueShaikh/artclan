@extends('layouts.admin')
@section('title')
{{__('user.Manage_'.Request::segment(4))}}
@endsection
@section('content')



<ul class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}">{{__('user.Dashboard')}}</a></li>
    <li><a href="javascript:void(0)">{{__('user.Manage_'.Request::segment(4))}}</a></li>
</ul>

@if(Session::has('success'))
    <span id="notification" data-type="success" data-msg="{{Session::get('success')}}"></span>
@endif

   <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{{__('user.Manage_'.Request::segment(4))}}</h2>
                      <div class="pull-right">
                          <a href="{{url('admin/user/create/'.Request::segment(4))}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> {{__('user.addnew')}}</a>
                          <a href="{{url('admin/user/manage/artist-of-the-day/'.Request::segment(4))}}" class="btn btn-primary"> Manage Artist Of The Day</a>
                      </div>
                    <div class="clearfix"></div>

                  </div>
                  <div class="x_content">
                        <table id="users" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                            <th>{{__('user.Id')}}</th>
                        <th>{{__('user.Name')}}</th>
                        <th>{{__('user.Email')}}</th>
                        <th>{{__('user.Mobile')}}</th>
                        <th>{{__('user.Status')}}</th>
                            <th>Login</th>
                        <th>{{__('user.Update')}}</th>
                        <th>{{__('user.Delete')}}</th>
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
        ajax: "{{ url('admin/user/data/'.Request::segment(4))}}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'mobile', name: 'mobile'},

            {data: "status",
                render: function (data, type, row) {
                    if (type === 'display') {
                        if(row.user_status == 1)
                        {
                            return '<form id="status_'+row.id+'" method="post" action="{{url("change/user/status")}}/' + row.id +'"> {{ method_field("POST") }}  {!! csrf_field() !!}<button type="button" class="btn btn-warning btn-xs" onclick="confirmStatus('+row.id+')" ><i class="fa fa-lock"></i> In Active</a></form>';
                        }
                        else
                        {
                            return '<form id="status_'+row.id+'" method="post" action="{{url("change/user/status")}}/' + row.id +'"> {{ method_field("POST") }}  {!! csrf_field() !!}<button type="button" class="btn btn-success btn-xs" onclick="confirmStatus('+row.id+')" ><i class="fa fa-lock"></i> Active</a></form>';
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
                        return '<a class="btn btn-danger btn-xs" href="{{url("login/by/admin")}}/' + btoa(row.id) + '"><i class="fa fa-lock"></i> Login</a>';
                    }
                    return data;
                },
                className: "dt-body-center",
                orderable: false,
            },
            {data: "update",
                render: function (data, type, row) {
                    if (type === 'display') {
                        return '<a class="btn btn-primary btn-xs" href="{{url("admin/user/update/")}}/' + row.id + '"><i class="fa fa-pencil"></i> Edit</a>';
                    }
                    return data;
                },
                className: "dt-body-center",
                orderable: false,
            },
            {data: "delete",
                render: function (data, type, row) {
                    if (type === 'display') {
                        return '<form id="delete_'+row.id+'" method="post" action="{{url("admin/user/delete")}}/' + row.id +'"> {{ method_field("DELETE") }} {!! csrf_field() !!}<button type="button" class="btn btn-danger btn-xs" onclick="confirmDelete('+row.id+')"><i class="fa fa-trash"></i> Delete</a></form>';
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

