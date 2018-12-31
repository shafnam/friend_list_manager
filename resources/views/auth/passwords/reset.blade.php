@extends('layouts.app')

@section('content')

<div class="limiter">
    <div class="container-login100">        
        
        <div class="wrap-login100">
            
            <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
                <span class="login100-form-title-1">
                    Reset Password
                </span>
            </div>

            <form class="login100-form validate-form" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">E-Mail</span>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" class="input100" placeholder="Enter email" required>
						<span class="focus-input100"></span>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
					</div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Password is required">
						<span class="label-input100">Password</span>
                        <input id="password" type="password" name="password" class="input100" placeholder="Enter password" required>
						<span class="focus-input100"></span>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
					</div>

                    <div class="wrap-input100 validate-input m-b-26">
                        <span class="label-input100">Confirm Password</span>
                        <input id="password-confirm" type="password" class="input100" name="password_confirmation" required>
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit"> 
                    Reset Password
                    </button>
                </div>             

                
            </form>       

        </div>
    </div>
</div>
@endsection
