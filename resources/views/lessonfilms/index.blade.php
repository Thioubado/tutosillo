@extends('template')

@section('content')
    <div class="card">
        <header>
            <p class="card-header-title">Films</p>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table-is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($films as $film)
                            <tr>
                                <td>{{ $film->id }}</td>
                                <td><strong>{{ $film->title }}</strong></td>
                                <td><a class="button is-primary" href="route('film.show', $film->id)">Voir</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection