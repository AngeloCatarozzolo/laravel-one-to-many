@extends('layouts.admin')

@section('content')
    <h1>Lista Progetti</h1>
    {{-- Bottone per creare il post --}}
    <a href="{{route('admin.projects.create')}}" class="btn btn-primary">Crea Progetto</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Slug</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->name}}</td>
                <td>{{$project->slug}}</td>
                <td>
                    {{-- bottone per vedere il contenuto del post --}}
                    <a href="{{route('admin.projects.show', $project)}}" class="btn btn-success">Dettagli</a>
                    {{-- bottone per modificare il post --}}
                    <a href="{{route('admin.projects.edit', $project)}}" class="btn btn-warning">Modifica</a>

                    <form action="{{route('admin.projects.destroy', $project)}}" method="POST" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Elimina</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection

