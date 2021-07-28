@extends('layout/base')

@section('body-class', 'chat-application')
@section('title', 'Chapters')

@section('page-style')
    <!-- Page css files -->
    <link rel="stylesheet" href="{{ asset(mix('css/pages/app-chat.css')) }}">
@endsection

@section('content')
    <div class="content-area-wrapper" id="chat-window">
        <div class="table-responsive mt-1">
            <table class="table table-hover-animation mb-0">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Subject</th>
                    <th>Chapter</th>
                    <th>Status</th>
                    <th>Quiz Attempts</th>
                    <th>Total Attempts</th>
                    <th>Success</th>
                    <th>Failed</th>
                    <th>Attend The Lecture</th>
                </tr>
                </thead>
               <tbody>
                    @foreach($chapters as $c)
                    <tr>
                        <td>
                            {{$c->id}}
                        </td>
                        <td>
                            {{$c->cSubject}}
                        </td>
                        <td>
                            {{$c->cTitle}}
                        </td>
                        <td>
                            {{$c->cQuizStatus}}
                        </td>
                        <td>
                            Yes
                        </td>
                        <td>
                            4
                        </td>
                        <td>
                            1
                        </td>
                        <td>
                            3
                        </td>
                        <td>
                            <a href="{{route('chapters.view',['id'=> $c->id ])}}">Click To Attend</a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('page-script')
    <!-- Page js files -->

@endsection