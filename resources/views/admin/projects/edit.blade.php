@extends('layouts.admin')

@section('content')
    <h1>Modifica Progetto: {{$project->name}}</h1>

    <div class="mt-4">
        <form action="{{route('admin.projects.update', $project)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name', $project->name)}}">
            </div>
            <div class="mb-3">
                <label for="customer" class="form-label">Cliente</label>
                <input type="text" class="form-control" id="customer" name="customer" value="{{old('customer', $project->customer)}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="10">{{old('description', $project->description)}}</textarea>
            </div>
            <div class="mb-3">
                <label for="cover_image" class="form-label">Immagine</label>
                <input type="file" class="form-control" id="cover_image" name="cover_image" value="{{old('cover_image')}}">
            </div>
                <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </div>
@endsection