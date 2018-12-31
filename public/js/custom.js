$(document).ready(function(){
   
   setTimeout(function(){
      $("#sendMailAgain").show();
   }, 60000);


   $("#inviteFriends").click(function(){
      $("#inviteFriendsForm").show();
   });

   $(document).ready(function() {
      $('#table').DataTable();
  } );
    
 });