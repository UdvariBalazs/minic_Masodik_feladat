@extends('layouts.app')

@section('title', __('Create company'))

@section('navbar')
    @include('inc.navbar')
@endsection

@section('content')
    <h1>{{ __('Create company') }}</h1>

    <div class="form">
        <form method="POST" action="/{{ app()->getLocale() }}/companies" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" value="{{ csrf_token() }}" name="_token">

            <div>
                <input type="text" class="input {{ $errors->has('name') ? 'is-danger' : '' }}" name="name" placeholder="Name ({{ __('required') }})" value="{{ old('name') }}">
            </div>
            <div>
                <input type="text" name="email" placeholder="{{ __('Email') }} ({{ __('not required') }})" value="{{ old('email') }}">
            </div>
            <div>
                <label>{{ __('Logo') }} ({{ __('not required') }}):</label><br>
                <input type="file" name="file" id="file">  
            </div>
            <div>
                <input type="text" name="website" placeholder="{{ __('Website') }} ({{ __('not required') }})" value="{{ old('website') }}">
            </div>
            <div class="buttons">
                <button type="submit" name="submit">{{ __('Send') }}</button>
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
