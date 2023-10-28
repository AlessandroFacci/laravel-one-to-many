@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection 

@section('content')

<div class="container mt-5">

  <a class="btn btn-outline-primary" href="{{route('admin.projects.index')}}">
    <i class="fa-solid fa-arrow-left me-2"></i>Return to list</a>
  <hr>
  <h1>{{$title}}</h1>

 @if($errors->any())
 <div class="alert alert-danger mt-4">
   Correct the following errors:
   <ul>
     @foreach ($errors->all() as $error)
     <li>{{$error}}</li>
     @endforeach
    </ul>
 </div>   
 @endif 

  <form action="{{route('admin.projects.store')}}" method="POST">
    @csrf

    <div class="row g-3 mt-3">
      <div class="col-12">
        <label for="title" class="form-lable mb-1">Title</label>
        <input type="text" name="title" id="title" class="form-control @error('title')is-invalid @enderror" value="{{old('title')}}">
        @error('title')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>

      <div class="col-12">
        <label for="repo" class="form-lable mb-1">Repo</label>
        <input type="url" name="repo" id="repo" class="form-control @error('repo')is-invalid @enderror" value="{{old('title')}}">
        @error('repo')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>

      <div class="col-12">
        <label for="description" class="form-lable mb-1">Description</label>
        <textarea name="description" id="description" class="form-control  @error('description')is-invalid @enderror" rows="6">{{old('title')}}</textarea>
        @error('description')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>

      <div class="col-12">
       <button class="btn btn-primary">
        <i class="fa-solid fa-floppy-disk me-1"></i> Save
       </button>
      </div>

    </div>
  </form>
</div>
    
@endsection