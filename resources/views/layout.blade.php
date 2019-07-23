<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href='/css/layout.css' rel='stylesheet'>
    <link href='/css/boostrap.min.css' rel='stylesheet'>

    <script src='/js/jquery.slim.min.js'></script>
    <script src='/js/bootstrap.bundle.min.js'></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light" >
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/">
            <img src="https://refreshhikkaduwa.com/images/logo/logo.png" alt="logo" style="width:150px;">
        </a>

        <div class="collapse navbar-collapse" >
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#team">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="login">My Account</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div >
    @yield('carousel1')
</div>

<div >
    @yield('carousel2')
</div>



</body>






</html>