@extends('layouts.main')

@section('title')
   Edit project
@endsection

@section('content')
    {{$project}}
    <h1>Edit project</h1>
    <form action="{{route('projects.update', $project->id)}}" method="POST">
        @csrf 
        @method('PUT')
        <div class="form-group">
            <label for="">Titel</label>
            <input value="{{$project->title}}" type="text" name="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Startdatum</label>
            <input value="{{$project->startdate}}" type="text" name="startdate" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Einddatum</label>
            <input value="{{$project->enddate}}" type="text" name="enddate" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Omschrijving</label>
            <textarea name="description" class="form-control">{{ $project->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="">Status</label>
            <select name="status" class="form-control">
                <option value="bezig" @if($project->status == 'bezig') selected @endif> bezig </option>
                <option value="open" @if($project->status == 'open') selected @endif> open </option>
                <option value="afgerond" @if($project->status == 'afgerond') selected @endif> afgerond </option>
            </select>
        </div>

        <input type="submit" value="Wijzig project" class="btn btn-primary">

    </form>

@endsection

