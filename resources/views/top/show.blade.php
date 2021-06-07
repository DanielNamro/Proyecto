@extends('layouts.app')

@section('content')
<style>
    #p1 {

        font-size: 20px;
    }

    footer {
        position: relative;
        bottom: 0px;
    }
    #a{
        color: black;
    }
    p{
        font-size: 15px;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{$top->Name}} TOP</h1>
            <ul>


                <div class="panel panel-default">
                    <div class="panel-body">
                        <p id="p1">{{$top->Description}}</p>
                    </div>
                </div>

                <div class="list-group" id="a">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">TOP 1: {{$top->pn1}}</h5>
                    </div>
                    <p class="mb-1">{{$top->p1}}</p>
                    <a href="{{$top->enlace}}"><small>PINCHA AQUÍ PARA IR AL PRODUCTO </small></a>
                    <p></p>
                    <p></p>
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">TOP 2: {{$top->pn2}}</h5>
                    </div>
                    <p class="mb-1">{{$top->p2}}</p>
                    <a href="{{$top->enlace2}}"><small>PINCHA AQUÍ PARA IR AL PRODUCTO </small></a>

                    <p></p>
                    <p></p>
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">TOP 3: {{$top->pn3}}</h5>
                    </div>
                    <p class="mb-1">{{$top->p3}}</p>
                    <a href="{{$top->enlace3}}"><small>PINCHA AQUÍ PARA IR AL PRODUCTO </small></a>

                </div>
                <BR>
                <BR>

                <div class="panel panel-default">
                    <div class="panel-body">
                      <strong>  <h5>COMMENT</h5> </strong><a href="#addEmployeeModal" id="btn" class="float-right" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Commentary</span></a>


                        @foreach($coments as $coment)
                        <div class="well well bs-component">
                            <div class="content">
                                <p>{{$coment->user->name}} ha comentado: {{$coment->Text}}
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </ul>
        </div>



        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">

                    <form action="/coments" method="Post">

                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">Add Commentary</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="User_id">User_id</label>
                                <input type="text" class="form-control" name="User_id" required>
                            </div>
                            <div class="form-group">
                                <label for="Top_id">Top_id</label>
                                <input type="text" class="form-control" name="Top_id" value="{{$top->ID}}"required>
                            </div>
                            <div class="form-group">
                                <label for="Text">Text</label>
                                <input type="text" class="form-control" name="Text" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-success" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection