@extends('layout')

@section('title', 'Edit company')

@section('content')
    <h1>Edit company</h1>

    <div class="form">
        <form method="POST" action="/companies/" {{ $company->id }}>
            {{ method_field('PATCH') }}
            {{ csrf_field() }}
            
            <div>
               <input type="text" name="name" value="{{ $company->name }}">
            </div>
            <div>
                <input type="text" name="email" value={{ $company->email }}>
            </div>
            <div>
                <label>Logo:</label><br>
                <input name="logo" type="file" class="input-file">
            </div>
            <div>
                <input type="text" name="phone" value={{ $company->website }}>
            </div>
            <div class="submit-button">
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
    <div class="form">
        <form method="POST" action="/companies/"{{ $company->id }}>
            @method('DELETE')
            @csrf

            <div class="submit-button">
                <button type="submit">Delete</button>
            </div>
        </form>
    </div>
@endsection
