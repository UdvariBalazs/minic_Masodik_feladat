@extends('layout')

@section('title', 'Companies')

@section('content')
    <h1>Companies</h1>

    <div class="table">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Logo</th>
                <th>Website</th>
                <th></th>
            </tr>
        @foreach ($companies as $company)
            <tr>
                <td>{{ $company->id }}</td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->email }}</td>
                <td>
                @if ($company->logo != null)
                    <img src="data:image/png;base64,{{ chunk_split(base64_encode( $company->logo )) }}" height="100" width="100">
                @endif
                </td>
                <td>{{ $company->website }}</td>
                <td>
                <div class="buttons">
                        <a href="/companies/{{ $company->id }}/edit"><button>Update</button></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </table>
    </div>
    <div class="buttons">
        <a href="/companies/create"><button>Create</button></a>
    </div>
@endsection
