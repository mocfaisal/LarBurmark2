<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-top">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel APP</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/css/bulma-carousel.min.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body>

    <nav class="navbar is-fixed-top is-primary" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
            </a>
            <a class="navbar-burger" data-target="navbarBasicExample" role="button" aria-expanded="false"
                aria-label="menu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <!-- Navigation Menu Start -->
        <div class="navbar-menu" id="navbarBasicExample">
            <div class="navbar-start is-justify-content-center is-flex-grow-1">
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link"> Categories </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item"> Electronic </a>
                        <a class="navbar-item"> Clothing and Accessories </a>
                        <a class="navbar-item"> Entertainment </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item is-active"> Others </a>
                    </div>
                </div>
                <div class="navbar-item column is-8">
                    <div class="field">
                        <div class="control has-icons-left has-icons-right">
                            <input type="text" class="input" placeholder="Search Product...">
                            <span class="icon is-small is-right">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-rounded is-light"> Log in </a>
                        <a class="button is-rounded is-primary">
                            <strong>Sign up</strong>
                        </a>
                        <button class="button is-rounded">
                            <span class="icon is-small">
                                <i class="fas fa-cart-flatbed"></i>
                            </span>
                            <span class="tag is-danger">0</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation Menu End -->
    </nav>
    <!-- Navigation Start -->
    <!-- Hero Section -->

    <!-- <section class="hero is-primary is-fullheight">
        <div class="hero-body">
            <div class="has-text-centered container">
                <h1 class="title">Welcome to Our Marketplace</h1>
                <h2 class="subtitle">Discover amazing products from talented sellers</h2><a
class="button is-light is-large" href="#">Explore Now</a>
            </div>
        </div>
    </section> -->

    <!-- Featured Products -->
    <section class="section">
        <div class="is-fluid container">
            <div class="box block">
                <div class="columns is-mobile is-multiline is-flex is-vcentered is-centered">
                    <div class="column is-8">
                        <!-- Start Carousel -->
                        <div class="hero-carousel" id="carousel-demo">
                            <div class="item-1">
                                <!-- Slide Content -->
                                <figure class="image is-3by1">
                                    <img src="https://unsplash.it/831/242/?random&pic=1" alt="" srcset="">
                                </figure>
                            </div>
                            <div class="item-2">
                                <!-- Slide Content -->
                                <figure class="image is-3by1">
                                    <img src="https://unsplash.it/831/242/?random&pic=2" alt="" srcset="">
                                </figure>
                            </div>
                            <div class="item-3">
                                <!-- Slide Content -->
                                <figure class="image is-3by1">
                                    <img src="https://unsplash.it/831/242/?random&pic=3" alt="" srcset="">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="column is-4">
                        <div class="column">
                            <figure class="image is-3by1">
                                <img src="https://unsplash.it/431/875/?random&pic=4" alt="" srcset="">
                            </figure>
                        </div>
                        <div class="column">
                            <figure class="image is-3by1">
                                <img src="https://unsplash.it/431/143/?random&pic=5" alt="" srcset="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box block">
                <div class="content">
                    <h2 class="title">Promotion</h2>
                </div>
                <div class="columns is-mobile is-multiline">
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-48x48 is-inline-block">
                                <img src="https://placehold.co/48" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Promotion 1</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-48x48 is-inline-block">
                                <img src="https://placehold.co/48" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Promotion 2</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-48x48 is-inline-block">
                                <img src="https://placehold.co/48" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Promotion 3</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-48x48 is-inline-block">
                                <img src="https://placehold.co/48" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Promotion 4</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-48x48 is-inline-block">
                                <img src="https://placehold.co/48" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Promotion 5</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-48x48 is-inline-block">
                                <img src="https://placehold.co/48" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Promotion 6</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-48x48 is-inline-block">
                                <img src="https://placehold.co/48" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Promotion 7</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-48x48 is-inline-block">
                                <img src="https://placehold.co/48" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Promotion 8</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-48x48 is-inline-block">
                                <img src="https://placehold.co/48" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Promotion 9</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-48x48 is-inline-block">
                                <img src="https://placehold.co/48" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Promotion 10</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-48x48 is-inline-block">
                                <img src="https://placehold.co/48" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Promotion 11</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-48x48 is-inline-block">
                                <img src="https://placehold.co/48" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Promotion 12</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box block">
                <div class="content">
                    <h2 class="title">Categories</h2>
                </div>
                <div class="columns is-mobile is-multiline">
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-96x96 is-inline-block">
                                <img src="https://placehold.co/90" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Category 1</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-96x96 is-inline-block">
                                <img src="https://placehold.co/90" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Category 2</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-96x96 is-inline-block">
                                <img src="https://placehold.co/90" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Category 3</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-96x96 is-inline-block">
                                <img src="https://placehold.co/90" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Category 4</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-96x96 is-inline-block">
                                <img src="https://placehold.co/90" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Category 5</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-96x96 is-inline-block">
                                <img src="https://placehold.co/90" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Category 6</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-96x96 is-inline-block">
                                <img src="https://placehold.co/90" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Category 7</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-96x96 is-inline-block">
                                <img src="https://placehold.co/90" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Category 8</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-96x96 is-inline-block">
                                <img src="https://placehold.co/90" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Category 9</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-96x96 is-inline-block">
                                <img src="https://placehold.co/90" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Category 10</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-96x96 is-inline-block">
                                <img src="https://placehold.co/90" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Category 11</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <figure class="image is-96x96 is-inline-block">
                                <img src="https://placehold.co/90" alt="" srcset="">
                            </figure>
                            <p class="is-size-6">Category 12</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box block">
                <div class="columns">
                    <div class="column is-3">
                        <div class="notification is-primary has-text-centered"> Flash SALE </div>
                    </div>
                    <div class="column is-2">
                        <div class="notification is-primary has-text-centered"> Counter Time </div>
                    </div>
                    <div class="column">
                        <div class="is-pulled-right"> See More <span class="icon has-text-danger">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Start Carousel -->
                <div class="hero-carousel" id="carousel-demo2">
                    <div class="item-1 p-2">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-square">
                                    <img src="https://unsplash.it/300/300/?random&pic=1" alt=""
                                        srcset="">
                                </figure>
                            </div>
                            <div class="card-content">
                                <p class="subtitle is-6 line-clamp is-line-clamp-1">Lorem Ipsum is simply dummy
                                    text...Lorem Ipsum is simply dummy text...</p>
                                <p class="title is-6 line-clamp is-line-clamp-1">Rp 1.000.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-2 p-2">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-square">
                                    <img src="https://unsplash.it/300/300/?random&pic=2" alt=""
                                        srcset="">
                                </figure>
                            </div>
                            <div class="card-content">
                                <p class="subtitle is-6 line-clamp is-line-clamp-1">Lorem Ipsum is simply dummy
                                    text...Lorem Ipsum is simply dummy text...</p>
                                <p class="title is-6 line-clamp is-line-clamp-1">Rp 1.000.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-3 p-2">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-square">
                                    <img src="https://unsplash.it/300/300/?random&pic=3" alt=""
                                        srcset="">
                                </figure>
                            </div>
                            <div class="card-content">
                                <p class="subtitle is-6 line-clamp is-line-clamp-1">Lorem Ipsum is simply dummy
                                    text...Lorem Ipsum is simply dummy text...</p>
                                <p class="title is-6 line-clamp is-line-clamp-1">Rp 1.000.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-4 p-2">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-square">
                                    <img src="https://unsplash.it/300/300/?random&pic=4" alt=""
                                        srcset="">
                                </figure>
                            </div>
                            <div class="card-content">
                                <p class="subtitle is-6 line-clamp is-line-clamp-1">Lorem Ipsum is simply dummy
                                    text...Lorem Ipsum is simply dummy text...</p>
                                <p class="title is-6 line-clamp is-line-clamp-1">Rp 1.000.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-5 p-2">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-square">
                                    <img src="https://unsplash.it/300/300/?random&pic=5" alt=""
                                        srcset="">
                                </figure>
                            </div>
                            <div class="card-content">
                                <p class="subtitle is-6 line-clamp is-line-clamp-1">Lorem Ipsum is simply dummy
                                    text...Lorem Ipsum is simply dummy text...</p>
                                <p class="title is-6 line-clamp is-line-clamp-1">Rp 1.000.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-6 p-2">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-square">
                                    <img src="https://unsplash.it/300/300/?random&pic=6" alt=""
                                        srcset="">
                                </figure>
                            </div>
                            <div class="card-content">
                                <p class="subtitle is-6 line-clamp is-line-clamp-1">Lorem Ipsum is simply dummy
                                    text...Lorem Ipsum is simply dummy text...</p>
                                <p class="title is-6 line-clamp is-line-clamp-1">Rp 1.000.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box block">
                <div class="content">
                    <h2 class="title">Popular Search</h2>
                </div>

                <div class="columns is-mobile is-multiline is-gapless">

                    <div class="column">
                        <div class="card">
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <div class="column is-12">
                                            <p class="title is-7 line-clamp is-line-clamp-2">Keyword Product</p>
                                            <div class="columns is-multiline is-mobile is-gapless">
                                                <div class="column is-12">
                                                    <p class="subtitle is-7 line-clamp is-line-clamp-1">{n} product</p>
                                                </div>
                                                <div class="column is-12">
                                                    <p class="subtitle is-7 line-clamp is-line-clamp-1">{n}x searched
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-right">
                                        <figure class="image is-96x96">
                                            <img src="https://bulma.io/images/placeholders/96x96.png" alt="Product">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <div class="column is-12">
                                            <p class="title is-7 line-clamp is-line-clamp-2">Keyword Product</p>
                                            <div class="columns is-multiline is-mobile is-gapless">
                                                <div class="column is-12">
                                                    <p class="subtitle is-7 line-clamp is-line-clamp-1">{n} product</p>
                                                </div>
                                                <div class="column is-12">
                                                    <p class="subtitle is-7 line-clamp is-line-clamp-1">{n}x searched
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-right">
                                        <figure class="image is-96x96">
                                            <img src="https://bulma.io/images/placeholders/96x96.png" alt="Product">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <div class="column is-12">
                                            <p class="title is-7 line-clamp is-line-clamp-2">Keyword Product</p>
                                            <div class="columns is-multiline is-mobile is-gapless">
                                                <div class="column is-12">
                                                    <p class="subtitle is-7 line-clamp is-line-clamp-1">{n} product</p>
                                                </div>
                                                <div class="column is-12">
                                                    <p class="subtitle is-7 line-clamp is-line-clamp-1">{n}x searched
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-right">
                                        <figure class="image is-96x96">
                                            <img src="https://bulma.io/images/placeholders/96x96.png" alt="Product">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <div class="column is-12">
                                            <p class="title is-7 line-clamp is-line-clamp-2">Keyword Product</p>
                                            <div class="columns is-multiline is-mobile is-gapless">
                                                <div class="column is-12">
                                                    <p class="subtitle is-7 line-clamp is-line-clamp-1">{n} product</p>
                                                </div>
                                                <div class="column is-12">
                                                    <p class="subtitle is-7 line-clamp is-line-clamp-1">{n}x searched
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-right">
                                        <figure class="image is-96x96">
                                            <img src="https://bulma.io/images/placeholders/96x96.png" alt="Product">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <div class="column is-12">
                                            <p class="title is-7 line-clamp is-line-clamp-2">Keyword Product</p>
                                            <div class="columns is-multiline is-mobile is-gapless">
                                                <div class="column is-12">
                                                    <p class="subtitle is-7 line-clamp is-line-clamp-1">{n} product</p>
                                                </div>
                                                <div class="column is-12">
                                                    <p class="subtitle is-7 line-clamp is-line-clamp-1">{n}x searched
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-right">
                                        <figure class="image is-96x96">
                                            <img src="https://bulma.io/images/placeholders/96x96.png" alt="Product">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="box block">
                <div class="tabs is-boxed">
                    <ul>
                        <li class="tab is-active" id="tab-rec">
                            <a>
                                <span class="icon is-small">
                                    <i class="fas fa-fire" aria-hidden="true"></i>
                                </span>
                                <span>Recommendation</span>
                            </a>
                        </li>
                        <li class="tab" id="tab-others">
                            <a>
                                <span class="icon is-small">
                                    <i class="fas fa-file" aria-hidden="true"></i>
                                </span>
                                <span>Others</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="tabs-content">
                    <div id="tab-rec-content">
                        <div class="columns is-multiline">
                            <div class="column is-2">
                                <div class="card has-ribbon-left">
                                    <div class="ribbon is-primary">Silver</div>
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                            <img src="https://unsplash.it/300/300/?random&pic=1" alt=""
                                                srcset="">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="content">
                                            <p class="title is-6 line-clamp is-line-clamp-1">Lorem Ipsum is simply
                                                dummy
                                                text...Lorem Ipsum is simply dummy text...</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-footer-item">
                                            <p class="title is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="Rp 100.000.000.000">Rp 100.000.000.000</p>
                                        </div>
                                        <div class="card-footer-item">
                                            <p class="subtitle is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="{n} Sold">{n} Sold</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column is-2">
                                <div class="card has-ribbon-left">
                                    <div class="ribbon is-primary">Silver</div>
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                            <img src="https://unsplash.it/300/300/?random&pic=1" alt=""
                                                srcset="">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="content">
                                            <p class="title is-6 line-clamp is-line-clamp-1">Lorem Ipsum is simply
                                                dummy
                                                text...Lorem Ipsum is simply dummy text...</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-footer-item">
                                            <p class="title is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="Rp 100.000.000.000">Rp 100.000.000.000</p>
                                        </div>
                                        <div class="card-footer-item">
                                            <p class="subtitle is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="{n} Sold">{n} Sold</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column is-2">
                                <div class="card has-ribbon-left">
                                    <div class="ribbon is-primary">Silver</div>
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                            <img src="https://unsplash.it/300/300/?random&pic=1" alt=""
                                                srcset="">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="content">
                                            <p class="title is-6 line-clamp is-line-clamp-1">Lorem Ipsum is simply
                                                dummy
                                                text...Lorem Ipsum is simply dummy text...</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-footer-item">
                                            <p class="title is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="Rp 100.000.000.000">Rp 100.000.000.000</p>
                                        </div>
                                        <div class="card-footer-item">
                                            <p class="subtitle is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="{n} Sold">{n} Sold</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column is-2">
                                <div class="card has-ribbon-left">
                                    <div class="ribbon is-primary">Silver</div>
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                            <img src="https://unsplash.it/300/300/?random&pic=1" alt=""
                                                srcset="">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="content">
                                            <p class="title is-6 line-clamp is-line-clamp-1">Lorem Ipsum is simply
                                                dummy
                                                text...Lorem Ipsum is simply dummy text...</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-footer-item">
                                            <p class="title is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="Rp 100.000.000.000">Rp 100.000.000.000</p>
                                        </div>
                                        <div class="card-footer-item">
                                            <p class="subtitle is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="{n} Sold">{n} Sold</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column is-2">
                                <div class="card has-ribbon-left">
                                    <div class="ribbon is-primary">Silver</div>
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                            <img src="https://unsplash.it/300/300/?random&pic=1" alt=""
                                                srcset="">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="content">
                                            <p class="title is-6 line-clamp is-line-clamp-1">Lorem Ipsum is simply
                                                dummy
                                                text...Lorem Ipsum is simply dummy text...</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-footer-item">
                                            <p class="title is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="Rp 100.000.000.000">Rp 100.000.000.000</p>
                                        </div>
                                        <div class="card-footer-item">
                                            <p class="subtitle is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="{n} Sold">{n} Sold</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column is-2">
                                <div class="card has-ribbon-left">
                                    <div class="ribbon is-primary">Silver</div>
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                            <img src="https://unsplash.it/300/300/?random&pic=1" alt=""
                                                srcset="">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="content">
                                            <p class="title is-6 line-clamp is-line-clamp-1">Lorem Ipsum is simply
                                                dummy
                                                text...Lorem Ipsum is simply dummy text...</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-footer-item">
                                            <p class="title is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="Rp 100.000.000.000">Rp 100.000.000.000</p>
                                        </div>
                                        <div class="card-footer-item">
                                            <p class="subtitle is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="{n} Sold">{n} Sold</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column is-2">
                                <div class="card has-ribbon-left">
                                    <div class="ribbon is-primary">Silver</div>
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                            <img src="https://unsplash.it/300/300/?random&pic=1" alt=""
                                                srcset="">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="content">
                                            <p class="title is-6 line-clamp is-line-clamp-1">Lorem Ipsum is simply
                                                dummy
                                                text...Lorem Ipsum is simply dummy text...</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-footer-item">
                                            <p class="title is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="Rp 100.000.000.000">Rp 100.000.000.000</p>
                                        </div>
                                        <div class="card-footer-item">
                                            <p class="subtitle is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="{n} Sold">{n} Sold</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column is-2">
                                <div class="card has-ribbon-left">
                                    <div class="ribbon is-primary">Silver</div>
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                            <img src="https://unsplash.it/300/300/?random&pic=1" alt=""
                                                srcset="">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="content">
                                            <p class="title is-6 line-clamp is-line-clamp-1">Lorem Ipsum is simply
                                                dummy
                                                text...Lorem Ipsum is simply dummy text...</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-footer-item">
                                            <p class="title is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="Rp 100.000.000.000">Rp 100.000.000.000</p>
                                        </div>
                                        <div class="card-footer-item">
                                            <p class="subtitle is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="{n} Sold">{n} Sold</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column is-2">
                                <div class="card has-ribbon-left">
                                    <div class="ribbon is-primary">Silver</div>
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                            <img src="https://unsplash.it/300/300/?random&pic=1" alt=""
                                                srcset="">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="content">
                                            <p class="title is-6 line-clamp is-line-clamp-1">Lorem Ipsum is simply
                                                dummy
                                                text...Lorem Ipsum is simply dummy text...</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-footer-item">
                                            <p class="title is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="Rp 100.000.000.000">Rp 100.000.000.000</p>
                                        </div>
                                        <div class="card-footer-item">
                                            <p class="subtitle is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="{n} Sold">{n} Sold</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column is-2">
                                <div class="card has-ribbon-left">
                                    <div class="ribbon is-primary">Silver</div>
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                            <img src="https://unsplash.it/300/300/?random&pic=1" alt=""
                                                srcset="">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="content">
                                            <p class="title is-6 line-clamp is-line-clamp-1">Lorem Ipsum is simply
                                                dummy
                                                text...Lorem Ipsum is simply dummy text...</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-footer-item">
                                            <p class="title is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="Rp 100.000.000.000">Rp 100.000.000.000</p>
                                        </div>
                                        <div class="card-footer-item">
                                            <p class="subtitle is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="{n} Sold">{n} Sold</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column is-2">
                                <div class="card has-ribbon-left">
                                    <div class="ribbon is-primary">Silver</div>
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                            <img src="https://unsplash.it/300/300/?random&pic=1" alt=""
                                                srcset="">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="content">
                                            <p class="title is-6 line-clamp is-line-clamp-1">Lorem Ipsum is simply
                                                dummy
                                                text...Lorem Ipsum is simply dummy text...</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-footer-item">
                                            <p class="title is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="Rp 100.000.000.000">Rp 100.000.000.000</p>
                                        </div>
                                        <div class="card-footer-item">
                                            <p class="subtitle is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="{n} Sold">{n} Sold</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card has-ribbon-left">
                                    <div class="ribbon is-primary">Silver</div>
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                            <img src="https://unsplash.it/300/300/?random&pic=1" alt=""
                                                srcset="">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="content">
                                            <p class="title is-6 line-clamp is-line-clamp-1">Lorem Ipsum is simply
                                                dummy
                                                text...Lorem Ipsum is simply dummy text...</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-footer-item">
                                            <p class="title is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="Rp 100.000.000.000">Rp 100.000.000.000</p>
                                        </div>
                                        <div class="card-footer-item">
                                            <p class="subtitle is-7 line-clamp is-line-clamp-1 has-text-primary"
                                                title="{n} Sold">{n} Sold</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="buttons is-centered">
                            <button type="button" class="button is-primary">Load More</button>
                        </div>
                    </div>
                    <div class="is-hidden" id="tab-others-content"> asdasdas 2 </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="columns is-mobile is-multiline">
            <div class="column">
                <span class="title is-5">Customer Services</span>
                <ul>
                    <li><a class="has-text-black" href="#">Help</a></li>
                    <li><a class="has-text-black" href="#">Payment Methods</a></li>
                    <li><a class="has-text-black" href="#">Track Purchase Orders</a></li>
                    <li><a class="has-text-black" href="#">Returns & Funds</a></li>
                    <li><a class="has-text-black" href="#">Guarantee</a></li>
                    <li><a class="has-text-black" href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="column">
                <span class="title is-5">Explore</span>
                <ul>
                    <li><a class="has-text-black" href="#">About Us</a></li>
                    <li><a class="has-text-black" href="#">Terms &amp; conditions</a></li>
                    <li><a class="has-text-black" href="#">Privacy Policy</a></li>
                    <li><a class="has-text-black" href="#">Returns & Funds</a></li>
                    <li><a class="has-text-black" href="#">Seller Center</a></li>
                </ul>
            </div>
            <div class="column">
                <span class="title is-5">Payments</span>
                <div class="coulmns is-mobile is-multiline">
                    <div class="column is-inline-block">
                        <figure class="image is-64x64">
                            <img src="https://bulma.io/images/placeholders/64x64.png">
                        </figure>
                    </div>
                    <div class="column is-inline-block">
                        <figure class="image is-64x64">
                            <img src="https://bulma.io/images/placeholders/64x64.png">
                        </figure>
                    </div>
                    <div class="column is-inline-block">
                        <figure class="image is-64x64">
                            <img src="https://bulma.io/images/placeholders/64x64.png">
                        </figure>
                    </div>
                    <div class="column is-inline-block">
                        <figure class="image is-64x64">
                            <img src="https://bulma.io/images/placeholders/64x64.png">
                        </figure>
                    </div>
                    <div class="column is-inline-block">
                        <figure class="image is-64x64">
                            <img src="https://bulma.io/images/placeholders/64x64.png">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="column">
                <span class="title is-5">Shipping</span>
                <div class="coulmns is-mobile is-multiline">
                    <div class="column is-inline-block">
                        <figure class="image is-64x64">
                            <img src="https://bulma.io/images/placeholders/64x64.png">
                        </figure>
                    </div>
                    <div class="column is-inline-block">
                        <figure class="image is-64x64">
                            <img src="https://bulma.io/images/placeholders/64x64.png">
                        </figure>
                    </div>
                    <div class="column is-inline-block">
                        <figure class="image is-64x64">
                            <img src="https://bulma.io/images/placeholders/64x64.png">
                        </figure>
                    </div>
                    <div class="column is-inline-block">
                        <figure class="image is-64x64">
                            <img src="https://bulma.io/images/placeholders/64x64.png">
                        </figure>
                    </div>
                    <div class="column is-inline-block">
                        <figure class="image is-64x64">
                            <img src="https://bulma.io/images/placeholders/64x64.png">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="content has-text-centered">
            <p>&copy; 2023 Marketplace. All rights reserved.</p>
        </div>
    </footer>

    @livewireScripts

</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/js/bulma-carousel.min.js"></script>

<script>
    // Navbar burger toggle menu
    document.addEventListener('DOMContentLoaded', () => { // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
        // Add a click event on each of them
        $navbarBurgers.forEach(el => {
            el.addEventListener('click', () => { // Get the target from the "data-target" attribute
                const target = el.dataset.target;
                const $target = document.getElementById(target);
                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');
            });
        });
    });
    document.addEventListener('DOMContentLoaded', () => {
        const tabs = document.querySelectorAll('.tab')
        if (tabs === undefined) return
        tabs.forEach((tab) => {
            tab.addEventListener('click', (e) => {
                // event.currentTarget refers to element on which
                // the event listener was attached
                const tabName = e.currentTarget.attributes[1].nodeValue
                const currentTab = document.querySelector('.tab.is-active')
                const currentContent = document.getElementById(`${currentTab.id}-content`)
                const newTab = document.getElementById(tabName)
                const newTabContent = document.getElementById(`${tabName}-content`)
                currentTab.classList.remove('is-active')
                currentContent.classList.add('is-hidden')
                newTab.classList.add('is-active')
                newTabContent.classList.remove('is-hidden')
            })
        })
    })
</script>
<script>
    bulmaCarousel.attach('#carousel-demo', {
        slidesToScroll: 1,
        slidesToShow: 1,
        pagination: false,
        infinite: true,
        autoplay: true,
    });
    bulmaCarousel.attach('#carousel-demo2', {
        slidesToScroll: 1,
        slidesToShow: 5,
        pagination: false,
    });
</script>
