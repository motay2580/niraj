<header class="header bg-light-brown flex" id="home">
    <div class="container">
        <div class="banner">
            <div class="container">
                <h1 class="banner-title">
                    <span>MayaStore</span>
                </h1>
                <h1>everything that you want to buy are available</h1>
                <br />
                @if (Auth::user())
                    <a href="{{ route('home.product') }}" class="btn-header text-white bg-brown">shop now</a>
                @else
                    <a href="{{ route('login') }}" class="btn-header text-white bg-brown">shop now</a>
                @endif
            </div>
        </div>
    </div>
</header>
