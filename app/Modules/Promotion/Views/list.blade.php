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
                    <button id="send_to_all_btn" class="btn btn-primary"> Send To All</button>
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
    <div class="modal fade" id="myModal"  role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Promotion Message</h4>
                </div>
                <div class="modal-body">
                    {{--<p>Some text in the modal.</p>--}}
                    <form id="promotional_message_form">

                        <input type="hidden" id="selected_mobile_number">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="name-label">Enter Message</label>
                                    <textarea id="promotional_text" name="promotional_text">{!!old('promotional_text')!!}</textarea>
                                    @if ($errors->has('promotional_text'))
                                        <span>
                                            <strong>{{ $errors->first('promotional_text') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="form-group">
                        <center><button id="promtional_message_send_btn" type="submit" class="btn btn-success"> <i id="promtional_message_send_btn_spin" class="fa fa fa-comment"></i> Send</button></center>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('footer')
    <script src="{{url('/public/backend/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'promotional_text' );
    </script>

    <script type="text/javascript">

       /* var mobile_number_arr = [];
        var mobile_numbers = '';*/
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

        /*function to check and uncheck checkox*/
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

        /*function to send message using ajax call*/
        function sendMessage(number , message)
        {
            $.ajax({
                url: '{{url("/send/promotional/message")}}',
                method: "POST",
                dataType: 'json',
                data: {
                    mobile_number : number,
                    message: message
                },
                success: function (result) {
                    console.log(result);

                    $('#promtional_message_send_btn').attr('disabled',false);
                    $('#promtional_message_send_btn_spin').removeClass('fa fa-spinner fa-spin');
                    $('#promtional_message_send_btn_spin').addClass('fa fa fa-comment');
                    $('#selected_mobile_number').val('');
                    CKEDITOR.instances['promotional_text'].setData('');
                    $('#myModal').modal('hide');
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

        /*function to send message to selected user*/
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
                var mobile_numbers = '';
                $.each($("input[name='send_message']:checked"), function(){

                    mobile_number_arr.push($(this).val());
                });
                mobile_numbers = mobile_number_arr.toString();
                //console.log(mobile_numbers);
                $('#selected_mobile_number').val('');
                CKEDITOR.instances['promotional_text'].setData('');
                $('#selected_mobile_number').val(mobile_numbers);
                $('#myModal').modal('show');


            }
            else
            {
                alert('Please select user to send message')
            }


        });

        /*validating message box*/
        $('#promotional_message_form').validate({
            errorClass:'text-danger',
            ignore: [],
            debug: false,
            rules:{

                promotional_text:{
                    required: function()
                    {
                        CKEDITOR.instances.promotional_text.updateElement();
                    },


                }
            },
            messages:{
                promotional_text:{
                    required:"Please Enter Message",
                }
            },
            submitHandler:function (form) {

            }
        });

        /*sending message*/
        $('#promtional_message_send_btn').click(function () {
            if($('#promotional_message_form').valid())
            {

                $('#promtional_message_send_btn').attr('disabled',true);
                $('#promtional_message_send_btn_spin').removeClass('fa fa fa-comment');
                $('#promtional_message_send_btn_spin').addClass('fa fa-spinner fa-spin');
                var number = $('#selected_mobile_number').val();
                var message = CKEDITOR.instances['promotional_text'].getData();
                sendMessage(number , message)

            }
        });




        /*function to send message to particular user*/
        $('body').on('click','.send_message_individual_button',function () {
            //$(this).attr('disabled',true);
            //$(this).find('.send_message_individual_button_spin').removeClass('fa fa fa-comment').addClass('fa fa-spinner fa-spin');
            var mobile_number = $(this).attr('data-attribute');
            $('#selected_mobile_number').val('');
            CKEDITOR.instances['promotional_text'].setData('');
            $('#selected_mobile_number').val(mobile_number);
            $('#myModal').modal('show');

        });

    </script>
@endsection