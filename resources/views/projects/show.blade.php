@extends('layouts.main')

@section('title')
   Details
@endsection

@section('content')
    {{$project}}
    <h1>Detail page: {{ $project->title }}</h1>
    <p>{{ $project->description }} </p>

    <p>startdate: {{ $project->startdate }}</p>
    <p>status: {{ $project->status }}</p>

    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-info">Edit project</a>
@endsection

