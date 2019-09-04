@extends('layout')

@section('title', 'Create company')

@section('content')
    <h1>Create company</h1>

    <div class="form">
        <form method="POST" action="/companies">
            {{ csrf_field() }}

            <div>
                <input type="text" name="name" placeholder="Name (required)" required>
            </div>
            <div>
                <input type="text" name="email" placeholder="Email (not required)">
            </div>
            <div>
                <label>Logo (not required):</label><br>
                <input name="logo" type="file">
            </div>
            <div>
                <input type="text" name="website" placeholder="Website (not required)">
            </div>
            <div class="buttons">
                <button type="submit">Send</button>
            </div>
        </form>
    </div>
@endsection
