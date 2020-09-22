@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Editar autor
            </div>
            <div class="card-body">
                <form action="{{Route('author.update', $author->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" name="name" class="form-control" value="{{$author->name}}"/>
                    </div>
                    <div class="form-group">
                        <label>Lloc de pertinença</label>
                        <input type="text" name="nationality" class="form-control" value="{{$author->nationality}}"/>
                    </div>
                    <div class="form-group">
                        <label>Biografia</label>
                        <input type="text" name="biography" class="form-control" value="{{$author->biography}}"/>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Editar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
