<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>City Blog Theme - Free Website Template</title>
    <meta name="keywords" content="city blog, theme, free templates, website templates, CSS, HTML" />
    <meta name="description" content="City Blog Theme is a free website template provided by tooplate.com" />
    <link href="/css/tooplate_style.css" rel="stylesheet" type="text/css" />
    <!--   Free Website Template by t o o p l a t e . c o m   -->

</head>
<div id="app">
<div id="tooplate_header_wrapper">
    <div id="tooplate_header">

        <div id="tooplate_menu">
            <ul>
                <li><a  href="/">{{ __('Home') }}</a></li>
                <li><a  href="/aboutus">{{ __('About Us') }}</a></li>
                <li><a  href="/gallery">{{ __('gallery') }}</a></li>
                <li><a  href="/contact">{{ __('Contact') }}</a></li>
                <li><a  href="/blog">{{ __('Blog') }}</a></li>
                <li>      <nav >
                        @guest
                            <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <span>{{ Auth::user()->name }}</span>

                            <a href="{{ route('logout') }}"

                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </nav></li>

            </ul>
        </div> <!-- end of tooplate_menu -->
        <div id="site_title"><h1><a rel="nofollow" href="http://www.tooplate.com">Free Website Templates</a></h1></div>

    </div> <!-- end of header -->
</div> <!-- end of header wrapper -->

            </div>
        </header>
<div>
    @yield('content')

</div>
        <div>
            @include('layouts.footer')

        </div>
    </div>
</body>
</html>
