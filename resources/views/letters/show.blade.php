@extends('layouts.app')
@section('title')
@section('content')
    <div class="container text-light pt-4">
        <div class="card bg-dark border-white">
            <div class="card-header bg-primary text-center">
                <h1>{{ $letter->name }} {{ $letter->surname }}</h1>
            </div>
            <div class="card-body">
                <div class="d-flex">
                    <h5 class="card-title mx-4">Id:</h5>
                    <p class="card-text"># {{ $letter->id }}</p>
                </div>
                <div class="d-flex">
                    <h5 class="card-title mx-4">Address:</h5>
                    <p class="card-text">{{ $letter->address }}</p>
                </div>
                <div class="d-flex">
                    <h5 class="card-title mx-4">City:</h5>
                    <p class="card-text">{{ $letter->city }}</p>
                </div>
                <div class="d-flex">
                    <h5 class="card-title mx-4">Arrival date:</h5>
                    <p class="card-text">{{ $letter->arrival_date }}</p>
                </div>
                <div class="d-flex">
                    <h5 class="card-title mx-4">Gift:</h5>
                    <p class="card-text">{{ $letter->gift }}</p>
                </div>
                <div class="d-flex">
                    <h5 class="card-title mx-4">Text:</h5>
                    <p class="card-text">{{ $letter->text }}</p>
                </div>
                <div class="d-flex">
                    <h5 class="card-title mx-4">Kid raiting:</h5>
                    <p class="card-text">{{ $letter->kid_rating }}</p>
                </div>
                <div class="d-flex">
                    <h5 class="card-title mx-4">Delivered:</h5>
                    <h4 class="card-text">
                        @if ($letter->delivered)
                            <i class="fa-solid fa-square-check text-success"></i>
                        @else
                            <i class="fa-solid fa-square-xmark text-danger"></i>
                        @endif
                        </h1>
                </div>


                <a href="{{ route('letter.edit', $letter->id) }}" class="btn btn-warning text-white my-4 w-50"><i
                        class="fa-solid fa-pencil"></i></a>
            </div>
        </div>
    </div>

@endsection
