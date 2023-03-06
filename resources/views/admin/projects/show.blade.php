@extends('layouts.admin')

@section('content')
<div class="container-show bg-dark">
    <div class="row-show">
        <div class="single-card-show">
                <h1 class="titolo">{{$project->title}}</h1>
                <div class="card-img-show ">
                  <img src="{{$project->image}}">
                </div>
                <div class="content-show text-center">
                  <div class="title-show">{{$project->slug}}</div>
                  <p class="">{{$project->content}}</p>
                  <div class="contents-show">
                      <a href="{{route('admin.projects.edit', ['project' =>$project->slug])}}" class="btn btn-sm btn-square btn-warning">
                          <i class="fa-solid fa-pen"></i>
                      </a>
                      <form action="{{route('admin.projects.destroy',  $project->slug)}}" method="POST" class="d-inline-block">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger btn-square">
                              <i class="fa-solid fa-trash"></i>
                          </button>
                      </form>
                      <a href="{{route('admin.projects.create')}}" class="btn btn-sm btn-square btn-success">
                          <i class="fa-solid fa-plus"></i>
                      </a>
                  </div>
                </div>
        </div>
    </div>
</div>
@endsection