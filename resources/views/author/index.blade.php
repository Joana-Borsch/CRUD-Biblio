@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                AUTORS
                <div>
                    <a href="{{Route('author.create')}}" class="btn btn-secondary" >Nou</a>
                </div>
                <div class="card-body">
                    <table class="table justify-content">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Lloc de pertinença</th>
                            <th>Biografia</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($authors as $author)
                            <tr>
                                <td>{{$author->name}}</td>
                                <td>{{$author->nationality}}</td>
                                <td>{{$author->biography}}</td>
                                <td><a href="{{Route('author.edit', $author->id)}}">Editar</a></td>
                                <td>
                                    <form action="{{Route('author.destroy', $author->id)}}" method="POST" >
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Eliminar">
                                    </form>
                                </td>
                                @endforeach
                            </tr>
                        </tbody>

                    </table>
                </div>

            </div>



        </div>
    </div>
@endsection
