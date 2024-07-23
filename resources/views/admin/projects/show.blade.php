@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <h1>{{ $project->title }}</h1>
        <p class="fs-5 mt-4">{{ $project->description }}</p>
        <hr>
        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning fs-5">Modifica</a>
    </div>
@endsection
