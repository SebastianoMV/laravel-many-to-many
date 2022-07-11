@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                    @if(session('post_eliminato'))
                      <div class="alert alert-success container" role="alert">
                        {{ session('post_eliminato')}}
                      </div> 
                    @endif
            
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{session('status')}}
                        </div>
                    @endif
                    
                    @foreach($posts as $post)
                    <div class="card m-3">
                      <div class="card-body">
                        <h5>
                          {{$post->title}}
                        </h5>
                        <p>
                          {{$post->content}}
                        </p>
                        <div class="d-flex justify-content-between">
                          <span>
                            Tags:
                            @forelse($post->tags as $tag)
                            <span class="badge badge-info">{{$tag->name}}</span>
                            @empty
                              -
                            @endforelse
                            
                          </span>
                          <div> 
                            <a class="btn btn-primary m-1" href="{{ route('admin.posts.show', $post)}}">Show</a>
                            <a class="btn btn-primary m-1" href="{{ route('admin.posts.edit', $post)}}">Edit</a>
                            <form 
                            class="d-inline"
                            action="{{ route('admin.posts.destroy', $post)}}" 
                            method="POST"
                            onsubmit="return confirm('Sicuro di vole eliminare?')">
                            @csrf
                          
                            @method('DELETE')
                          
                              <button class="btn btn-primary" type="submit"><i class="fa-solid fa-trash"></i></button>
                            </form>

                          </div>
                      </div>
                      </div>
                    </div>
                      
                    @endforeach
                    <div class="m-3">
                      {{$posts->links() }}
                    </div>
                    <a class="btn btn-primary m-1" href="{{ route('admin.posts.create')}}">Create</a>
                    
        
              
        </div>
    </div>
</div>
@endsection
