@extends('layouts.app')

@section('content')
    <div class="container">
        @include('includes.messages')
        <div class="row justify-content-center">
            <img src="/storage/images/SDM.png" alt="" style="width: 160px;height: 80px;">
        </div>
        <div class="row justify-content-center mb-5">
            <h1>SDM Library System</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <a href="/search/book" class="text-success">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-book fa-3x mb-3"></i>
                            <h1>Books</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                    <a href="/search/magazine" class="text-primary">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="fas fa-newspaper fa-3x mb-3"></i>
                                <h1>Magazines</h1>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                        <a href="/search/article" class="text-dark">
                            <div class="card">
                                <div class="card-body text-center">
                                    <i class="fas fa-file-alt fa-3x mb-3"></i>
                                    <h1>Articles</h1>
                                </div>
                            </div>
                        </a>
                    </div>
        </div>
    </div>

@endsection



{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 90vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
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
            img{

            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    SDM Library System
                </div>
                
                @if (Route::has('login'))
                <div class="links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </div>
    </body>
</html> --}}
