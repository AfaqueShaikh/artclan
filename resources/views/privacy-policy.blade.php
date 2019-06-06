@extends('layouts.app')

@section('content')

<section class="cmsBanner" style="background-image: url('{{url('public/image/1.jpg')}}');">
    <div class="cmsCaption">
        <h2>Privacy & Policy</h2>
    </div>
    <div class="cmsBreadcrumb">
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="active">Privacy & Policy</li>
        </ol>
    </div>
</section>
<!-------------About Us-------------->
<section class="faqsPage">
    <div class="container-fluid">
        <div class="row">
            <div class="faqsContainer termsCondition clearfix">
                <div class="faqAnswers">
                    {!! $privacy_policy_data->value  !!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('jcontent')
    @endsection