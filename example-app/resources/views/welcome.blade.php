
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Home-page/CSS/NavBar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Home-page/CSS/SlideShow.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.2.3-dist/css/bootstrap.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/Logo.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/Home-page/CSS/scrollbar.css')}}">
    <title>Homepage</title>
</head>
<body style="background-color: #282A3A;">

<!--NAVBAR-->

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
        @endauth
    </ul>
</div>
  
    
<!--First DIV-->    
    <div class="container">
        <img class="img-1" src="{{ asset('assets/Home-page/HomePage Pics/WhatsApp Image 2023-03-10 at 17.24.13.1.jpg') }}" alt="teammegz" style="width:100%;">
        <div class="centered">
          <p class = "sent1"> Welcome to <br> TEAM<span style="color:#C69749;">MEGZ</span> Gyms</p>
        <form>
            <a class="button" href="/register" style="text-decoration: none;"> Get Started</a>
        </form></div> 
    </div> 
<!--Second DIV-->    
    <div class="middle">
        <img class="img-2" src="{{ asset('assets/Home-page/HomePage Pics/WhatsApp Image 2023-03-10 at 17.24.12.jpg') }}" width="200px">
        <img class="img-3" src="{{ asset('assets/Home-page/HomePage Pics/WhatsApp Image 2023-03-10 at 17.22.09(1).jpg') }}" width="200px">
        <p class="sent4">Meet your new body</p>
        <p class="sent5">The pain you feel today will be the strenght you feel tommorow.<br>
        </p>

    </div>

<!--SARA'S PART-->

    <div class="container">
        <img src="{{ asset('assets/Home-page/HomePage Pics/WhatsApp Image 2023-03-13 at 22.16.14.jpeg') }}" alt="teammegz" style="width:100%;">
        <div class="centered">
          <p class = "sent1"> Become more than you are.</p>
          <p class="sent2">Staying active is great fun and keeps you healthy. </p>
          <p class = "sent3"> check out how you can join in. </p>
        <form>
            <a class="button" href="/register" style="text-decoration: none;"> Let's do it</a>
            {{-- <input class="button" type="submit"  value="Let's do it"  /> --}}
        </form></div> 
    </div> 

    <div class="transformation">
        <p class="head">Transformations</p>
        <img src="{{ asset('assets/Home-page/HomePage Pics/WhatsApp Image 2023-03-10 at 17.53.31.jpg') }}">

    </div>
    <div class="footer">
        <p class="about">
            <span style="font-weight:bolder; font-size: 25px;">TEAM</span><span style="font-weight: bolder; color: #C69749; font-size: 25px;">MEGZ</span>
            <br><br>welcome to team megz , i am ahmed magdy certified personal trainer and physiotherapist , i offer online coaching 24 hours follow up , including diet plans , gym or home workouts , cardio routine , vitamins and supplements if needed , and all of these plans are updated depending on the progress and your goal

        </p>
        <!-- <p class="links">
            <span style="font-weight: bold; font-size: 20px;">Quick Links</span>
            

        </p> -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
