@extends('layouts.app')

@section('title', __('Employees'))

@section('navbar')
    @include('inc.navbar')
@endsection

@section('content')
    <h1>{{ __('Employees') }}</h1>

    <div class="table">
        <table>
            <tr>
                <th>{{__('ID') }}</th>
                <th>{{__('First name') }}</th>
                <th>{{__('Last name') }}</th>
                <th>{{__('Email') }}</th>
                <th>{{__('Phone') }}</th>
                <th>{{__('Company') }}</th>
                <th></th>
            </tr>
        @foreach ($employees as $employee)
            @foreach ($companies as $company)
                @if ($employee->company == $company->id)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $company->name }}</td>
                        <td>
                            <div class="buttons">
                                <a href="/{{ app()->getLocale() }}/employees/{{ $employee->id }}/edit"><button>{{ __('Update') }}</button></a>
                            </div>
                        </td>
                    </tr>
                @elseif ($employee->company == null)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td></td>
                        <td>
                            <div class="buttons">
                                <a href="/{{ app()->getLocale() }}/employees/{{ $employee->id }}/edit"><button>{{ __('Update') }}</button></a>
                            </div>
                        </td>
                    </tr>
                    @break
                @endif
            @endforeach
        @endforeach
        </table>
    </div>
    <div class="buttons">
        <a href="/{{ app()->getLocale() }}/employees/create"><button>{{ __('Create') }}</button></a>
        {{ $employees->links() }}
    </div>

    
@endsection
