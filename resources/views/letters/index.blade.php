@extends('layouts.app')
@section('title', 'kids-list')
@section('content')
    <div class="bg-dark">

        <div class="container">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>City</th>
                        <th>Arrival date</th>
                        <th>Gift</th>
                        <th>Kid rating</th>
                        <th>Deliverd</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- rows --}}
                    @foreach ($letters as $letter)
                        <tr>
                            <td>{{ $letter->name }}</td>
                            <td>{{ $letter->surname }}</td>
                            <td>{{ $letter->city }}</td>
                            <td>{{ $letter->arrival_date }}</td>
                            <td>{{ $letter->gift }}</td>
                            {{-- kid-rating --}}
                            <td>
                                @for ($i = 0; $i < $letter->kid_rating; $i++)
                                    <i class="fa-solid fa-star text-warning"></i>
                                @endfor
                            </td>
                            {{-- kid-rating --}}
                            {{-- delivered --}}
                            <td class="text-center">
                                @if ($letter->delivered)
                                    <i class="fa-solid fa-square-check text-success"></i>
                                @else
                                    <i class="fa-solid fa-square-xmark text-danger"></i>
                                @endif
                            </td>
                            {{-- delivered --}}
                            {{-- actions --}}
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-primary text-light text-decoration-none mx-1"
                                        href="{{ route('letter.show', $letter->id) }}"><i
                                            class="fa-solid fa-circle-info"></i></a>
                                    <a class="btn btn-warning text-light mx-1"
                                        href="{{ route('letter.edit', $letter->id) }}"><i
                                            class="fa-solid fa-pencil"></i></a>
                                    <form action="{{ route('letter.destroy', $letter->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger text-light mx-1" type="submit"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                </div>
                            </td>
                            {{-- actions --}}
                        </tr>
                    @endforeach
                    {{-- rows --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
