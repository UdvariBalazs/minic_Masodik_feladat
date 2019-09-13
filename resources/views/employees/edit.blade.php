@extends('layouts.app')

@section('title', __('Edit employee'))

@section('navbar')
    @include('inc.navbar')
@endsection

@section('content')
    <h1>{{ __('Edit employee') }}</h1>

    <div class="form">
        <form method="POST" action="/{{ app()->getLocale() }}/employees/{{ $employee->id }}" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            
            <div>
               <input type="text" class="input {{ $errors->has('first_name') ? 'is-danger' : '' }}" name="first_name" value="{{ $employee->first_name }}" requierd>
            </div>
            <div>
                <input type="text" class="input {{ $errors->has('last_name') ? 'is-danger' : '' }}" name="last_name" value="{{ $employee->last_name }}" requierd>
            </div>
            <div>
                <input type="text" name="email" value="{{ $employee->email }}">
            </div>
            <div>
                <input type="text" name="phone" value="{{ $employee->phone }}">
            </div>
            <div>
                <label>{{__('Company') }}:</label><br>
                <select name="company">
                @foreach ($companies as $company)
                    @if ($company->id == $employee->company)
                        <option selected="selected" value="{{ $company->id }}">{{ $company->name }}</option>
                    @else
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endif
                    
                @endforeach
                </select>
            </div>
            <div class="submit-button">
                <button type="submit">{{ __('Update') }}</button>
            </div>
        </form>
    </div>
    <div class="form">
        <form method="POST" action="/{{ app()->getLocale() }}/employees/{{ $employee->id }}">
            @method('DELETE')
            @csrf

            <div class="submit-button">
                <button type="submit">{{ __('Delete') }}</button>
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
