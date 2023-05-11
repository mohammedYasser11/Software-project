<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>TEN DAYS check</title>
        <link rel="stylesheet" href="{{  asset('assets/follow-up-1/CSS/navbar.css')}}">
        <link rel="stylesheet" href="{{  asset('assets/follow-up-1/CSS/tendayscheck.css')}}">
        <link rel="icon" type="image/x-icon" href="/Logo.png">
        <link rel="stylesheet" href="{{  asset('assets/Home-page/CSS/scrollbar.css')}}">


    </head>
    <body style="background-color: #282A3A;">
        <div class="navbar">
            <ul class="navbarul">
                <li class ="logo"><a class="navbar-brand" href="/" style="font-weight: bolder; font-size: x-large; left: 10%;position: relative;">TEAM<span style="color: #C69749;">MEGZ</span></a>
                </li>
                <li class ="x"><a href="/">Home</a></li>
                <li class ="x"><a href="/transformations">Transformations</a></li>
                <li class ="x"><a href="/follow-up-step-one">Follow up</a></li>
                @guest
                    <li class="login"><a href="/login">Login</a></li>
                @endguest
        
                @auth
                    <li class="login"><a href="{{ route('logout') }}">logout</a></li>
                @endauth            </ul>
        </div>
        <div class="container2">
            <img height="600px" src="{{  asset('assets/follow-up-1/WhatsApp Image 2023-03-17 at 01.24.53.jpeg')}}" alt="teammegz" style="width:100%;">
              <p class="ten"><snap style="font-size: 70px;">10</snap>
              <br><snap style="font-size: 35px;color: rgba(198, 150, 73, 0.449); ">&emsp;&emsp;&emsp;days</span>
              <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;check</p>
        </div>
        <div>
           <p class="questions" dir="rtl" >الاسئله دي تجاوب عليها علي اساس ال 10 ايام الفاتوا مش بشكل عام </p>
         </div>
         <br><br>
     {{-- <form>
        <div dir="rtl" class="weight1">
            <label class="word0">وزنك</label>
        <input  type="text" class="input">
        </div>
        <br>
        <div dir="rtl" class="weight2">
            <label class="word">مقاس الوسط</label>
        <input  type="text" class="input">
        </div>
        <br>
        <div dir="rtl" class="weight3">
            <label class="word1">مقاس البطن</label>
        <input  type="text" class="input">
        </div>
   </form> --}}
   <div dir="rtl"  style="color: white;">
    <table dir="rtl" cellspacing="40px"   >
       <tbody>
           <tr>
               <td >وزنك
               </td>
               <td>
                   <input  type="text" class="input">
               </td>
           </tr>
           <tr>
               <td> مقاس الوسط 
               </td>
               <td>
                   <input  type="text" class="input">
               </td>
           </tr>
           <tr>
               <td>مقاس البطن
               </td>
               <td>
                   <input  type="text" class="input">
               </td>
           </tr>
       </tbody>
    </table>
    </div>
    {{-- --------------- --}}
   <br>
   <br>
   <div dir="rtl"   style="color: white;">
    
   <table dir="rtl" cellspacing="40px" width="40%"  >
    <tbody>
    
        <tr>
            <td >مقاس الفخذ
                <br>
                اليمين\اليسار
            </td>
            <td>
                <input  type="text" class="input">
                <label> R</label>
            </td>
            <td>
                <input  type="text" class="input">
                <label> L</label>
            </td>
        </tr>
    
        <tr>
            <td> مقاس الذراع     
                <br>
                 اليمين\اليسار  
            </td>
            <td>
                <input  type="text" class="input">
                <label> R</label>
            </td>
            <td>
                
                <input  type="text" class="input">
                <label> L</label>
            </td>
        </tr>
        <tr>
            <td>مقاس السمانه
                <br>
              اليمين\اليسار
            </td>
            <td>
                <input  type="text" class="input">
                <label> R</label>
            </td>
            <td>
                <input  type="text" class="input">
                <label> L</label>
            </td>
        </tr>
    </tbody>
 </table>
</div>
<div style="position: absolute;top: 710px;
 color: white;
">
    <table dir="rtl" cellspacing="30px" width="150%" style="margin-right: 50%;">
        <tbody>
        
            <tr>
                <td >   
                    مقاس محيط الصدر
                    <br>
                    (من الكتف اللي الكتف)
                </td>
                <td>
                    <input  type="text" class="input">
                </td>
            </tr>
        
            <tr>
                <td>   
                    درجه التزامك بالدايت كام 
                    %
                </td>
                <td>
                    <input  type="text" class="input">
                </td>
            </tr>
            <tr>
                <td>
                    درجه التزامك بالكارديو
                    %
                </td>
                <td>
                    <input  type="text" class="input">
                </td>
            </tr>
            <tr>
                <td>
                    درجه التزامك بالتمرين
                    %
                </td>
                <td>
                    <input  type="text" class="input">
                </td>
            </tr>
        </tbody>
     </table>
</div>
    </body>
    {{-- <form action="/follow-up(2)/follow_up_2.html"> --}}
        <a class="button" href="/follow-up-step-two"> next</a>
     {{-- </form> --}}
    </div> 
</html>

