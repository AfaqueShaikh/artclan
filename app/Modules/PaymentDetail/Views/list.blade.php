@extends('layouts.admin')
@section('title')
    View Payment
@endsection
@section('content')
    <ul class="breadcrumb">
        <li><a href="{{url('customer/dashboard')}}">Dashboard</a></li>
        <li><a href="javascript:void(0)">View Payment</a></li>
    </ul>

    @if(Session::has('success'))
        <span id="notification" data-type="success" data-msg="{{Session::get('success')}}"></span>
    @endif

    @if(Session::has('error'))
        <span id="notification_error" data-type="error" data-msg="{{Session::get('error')}}"></span>
    @endif
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>View Payment</h2>
                {{--<div class="pull-right">
                    <a href="{{url('/admin/testimonial/create')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
                </div>--}}
                <div class="clearfix"></div>

            </div>
            <div class="x_content">
                <table id="users" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Payment Id</th>
                        <th>Artist Name</th>
                        <th>Artist Mobile</th>
                        <th>Artist Category</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Bank Name</th>

                        {{--<th>Description</th>--}}

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
                ajax: "{{ url('/admin/payment/data') }}",
                columns: [
                    /*{data: 'image', name: 'image'},*/
                    {data: 'id', name: 'id'},
                    {data: 'payment_id', name: 'payment_id'},
                    {data: 'name', name: 'name'},
                    {data: 'mobile', name: 'mobile'},
                    {data: 'user_type', name: 'user_type'},
                    {data: 'txn_amount', name: 'txn_amount'},
                    /*{data: 'status', name: 'status'},*/
                    {data: "status",
                        render: function (data, type, row) {
                            if (type === 'display') {
                                if(row.status == 'TXN_SUCCESS')
                                {
                                    return '<label class="btn btn-success btn-xs">Success</label>';

                                }
                                else
                                {
                                    return '<label class="btn btn-danger btn-xs" >Failed</label>';
                                }
                            }
                            return data;
                        },
                        className: "dt-body-center",
                        orderable: false,
                        'defaultContent':'-'

                    },
                    {data: 'bank_name', name: 'bank_name'},


                    /*{data: 'description', name: 'description'},*/


                ]
            });
        });

        function confirmDelete(){
            if(confirm("Do you really want to delete this record"))
            {
                $('#delete').submit();
            }
        }
    </script>
@endsection