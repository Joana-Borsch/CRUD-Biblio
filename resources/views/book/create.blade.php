@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Editar Llibre
            </div>
            <div class="card-body">
                <form action="{{Route('book.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Títol</label>
                        <input type="text" name="name" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Autor</label>
                        <input type="text" name="author" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Edició</label>
                        <input type="text" name="edition" class="form-control"/>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Crear" class="btn btn-primary">
                    </div>
                </form>
            </div>

        </div>



        </div>
    </div>
@endsection
