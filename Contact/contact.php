<?php
$from = "joy12vjt+contactForm@gmail.com"  //who it's coming from
$to = "joy12vjt+contactForm@gmail.com" //who it's going to

$name = Trim(stripslashes$_POST['name']); //no slashes or spaces //recieve name 
$email = Trim(stripslashes$_POST['name']); //recieve email 
$message = Trim(stripslashes$_POST['name']); //recieve message 
$promo = Trim(stripslashes$_POST['name']); //recieve promo 

//message to send
$body = "";
$body .= "Name:"; //append name
$body .=$name; //append name
$body .= "\n"; //new line
$body .=$email; //append name
$body .= "\n"; //new line
$body .=$message; //append name
$body .= "\n"; //new line
$body .=$promo; //append name
$body .= "\n"; //new line

//send off email
// using mail function
//Params: who is it going to, subject, body, from; 
$go = mail($to, $subject, $body, "From:<$from>"); 
//check for success
if($go){
	print("Success!");
	else{
		print("Unable to send");
	}
} 
?>