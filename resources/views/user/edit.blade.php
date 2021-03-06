@extends('layouts.app')

@section('content')
<br><br>

    <div class="container ">
        <div class="row justify-content-left">
            <div class="col-md-8">
                <h1>Edit USER</h1>

                <form action="/users/{{$user->id}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div>
                        <label for="name" class="col-form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$user->name}}">
                    </div>

                    <div>
                        <label for="email"  class="col-form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="{{$user->email}}">
                    </div>

                    <div>
                        <label for="password" class="col-form-label">password</label>
                        <input type="password" class="form-control" name="password" value="{{$user->password}}">
                    </div>
                    <br>
                    <input type="submit" value="Actualizar">
                </form>
            </div>
        </div>
    </div>

</body>

@endsection