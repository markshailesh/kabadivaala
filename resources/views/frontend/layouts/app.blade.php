<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <!--Favicon-->
    <link rel="icon" href="{{ asset('frontend/assets/img/favicon.png')}}" type="image/jpg" >
    <title>Kabadi Vaala | Sell scrap online</title>
    <meta name="keywords" content="kabadivaala, Scrap, Online kabadivaala, kabadivaala in varanasi, Scrap selling, kabadi, kabadiwala near me">
    <meta name="description" content="Turn your trash into cash with kabadivaala, your trusted online kabadivaala in Varanasi. We buy scraps in Varanasi, offering quick and hassle-free transactions. Sell your scrap today!">
    
    @include('frontend.layouts.css')
    </head>
    <body>
        @include('frontend.layouts.header')
            @yield('content')
        @include('frontend.layouts.footer')
        @include('frontend.layouts.js')
    </body>
</html>
