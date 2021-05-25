@extends('layouts.app')

@section('content')
<style>
    #c {
        font-size: 20px;
    }
</style>
<div class="container" id="c">
    <div class="row justify-content-center">
        <div class="col-md-8">
    <h1>User  {{$user->name}}</h1>
        <ul>
            <li>
                <strong>ID</strong>
                {{$user->id}}
            </li>
            <br>
            <li>
                <strong>Name</strong>
                {{$user->name}}
            </li>
            <br>
            <li>
                <strong>Email</strong>
                {{$user->email}}
            </li>
            <br>
            <li>
                <strong>PASSWORD</strong>
                {{$user->password}}
            </li>

        </ul>
        </div>
    </div>
@endsection