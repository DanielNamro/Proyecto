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
    <h1>Category:  {{$categories->Category}}</h1>
        <ul>
            <br>
            <li>
                <strong>Name</strong>
                {{$categories->Category}}
            </li>
            <br>
            <li>
                <strong>ID</strong>
                {{$categories->id}}
            </li>
            <br>
 

        </ul>
        </div>
    </div>
@endsection