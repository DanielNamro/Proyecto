@extends('layouts.app')

@section('content')
<br><br>

    <div class="container ">
        <div class="row justify-content-left">
            <div class="col-md-8">
                <h1>Edit TOP</h1>

                <form action="/users/{{$user->id}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div>
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{$user->name}}">
                    </div>

                    <div>
                        <label for="email">Email</label>
                        <input type="text" name="email" value="{{$user->email}}">
                    </div>

                    <div>
                        <label for="password">password</label>
                        <input type="password" name="password" value="{{$user->password}}">
                    </div>
                    <input type="submit" value="Actualizar">
                </form>
            </div>
        </div>
    </div>

</body>

@endsection