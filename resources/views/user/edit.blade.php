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
                        <label for="Login">Login</label>
                        <input type="text" name="Name" value="{{$user->Login}}">
                    </div>
                    <div>
                        <label for="Name">Name</label>
                        <input type="text" name="Name" value="{{$user->Name}}">
                    </div>
                    <div>
                        <label for="Surname">Surname</label>
                        <input type="text" name="Surname" value="{{$user->Surname}}">
                    </div>
                    <div>
                        <label for="Tlf">Tlf</label>
                        <input type="text" name="Tlf" value="{{$user->Tlf}}">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="text" name="email" value="{{$user->email}}">
                    </div>
                    <div>
                        <label for="Rol">Rol</label>
                        <input type="text" name="Rol" value="{{$user->Rol}}">
                    </div>
                    <div>
                        <label for="password">password</label>
                        <input type="text" name="password" value="{{$user->password}}">
                    </div>
                    <input type="submit" value="Actualizar">
                </form>
            </div>
        </div>
    </div>

</body>

@endsection