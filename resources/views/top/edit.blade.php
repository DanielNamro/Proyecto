@extends('layouts.app')

@section('content')
<br><br>

    <div class="container ">
        <div class="row justify-content-left">
            <div class="col-md-8">
                <h1>Edit TOP</h1>

                <form action="/tops/{{$top->id}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div>
                        <label for="texto">Texto</label>
                        <input type="text" name="Name" value="{{$top->Name}}">
                    </div>
                    <div>
                        <label for="user_id">User ID</label>
                        <input type="text" name="Id_Categoria" value="{{$top->Id_Categoria}}">
                    </div>
                    <div>
                        <label for="fecha">Fecha</label>
                        <input type="text" name="Id_User" value="{{$top->Id_User}}">
                    </div>
                    <input type="submit" value="Actualizar">
                </form>
            </div>
        </div>
    </div>

</body>

@endsection