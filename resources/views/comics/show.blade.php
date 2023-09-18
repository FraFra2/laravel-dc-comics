@extends('layouts.main')

@section('page-title', 'Homepage')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')
<div>
    <div class="row">
            <div class="col-12 text-center py-4">
                <ul class = "list-group pb-2">
                    <li class = "list-group-item">
                        <h2>
                            {{ $comic->title }}
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
                </ul>    
            </div>
    </div>
</div>


{{-- <img src="{{ Vite::asset('resources/img/gatto.jpg') }}" class="img-fluid" alt=""> --}}
@endsection