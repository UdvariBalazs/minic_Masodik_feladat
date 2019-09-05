@extends('layout')

@section('title', 'Create company')

@section('content')
    <h1>Create company</h1>

    <div class="form">
        <form method="POST" action="/companies" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" value="{{ csrf_token() }}" name="_token">

            <div>
                <input type="text" name="name" placeholder="Name (required)" required>
            </div>
            <div>
                <input type="text" name="email" placeholder="Email (not required)">
            </div>
            <div>
                <label>Logo (not required):</label><br>
                <input type="file" name="file" id="file">  
            </div>
            <div>
                <input type="text" name="website" placeholder="Website (not required)">
            </div>
            <div class="buttons">
                <button type="submit" name="submit">Send</button>
            </div>
        </form>
    </div>
@endsection
