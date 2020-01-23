<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <title>Montréal Transit Tracker</title>
        <meta name="description" content="A tracker for most transit vehicles in the greater Montreal area, see almost 2000 vehicules in one map, including STM, exo, STL and RTL buses and exo trains.">
        <meta name="author" content="FelixINX">
        <link rel="icon" href="favicon.ico">
        <meta name="keywords" content="transit, bus, buses, train, tracker, Montreal, STM, STL, RTL, exo, map">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:creator" content="@felixinx">
        <meta name="twitter:title" content="Montreal Transit Tracker">
        <meta name="twitter:description" content="One map for most buses and trains in the greater Montreal area">
        <meta name="twitter:image" content="/img/twitter-card.png">
        <meta name="og:title" content="Montreal Transit Tracker">
        <meta name="og:description" content="One map for most buses and trains in the greater Montreal area">
        <meta name="og:image" content="/img/open-graph.png">
        <meta name="og:url" content="https://transittracker.ca">
        <meta name="og:locale" content="en_CA">
        <meta name="og:locale:alternate" content="fr_CA">

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link href="https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" rel="stylesheet"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="manifest" href="/manifest.json">
        <link rel="icon" sizes="192x192" href="/img/icon-192.png">
        <link rel="apple-touch-icon" href="/img/icon-192.png">
        <meta name="theme-color" content="#303633">
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
              new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
          })(window,document,'script','dataLayer','GTM-M2C2NZG');</script>
        <!-- End Google Tag Manager -->
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2C2NZG"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <noscript>
            <strong>We're sorry but Montreal Transit Tracker doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
        </noscript>
        <div id="app"></div>
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
        <script src="{{ mix('js/vendor.js') }}" type="text/javascript"></script>
        <script src="{{ mix('js/manifest.js') }}" type="text/javascript"></script>
    </body>
</html>
