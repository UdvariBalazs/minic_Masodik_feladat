@extends('layout')

@section('title', 'Employees')

@section('content')
    <h1>Employees</h1>

    <div class="table">
        <table>
            <tr>
                <th>ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Company</th>
                <th></th>
            </tr>
        @foreach ($employees as $employee)
            @foreach ($companies as $company)
                @if($employee->company == $company->id)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $company->name }}</td>
                        <td>
                            <div class="buttons">
                                <a href="/employees/{{ $employee->id }}/edit"><button>Update</button></a>
                            </div>
                        </td>
                    </tr>
                @endif
            @endforeach
        @endforeach
        </table>
    </div>
    <div class="create-button">
        <a href="/employees/create"><button>Create</button></a>
    </div>
@endsection
