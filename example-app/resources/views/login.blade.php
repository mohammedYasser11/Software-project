<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/login-page/CSS/login.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login-page/CSS/NavBar.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login-page/CSS/SlideShow.css')}}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/login-page/Logo.png')}}">

</head>
<body>
    <div class="navbar">
        <ul class="navbarul">
            <li class ="logo"><a class="navbar-brand" href="/" style="font-weight: bolder; font-size: x-large; left: 10%;position: relative;"><span style="color: #fff;">TEAM</span><span style="color: #C69749;">MEGZ</span></a>
            </li>
            <li class ="x"><a href="/">Home</a></li>
            <li class ="x"><a href="/transformations">Transformations</a></li>
            <li class ="x"><a href="/follow-up-step-one">Follow up</a></li>
            <li class="login"><a href="/login">Login</a></li>
        </ul>
    </div>
            <div class="Email">
                <form action="submit-form.php" method="post" onsubmit="return validateForm()"> 
                    <input type="email" id="email" name="email"placeholder="Email" required>
                    <br>
                    <br>
                    <input type="password" id="Password" name="Password"placeholder="Password" required>
                        <br>
                        <a href="/register">
                            <p class="link2">Create an account</p>
                        </a>
                        <button class="login1" >login</button>
                </form>
            </div>
         <div class="footer1" >
            <p class="about">
                <span style="font-weight:bolder; font-size: 25px;">TEAM</span><span style="font-weight: bolder; color: #C69749; font-size: 25px;">MEGZ</span>
                <br><br>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                 Sint, dolores repellendus commodi laboriosam voluptate porro sed saepe aliquam,
                  quia atque necessitatibus alias magni earum tempora provident! Eum quo tempore est!
    
            </p>
            <!-- <p class="links">
                <span style="font-weight: bold; font-size: 20px;">Quick Links</span>
                 <ul style="background-color: black; ">
                    <li class="link" ><a href="Classess.asp">Classess</a></li>
                    <li class="link" ><a href="Timetable.asp">Timetable</a></li>
                    <li class="link" ><a href="Clubs.asp">Clubs</a></li>
                    <li class="link" ><a href="Nutrition.asp">Nutrition</a></li>
                </ul>
    
            </p> -->
        </div> 
    
    
</body>
</html>