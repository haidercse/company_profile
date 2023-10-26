
<header class="header header_style_01">
    <nav class="megamenu navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logos/2.png')}}" alt="image"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="{{Route::is('home') ? 'active' : '' }}" href="{{route('home')}}">Home</a></li>
                    <li><a class="{{Route::is('about') ? 'active' : '' }}"  href="{{route('about')}}">About us</a></li>
                    <li><a class="{{Route::is('services') ? 'active' : '' }}" href="{{route('services')}}">Our Services</a></li>
                    {{-- <li><a class="{{Route::is('portfolio') ? 'active' : '' }}" href="{{route('portfolio')}}">Portfolio</a></li> --}}
                    <li><a class="{{Route::is('features') ? 'active' : '' }}" href="{{route('features')}}">Features</a></li>
                    <li><a class="{{Route::is('testomonials') ? 'active' : '' }}" href="{{route('testomonials')}}">Testimonials</a></li>
                    {{-- <li><a class="{{Route::is('pricing') ? 'active' : '' }}" href="{{route('pricing')}}">Pricing</a></li> --}}
                    <li><a class="{{Route::is('contact') ? 'active' : '' }}" href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>