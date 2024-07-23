@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <div class="d-flex justify-space-between align-items-center">
            <div class="col">
                <h1>Lista progetti</h1>
            </div>
            <div class="d-flex">
                <a href="{{ route('admin.projects.create') }}" class="btn btn-primary" as="button">Crea nuovo</a>
            </div>
        </div>
        @if (!count($projects))
            <div class="alert alert-warning">
                Nessuno progetto presente nel DB
            </div>
        @else
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col" class="col-6 px-3">Titolo</th>
                        <th scope="col" class="col">Descrizione</th>
                        <th scope="col">bottoni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th scope="row">{{ $project->id }}</th>
                            <td class="px-3">
                                <a href="{{ route('admin.projects.show', $project) }}"
                                    class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover">{{ $project->title }}</a>
                            </td>
                            <td class="overflow-hidden">{{ $project->description }}</td>
                            <td>bottoni</td>
                            {{-- <td>
                                <div class="d-flex gap-2 justify-content-end">
                                    <a href="{{ route('admin.projects.show', $project) }}" as="button"
                                        class="btn btn-info btn-sm"><i class="fa-solid fa-magnifying-glass"></i></a>
                                    <a href="{{ route('admin.projects.edit', $project) }}" as="button"
                                        class="btn btn-warning btn-sm"><i class="fa-solid fa-pencil"></i></a>

                                    <form action="{{ route('admin.projects.destroy', $project) }}" method="project">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger  btn-sm"><i class="fa-solid fa-bomb"></i></button>

                                    </form>



                                </div>

                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
