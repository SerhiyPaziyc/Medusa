<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&family=Inder&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <title>Medusa</title>

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/img/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/img/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/img/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/img/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/img/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/img/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/img/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('/img/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/img/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/img/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/img/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('/img/manifest.json') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ asset('/img/ms-icon-144x144.png') }}">
<meta name="theme-color" content="#ffffff">

</head>
<body>

    <heder class="heder">
        <div class="conteiner">
           <div class="heder__iner">
              <div class="heder__logo">
                   <a class="heder__logo" href="/categories/iphones">Medusa</a>
               </div>

               <nav class="nav">
                   <a class="nav__linc" href="/categories/iphones">iPhone</a>
                   <a class="nav__linc" href="/categories/ipad">iPad</a>
                   <a class="nav__linc" href="/categories/watch">Apple Watch</a>
                   <a class="nav__linc" href="/categories/accessory">Аксесуари</a>
                   <a class="nav__linc" href="/repair">Ремонт</a>
                   <a class="nav__linc" href="/categories/byiphones">Apple б/у</a>
                   <img class="heder__logo" src="{{ asset('/img/62-558f5baf-club.png') }}" width="230px", height="50px" alt="">
               </nav>
            </div>
        </div>
    </heder>

<div class="nav2">
   <div class="nav2__linc">
    <a class="nav2__linc" href="/categories/byiphones">б/у iPhone</a>
    <a class="nav2__linc" href="/categories/watch">Apple Watch</a>
    <a class="nav2__linc" href="/categories/ipad">iPad</a>
    <a class="nav2__linc" href="/categories/accessory">Аксесуари</a>
   </div>
</div>

@yield('content')

<script src="{{ asset('/js/jQuery.js') }}" defer ></script>
<script src="{{ asset('/js/Buy.js') }}" defer ></script>
<script src="{{ asset('/js/Korzuna.js') }}" defer ></script>

</body>
</html>
