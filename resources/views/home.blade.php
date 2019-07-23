
@extends('layouts.app')
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href='/css/layout.css' rel='stylesheet'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

@section('content')
    <section class="our-webcoderskull padding-lg">
        <div class="container">
            <div class="row heading heading-icon">
                <h2>Front Desk Dash board</h2>
            </div>
            <ul class="row">
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="https://www.trzcacak.rs/myfile/full/343-3432291_customers-customer-icon-png.png" class="img-responsive" alt=""></figure>
                        <h3><a >Customers</a></h3>

                        <ul class="follow-us clearfix">
                            <li><a href="customer/create"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
                            <li><a href="customer"><i class="fa fa-cog" aria-hidden="true"></i></a></li>

                        </ul>
                    </div>
                </li>
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="https://image.flaticon.com/icons/svg/345/345612.svg" class="img-responsive" alt=""></figure>
                        <h3><a href="#">Reservations </a></h3>
                        <ul class="follow-us clearfix">
                            <li><a href="reservation"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i></a></li>

                        </ul>
                    </div>
                </li>
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="https://www.leadpackersandmovers.com/wp-content/uploads/2018/10/dismantling-fixing-services.png" class="img-responsive" alt=""></figure>
                        <h3><a href="http://www.webcoderskull.com/">Service</a></h3>

                        <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="https://cdn1.iconfinder.com/data/icons/avatars-1-5/136/87-512.png" class="img-responsive" alt=""></figure>
                        <h3><a href="http://www.webcoderskull.com/">My profile </a></h3>

                        <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>

                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </section>
<!--
<br><br>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="#">Dash board</a>
        <a href="#">Customers</a>
        <a href="#">Reservations</a>
        <a href="#">My profile</a>
    </div>

    <div id="main">
        <button class="openbtn" onclick="openNav()">☰</button>


    </div>
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
        }
    </script>
-->
</body>
</html>
@endsection
