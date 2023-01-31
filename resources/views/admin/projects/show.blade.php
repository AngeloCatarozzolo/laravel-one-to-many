@extends('layouts.admin')

@section('content')
    <h1>{{$project->name}}</h1>

    @if($project->cover_image)
        <img src="{{asset("storage/$project->cover_image")}}" alt={{"project->name"}}>
    @endif

    <div class="mt-4">
        {{$project->description}}
    </div>
@endsection