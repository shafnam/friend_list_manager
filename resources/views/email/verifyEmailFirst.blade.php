@extends('layouts.app')

@section('content')   
    <div class="limiter">
		<div class="container">
			
            <div class="inner-cnt" style="">
                
                <div class="row">
                    <div class="col-md-12">
                        <h4>Verify Email to activate account</h4>
                        <p> We have sent a verification email to your email account. Please confirm your verification. </p>
                    </div> 
                </div>            

                @if($user)
                <div id="sendMailAgain" class="row" style="display: none;">
                    
                    <div class="col-md-12">
                        <h5>Didn't recieve verification email? </h5>

                        <a href="{{ route('sendEmailAgain',['email' => $user->email, 'verifyToken' => $user->verifyToken])  }}">Resend email</a>
                    </div>                    
                    
                    
                </div>
                @endif
			</div>
		</div>
	</div> 

@endsection
