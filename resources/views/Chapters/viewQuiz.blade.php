@extends('layout/base')

@section('body-class', 'chat-application')
@section('title', 'Quizzes')

@section('page-style')
    <!-- Page css files -->
    <link rel="stylesheet" href="{{ asset(mix('css/pages/app-chat.css')) }}">
@endsection

@section('content')
    <div class="content-area-wrapper" id="chat-window">

        <div class="container">

            <h3> Please Answer All of these Questions </h3>
            @foreach($quizzes as $quiz)
            <div>
                  <br>
                  <h3>  {{$quiz->quiz_question}}</h3>
                  <input type="radio" name="quiz1" value="a"> An Iteration
                  <br>
                  <input  type="radio" name="quiz1" value="b"> A Condition Statment
                  <br>
                  <input  type="radio" name="quiz1" value="c"> A variable <br>
                  <input type="radio" name="quiz1" value="d"> None of these <br>
            </div>
            @endforeach

            <br>
            <input type="submit" value="Submit Quiz" class="btn btn-danger">
            </div>

    </div>
@endsection

@section('page-script')
    <!-- Page js files -->

@endsection