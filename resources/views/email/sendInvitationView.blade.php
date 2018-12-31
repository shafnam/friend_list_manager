<h1>Hello you have been invited by one of your friends to join their friends list</h1>
<h5>
    <a href="{{route('sendInvitaionEmailDone',['email' => $friend->email, 'verifyToken' => $friend->verifyToken]) }}">click here to accept it</a>
</h5>