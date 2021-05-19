@extends('layouts.app')

@section('content')

    <div class="table-responsive">
        <div class="container">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Manage <b>USERS</b></h2>
                            </div>
                            <div class="col-sm-6">
                                <a href="#addEmployeeModal" id="btn" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr class="col-sm-6">
                                <th>Login</th>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Tlf</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>password</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($users as $user)
                            <tr>

                                <td>{{$user->Login}}</td>
                                <td>{{$user->Name}}</td>
                                <td>{{$user->Surname}}</td>
                                <td>{{$user->Tlf}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->Rol}}</td>
                                <td>{{$user->password}}</td>
                                <td>
                                    <a href="/users/{{$user->id}}/edit" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                </td>
                                <td>
                                    <form action="/users/{{$user->id}}" method="post">
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

                    <form action="/users" method="Post">

                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">Add User</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                        <div class="form-group">
                                <label for="Login">Login</label>
                                <input type="text" class="form-control" name="Login" required>
                            </div>
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" name="Name" required>
                            </div>
                            <div class="form-group">
                                <label for="Surname">Surname</label>
                                <input type="text" class="form-control" name="Surname" required>
                            </div>
                            <div class="form-group">
                                <label for="Tlf">Tlf</label>
                                <input type="text" class="form-control" name="Tlf" required>
                            </div>
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="text" class="form-control" name="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="Rol">Rol</label>
                                <input type="text" class="form-control" name="Rol" required>
                            </div>
                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="text" class="form-control" name="password" required>
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