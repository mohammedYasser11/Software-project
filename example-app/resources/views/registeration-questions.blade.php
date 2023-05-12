<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Reg-page/registeration/css/Qes.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Reg-page/CSS/NavBar.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/Reg-page/Logo.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/Home-page/CSS/scrollbar.css')}}">

    <title>Registeration</title>
</head>
<body>
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
            @endauth       
           </ul>
    </div>

<h1>ANSWER THIS QUISTIONS</h1>
<form class="form1" method="POST" action="{{ route('save_user_data') }}" enctype="multipart/form-data">
    @csrf
    <div dir="rtl" class="weight4">
            <label class="word0">سنك</label>
        <input  type="text" class="input" name="age">
        </div>
        <br>
        <div dir="rtl" class="weight5">
            <label class="word0">طولك</label>
        <input  type="text" class="input" name="height">
        </div>
        <br>
        <div dir="rtl" class="weight1">
            <label class="word0" >وزنك</label>
        <input  type="text" class="input" name="weight">
        </div>
        <br>
        <div dir="rtl" class="weight2">
            <label class="word">مقاس الوسط</label>
        <input  type="text" class="input" name="waist_size">
        </div>
        <br>
        <div dir="rtl" class="weight3">
            <label class="word1">مقاس البطن</label>
        <input  type="text" class="input" name="abdominal_size">
        </div>
        <div dir="rtl" class="weight6">
            <label class="word1">مقاس محيط الصدر
                <br>
                (من الكتف اللي الكتف)</label>
        <input  type="text" class="input" name="chest_size">
        </div>
        
   {{-- </form> --}}
   <br>
   <br>
   <div dir="rtl"  >
   <!-- style="color: white;" -->
    
   <table dir="rtl" cellspacing="40px" width="40%"  >
    <tbody class="c2">
    
        <tr>
            <td >مقاس الفخذ
                <br>
                اليمين\اليسار
            </td>
            <td>
                <input  type="text" class="input" name="thigh_size_r">
                <label> R</label>
            </td>
            <td>
                <input  type="text" class="input" name="thigh_size_l">
                <label> L</label>
            </td>
        </tr>
    
        <tr>
            <td> مقاس الذراع     
                <br>
                 اليمين\اليسار  
            </td>
            <td>
                <input  type="text" class="input" name="arm_size_r">
                <label> R</label>
            </td>
            <td>
                
                <input  type="text" class="input" name="arm_size_l">
                <label> L</label>
            </td>
        </tr>
        <tr>
            <td>مقاس السمانه
                <br>
              اليمين\اليسار
            </td>
            <td>
                <input  type="text" class="input" name="calf_size_r">
                <label> R</label>
            </td>
            <td>
                <input  type="text" class="input" name="calf_size_l">
                <label> L</label>
            </td>
        </tr>
    </tbody>
 </table>
</div>
<div class="c1">
    <table dir="rtl" cellspacing="30px" width="150%" style="margin-right: 50%; position: relative; top: 70px;">
        <tbody>
        
            <tr>
                <td>   
                    معدل النشاط
                </td>
                <td>
                    <select id="sup." name="acitve_rate" required>
                        {{-- <option value="">معدل النشاط</option> --}}
                        <option value="low">قليل الحركه</option>
                        <option value="medium">متوسط الحركه</option>
                        <option value="high">كثير الحركه</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                   هتنزل الجم كام يوم
                </td>
                <td>
                    <select id="sup." name="gym_per_week" required>
                        {{-- <option value="">هتنزل الجم كام يوم</option> --}}
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
				        
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                   هدفك ايه في العموم؟
                </td>
                <td>
                    <select id="sup." name="goal" required>
                        {{-- <option value="">هدفك ايه في العموم؟</option> --}}
                        <option value="lean muscls mass">lean muscls mass </option>
                        <option value="bulking">bulking</option>
                        <option value="fat loss">fat loss</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td>
                   هدفك ايه من التمرين؟
                </td>
                <td>
                    <select id="sup." name="training_goal" required>
                        {{-- <option value="">هدفك ايه من التمرين؟</option> --}}
                        <option value="hypertrophy">(ضخامه عضليه)hypertrophy</option>
                        <option value="strenght">(قوه عضليه)strenght</option>
                        <option value="powerbuilding">(قوه+ضخامه)powerbuilding</option>
                        <option value="endurance">(قدره علي التحمل)endurance</option>
				        <option value="flexibility">(مرونه)flexibility</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td>
                   عدد الوجبات الذي تريده
                </td>
                <td>
                    <select id="sup." name="meals_no" required>
                        {{-- <option value="">عدد الوجبات الذي تريده</option> --}}
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
				        
                    </select>
                </td>
            </tr>
        </tbody>
     </table>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
{{-- <form> --}}
    <div dir="rtl" class="">
            <label class="word0">اي مكملات غذائيه عاوز تخادها</label>
        <input  type="text" class="input1" name="supplements">
        </div>
        <br>
        <br>
        <div dir="rtl" class="">
            <label class="word0">عندك حساسيه من اي اكل</label>
        <input  type="text" class="input1" name="allergy">
        </div>
        <br>
        <br>
        <div dir="rtl" class="">
            <label class="word0">اي الاكل اللي انت مش بتحبه</label>
        <input  type="text" class="input1" name="food_disliked">
        </div>
        <br>
        <br>
        <div dir="rtl" class="">
            <label class="word">مصدر البروتين عاوزه من فين</label>
        <input  type="text" class="input1" name="protien_source">
        </div>
        <br>
        <br>
   {{-- </form> --}}
   <div class="c3">
    <table dir="rtl" cellspacing="20px" width="150%" style="margin-right: 50%;">
        <tbody>
        
            <tr>
                <td>   
                    مصدر الدهون عاوزه من فين
                </td>
                <td>
                    <input  type="text" class="input" name="fat_source">
                </td>
            </tr>
            <tr>
                <td>
                   مصدر النشويات عاوزه من فين
                </td>
                <td>
                    <input  type="text" class="input" name="carb_source">
                </td>
            </tr>
            <tr>
                <td>
                     مصدر الفاكهه عاوزه من فين 
                </td>
                <td>
                    <input  type="text" class="input" name="fruit_source">
                </td>
            </tr>
            <tr>
                <td>
                    مصدرالخضار عاوزه من فين
                </td>
                <td>
                    <input  type="text" class="input" name="vege_source">
                </td>
            </tr>
        </tbody>
     </table>
   </div>
   <br>
   <br>
   <br>
   <div class="first">
    <p>صورك من الاربع اتجاهات</p>
    <input type="file"  alt="Submit" width="60" height="60" name="side_1"  style="background-color: #C69749; position: relative; right: 120px; top: -110px;" >
    <input type="file" alt="Submit" width="60" height="60" name="side_2"
    style="background-color: #C69749; position: relative; right: 270px; top: -110px;" >
    <input type="file" src="{{asset('assets/Reg-page/img_411489.png')}}" name="side_3" alt="Submit" width="60" height="60" 
    style="background-color: #C69749; position: relative; right: 252px; top: -40px;" >
    <input type="file" src="{{asset('assets/Reg-page/img_411489.png')}}" name="side_4" alt="Submit" width="60" height="60" 
    style="background-color: #C69749;  position: relative; right: 402px; top: -40px;" >
 </div>
 <div class="second">
    <p dir="rtl">صوره inbody</p>
    <input type="file" name="inbody" src="{{asset('assets/Reg-page/img_411489.png')}}" alt="Submit" width="60" height="60" 
    style="background-color: #C69749;position: relative; top:-70px;left:120px ;">
 </div>
   <br>
   <br>
   <br>
   <h2 dir="rtl"> ملحوظات هامه</h2>
   <br>
   <div dir="rtl">
    <ol>
    <li>يجب توافر ميزان للاكل</li>
    <br>
    <li>يجب الالتزام بتصوير الوجبات وتبعتها علي snapchat (megzzo_69)</li>
    <br>
    <li>لازم تصور ادائك في التمرين عشان اقيمك ونطلع احسن النتائج</li>
    <br>
    <li>لو حصل وبوظت الدايت لازم تكلمني علي طول</li>
    <br>
    <li>لازم تكلمني كل 10 ايام عشان اتابع تقدمك ولو احتجت تكلمني في اي وقت انا معاك</li>
    <br>
    <li>لما تلعب كارديو لو انت في الجيم لازم تصوؤلي الجهاز اللي انت لعبت عليه ولو في الشارع فخد اسكرين شوت من برنامج nike run club</li>
    <br>
    <li>:في برامج لازم تحملها</li>
    </ol>
    <ol>
        <li> واحد من دول لمتابعه تطور الاوزان في التمارين (progression/hevy/repcount)</li>
        <br>
        <li>برنامج لمتابعه الخطوات pacer pedometer</li>
    </ol>
   </div>
   <br>
   <br>
   <br>
   <button type="submit" class="Submit">Submit</button>
			{{-- <script>
			function myFunction() {
                alert("Thank you for joining us");
			location.replace("HP.html")
			}
			</script> --}}

        </form>

</body>
</html>