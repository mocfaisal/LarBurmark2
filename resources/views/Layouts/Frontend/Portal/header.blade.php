<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-top">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel APP</title>

    @yield('global.resources.head')
    @yield('global.css.code')

    @yield('private.css.file')
    @yield('private.css.code')

    @livewireStyles
</head>
