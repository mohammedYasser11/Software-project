<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.2.3-dist/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/profile-page/css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/profile-page/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/profile-page/css/profile page.css') }}">
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
           <div class="row">  
             <div class="column">
                    <label for="file" id="plus">
                        <img src="{{ asset('assets/profile-page/WhatsApp Image 2023-04-22 at 23.42.39.jpeg') }}" class="photo1">
                     <span class="plus1">+</span>
                    <input type="file" class="input0" id="file">
                    </label>
                </div>
                <div  dir="rtl"   style="color: white; " class="column">
                  <table dir="rtl" cellspacing="40px" width="40%" style="font-size: larger;">
                    <tbody>
                        <tr>
                            <td>الاسم:</td>
                            <td><input  type="text" class="input1" value="{{ $user['name']}}"></td>
                        </tr>
                        <tr>
                            <td>رقم التليفون:</td>
                            <td><input  type="text" class="input1" value="{{ $user['phone_number']}}"></td>
                        </tr>
                    </tbody>
                  </table>
                </div>
             </div>
           </div>
           <div class="row1">
               <div  dir="rtl"   style="color: white;" class="column1" >
                 <table dir="rtl"  style="font-size: larger;" >
                  <tbody>
                     <tr>
                      <td>تاريخ الاشتراك:</td>
                      <td><input  type="date" class="input1" value="{{ $user['created_at']}}"></td>
                      </tr>
                   </tbody>
                  </table>
               </div>
               <div  dir="rtl"   style="color: white;" class="column1" >
                 <table dir="rtl"  style="font-size: larger;" >
                  <tbody>
                   <tr>
                      <td>تاريخ الانتهاء:</td>
                      <td><input  type="date" class="input1"></td>
                   </tr>
                  </tbody>
                 </table>
                </div>
           </div>
           <div class="row2">
               <div  dir="rtl"   style="color: white;" class="column2" >
                 <table dir="rtl"  style="font-size: larger;" >
                  <tbody>
                    <tr>
                      <td>Warm up
                        <span class="input3"><i class="fa-solid fa-fire-flame-curved"></i>
                        </span>
                      </td>
                      
                      <td>
                        <label for="file" >
                          <input type="file"  class="input0" id="file">
                          <p class="input2"><span style="color: transparent;">..........</span><i class="fa-sharp fa-solid fa-file-pdf"></i></p>
                        </label></td>
                       
                      </tr>
                    <tr>
                      <td>Stretches after training
                        <img src="stretching-exercises.png" alt="" style="width:30px">
                      </td>
                        <td>
                            <label for="file" >
                                <input type="file"  class="input0" id="file">
                                <p class="input2"><span style="color: transparent;">..........</span><i class="fa-sharp fa-solid fa-file-pdf"></i></p>
                            </label>
                        </td>
                      </tr>
                   </tbody>
                  </table>
                </div> 
               <div  dir="rtl"   style="color: white;" class="column2" >
                 <table dir="rtl"  style="font-size: larger;" >
                  <tbody>
                    <tr>
                      <td>Diet  <span class="input3"><i class="fa-solid fa-apple-whole"></i>
                      </span></td>
                      <td>
                          <label for="file" >
                          <input type="file"  class="input0" id="file">
                          <p class="input2"><span style="color: transparent;">..........</span><i class="fa-sharp fa-solid fa-file-pdf"></i></p>
                          </label>
                      </td>
                    </tr>
                    <tr>
                      <td>Training <span class="input3"><i class="fa-solid fa-dumbbell"></i>
                      </span></td>
                        <td>
                            <label for="file" >
                                <input type="file"  class="input0" id="file">
                                <p class="input2"><span style="color: transparent;">..........</span><i class="fa-sharp fa-solid fa-file-pdf"></i></p>
                            </label> 
                            </span>
                        </td>
                      </tr>
                   </tbody>
                  </table>
                </div> 
           </div>
           <div class="row5" >
               <div  dir="rtl"   style="color: white;" class="column5" >
                 <table dir="rtl"  style="font-size: larger;" >
                  <tbody>
                    <tr>
                      <td>  Cardio<span style="color: black;"><i class="fa-sharp fa-solid fa-person-running"></i>
                      </span></td>
                      <td>
                          <label for="file" >
                          <input type="file"  class="input0" id="file"></label>
                          <p class="input2"><span style="color: transparent;">..........</span><i class="fa-sharp fa-solid fa-file-pdf"></i></p>
                          </label>
                      </td>
                    </tr>
                   </tbody>
                  </table>
                </div>
          
    </body>
</html>