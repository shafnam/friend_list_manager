 <!-- The Modal -->
 <div class="modal" id="inviteModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{  route('inviteForm')  }}" method="post">            
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Send Invitaion</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label>From</label>
                        <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>     
                    </div>
                    <div class="form-group">
                        <label>Friend's First Name</label>
                        <input type="text" name="friend_name" placeholder="Enter name" class="form-control" required>
                        <span class="text-danger">{{ $errors->first('friend_name') }}</span>
                    </div>
                    <div class="form-group">
                        <label>Friend's Last Name</label>
                        <input type="text" name="friend_last_name" placeholder="Enter name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Friend's Email</label>
                        <input type="email" name="friend_email" placeholder="Enter email" class="form-control" required>
                    </div>
                    <!-- <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" class="form-control" id="message" rows="3" style="height: 100px;"></textarea>
                    </div> -->
                    <input type="hidden" name="name" value="{{ Auth::user()->name }}">   
                    <input type="hidden" name="email" value="{{ Auth::user()->email }}">  
                    <input type="hidden" name="key" id="key" class="form-control" value="" readonly>     
                            
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-fill btn-info">Send Invitation</button>
                </div>

            </form>
        </div>
    </div>
</div>
    