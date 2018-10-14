@extends('layouts.main')

@section('title', 'Projects')

@section('content')

    <h1>Projects</h1>

    <a href='projects/create'>Create a new project</a>

    <ul>
        @foreach ($projects as $project)

            <li>{{ $project->title }}</li>
            
        @endforeach
    </ul>

@endsection

