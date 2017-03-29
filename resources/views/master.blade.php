{{--* Created by PhpStorm.--}}
{{--* User: Gulliver--}}
{{--* Date: 3/27/2017--}}
{{--* Time: 10:24 PM--}}


        <!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Project Learn</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/animation.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- ICONS  -->
    <script src="https://use.fontawesome.com/2d686de28e.js"></script>

</head>
<body>
<!-- Primary Page Layout -->
<div class="container">
    <div class="row">
        <div class="twelve columns logo">
            <img src="images/gorilla.png" style="max-width: 100%;" alt="Gorilla">
        </div>
    </div>
    @yield('content')
</div>
</body>
</html>