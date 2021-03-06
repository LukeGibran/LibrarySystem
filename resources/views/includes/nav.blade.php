<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }} 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav" style="margin-left:7rem">
                    @auth
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="/"><i class="fas fa-home"></i> Dashboard </a>
                    </li> --}}
                    <li class="nav-item ml-3">
                        <a class="nav-link" href="/home"><i class="fas fa-th"></i> Menu</a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="nav-link" href="/books"><i class="fas fa-search"></i> Search</a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="nav-link" href="/books/create"><i class="fas fa-plus"></i> Add</a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="nav-link" href="/borrow/create"><i class="fas fa-book"></i> Borrow</a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="nav-link" href="/borrow"><i class="fas fa-file"></i> Records</a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="nav-link" href="/borrower"><i class="fas fa-id-card"></i> Borrowers</a>
                    </li>
                    @endauth

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        {{-- @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif --}}
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                </ul>
            </div>
        </div>
    </nav>