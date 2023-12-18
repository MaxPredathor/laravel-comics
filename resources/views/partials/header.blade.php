<header>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="py-3">
                <a href="{{ route('home') }}">
                    <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC logo">
                </a>
            </div>
            <div class="my-div">
                <ul class="d-flex justify-content-between">
                    <li>CHARACTERS</li>
                    <li>COMICS</li>
                    <li>MOVIES</li>
                    <li>TV</li>
                    <li>GAMES</li>
                    <li>COLLECTIBLES</li>
                    <li>VIDEO</li>
                    <li>FANS</li>
                    <li>
                        <a href="{{ route('about') }}">ABOUT</a>
                    </li>
                    <li>SHOP</li>
                </ul>
            </div>
        </div>
    </div>
</header>
