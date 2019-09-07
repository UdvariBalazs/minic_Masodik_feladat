<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap framework -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }

            .flex-center {
                display: flex;
                flex-direction: column;
                margin: 0px 50px 0px 50px;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .nav-item {
                padding: 10px;
                font-size: 16px;
                font-weight: bold;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            h1 {
                text-align: center;
                padding-top: 30px;
                padding-bottom: 30px;
            }

            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 90%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;  
            }

            .table {
                display: flex;
                justify-content: center;
            }

            .buttons {
                display: flex;
                justify-content: center;
            }

            .submit-button {
                display: flex;
                justify-content: center;
                padding: 10px;
            }

            button {
                font-family: 'Nunito', sans-serif;
                font-size: 17pt;
                color: #636b6f;
                font-weight: bold;
                border: 2px solid #636b6f;
                border-radius: 4px;
            }

            .buttons {
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                margin: 10px;
            }

            .delete-button {
                margin-left: 20px;
            }

            .form {
                display: flex;
                justify-content: center;
            }

            form {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            input, select {
                width: 300px;
                font-family: 'Nunito', sans-serif;
                font-size: 14pt;
                color: #636b6f;
                font-weight: bold;
                border: 2px solid #636b6f;
                border-radius: 4px;
                margin: 4px;
                padding: 6px;
            }

            select {
                width: 318px;
            }

            label {
                width: 300px;
                font-family: 'Nunito', sans-serif;
                font-size: 14pt;
                color: #636b6f;
                font-weight: bold;
                margin: 4px;
                padding: 6px;
            }

            .notification {
                font-family: 'Nunito', sans-serif;
                font-size: 14pt;
                color: white;
                background-color: red;
                font-weight: bold;
                border-radius: 4px;
                margin-top: 10px;
                margin-bottom: 10px;
                padding: 10px;
            }

            .input.is-danger {
                border-color: red;
            }
        </style>
</head>
<body>
    @yield('navbar')

    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
