<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="{{url('public/js/jquery.js')}}"></script>
    <script src="{{url('public/js/jquery-ui.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Dynamic Tabs</h2>
    <p>To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
        <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
        <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
        <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
    </ul>

    <div class="tab-content">
        {{--<form action ="{{ route('register') }}" method="POST" enctype="multipart/form-data">--}}

        <div id="home" class="tab-pane in active fade">
            <h3>First Step</h3>

                {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="mobile" class="col-md-2 control-label">Name</label>
                <div class="col-md-10">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" >
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <br>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="mobile" class="col-md-2 control-label">Email</label>
                <div class="col-md-10">
                    <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" >
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <br>

            <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                <label for="mobile" class="col-md-2 control-label">Mobile</label>
                <div class="col-md-10">
                    <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" >
                    @if ($errors->has('mobile'))
                        <span class="help-block">
                            <strong>{{ $errors->first('mobile') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <br>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="mobile" class="col-md-2 control-label">Password</label>
                <div class="col-md-10">
                    <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" >
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <button class="btn btn-primary" id="btn_first_step" data-toggle="tab" href="#menu1">Next</button>
        </div>
            <br>
            <br>
        <div id="menu1" class="tab-pane in  fade ">
            <h3>Second Step</h3>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="mobile" class="col-md-2 control-label">Select Category</label>
                <div class="col-md-10">
                    <select id="category" class="form-control" name="category" id="category" >
                        <option> -- Select Category --</option>
                        <option value="4">Writer</option>
                        <option value="5">Painter</option>
                        <option value="6">Singer</option>
                        <option value="7">Dancer</option>
                        <option value="8">Costume Designer</option>
                        <option value="9">Makeup Artist</option>
                        <option value="10">Photographer</option>
                        <option value="11">Film Maker</option>
                        <option value="12">Actor</option>
                        <option value="13">Fashion Model</option>
                    </select>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <button class="btn btn-primary" data-toggle="tab" href="#home">Previous</button>
            <button class="btn btn-primary" id="btn_second_step" data-toggle="tab" href="#menu2">Next</button>
            <br>
            <br>
        </div>
        <div id="menu2" class="tab-pane in  fade">
            <h3>Third Step</h3>
            <div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                <label for="mobile" class="col-md-2 control-label">Date of Birth</label>
                <div class="col-md-10">
                    <input id="date_of_birth" type="date" class="form-control" name="date_of_birth" value="{{ old('date_of_birth') }}" >
                    @if ($errors->has('date_of_birth'))
                        <span class="help-block">
                            <strong>{{ $errors->first('date_of_birth') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="mobile" class="col-md-2 control-label">Language Known</label>
                <div class="col-md-10">
                    <input  type="checkbox" class="language" name="language[]" value="hindi" >Hindi<br>
                    <input  type="checkbox" class="language" name="language[]" value="marathi" >Marathi<br>
                    <input  type="checkbox" class="language" name="language[]" value="english" >English<br>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <br>
            <br>
            <button class="btn btn-primary" data-toggle="tab" href="#menu1">Previous</button>
            <button class="btn btn-primary" data-toggle="tab" id="btn_third_step" href="#menu3">Next</button>
        </div>

        <div id="menu3" class="tab-pane in fade">
            <h3>Fourth Step</h3>
            <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                <label for="mobile" class="col-md-2 control-label">Where Are You Located ?</label>
                <div class="col-md-10 location-div">
                   {{-- <input type="radio" name="location" value="pune" > Pune<br>
                    <input type="radio" name="location" value="mumbai" > Mumbai<br>
                    <input type="radio" name="location" value="delhi" > Delhi<br>
                    <input type="radio" name="location" value="kolkata" > Kolkata<br>
                    <input type="radio" name="location" value="chennai" > Chennai<br>
                    <input type="radio" name="location" value="bangloar" > Bangloar<br>
                    <input type="text" name="search_location" id="search_location">--}}

                    @if ($errors->has('location'))
                        <span class="help-block">
                            <strong>{{ $errors->first('location') }}</strong>
                        </span>
                    @endif
                </div>
                <input type="hidden" name="form_type" id="form_type" value="artist_form">
                <input type="text" id="search_location" name="search_location" placeholder="Search Location">
            </div>
            <br>
            <br><br>
            <br>.
            .
            .

            <div class="form-group{{ $errors->has('all') ? ' has-error' : '' }}">
                <label for="mobile" class="col-md-2 control-label">Where Are You Available For Work ?</label>

                <input id="all" type="checkbox" class="" name="all" value="{{ old('all') }}" >Any where in india<br>
                <div class="col-md-10 work-location">
                    {{--<input id="all" type="checkbox" class="" name="all" value="{{ old('all') }}" required>Any where in india<br>
                    <input id="mumbai" type="checkbox" class="" name="mumbai" value="{{ old('mumbai') }}" required>mumbai<br>
                    <input id="pune" type="checkbox" class="" name="pune" value="{{ old('pune') }}" required>pune<br>--}}

                    @if ($errors->has('all'))
                        <span class="help-block">
                            <strong>{{ $errors->first('all') }}</strong>
                        </span>
                    @endif
                </div>
                <input type="text" name="search_work_location" id="search_work_location">
            </div>
            <input type="submit" name="submit_btn" id="submit_btn" value="Submit">
            <br>
            <br>
            <button class="btn btn-primary" data-toggle="tab" href="#menu2">Previous</button>
            <button class="btn btn-primary" id="btn_submit" >Submit</button>
        </div>
        {{--</form>--}}

    </div>
</div>

<script>
    var registerData = {};
</script>

<script>
    $(function () {
        getLocation();
        getLocationWork();

    });

    $('#btn_first_step').click(function () {
        registerData.name = $('#name').val();
        registerData.email = $('#email').val();
        registerData.mobile = $('#mobile').val();
        registerData.mobile = $('#password').val();
        //console.log(registerData);
    });

    $('#btn_second_step').click(function () {
        registerData.category = $('#category').val();
    });

    $('#btn_third_step').click(function () {
        var lang_string = '';
        var lang = [];
        $.each($("input[name='language[]']:checked"), function(){
            lang.push($(this).val());
        });
        lang_string = lang.toString();
        //console.log(lang_string);
        registerData.date_of_birth = $('#date_of_birth').val();
        /*registerData.language = lang;*/
        registerData.language = lang_string;

       //console.log(registerData);
    });

    $('#btn_submit').click(function () {

        registerData.location = $("input[name='location']:checked").val()

        //console.log($("input[name='location']:checked").val());
        var available_to_work = '';
        var working = [];
        $.each($("input[name='location_work[]']:checked"), function(){
            working.push($(this).val());
        });
        available_to_work = working.toString();
        //console.log(available_to_work);

        /*registerData.available_to_work = working;*/
        registerData.available_to_work = available_to_work;
        registerData.form_type = $('#form_type').val();
        console.log(registerData);

        $.ajax({
            url: '{{url("/register")}}',
            method: "POST",
            dataType: 'json',
            data: registerData,
            success: function (result) {
                var html_div = '';
                console.log(result);
                if((result.length == 0))
                {
                    $(".work-location").html('');
                    html_div = "Not Found";
                    $('.work-location').html(html_div);
                }
                else
                {
                    $(".work-location").html('');
                    $.each(result, function (index, value) {

                        html_div += '<input type="checkbox" name="location_work[]" value='+value.name+' >'+value.name;
                        html_div += '<br>';

                    });

                    $('.work-location').append(html_div);
                }
            }
        });



    });


    $('#search_location').keyup(function () {
        $(".location-div").html('');
        getLocation();
    });

    $('#search_work_location').keyup(function () {
        $(".work-location").html('');
        getLocationWork();
    });

    function getLocationWork()
    {
        $.ajax({
            url: '{{url("/get/location")}}',
            method: "GET",
            dataType: 'json',
            data: {
                name: $('#search_work_location').val(),
            },
            success: function (result) {
                var html_div = '';
                console.log(result);
                if((result.length == 0))
                {
                    $(".work-location").html('');
                    html_div = "Not Found";
                    $('.work-location').html(html_div);
                }
                else
                {
                    $(".work-location").html('');
                    $.each(result, function (index, value) {

                        html_div += '<input type="checkbox" name="location_work[]" value='+value.name+' >'+value.name;
                        html_div += '<br>';

                    });

                    $('.work-location').append(html_div);
                }
            }
        });
    }

    function getLocation()
    {
        $.ajax({
            url: '{{url("/get/location")}}',
            method: "GET",
            dataType: 'json',
            data: {
                name: $('#search_location').val(),
            },
            success: function (result) {
                var html_div = '';
                $(".location-div").html('');
                console.log(result);
                if((result.length == 0))
                {
                    html_div = "Not Found";
                    $('.location-div').html(html_div);
                }
                else
                {
                    $(".location-div").html('');
                    $.each(result, function (index, value) {

                        html_div += '<input type="radio" class="location" name="location" value='+value.name+' >'+value.name;
                        html_div += '<br>';
                    });

                    $('.location-div').append(html_div);
                }

            }
        });
    }

</script>



</body>
</html>
