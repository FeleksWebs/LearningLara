@extends("layouts.app")
@section("content")
    <div class="m-5 p-5">
        Dashboard
        @if(Auth::guest())
            <p>Not logged in</p>
        @else
            <p>Logged in as: {{Auth::user()->username}}</p>
        @endif
    </div>
@endsection