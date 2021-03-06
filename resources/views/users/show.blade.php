@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }} ({{ $user->hometeam }},{{ $user->codingteam }})</h3>
                </div>
                <div class="panel-body">
                <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->name, 500) }}" alt="">
                </div>
            </div>
        </aside>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li><a href="#">MyProfile</a></li>
                <li><a href="#">Like</a></li>
                <li><a href="#">Future</a></li>
                <li><a href="#">ズッ友</a></li>
            </ul>
        </div>
    </div>
@endsection