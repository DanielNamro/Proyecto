@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<h1>Creacion de tarea</h1>

    <form action="/coments" method="post">
    @csrf
        <div>
            <label for="User_id">User</label>
            <input type="text" name="User_id" value="{{old('User_id')}}">
        </div>

        <div>
            <label for="Top_id">Top_id</label>
            <input type="text" name="Top_id" value="{{old('Top_id')}}">
        </div>

        <div>
            <label for="Text">Text</label>
            <input type="text" name="Text" value="{{old('Text')}}">
        </div>

        <div>
        <input type="submit" value="Crear">
        </div>
    </form>
    </div>
</div>
@endsection