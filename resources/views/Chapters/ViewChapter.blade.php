@extends('layout/base')

@section('body-class', 'chat-application')
<?php $title = "subject ".$chapter->cSubject." chapter " . $chapter->cTitle; ?>
@section('title', $title)

@section('page-style')
    <!-- Page css files -->
    <link rel="stylesheet" href="{{ asset(mix('css/pages/app-chat.css')) }}">
@endsection

@section('content')
    <div class="content-area-wrapper" id="chat-window">

        <div class="container">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="727" height="409" src="https://www.youtube.com/embed/OnDr4J2UXSA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
            </div>
            <div>
                <h3>Description</h3>
                {{$chapter->cDescription}}
            </div>
            <br>
            <h3>Watched Video Ready For Quiz  ?</h3>
            <br>
            <a  href="{{route('quiz.view',['id'=>$chapter->id])}}" class="btn btn-danger btn-sm" href="#">Attempt Quiz!</a>

        </div>

    </div>
@endsection

@section('page-script')
    <!-- Page js files -->

@endsection