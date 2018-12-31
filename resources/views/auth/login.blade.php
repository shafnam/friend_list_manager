@extends('layouts.app')

@section('content')   
    <div class="limiter">
		<div class="container-login100">
			
            <div class="wrap-login100">
				
                <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
                        Welcome to Web Friends
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">E-Mail</span>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" class="input100" placeholder="Enter username" required>
						<span class="focus-input100"></span>
                        @if ($errors->has('email'))
                            <span class="help-block txt1">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
                        <input id="password" type="password" class="input100" name="password" placeholder="Enter password" required>
                        <span class="focus-input100"></span>
                        @if ($errors->has('password'))
                            <span class="help-block txt1">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif						
					</div>

					<div class="flex-sb-m w-full p-b-30">
                        
                        <div>
							<a class="txt1" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
						</div>

					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit"> 
							Login
						</button>
					</div>
                                
				</form>

                <div class="login100-form"> <a href="{{ route('register') }}">New to Web Friends? Click here to Register</a></div>
			</div>
		</div>
	</div> 
@endsection
