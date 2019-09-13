@extends('layouts.app')

@section('title', __('Create employee'))

@section('navbar')
    @include('inc.navbar')
@endsection

@section('content')
    <h1>{{ __('Create employee') }}</h1>

    <div class="form">
        <form method="POST" action="/{{ app()->getLocale() }}/employees">
            {{ csrf_field() }}

            <div>
                <input type="text" class="input {{ $errors->has('first_name') ? 'is-danger' : '' }}" name="first_name" placeholder="{{ __('First name') }} ({{ __('required') }})" value="{{ old('first_name') }}" requierd>
            </div>
            <div>
                <input type="text" class="input {{ $errors->has('last_name') ? 'is-danger' : '' }}" name="last_name" placeholder="{{ __('Last name') }} ({{ __('required') }})" value="{{ old('last_name') }}" requierd>
            </div>
            <div>
                <input type="text" name="email" placeholder="{{ __('Email') }} ({{ __('not required') }})" value="{{ old('email') }}">
            </div>
            <div>
                <input type="text" name="phone" placeholder="{{ __('Phone') }} ({{ __('not required') }})" value="{{ old('phone') }}">
            </div>
            <div>
                <label>{{ __('Company') }} ({{ __('required') }}):</label><br>
                <select name="company">
                <option value=""></option>
                @foreach ($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
                </select>
            </div>
            <div class="buttons">
                <button type="submit">{{ __('Send') }}</button>
            </div>
            
            @if ($errors->any())
            <div class="notification is-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                @endforeach
            </div>
            @endif
        </form>
    </div>
@endsection
