@extends("layouts.app")

@section("content")

    <div class="m-5 p-5 col-3">
        Login Form
        <form action="{{route('login')}}" method="post">
            @csrf
            @if (session("status"))
                <div class="text-danger">
                    {{session("status")}}
                </div>
            @endif
            <div class="form-group">
                <label for="username">Username:</label>
                <!-- Stop writing things in uppercase you cuck (except Placeholders or actually visible strings -->
                <input id="username" name="username" value="{{old('username')}}" class="form-control"
                       aria-describedby="username" placeholder="Username">
                @error("username")
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <!-- Stop writing things in uppercase you cuck (except Placeholders or actually visible strings -->
                <input name="password" type="password" class="form-control" id="password" placeholder="Password">
            </div>
            @error("Password")
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection