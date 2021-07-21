@extends("layouts.app")
@section("content")

    <div class="m-5 p-5">
        @if(Auth::user())
            <form action="{{route('posts')}}" method="post">
                @csrf
                <div>
                    <textarea name="body" rows="4" class="@error('body') text-danger @enderror"
                              placeholder="Post something"></textarea>
                    @error("body")
                    <div>
                        <div class="text-danger">
                            {{$message}}
                        </div>
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @endif
        @if($posts->count())
            @foreach($posts as $post)
                <div class="m-4">
                    <a href="" class="">{{$post->user->username}}</a><span
                            class="p-2 text-secondary">{{$post->created_at->diffForHumans()}}</span>
                    <p>{{$post->body}}</p>
                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No posts</p>
        @endif
    </div>

@endsection