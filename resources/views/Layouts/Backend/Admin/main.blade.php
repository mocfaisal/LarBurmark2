@include('Layouts.Backend.Admin.resources')
@include('Layouts.Backend.Admin.header')

<body>

    @include('Layouts.Backend.Admin.navbar')

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
            <div class="columns is-full">
            <div class="column">
                <div class="columns is-mobile is-gapless">
                    <div class="column is-one-fifth">
                        @include('Layouts.Backend.Admin.sidebar')
                    </div>
                    <div class="column">
                        @yield('content')
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    @include('Layouts.Backend.Admin.footer')

    @livewireScripts

</body>

</html>

@yield('global.resources.footer')
@yield('global.javascript.code')

@yield('private.js.file')
@yield('private.js.code')
