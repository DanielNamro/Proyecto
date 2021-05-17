@extends('layouts.app')

@section('content')
<br><br>

    <div class="container ">
        <div class="row justify-content-left">
            <div class="col-md-8 justify-content-start" >
                <h1>Edit TOP</h1>

                <form action="/tops/{{$top->id}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div>
                        <label for="texto" class="col-form-label">Texto</label>
                        <input type="text" class="form-control" name="Name" value="{{$top->Name}}">
                    </div>
                    <div>
                        <label for="user_id" class="col-form-label">User ID</label>
                        <input type="text"  class="form-control" name="Id_Categoria" value="{{$top->Id_Categoria}}">
                    </div>
                    <div>
                        <label for="fecha" class="col-form-label">Fecha</label>
                        <input type="text"  class="form-control"name="Id_User" value="{{$top->Id_User}}">
                    </div>

                    <div>
                        <label for="Description" class="col-form-label">Description</label>
                        <input type="text"  class="form-control"name="Description" value="{{$top->Description}}">
                    </div>
                    <br>
                    <input type="submit" value="Actualizar">
                </form>
            </div>
        </div>
    </div>

</body>

@endsection