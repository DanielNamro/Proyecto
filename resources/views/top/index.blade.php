@extends('layouts.app')

@section('content')
<style>
footer{
        position: relative;
        bottom: 0px;
    }
</style>
    <div class="table-responsive">
        <div class="container">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Manage <b>TOPS</b></h2>
                            </div>
                            <div class="col-sm-6">
                                <a href="#addEmployeeModal" id="btn" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Top</span></a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr class="col-sm-6">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Categoria</th>
                                <th>User</th>
                                <th>Description</th>
                                <th>Producto 1</th>
                                <th>Producto 2</th>
                                <th>Producto 3</th>
                                <th>Descripcion producto 1</th>
                                <th>Descripcion producto 2</th>
                                <th>Descripcion producto 3</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach($tops as $top)
                            <tr>

                                <td>{{$top->id}}</td>
                                <td>{{$top->Name}}</td>
                                <td>{{$top->category->Category}}</td>
                                <td>{{$top->user->name}}</td>
                                <td>{{$top->Description}}</td>
                                <td>{{$top->pn1}}</td>
                                <td>{{$top->pn2}}</td>
                                <td>{{$top->pn3}}</td>
                                <td>{{$top->p1}}</td>
                                <td>{{$top->p2}}</td>
                                <td>{{$top->p3}}</td>
                                <td>
                                    <a href="/tops/{{$top->id}}/edit" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                </td>

                                <td>
                                    <a href="/tops/{{$top->id}}" class="edit">SHOW</a>
                                </td>
                                <td>
                                    <form action="/tops/{{$top->id}}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete">
                                        <input class="btn btn-sm" type="submit" value="Borrar">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- ADD Modal HTML -->
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">

                    <form action="/tops" method="Post">

                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">Add Top</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" name="Name" required>
                            </div>
                            <div class="form-group">
                                <label for="Id_Categoria">Categoria</label>
                                <input type="text" class="form-control" name="Id_Categoria" required>
                            </div>
                            <div class="form-group">
                                <label for="Id_User">User</label>
                                <input type="text" class="form-control" name="Id_User" required>
                            </div>
                            <div class="form-group">
                                <label for="Description">Description</label>
                                <input type="text" class="form-control" name="Description" required>
                            </div>
                            <div class="form-group">
                                <label for="pn1">Product 1</label>
                                <input type="text" class="form-control" name="pn1" required>
                            </div>
                            <div class="form-group">
                                <label for="pn2">Product 2</label>
                                <input type="text" class="form-control" name="pn2" required>
                            </div>
                            <div class="form-group">
                                <label for="pn3">Product 3</label>
                                <input type="text" class="form-control" name="pn3" required>
                            </div>
                            <div class="form-group">
                                <label for="p1">Description product 3</label>
                                <input type="text" class="form-control" name="p1" required>
                            </div>
                            <div class="form-group">
                                <label for="p2">Description product 3</label>
                                <input type="text" class="form-control" name="p2" required>
                            </div>
                            <div class="form-group">
                                <label for="p3">Description product 3</label>
                                <input type="text" class="form-control" name="p3" required>
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
</body>

@endsection