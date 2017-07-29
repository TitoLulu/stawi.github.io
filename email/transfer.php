<?php
	if(isset($_POST['send'])){
		validateName();
		validateEmail();
		validateMessage();
	}
//Variables set to empty values
 $nameErr= $emailErr= $msgErr="";
 $name= $mail= $msg="";

//valid name provided
	function validateName(){
		if(isset($_POST['nm']) &&!empty($_POST['nm'])){
			$name=$_POST['nm'];

		}else{
			$nameErr="name required";
		}
	}
//valid email address provided
	function validateEmail(){
		if(isset($_POST['mail'])&&!empty($_POST['mail'])&& 
			preg_match("/\A[\w+\-.]+@[a-z\d\-.]+\.[a-z]+\z/i",$_POST['mail'])){
			$mail=$_POST['mail'];
	}else{
		$emailErr= "invalid email";
	}
	}
//Message field filled
	function validateMessage(){
		if(isset($_POST['msg'])&& !empty($_POST['msg'])){
			$msg=$_POST['msg'];
		}else{
			$msgErr="message required";
		}
	}
//post mail
	$to="titolulu6@gmail.com";
	//mail($to,$name,$mail,$msg);

?>

