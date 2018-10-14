@extends('layouts.main')

@section('title', 'Homepage')
    
@section('content')

    <h1>Welcome to my site...</h1>
    
    @foreach($tasks as $task)

        <li>{{ $task }}</li>
    
    @endforeach

@endsection

