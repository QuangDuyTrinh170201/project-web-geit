<link rel="stylesheet" href="{{url('public')}}/Frontend/css/login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
<title>My Account</title>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
			</div>
			<span>Bạn có phải Admin ko? Nếu phải thì về trang đăng nhập mà đăng nhập account vào!!</span>
            <span>Nếu không phải admin? Bạn thật là có khiếu hài hước :D Đến Admin mà bạn cũng muốn đăng kí tài khoản à?</span>
			{{-- <input type="text" placeholder="username" name="username" value="{{old('username')}}"/>
			<span class="text-danger">@error('username'){{$message}} @enderror</span>
			<input type="password" placeholder="Password" name="password"/>
			<span class="text-danger">@error('password'){{$message}} @enderror</span>
			<input type="text" placeholder="Full Name" name="fullname" value="{{old('fullname')}}"/>
			<span class="text-danger">@error('fullname'){{$message}} @enderror</span>
			<input type="text" placeholder="Phone Number" name="phone" value="{{old('phone')}}"/>
			<span class="text-danger">@error('phone'){{$message}} @enderror</span>

			<button class="btn btn-block btn-primary" type="submit">Sign Up</button> --}}
		</form>
	</div>


	<div class="form-container sign-in-container">
		<form action="{{route('login-admin')}}" method="post">
			@if(Session::has('success'))
			<div class="alert alert-success">{{Session::get('success')}}</div>
			@endif
			@if(Session::has('fail'))
			<div class="alert alert-danger">{{Session::get('fail')}}</div>
			@endif
			@csrf
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
			</div>
			<span>or use your account</span>
			<input type="username" placeholder="Username" name="username" value="{{old('username')}}"/>
			<span class="text-danger">@error('username'){{$message}} @enderror</span>
			<input type="password" placeholder="Password" name="password" value="{{old('password')}}"/>
			<span class="text-danger">@error('password'){{$message}} @enderror</span>
			<a href="#">Forgot your password?</a>
			<button class="btn btn-block btn-primary" type="submit">Sign In</button>
			<a href="{{url('/login')}}">Move To Login User</a>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Đăng Nhập!</h1>
				<p>Làm Ơn Quay Lại Đây Và Đăng Nhập Tài Khoản Vào Dùm!!</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Trang Này Có Những Câu Từ Mà Bạn Không Muốn Thấy :D</p>
				<button class="ghost" id="signUp">Ngon Bấm Vào?</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created with Tuấn Tuấn by
		<a target="_blank" href="https://www.facebook.com/vantuan2411">Raccoon</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="{{url('home')}}">WEBSITE GEIT</a>.
	</p>
</footer>
<script src="{{url('public')}}/Frontend/js/login.js"></script>