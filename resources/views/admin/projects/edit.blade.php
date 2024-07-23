@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <h1 class="mb-3">Modifica {{ $project->title }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('admin.projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="titolo" placeholder="Titolo" name="title"
                    value="{{ old('title', $project->title) }}">
                <label for="titolo">Titolo</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Descrizione" id="descrizione" name="description" style="height: 150px">{{ old('title', $project->description) }}</textarea>
                <label for="descrizione">Descrizione</label>
            </div>
            <button class="btn btn-primary">Conferma modifiche</button>
        </form>
    </div>
@endsection
