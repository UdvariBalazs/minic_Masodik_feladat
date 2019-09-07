@extends('layouts.app')

@section('title', 'Create company')

@section('navbar')
    @include('inc.navbar')
@endsection

@section('content')
    <h1>Create company</h1>

    <div class="form">
        <form method="POST" action="/companies" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" value="{{ csrf_token() }}" name="_token">

            <div>
                <input type="text" class="input {{ $errors->has('name') ? 'is-danger' : '' }}" name="name" placeholder="Name (required)" value="{{ old('name') }}">
            </div>
            <div>
                <input type="text" name="email" placeholder="Email (not required)" value="{{ old('email') }}">
            </div>
            <div>
                <label>Logo (not required):</label><br>
                <input type="file" name="file" id="file">  
            </div>
            <div>
                <input type="text" name="website" placeholder="Website (not required)" value="{{ old('website') }}">
            </div>
            <div class="buttons">
                <button type="submit" name="submit">Send</button>
            </div>

            @if ($errors->any())
            <div class="notification is-danger">
                @foreach ($errors->all() as $error)
                        {{ $error }} <br>
                    @endforeach
            @endif
        </form>
    </div>
@endsection
