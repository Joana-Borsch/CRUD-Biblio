@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                LLIBRES <a href="{{Route('book.create')}}" class="btn btn-secondary">Nou</a>
            </div>
            <div class="card-body">
                <form action="{{Route('book.update', $book->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>Títol</label>
                        <input type="text" name="name" class="form-control" value="{{$book->name}}"/>
                    </div>
                    <div class="form-group">
                        <label>Edició</label>
                        <input type="text" name="edition" class="form-control" value="{{$book->edition}}"/>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Editar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
