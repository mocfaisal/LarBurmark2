@include('Layouts.Frontend.Portal.resources')
@include('Layouts.Frontend.Portal.header')

<body>

    @include('Layouts.Frontend.Portal.navbar')

    <!-- Hero Section -->

    <!-- <section class="hero is-primary is-fullheight">
        <div class="hero-body">
            <div class="has-text-centered container">
                <h1 class="title">Welcome to Our Marketplace</h1>
                <h2 class="subtitle">Discover amazing products from talented sellers</h2><a class="button is-light is-large" href="#">Explore Now</a>
            </div>
        </div>
    </section> -->

    <!-- Featured Products -->
    <section class="section">
        <div class="is-fluid container">
            @yield('content')
        </div>
    </section>

    @include('Layouts.Frontend.Portal.footer')

    @livewireScripts

</body>

</html>

@yield('global.resources.footer')
@yield('global.javascript.code')

@yield('private.js.file')
@yield('private.js.code')

