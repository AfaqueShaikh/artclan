@extends('layouts.admin')
@section('title')
    Manage Promotion
@endsection
@section('content')
    <ul class="breadcrumb">
        <li><a href="{{url('customer/dashboard')}}">Dashboard</a></li>
        <li><a href="javascript:void(0)">Manage Promotion</a></li>
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
                <h2>Manage Promotion</h2>
                <div class="pull-right">
                    <button id="send_to_all_btn" class="btn btn-primary"><i id="send_to_all_btn_spin" class="fa fa fa-comment"></i> Send To All</button>
                </div>
                <div class="clearfix"></div>

            </div>
            <div class="x_content">
                <table id="users" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th><input type="checkbox" id="send_message_all" ></th>
                        {{--<th>Id</th>--}}
                        <th>Name</th>
                        <th>Contact Number</th>
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
                ajax: "{{ url('/admin/promotion-user/data') }}",
                columns: [
                    /*{data: 'image', name: 'image'},*/
                    {data: "checkbox",
                        render: function (data, type, row) {
                            if (type === 'display') {

                                return '<input class="checkboxes" type="checkbox"  id="send_message'+row.id+'" name="send_message" value="'+row.mobile+'">';
                            }
                            return data;
                        },
                        className: "dt-body-center",
                        orderable: false,
                        'defaultContent':'-'
                    },
                    /*{data: 'id', name: 'id'},*/
                    {data: 'name', name: 'name'},
                    {data: 'mobile', name: 'mobile'},

                    /*{data: 'description', name: 'description'},*/
                    {data: "update",
                        render: function (data, type, row) {
                            if (type === 'display') {
                                return '<button class="btn btn-primary btn-xs send_message_individual_button" data-attribute="'+row.mobile+'"><i id="send_message_individual_button_spin" class="fa fa-comment send_message_individual_button_spin "></i> Send Message</button>';
                            }
                            return data;
                        },
                        className: "dt-body-center",
                        orderable: false,
                        'defaultContent':'-'
                    },

                ]
            });
        });

        function confirmDelete(){
            if(confirm("Do you really want to delete this record"))
            {
                $('#delete').submit();
            }
        }

        $('#send_message_all').click(function () {

            if($('.checkboxes'). prop("checked") == true)
            {
                $( ".checkboxes" ).prop( "checked", false );
            }
            else
            {
                $( ".checkboxes" ).prop( "checked", true );
            }
        });

        function sendMessage(mobile_number)
        {
            $.ajax({
                url: '{{url("/send/promotional/message")}}',
                method: "POST",
                dataType: 'json',
                data: {
                    mobile_number : mobile_number,
                },
                success: function (result) {
                    console.log(result);

                    //for send to all button
                    $('#send_to_all_btn').attr('disabled',false);
                    $('#send_to_all_btn_spin').removeClass('fa fa-spinner fa-spin');
                    $('#send_to_all_btn_spin').addClass('fa fa fa-comment');

                    //for send to individual button
                    $('.send_message_individual_button').attr('disabled',false);
                    $('.send_message_individual_button_spin').removeClass('fa fa-spinner fa-spin');
                    $('.send_message_individual_button_spin').addClass('fa fa fa-comment');
                    new PNotify({
                        title: result.type.charAt(0).toUpperCase() + result.type.substr(1),
                        type: result.type,
                        text: result.msg,
                        nonblock: {
                            nonblock: true
                        },
                        styling: 'bootstrap3',
                    });

                }
            })
        }

        $('#send_to_all_btn').click(function () {

            var flag=0;
            $(".checkboxes").each(function()
            {
                if($(this).is(":checked"))
                {
                    flag=1;
                }

            });
            if(flag == 1)
            {
                var mobile_number_arr = [];
                $.each($("input[name='send_message']:checked"), function(){

                    mobile_number_arr.push($(this).val());
                });
                console.log(mobile_number_arr);
                $('#send_to_all_btn').attr('disabled',true);
                $('#send_to_all_btn_spin').removeClass('fa fa fa-comment');
                $('#send_to_all_btn_spin').addClass('fa fa-spinner fa-spin');
                sendMessage(mobile_number_arr);

            }
            else
            {
                alert('Please select user to send message')
            }


        });




        $('body').on('click','.send_message_individual_button',function () {
            $(this).attr('disabled',true);
            $(this).find('.send_message_individual_button_spin').removeClass('fa fa fa-comment').addClass('fa fa-spinner fa-spin');
            var mobile_number = new Array($(this).attr('data-attribute'));
            sendMessage(mobile_number);
        });

    </script>
@endsection