<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Admin panel')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            h1 {
                text-align: center;
            }

            .nav-bar {
                display: flex;
                justify-content: center;
                padding-top: 40px;
                padding-bottom: 40px;
            }

            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
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
                display: inline-block;
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

            .create-button {
                display: flex;
                justify-content: center;
                margin: 20px;
            }

            button {
                font-family: 'Nunito', sans-serif;
                font-size: 16pt;
                color: #636b6f;
                font-weight: bold;
                border: 2px solid #636b6f;
                border-radius: 4px;
            }

            .delete-button {
                margin-left: 20px;
            }

            .form {
                display: flex;
                justify-content: center;
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
        </style>
    </head>
    <body>
        <header>
            <div class="nav-bar">
                <div class="links">
                    <a href="/">Home</a>
                    <a href="/companies">Companies</a>
                    <a href="/employees">Employees</a>
                </div>
            </div>
        </header>
        <div class="flex-center position-ref">
            @yield('content')
        </div>
    </body>
</html>
