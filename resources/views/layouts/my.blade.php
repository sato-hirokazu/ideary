<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@if (! Request::is('/')){{ $title }} | @endif{{ env('APP_NAME') }}</title>

    <!-- Styles -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <!-- <li class="nav-item @if (my_is_current_controller('posts')) active @endif">
                            <a class="nav-link" href="{{ url('posts') }}">
                                {{ __('Posts') }}
                                @if (my_is_current_controller('posts'))
                                    <span class="sr-only">(current)</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item @if (my_is_current_controller('users')) active @endif">
                            <a class="nav-link" href="{{ url('users') }}">
                                {{ __('Users') }}
                                @if (my_is_current_controller('users'))
                                    <span class="sr-only">(current)</span>
                                @endif
                            </a>
                        </li> -->
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- 投稿ボタン -->
                        <li class="nav-item">
                            <!-- <a href="{{ url('posts/create') }}" id="new-post" class="btn btn-success">
                                {{ __('New Post') }}
                            </a> -->
                        </li>

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item @if (my_is_current_controller('login, password')) active @endif">
                                <a class="nav-link" href="{{ route('login') }}">
                                    {{ __('Login') }}
                                    @if (my_is_current_controller('login, password'))
                                        <span class="sr-only">(current)</span>
                                    @endif
                                </a>
                            </li>
                            <li class="nav-item @if (my_is_current_controller('register')) active @endif">
                                <a class="nav-link" href="{{ route('register') }}">
                                    {{ __('Register') }}
                                    @if (my_is_current_controller('register'))
                                        <span class="sr-only">(current)</span>
                                    @endif
                                </a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown-user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                                    <a class="dropdown-item" href="{{ url('users/'.auth()->user()->id) }}">
                                        {{ __('Profile') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="dropdown-lang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ __('locale.'.App::getLocale()) }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-lang">
                                @if (!App::isLocale('en'))
                                    <a class="dropdown-item" href="{{ my_locale_url('en') }}">
                                        {{ __('locale.en') }}
                                    </a>
                                @endif
                                @if (!App::isLocale('ja'))
                                    <a class="dropdown-item" href="{{ my_locale_url('ja') }}">
                                        {{ __('locale.ja') }}
                                    </a>
                                @endif
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- フラッシュ・メッセージ -->
        @if (session('status'))
            <div class="container mt-2">
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            </div>
        @endif

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
