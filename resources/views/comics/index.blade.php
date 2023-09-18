@extends('layouts.main')

@section('page-title', 'Homepage')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')
<div>
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-12 text-center py-4">
                <ul class = "list-group pb-2">
                    <li class = "list-group-item">
                        <h2 class = "link-underline-success">
                            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}"> >{{ $comic->title }}< </a>
                        </h2>
                    </li>
                    <li class = "list-group-item">
                        {{ $comic->description }}
                    </li>
                    <li class = "list-group-item">
                        {{ $comic->price }}$
                    </li>
                    <li class = "list-group-item">
                        {{ $comic->type }}
                    </li>
                    <li class = "list-group-item">
                        {{ $comic->artists }}
                    </li>
                    <li class = "list-group-item">
                        {{ $comic->writers }}
                    </li>
                    <li class = "list-group-item d-flex justify-content-center gap-8">
                        <div class = "px-3 fs-4">
                            <a href="{{ route('comics.update', ['comic' => $comic->id]) }}">EDIT</a>
                        </div>
                        <div class = "px-3 fs-4">
                            <a href="{{ route('comics.destroy', ['comic' => $comic->id]) }}">DELETE</a>
                        </div>
                    </li>
                </ul>
                
            </div>
        @endforeach
    </div>
</div>


{{-- <img src="{{ Vite::asset('resources/img/gatto.jpg') }}" class="img-fluid" alt=""> --}}
@endsection