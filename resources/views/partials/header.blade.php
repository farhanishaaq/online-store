<nav class="navbar navbar-expand-lg navbar-light navbar navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#"><img src="{{asset('images/logo.jpg')}}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

        </ul>




        <ul class="nav-item mr-sm-3 " >
            <a href="#">
            <i class="fa fa-shopping-cart" href="#">Shopping Cart
            <span class="badge-success">{{Session::has('cart') ? Session::get('cart')->totalQuantity : '' }}</span>
            </i>
            </a>
        </ul>
        <ul class="nav-item mr-sm-3 " >

    {{--<div class="btn-group">--}}
        {{--<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
            {{--<i class="fas fa-user"></i> User Account--}}
        {{--</button>--}}
        {{--<div class="dropdown-menu dropdown-menu-right">--}}
            {{--<button class="dropdown-item" type="button">Sign Up</button>--}}
            {{--<button class="dropdown-item" type="button">Sing Out</button>--}}
            {{--<button class="dropdown-item" type="button">Something else here</button>--}}
        {{--</div>--}}
    {{--</div>--}}
        {{--</ul>--}}
    {{--</div>--}}

            @if (Route::has('login'))
                <div class="top-right links float-lg-right">
                    @auth
                        <a href="{{ route('index') }}"><i class="fas fa-user"></i></a>
                    @else
                        <a href="{{ route('login') }}"><i class="fas fa-user">Login</i></a>
                        <a href="{{ route('register') }}"><i class="fas fa-user-plus">Register</i></a>
                    @endauth
                </div>
    @endif
        </ul>

        <ul class="navbar-nav float-lg-right">
            <!-- Authentication Links -->
            @guest

            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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

</nav>