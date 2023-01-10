@extends('layouts.app')
@section('title', 'Edit profile')
@section('content')
    <div class="container p-4 text-white d-flex flex-column">
        <h1 class="text-center p-4">Edit kid profile</h1>
        <form action="{{ route('letter.update', $letter->id) }}" method="POST">
            @csrf
            @method('PUT')
            {{-- First name --}}
            <div class="d-flex align-itmes-center w-100 mb-4">
                <label class="w-25" for="name">
                    <h4>First name:</h4>
                </label>
                <input value="{{ old('name', $letter->name) }}" type="text" id="name" name="name"
                    class="form-control w-75 rounded-5 px-3  @error('name') is-invalid @enderror">
                @error('name')
                    <div class="invalid-feedback d-block w-100 text-center">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- First name --}}

            {{-- Last name --}}
            <div class="d-flex align-itmes-center w-100 mb-4">
                <label class="w-25" for="surname">
                    <h4>Last name:</h4>
                </label>
                <input value="{{ old('surname', $letter->surname) }}" type="text" id="surname" name="surname"
                    class="form-control w-75 rounded-5 px-3 @error('surname') is-invalid @enderror">
                @error('surname')
                    <div class="invalid-feedback d-block w-100 text-center">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Last name --}}

            {{-- Address --}}
            <div class="d-flex align-itmes-center w-100 mb-4">
                <label class="w-25" for="address">
                    <h4> Address:</h4>
                </label>
                <input value="{{ old('address', $letter->address) }}" type="text" id="address" name="address"
                    class="form-control w-75 rounded-5 px-3 @error('address') is-invalid @enderror">
                @error('address')
                    <div class="invalid-feedback d-block w-100 text-center">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Address --}}

            {{-- City --}}
            <div class="d-flex align-itmes-center w-100 mb-4">
                <label class="w-25" for="city">
                    <h4>City:</h4>
                </label>
                <input value="{{ old('city', $letter->city) }}" type="text" id="city" name="city"
                    class="form-control w-75 rounded-5 px-3 @error('city') is-invalid @enderror">
                @error('city')
                    <div class="invalid-feedback d-block w-100 text-center">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- City --}}

            {{-- Arrival date --}}
            <div class="d-flex align-itmes-center w-100 mb-4">
                <label class="w-25" for="arrival_date">
                    <h4>Arrival date:</h4>
                </label>
                <input value="{{ old('arrival_date', $letter->arrival_date) }}" type="date" id="arrival_date"
                    name="arrival_date"
                    class="form-control w-75 rounded-5 px-3 @error('arrival_date') is-invalid @enderror">
                @error('arrival_date')
                    <div class="invalid-feedback d-block w-100 text-center">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Arrival date --}}

            {{-- Gift --}}
            <div class="d-flex align-itmes-center w-100 mb-4">
                <label class="w-25" for="gift">
                    <h4>Gift:</h4>
                </label>
                <input value="{{ old('gift', $letter->gift) }}" type="text" id="gift" name="gift"
                    class="form-control rounded-5 px-3 w-75 @error('gift') is-invalid @enderror">
                @error('gift')
                    <div class="invalid-feedback d-block w-100 text-center">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Gift --}}

            {{-- Text --}}
            <div class="d-flex align-itmes-center w-100 mb-4">
                <label class="w-25" for="text">
                    <h4>Text:</h4>
                </label>
                <textarea name="text" id="text" class="form-control rounded-3 px-3 @error('text') is-invalid @enderror w-75"
                    cols="30" rows="3">{{ old('text', $letter->text) }}</textarea>
                @error('text')
                    <div class="invalid-feedback d-block w-100 text-center">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Text --}}

            {{-- Kid rating --}}
            <div class="d-flex align-itmes-center w-100 mb-4">
                <label class="w-25" for="kid_rating">
                    <h4>Kid rating:</h4>
                </label>
                <select name="kid_rating" id="kid_rating"
                    class="form-select rounded-5 px-3 @error('kid_rating') is-invalid @enderror w-75">
                    <option @selected(old('kid_rating', $letter->kid_rating) == 1) value="1">Very bad</option>
                    <option @selected(old('kid_rating', $letter->kid_rating) == 2) value="2">Bad</option>
                    <option @selected(old('kid_rating', $letter->kid_rating) == 3) value="3">Normal</option>
                    <option @selected(old('kid_rating', $letter->kid_rating) == 4) value="4">Good</option>
                    <option @selected(old('kid_rating', $letter->kid_rating) == 5) value="5">Very good</option>
                </select>
                @error('kid_rating')
                    <div class="invalid-feedback d-block w-100 text-center">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Kid rating --}}

            {{-- Delivered --}}
            <div class="d-flex align-itmes-center w-100 mb-4">
                <label class="w-25" for="deliverd">
                    <h4>Delivered:</h4>
                </label>
                <select name="delivered" id="delivered"
                    class="form-select rounded-5 px-3 @error('delivered') is-invalid @enderror w-75">
                    <option @selected(old('delivered', $letter->delivered) == 0) value="0">No</option>
                    <option @selected(old('delivered', $letter->delivered) == 1) value="1">Yes</option>
                </select>
                @error('delivered')
                    <div class="invalid-feedback d-block w-100 text-center">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Deliverd --}}

            {{-- btn --}}
            <div class="d-flex justify-content p-4">
                <button class="btn btn-success m-auto w-50" type="submit">Save</button>
            </div>
            {{-- btn --}}
        </form>
    </div>
@endsection
