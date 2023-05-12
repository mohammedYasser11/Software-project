
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/follow-up-2/CSS/navbar.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/follow-up-2/CSS/follow_up_2.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.2.3-dist/css/bootstrap.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('assets/follow-up-2/CSS/image-input.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/Home-page/CSS/scrollbar.css') }}">
        <link rel="icon" type="image/x-icon" href="/Logo.png">
        <link rel="stylesheet" href="{{ asset('assets/Home-page/CSS/scrollbar.css')}}">

        <title>TEN DAYS check</title>
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


    <form action="{{ route('follow-up-step-two')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="first">
            <input type="hidden" name="row_id" value="{{ $_GET['row_id']}}">
            <p>صورك من الاربع اتجاهات</p>
            <input type="file" name="side_1" id="upload-button1" accept="image/*"  >
            <label class="img1" for="upload-button1">
                <i class="fa-solid fa-upload"></i>
            </label>

            <input type="file" name="side_2" id="upload-button2" accept="image/*"  >
            <label class="img2" for="upload-button2">
                <i class="fa-solid fa-upload"></i>
            </label>

            <input type="file" name="side_3" id="upload-button3" accept="image/*"  >
            <label class="img3" for="upload-button3">
                <i class="fa-solid fa-upload"></i>
            </label>

            <input type="file" name="side_4" id="upload-button4" accept="image/*"  >
            <label class="img4" for="upload-button4">
                <i class="fa-solid fa-upload"></i>
            </label>

        </div>
        <div class="second">
            <p>عدد الخطوات اليوميه <br>(سكرين شوت من البرنامج history)</p>
            <div class="container">
                <figure class="image-container">
                    <img id="chosen-image">
                </figure>
    
                <input type="file" name="steps_per_day" id="upload-button5" accept="image/*"  >
                <label class="img5" for="upload-button5">
                    <i class="fa-solid fa-upload"></i>
                </label>
    
            </div>
        </div>


        <div class="third">
            <p>هل وجهتك اي صعوبة بالتمرين؟</p>
            <input class="text-box" name="training_diff" type="text"/>
        </div>
        <div class="third">
            <p> ؟cheatmeal عايز<br>اكتب عايزها ايه(هتتحدد علي حسب النتيجة)</p>
            <input class="text-box" name="cheat_meal" type="text"/>
        </div>
        <div class="third" >
            <br>
            <br>
            <p>عايز تغير نوع اكل معين في الدايت؟</p>
            <input class="text-box" name="diet_edit" type="text"/>
        </div>
        <div class="third">
            <br>
            <br>
            <br>
            <br>
            <p>جودة و عدد ساعات نومك؟</p>
            <input class="text-box" name="sleeping_hrs" type="text"/>
        </div>
        <div class="fourth">
            <p>
                هل في تطور في اوزانك \ عداتك \ ادائك في تمرين الحديد؟
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="progress" id="inlineRadio1" value="true">
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="progress" id="inlineRadio2" value="false">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
        </div>
        <br>
        <br>
        <div class="sub-button">
            <button class="button" type="submit"  value="Submit" >Submit </button>
        </div>

    </form>





<!--Footer-->
        <div class="footer" style="top:850px;">
            <p class="about">
                <span style="font-weight:bolder; font-size: 25px;">TEAM</span><span style="font-weight: bolder; color: #C69749; font-size: 25px;">MEGZ</span>
                <br><br>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Sint, dolores repellendus commodi laboriosam voluptate porro sed saepe aliquam,
                quia atque necessitatibus alias magni earum tempora provident! Eum quo tempore est!

            </p>
            <!-- <p class="links">
                <span style="font-weight: bold; font-size: 20px;">Quick Links</span>
                

            </p>
        </div> -->
<!--END-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="{{ asset('assets/follow-up-2/js/img.js') }}"></script>
    </body>
</html>