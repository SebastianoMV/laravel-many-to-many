@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @if($errors->any())
          <div class="container alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
              <div>{{$error}}</div>   
            @endforeach
          </div>
          @endif

          <form id="formCreate" name="myForm" action="{{ route('admin.posts.store') }}" method="POST">

            @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" 
              value="{{old('title')}}"
              class="form-control @error('title') is-invalid @enderror"  name="title" id="title" placeholder="Enter title" >
              @error('title')
                <p class="error-msg">{{$message}}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="content">Content</label>
              <input type="text" 
              value="{{old('content')}}" class="form-control @error('content') is-invalid @enderror" name="content" id="content" placeholder="content">
              @error('content')
                <p class="error-msg">{{$message}}</p>
              @enderror
            </div>
      
            <button type="submit" class="btn btn-primary my-1">Submit</button>
          </form>
              
        </div>
    </div>
</div>
@endsection