@extends('layouts/app')

@section('content')
    
    <div class="container py-5">

        <h1>Modifica comic</h1>
        
        <form action="{{route('comics.update', $comic->id)}}" method="POST">

            @csrf
    
            @method('PUT')
            
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"  value="{{old("title") ?? $comic->title}}" required>
                @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="4">{{old("description") ?? $comic->description}}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb"  value="{{old("thumb") ?? $comic->thumb}}">
                @error('thumb')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price"  value="{{old("price") ?? $comic->price}}">
                @error('price')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series"  value="{{old("series") ?? $comic->series}}" required>
                @error('series')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di pubblicazione</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date"  value="{{old("sale_date") ?? $comic->sale_date}}">
                @error('sale_date')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"  value="{{old("type") ?? $comic->type}}" required>
                @error('type')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti</label>
                <input type="text" class="form-control @error('artists') is-invalid @enderror" name="artists" id="artists" value="{{old("artists") ?? $comic->artists}}">
                @error('artists')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <input type="text" class="form-control @error('writers') is-invalid @enderror" name="writers" id="writers" value="{{old("writers") ?? $comic->writers}}">
                @error('writers')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            {{-- @if($errors->any()) 

            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif --}}
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

@endsection