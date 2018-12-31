@extends('layouts.app')

@section('content')   
    <div class="limiter">
		<div class="container">
			
            <div class="inner-cnt" style="">
                
                <div class="row">
                    <div class="col-md-12">
                        <h4>Add new Friend</h4>                   
                            
                        <form class="login100-form validate-form" method="POST" action="{{-- route('invite') --}}">
                            {{ csrf_field() }}

                            <div class="wrap-input100 validate-input m-b-26" data-validate="Name is required">
                                <span class="label-input100">Name</span>
                                <input id="friend_name" type="text" name="friend_name" value="{{ old('friend_name') }}" class="input100" placeholder="Enter name" required>
                                <span class="focus-input100"></span>
                                @if ($errors->has('friend_name'))
                                    <span class="help-block txt1">
                                        <strong>{{ $errors->first('friend_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                                <span class="label-input100">E-Mail</span>
                                <input id="friend_email" type="email" name="friend_email" value="{{ old('friend_email') }}" class="input100" placeholder="Enter email" required>
                                <span class="focus-input100"></span>
                                @if ($errors->has('friend_email'))
                                    <span class="help-block txt1">
                                        <strong>{{ $errors->first('friend_email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn" type="submit"> 
                                    Invite
                                </button>
                            </div>
                                        
                        </form>                  
                                        
                    </div>
                </div> 
			</div>
		</div>
	</div> 

@endsection
