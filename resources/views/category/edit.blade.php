@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="row justify-content-left">
        <div class="col-md-8">
            <h1>Edit TOP</h1>

            <form action="/categories/{{$category->id}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div>
                    <label for="Category">Category Name</label>
                    <input type="text" name="Category" value="{{$category->Category}}">
                </div>

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </div>
</div>

</body>
@endsection