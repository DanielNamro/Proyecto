@extends('layouts.app')

@section('content')


<div class="table-responsive postion-absolute">
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Categories</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" id="btn" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="col-sm-6">
                            <th>ID</th>
                            <th>Category Name</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach($categories as $category)
                        <tr>

                            <td>{{$category->id}}</td>
                            <td>{{$category->Category}}</td>

                            <td>
                                <a href="/categories/{{$category->id}}/edit" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            </td>
                            <td>
                                    <a href="/categories/{{$category->id}}"><span class="material-icons">info</span></a>
                                </td>
                            <td>
                                <form action="/categories/{{$category->id}}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">
                                    <input class="btn btn-sm material-icons" type="submit" value="delete_outline">
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

                <form action="/categories" method="Post">

                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="Category">Category</label>
                            <input type="text" class="form-control" name="Category" required>
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