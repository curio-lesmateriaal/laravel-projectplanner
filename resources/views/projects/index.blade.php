@extends('layouts.main')


@section('title')
    Projects
@endsection

@section('content')
    <h1>Projects</h1>
    <ul class="list-group">
        @foreach($projects as $project) 
            <li class="list-group-item">
                {{ $project->title }} 
            </li>
        @endforeach
    </ul>
@endsection