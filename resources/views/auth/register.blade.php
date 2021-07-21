@extends("layouts.app")

@section("content")

    <div class="m-5 p-5 col-3">
        <p class="mb-3">Registration Form</p>
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="username">Username:</label>
                <!-- Stop writing things in uppercase you cuck (except Placeholders or actually visible strings -->
                <input name="username" value="{{old('username')}}" class="form-control" id="username"
                       placeholder="Username">
                @error("Username")
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
            <div class="form-group">
                <label for="password_confirmation">Repeat password:</label>
                <!-- Stop writing things in uppercase you cuck (except Placeholders or actually visible strings -->
                <input name="password_confirmation" type="password" class="form-control" id="password_confirmation"
                       placeholder="Password Again">
            </div>
            @error("Password_confirmation")
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection