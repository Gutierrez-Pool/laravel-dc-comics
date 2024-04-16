@extends('layouts/app')

@section('content')
    <div class="container py-5">

        <h2 class="pb-3">Aggiungi comic</h2>

        <form action="{{route('comics.store')}}" method="POST">
            
            @csrf
            
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" value="{{old("title")}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" name="description" id="description">{{old("description")}}</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" name="thumb" id="thumb" value="{{old("thumb")}}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price" value="{{old("price")}}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" value="{{old("series")}}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di pubblicazione</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" value="{{old("sale_date")}}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" id="type" value="{{old("type")}}">
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Artisti</label>
                <input type="text" class="form-control" name="artists" id="artists" value="{{old("artists")}}">
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <input type="text" class="form-control" name="writers" id="writers" value="{{old("writers")}}">
            </div>
            

            @if($errors->any()) 

            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection