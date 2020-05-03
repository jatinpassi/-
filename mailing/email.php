<?php
ob_start();
if(isset($_POST['submit'])){
	if(isset($_POST['email'])){
		$email = $_POST['email'];
		
		$subject = $_POST['subject'];
		
		$message = $_POST['message'];
		
		$headers = "From: {$email}";
		$mail = mail('jatinpassi111@gmail.com',$subject,$message,$headers);
                if($mail){
			header('Location: ../thank-you.html');
		}
	}
}
//$headers = "From: jatinpassi@gmail.com";
//mail('jatinpassi111@gmail.com','test','yo',$headers);
?>