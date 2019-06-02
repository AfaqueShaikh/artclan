@extends('layouts.admin')
@section('title')
    Artist Of The Week
@endsection
@section('content')

<ul class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}">{{__('user.Dashboard')}}</a></li>
    <li><a href="javascript:void(0)">Artist Of The Week</a></li>
</ul>

@if(Session::has('success'))
    <span id="notification" data-type="success" data-msg="{{Session::get('success')}}"></span>
@endif

   <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Artist Of The Week</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      
                      <form action="{{url('admin/set/artist-of-the-day/'.Request::Segment(5))}}" method="get"> 
                        <table id="users" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                            <th>{{__('user.Id')}}</th>
                            <th>{{__('user.Name')}}</th>
                            
                        </tr>
                      </thead>
                    </table>
                          
                          <input type="submit" value="Set Artist Of The Week" id="set_artist_of_day_btn" class="btn btn-primary" disabled>
                          </form>
					
					
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
        ajax: "{{ url('admin/user/manage/artist-of-the-day/data/'.Request::segment(5))}}",
        columns: [
            {data: "id",
                render: function (data, type, row) {
                    if (type === 'display') {
                        if(row.artist_of_the_day=='1')
                        return '<input class="artist_check" checked value="'+row.id+'" name="artist[]" type="radio" class="check_box">';
                        else
                        return '<input class="artist_check"  value="'+row.id+'" name="artist[]" type="radio" class="check_box">';
                    }
                    return data;
                },
                className: "dt-body-center",
                orderable: false,
            },
            {data: 'name', name: 'name'},
            
        ]
    });
});

$(function () {
    if($('.artist_check').prop("checked") == true){

        alert("Checkbox is checked.");
    }

});

$('body').on('click','.artist_check',function () {
    if($('.artist_check').is(":checked") == true){

        $('#set_artist_of_day_btn').prop('disabled' ,false);
    }
    else
    {
        $('#set_artist_of_day_btn').prop('disabled' ,true);
    }

})

$('.artist_check').click(function(){


    if($(this).is(":checked") == true){

        alert("Checkbox is checked.");

    }
});



function confirmDelete(id){
    if(confirm("Do you really want to delete this record"))
    {
        $('#delete_'+id).submit();
    }
}

$(function(){
    
    setTimeout(function(){
        
    $(".check_box").click(function(){
//
//        var data = [];
//        
//        $(".check_box:checked").each(function(index, obj){
//            data.push(obj);
//        });
//        
//        var url = "{{url('/admin/set/artist-of-the-day')}}";
//       $.ajax({
//        url: url,
//        type: 'post',
//        data: {data: data},
//        success: function(data) {
//            }
//        });
});

}, 3000);
});

</script>
@endsection

