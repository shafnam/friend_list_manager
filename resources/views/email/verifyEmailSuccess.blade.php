@extends('layouts.app')

@section('content')   
    <div class="limiter">
		<div class="container">
			
            <div class="inner-cnt" style="">
                
                <div class="row">
                    <div class="col-md-12">
                        <h4>Your email is verified successfully!</h4>
                        <a href="{{ route('login') }}">Login to access web friends</a>
                    </div> 
                </div>         

                
			</div>
		</div>
	</div> 

@endsection
