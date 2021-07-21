<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>


<nav class="bg-secondary">
    <div class="row">
        <div class="col-3 float-left">
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item"> <a href="{{route('home') }}"> Home</a></li>
                <li class="list-group-item"><a href="{{route('dashboard') }}">Dashboard</a></li>
                <li class="list-group-item"><a href="{{route('posts') }}">Post</a></li>
            </ul>
        </div>
        <div class="col float-right">

        </div>
        <div class="col-3 float-right">
            <ul class="list-group list-group-horizontal float-right">
                @auth
                <li class="list-group-item">
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button class="btn btn-sm">Logout</button>
                    </form>
                </li>
                @endauth
                @guest
                <li class="list-group-item"><a href="{{route('login') }}">Login</a></li>
                <li class="list-group-item"><a href="{{route('register') }}">Register</a></li>
                @endguest
            </ul>
        </div>
    </div>

</nav>
@yield("content")



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>