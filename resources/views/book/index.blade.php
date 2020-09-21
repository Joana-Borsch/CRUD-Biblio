@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                LLIBRES <a href="{{Route('book.create')}}" class="btn btn-secondary">Nou</a>
                <div class="card-body">
                    <table class="table justify-content">
                        <thead>
                        <tr>
                            <th>Títol</th>
                            <th>Edició</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>{{$book->name}}</td>
                                <td>{{$book->edition}}</td>
                                @endforeach
                            </tr>
                        </tbody>

                    </table>
                </div>

            </div>



        </div>
    </div>
@endsection
