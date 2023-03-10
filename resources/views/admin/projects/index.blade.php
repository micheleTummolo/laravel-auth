@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 my-4 d-flex justify-content-between">
            <div>
                <h2>Elenco progetti</h2>
            </div>
            <div>
                <a class="btn btn-sm btn-primary" href="{{ route('admin.projects.create') }}" role="button">Aggiungi progetto</a>
            </div>
        </div>
        @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
        @endif
        <div class="col-12 my-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Slug</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project['id']}}</td>
                        <td>{{ $project['name']}}</td>
                        <td>{{ $project['slug']}}</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('admin.projects.show', $project->slug) }}" role="button" title="Visualizza il progetto">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-warning" href="{{ route('admin.projects.edit', $project->slug) }}" role="button" title="Modifica il progetto">
                                <i class="fa-solid fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.projects.destroy', $project->slug) }}" class="d-inline-block" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-square btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection