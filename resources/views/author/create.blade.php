@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                    Afegir autor
            </div>
            <div class="card-body">
                <form action="{{Route('author.store')}}" method="POST">
                        @csrf
                    <div class="form-group">
                            <label>Nom</label>
                            <input type="text" name="name" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Lloc de pertinença</label>
                        <input type="text" name="nationality" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Biografia</label>
                        <input type="text" name="biography" class="form-control"/>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Afegir" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
