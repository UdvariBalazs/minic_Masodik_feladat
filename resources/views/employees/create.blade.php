@extends('layout')

@section('title', 'Create employee')

@section('content')
    <h1>Create employee</h1>

    <div class="form">
        <form method="POST" action="/employees">
            {{ csrf_field() }}

            <div>
                <input type="text" class="input {{ $errors->has('first_name') ? 'is-danger' : '' }}" name="first_name" placeholder="First name (required)" value="{{ old('first_name') }}">
            </div>
            <div>
                <input type="text" class="input {{ $errors->has('last_name') ? 'is-danger' : '' }}" name="last_name" placeholder="Last name (required)" value="{{ old('last_name') }}">
            </div>
            <div>
                <input type="text" name="email" placeholder="Email (not required)" value="{{ old('email') }}">
            </div>
            <div>
                <input type="text" name="phone" placeholder="Phone (not required)" value="{{ old('phone') }}">
            </div>
            <div>
                <label>Company (required):</label><br>
                <select name="company" placeholder="Company (not required)">
                @foreach ($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
                </select>
            </div>
            <div class="buttons">
                <button type="submit">Send</button>
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
