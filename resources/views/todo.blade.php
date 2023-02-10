@extends('layouts.default')

@section('content')

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">   
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('users.index') }}">Users</a>
          </li>         

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('about') }}">Consultation</a>
          </li> 

        </ul>
      </div>
    </div>
  </nav>
  

  <!-- todo starts here-->
<div class="mt-5">
    <form action="{{ route('todos.store') }}" method="POST" class="row g-3 justify-content-center">
    @csrf
    <div class="col-lg-6">
        <input type="text" class="form-control" name="title" id="title" placeholder="">
        <div class="col-auto mt-2">
           <button type="submit" class="btn btn-primary">  Save Record  </button>
        </div>
    </div>
    </form>
</div>

<div class="mt-3">
    @foreach($todos as $todo)
    <div class="card mb-2 col-lg-12">
        <div class="card-body">
            <span> {{ $todo->title }}</span>
        </div> 
    </div>
    
    @endforeach
</div>

@endsection