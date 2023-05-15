<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformation</title>
    <link rel="icon" type="image/x-icon" href="/Logo.png">
    <link rel="stylesheet" href="{{ asset('assets/transformation-page/Css/transformation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/transformation-page/CSS/navbar.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/Home-page/CSS/scrollbar.css')}}">
</head>

<body  style="background-color: #282A3A;">
    <div class="navbar">
        <ul class="navbarul">
            <li class ="logo"><a class="navbar-brand" href="/" style="font-weight: bolder; font-size: x-large; left: 10%;position: relative;"><span style="color: #fff;">TEAM</span><span style="color: #C69749;">MEGZ</span></a>
            </li>
            <li class ="x"><a href="/">Home</a></li>
            <li class ="x"><a href="/transformations">Transformations</a></li>
            <li class ="x"><a href="/follow-up-step-one">Follow up</a></li>
            @guest
                <li class="login"><a href="/login">Login</a></li>
            @endguest

            @auth
                <li class="login"><a href="{{ route('logout') }}">logout</a></li>
                <li class ="login" style="left: 1250px;"><a href="/profile-page">Profile</a></li>
            @endauth        </ul>
    </div>
<br><br>
    <h1 class="heading" style="color: white; ">🍎🍏Healthy living is not a diet. It's a lifestyle.🍏🍎</h1>

    <div class="slider-section">
        <div class="slider" style="position: relative; top: 50px;">
            <div class="slider-img">
                <input type="radio" name="slide" id="img-1" checked>
                <input type="radio" name="slide" id="img-2">
                <input type="radio" name="slide" id="img-3">
                <input type="radio" name="slide" id="img-4">
                <input type="radio" name="slide" id="img-5">
                <input type="radio" name="slide" id="img-6">
                <input type="radio" name="slide" id="img-7">

                <img src="{{ asset('assets/transformation-page/transformations pics/WhatsApp Image 2023-03-11 at 14.33.52.jpeg')}}" class="m1" alt="">
                <img src="{{ asset('assets/transformation-page/transformations pics/WhatsApp Image 2023-03-11 at 14.33.51.jpeg')}}" class="m2" alt="">
                <img src="{{ asset('assets/transformation-page/transformations pics/WhatsApp Image 2023-03-11 at 14.33.39.jpeg')}}" class="m3" alt="">
                <img src="{{ asset('assets/transformation-page/transformations pics/WhatsApp Image 2023-03-11 at 14.33.29 (1).jpeg')}}" class="m4" alt="">
                <img src="{{ asset('assets/transformation-page/transformations pics/WhatsApp Image 2023-03-11 at 14.33.31.jpeg')}}" class="m5" alt="">
                <img src="{{ asset('assets/transformation-page/transformations pics/WhatsApp Image 2023-03-11 at 14.33.34.jpeg')}}" class="m6" alt="">
                <img src="{{ asset('assets/transformation-page/transformations pics/WhatsApp Image 2023-03-11 at 14.33.39 (1).jpeg')}}" class="m7" alt="">
                
            </div>
            <div class="slider-dots">
                <label for="img-1"></label>
                <label for="img-2"></label>
                <label for="img-3"></label>
                <label for="img-4"></label>
                <label for="img-5"></label>
                <label for="img-6"></label>
                <label for="img-7"></label>

            </div>
        </div>
    </div>
        
        <br>

</body>

</html>