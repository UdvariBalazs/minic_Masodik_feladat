@extends('layouts.app')

@section('title', __('Edit company'))

@section('navbar')
    @include('inc.navbar')
@endsection

@section('content')
    <h1>{{ __('Edit company') }}</h1>

    <div class="form">
        <form method="POST" action="{{ app()->getLocale() }}/companies/{{ $company->id }}">
            @method('PATCH')
            @csrf
            
            <div>
               <input type="text" name="name" value="{{ $company->name }}">
            </div>
            <div>
                <input type="text" name="email" value="{{ $company->email }}">
            </div>
            <div>
                <label>{{ __('Logo') }}:</label><br>
                <input name="logo" type="file" class="input-file">
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
        </form>
    </div>
@endsection
