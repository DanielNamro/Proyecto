@extends('layouts.app')

@section('content')

<style>
footer{
        position: relative;
        bottom: 0px;
    }
</style>
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
                    <div>
                        <label for="pn1" class="col-form-label">Product 1</label>
                        <input type="text"  class="form-control"name="pn1" value="{{$top->pn1}}">
                    </div>
                    <div>
                        <label for="pn2" class="col-form-label">Product 2</label>
                        <input type="text"  class="form-control"name="pn2" value="{{$top->pn2}}">
                    </div>
                    <div>
                        <label for="pn3" class="col-form-label">Product 3</label>
                        <input type="text"  class="form-control"name="pn3" value="{{$top->pn3}}">
                    </div>
                    <div>
                        <label for="p1" class="col-form-label">Description product 1</label>
                        <input type="text"  class="form-control"name="p1" value="{{$top->p1}}">
                    </div>
                    <div>
                        <label for="p2" class="col-form-label">Description product 2</label>
                        <input type="text"  class="form-control"name="p2" value="{{$top->p2}}">
                    </div>
                    <div>
                        <label for="p3" class="col-form-label">Description product 3</label>
                        <input type="text"  class="form-control"name="p3" value="{{$top->p3}}">
                    </div>
                    <div>
                        <label for="enlace" class="col-form-label">Enlace</label>
                        <input type="text"  class="form-control"name="p3" value="{{$top->enlace}}">
                    </div>
                    <div>
                        <label for="enlace2" class="col-form-label">Enlace 2</label>
                        <input type="text"  class="form-control"name="p3" value="{{$top->enlace2}}">
                    </div>
                     <div>
                        <label for="enlace" class="col-form-label">Enlace 3</label>
                        <input type="text"  class="form-control"name="p3" value="{{$top->enlace}}">
                    </div>

                    <br>
                    <input type="submit" value="Actualizar">
                </form>
            </div>
        </div>
    </div>

</body>

@endsection