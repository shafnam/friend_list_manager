@extends('layouts.app')

@section('content')   
    <div class="limiter">
		<div class="container">
			
            <div class="inner-cnt" style="">
                
                <div class="row"> {{-- $friend->user-name --}}
                    <div class="col-md-12">
                        <h4>You have been added to Friend list successfully!</h4>
                        <a href="{{ route('register') }}">Like to join web friends? get registered with us!</p>
                    </div> 
                </div>             
			</div>
		</div>
	</div> 

@endsection
