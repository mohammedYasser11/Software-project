<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/Reg-page/registeration/css/register.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/Reg-page/CSS/SlideShow.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/Reg-page/CSS/NavBar.css')}}" />
	<link rel="icon" type="image/x-icon" href="{{ asset('assets/Logo.png')}}">
	<link rel="stylesheet" href="{{ asset('assets/Home-page/CSS/scrollbar.css')}}">

</head>
<body>
	<div class="navbar">
		<ul class="navbarul">
			<li class ="logo"><a class="navbar-brand" href="/index.html" style="font-weight: bolder; font-size: x-large; left: 10%;position: relative;"><span style="color: #fff;">TEAM</span><span style="color: #C69749;">MEGZ</span></a>
			</li>
			<li class ="x"><a href="/">Home</a></li>
            <li class ="x"><a href="/transformations">Transformations</a></li>
            <li class ="x"><a href="/follow-up-step-one">Follow up</a></li>
            <li class="login"><a href="/login">Login</a></li>
		</ul>
	</div>				
			<img src="{{ asset('assets/Reg-page/registeration/register.jpg') }}" width="600px" style="left: 0%; ">
			 <div class="heading" style="color: #fff;">
		     <h1>  Join Us Now  </h1>
		     <h2>And Feel The Power</h2>
		    </div>
		    <form method="POST" action="{{ route('register') }}">
				@csrf
			<input type="text" id="name" name="name" placeholder="Name" required>
			<br>
			<br>
			<input type="email" id="email" name="email" placeholder="Email" required>
			<br>
			<br>
			<input type="tel" id="phone" name="phone_number" placeholder="Phone Number" required>
			<br>
			<br>
			<input type="password" id="Password" name="password" placeholder="Password" required>
			<br>
			<br>
			<input type="password" id="C.Password" name="password_confirmation" placeholder="Confirm The Password" required>
			<br>
			<br>
			<div class="option">
			<select id="sup." name="membership_type" required>
				<option value="">Membership Type</option>
				<option value="diet">Diet</option>
				<option value="workout">Workout</option>
				<option value="both">Both</option>
			</select>
			<br>
			<br>
			<select id="membership" name="subscribtion" required>
				<option value="" name="Subscribtion">Subscribtion</option>
				<option value="1 month">1 month</option>
				<option value="3 months">3 month</option>
				<option value="6 months">6 month</option>
			</select>
            </div>
			<!-- <a href="" style="text-decoration: none;">
				<P class="Next"> </P>
			</a> -->
			
			<button  type="submit"class="Next">Next</button>
		</form>

<script>
function myFunction() {
  location.replace("Qes.html")
}
</script>
		
		
	</div>
</body>
</html>