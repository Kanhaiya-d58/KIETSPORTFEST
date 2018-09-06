<?php     
$to_email = 'shubham.1614065@kiet.edu';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: shubham.chauhan.020795@gmail.com';
if(mail($to_email,$subject,$message,$headers)){echo "Done";}
else{echo "Not Done";}
?>