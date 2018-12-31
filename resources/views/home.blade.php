@extends('layouts.app')

@section('content')   
    <div class="limiter">
        
        <div class="container">
            <div class="row" style="width: 100%;">
                <div class="col-md-12">
                    <!-- <div class="alert alert-success">
                        We have e-mailed your password reset link!
                    </div> -->
                    <!-- Message -->
                    @if(session()->has('message'))
                        <div id="successMessage" class="alert alert-success btn-outline">
                            {{ session()->get('message') }}
                        </div>
                    @endif                   
                </div>
            </div>
        </div>
        
		<div class="container">
			
            <div class="inner-cnt" style="">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <h4>My Friends List</h4>
                            @if(count($friends) > 0)
                                <table class="table" id="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count =0; ?>
                                    @foreach($friends as $friend)
                                    <tr>
                                        <th scope="row">{{ ++$count }}</th>
                                        <td>{{$friend->name}}</td>
                                        <td>{{$friend->email}}</td>
                                        <td><?php echo $status = ($friend->status == 1 ? 'Active' : 'Pending'); ?></td>
                                        <td>
                                            <form action="{{ url('/delete-friend', ['id' => $friend->id]) }}" method="post" onclick="return confirm('Are you sure?')" >
                                                <input class="btn btn-danger" type="submit" value="Delete" />
                                                <input type="hidden" name="_method" value="delete" />
                                                {!! csrf_field() !!}
                                            </form>
                                            <!-- <a class="btn btn-danger" href="{{-- route('deleteFriend', $friend->id) --}}"><i class="fa fa-trash"></i></a> -->
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                                {{-- $friend->links() --}}
                            @else
                                <p>Currently you dont have any friends.</p>
                            @endif
                        </div>   
                        <a href="#" class="btn btn-warning pull-left sendEmailTo" data-toggle="modal" data-target="#inviteModal" data-key="">
                            Invite friends to my list.
                        </a>
                        {{-- include sub views  --}}
                        @include('modals.invite-form')
                        {{-- include sub views  --}}
                    </div>
                </div> 
			</div>
		</div>
	</div> 

@endsection
