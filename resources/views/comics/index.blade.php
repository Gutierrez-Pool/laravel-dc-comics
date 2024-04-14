@extends('layouts/app')

@section('content')

<div class="container py-5">

    <h1 class="pb-4">Comics</h1>

    {{-- @dump($comics) --}}

    <table class="table mb-3">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Artisti</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

            @foreach($comics as $comic)
            <tr>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->artists }}</td>
                <td><a href="{{ route('comics.show', $comic->id) }}" class="btn btn-outline-light " >Visualizza</a></td>
            </tr>
            @endforeach

        </tbody>
    </table>

    <a href="{{route('comics.create')}}" class="btn btn-primary">Aggiungi un fumetto</a>
</div>

@endsection