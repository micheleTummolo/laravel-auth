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
        <div class="col-12 my-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrizione</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project['name']}}</td>
                        <td>{{ $project['description']}}</td>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection