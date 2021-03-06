@extends('layouts.app')

@section('title', __('Edit company'))

@section('navbar')
    @include('inc.navbar')
@endsection

@section('content')
    <h1>{{ __('Edit company') }}</h1>

    <div class="form">
        <form method="POST" action="/{{ app()->getLocale() }}/companies/{{ $company->id }}" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            
            <div>
               <input type="text" class="input {{ $errors->has('name') ? 'is-danger' : '' }}" name="name" value="{{ $company->name }}" required>
            </div>
            <div>
                <input type="text" name="email" value="{{ $company->email }}">
            </div>
            <div>
                <label>{{ __('Logo') }}:</label><br>
                <input id="input-image" name="logo" type="file" class="input-file">
            </div>
            <div>
                <input type="text" name="phone" value="{{ $company->website }}">
            </div>
            <div class="submit-button">
                <button type="submit">{{ __('Update') }}</button>
            </div>
        </form>
    </div>
    <div class="form">
        <form method="POST" action="/{{ app()->getLocale() }}/companies/{{ $company->id }}">
            @method('DELETE')
            @csrf

            <div class="submit-button">
                <button type="submit">{{ __('Delete') }}</button>
            </div>

            @if ($errors->any())
            <div class="notification is-danger">
                @foreach ($errors->all() as $error)
                        {{ $error }}
                @endforeach
            @endif
        </form>
    </div>
@endsection
