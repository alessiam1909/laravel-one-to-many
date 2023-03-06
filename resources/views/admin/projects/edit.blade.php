@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center"> Modifica il progetto {{$project->title}} </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ( $errors->all() as $error )
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('admin.projects.update', $project->slug)}}" method="POST" class="mt-5">
                @csrf
                @method('PUT')
                <div class="mb-3 form-group">
                    <label for="title" class="control-label">Titolo: </label>
                    <input type="text" class="form-control" id="title" name="title" value="{{old('title') ?? $project->title}}">
                </div>
                @error('title')
                    <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="mb-3 form-group">
                    <label for="content" class="control-label">Contenuto: </label>
                    <input type="text" class="form-control" id="content" name="content" value="{{old('title') ?? $project->content}}">
                </div>
                @error('content')
                <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="mb-3 form-group">
                    <label for="slug" class="control-label">Slug: </label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{old('title') ?? $project->slug}}">
                </div>
                @error('slug')
                <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="mb-3 form-group">
                    <label for="image" class="control-label">Url immagine: </label>
                    <input type="text" class="form-control" id="image" name="image" value="{{old('title') ?? $project->image}}">
                </div>
                @error('image')
                <div class="text-danger">{{$message}}</div>
                @enderror
                <button type="submit" class="btn btn-success my-3">
                    Salva
                </button>
            </form>
        </div>
    </div>
</div>

@endsection