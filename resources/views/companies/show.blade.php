@extends('layouts.app')

@section('title', __('Companies'))

@section('navbar')
    @include('inc.navbar')
@endsection

@section('content')
    <h1>{{ __('Companies') }}</h1>
    
    <div class="table">
        <table>
            <tr>
                <th>{{ __('ID') }}</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Email') }}</th>
                <th>{{ __('Logo') }}</th>
                <th>{{ __('Website') }}</th>
                <th></th>
            </tr>
        @foreach ($companies as $company)
            <tr>
                <td>{{ $company->id }}</td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->email }}</td>
                <td>
                @if ($company->logo != null)
                    <img src="../../../{{ $company->logo }}" height="100" width="100">
                @endif
                </td>
                <td>{{ $company->website }}</td>
                <td>
                    <div class="buttons">
                        <a href="/{{ app()->getLocale() }}/companies/{{ $company->id }}/edit"><button>{{ __('Update') }}</button></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </table>
    </div>
    <div class="buttons">
        <a href="/{{ app()->getLocale() }}/companies/create"><button>{{ __('Create') }}</button></a>
        {{ $companies->links() }}
    </div>
@endsection
