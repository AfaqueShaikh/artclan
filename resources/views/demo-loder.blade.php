@extends('layouts.app')

@section('content')

    <style>
        .center {
            display: inline-block;
            margin: 100px;
            width: 50px;
            height: 20px;
            float:right;
        }
    </style>

    <div class="center">
    <div class="circlechart"
         data-percentage="80">
        80%
    </div>
    </div>

@endsection

@section('jcontent')
    <script>

        $(function(){

            $('.circlechart').circlechart();

        });


    </script>
    @endsection