@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

          <div class="card m-3">
            <div class="card-body">
              <h5>
                {{$post->title}}
              </h5>
              <p>
                {{$post->content}}
              </p>
              <div>
                @forelse($post->tags as $tag)
                  <span class="badge badge-info">{{$tag->name}}</span>
                @empty
                  
                @endforelse

              </div>
              
              <div class="text-right"> 
                <a class="btn btn-primary m-1" href="{{ route('admin.posts.index')}}">Back</a>
              </div>
            </div>
          </div>
              
        </div>
    </div>
</div>
@endsection
