<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - MyDibu Medical</title>

    <link rel="icon" type="image/png" href="{{asset('fav.jpg')}}">

    <!-- All Plugins Css -->
    <link href="{{asset('shop/assets/css/plugins.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('shop/assets/css/styles.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('shop/assets/css/custom.css')}}">
</head>

<body>
    @yield('content')
</body>
</html>
