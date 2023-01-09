@extends('layouts.app')
@section('title', 'Edit profile')
@section('content')
    <div class="container p-4 text-white d-flex flex-column">
        <h1 class="text-center p-4">Edit kid profile</h1>
        <form action="{{ route('letter.update', $letter->name) }}" method="POST">
            @csrf
            @method('PUT')
            {{-- First name --}}
            <div class="d-flex align-itmes-center w-100 mb-4">
                <label class="w-25" for="name">
                    <h3>First name:</h3>
                </label>
                <input value="{{ old('name', $letter->name) }}" class="w-75" type="text" id="name" name="name"
                    class="form-control">
            </div>
            {{-- First name --}}

            {{-- Last name --}}
            <div class="d-flex align-itmes-center w-100 mb-4">
                <label class="w-25" for="surname">
                    <h3>Last name:</h3>
                </label>
                <input value="{{ old('surname', $letter->surname) }}" class="w-75" type="text" id="surname"
                    name="surname" class="form-control">
            </div>
            {{-- Last name --}}

            {{-- Address --}}
            <div class="d-flex align-itmes-center w-100 mb-4">
                <label class="w-25" for="address">
                    <h3> Address:</h3>
                </label>
                <input value="{{ old('address', $letter->address) }}" class="w-75" type="text" id="address"
                    name="address" class="form-control">
            </div>
            {{-- Address --}}

            {{-- City --}}
            <div class="d-flex align-itmes-center w-100 mb-4">
                <label class="w-25" for="city">
                    <h3>City:</h3>
                </label>
                <input value="{{ old('city', $letter->city) }}" class="w-75" type="text" id="city" name="city"
                    class="form-control">
            </div>
            {{-- City --}}

            {{-- Arrival date --}}
            <div class="d-flex align-itmes-center w-100 mb-4">
                <label class="w-25" for="arrival_date">
                    <h3>Arrival date:</h3>
                </label>
                <input value="{{ old('arrival_date', $letter->arrival_date) }}" class="w-75" type="date"
                    id="arrival_date" name="arrival_date" class="form-control">
            </div>
            {{-- Arrival date --}}

            {{-- Gift --}}
            <div class="d-flex align-itmes-center w-100 mb-4">
                <label class="w-25" for="gift">
                    <h3>Gift:</h3>
                </label>
                <input value="{{ old('gift', $letter->gift) }}" class="w-75" type="text" id="gift" name="gift"
                    class="form-control">
            </div>
            {{-- Gift --}}

            {{-- Text --}}
            <div class="d-flex align-itmes-center w-100 mb-4">
                <label class="w-25" for="text">
                    <h3>Text:</h3>
                </label>
                <textarea value="{{ old('text', $letter->text) }}" name="text" id="text" class="form-controll w-75"
                    cols="30" rows="3"></textarea>
            </div>
            {{-- Text --}}

            {{-- Kid rating --}}
            <div class="d-flex align-itmes-center w-100 mb-4">
                <label class="w-25" for="kid_rating">
                    <h3>Kid rating:</h3>
                </label>
                <select name="kid_rating" id="kid_rating" class="form-select w-75">
                    <option @selected(old('rating', $letter->rating) == 1) value="1">Very bad</option>
                    <option @selected(old('rating', $letter->rating) == 2) value="2">Bad</option>
                    <option @selected(old('rating', $letter->rating) == 3) selected value="3">Normal</option>
                    <option @selected(old('rating', $letter->rating) == 4) value="4">Good</option>
                    <option @selected(old('rating', $letter->rating) == 5) value="5">Very good</option>
                </select>
            </div>
            {{-- Kid rating --}}

            {{-- Delivered --}}
            <div class="d-flex align-itmes-center w-100 mb-4">
                <label class="w-25" for="deliverd">
                    <h3>Delivered:</h3>
                </label>
                <select name="delivered" id="delivered" class="form-select w-75">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
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
