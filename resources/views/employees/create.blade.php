@extends('layout')

@section('title', 'Create employee')

@section('content')
    <h1>Create employee</h1>

    <div class="form">
        <form method="POST" action="/employees">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            <div>
                <input type="text" name="first_name" placeholder="First name (required)" required>
            </div>
            <div>
                <input type="text" name="last_name" placeholder="Last name (required)" required>
            </div>
            <div>
                <input type="text" name="email" placeholder="Email (not required)">
            </div>
            <div>
                <input type="text" name="phone" placeholder="Phone (not required)">
            </div>
            <div>
                <label>Company (required):</label><br>
                <select name="company" placeholder="Company (not required)">
                @foreach ($companies as $company)
                    <option value={{ $company->id }}>{{ $company->name }}</option>
                @endforeach
                </select>
            </div>
            <div class="buttons">
                <button type="submit">Send</button>
            </div>
        </form>
    </div>
@endsection
