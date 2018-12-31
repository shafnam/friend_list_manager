@extends('layouts.app')

@section('content')

<div class="limiter">
    <div class="container-login100">

        <div class="container">
            <div class="row" style="width: 100%;">
                <div class="col-md-12">
                    <!-- <div class="alert alert-success">
                        We have e-mailed your password reset link!
                    </div> -->
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div style="clear: both"></div>
        
        
        <div class="wrap-login100">
            
            <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
                <span class="login100-form-title-1">
                    Reset Password
                </span>
            </div>

            <form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}

                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">E-Mail</span>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" class="input100" placeholder="Enter email" required>
                    <span class="focus-input100"></span>
                    @if ($errors->has('email'))
                        <span class="help-block txt1">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit"> 
                        Send Password Reset Link
                    </button>
                </div>             

                
            </form>       

        </div>
    </div>
</div>
@endsection