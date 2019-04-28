<?php
session_start();
include "../core/clientC.php";

if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$mdp=$_POST['mdp'];

	if(!$_POST['email'] | !$_POST['mdp']){
		echo "verifier les champs ";
	}else 
	{

		$compteC= new ClientC();
		$result=$compteC->recupererClient2($email,$mdp);
		foreach ($result as $raw ) {
			$type=$raw['type'];
		}
		if($type=="user")
		{
			$_SESSION["email"]=$email;
			header("location: dashbord.php");
		}else if ($type=="admin"){
		$_SESSION["email"]=$email;
			
			header("location: ../back/clients.php");
		}else {
			echo "pas de resultat";		
		}
		}
	}
	if(isset($_POST['forgotpassword'])){
    $_SESSION["user"]=    $_POST['email'];
   $sql="select * from client where Email='".$_POST['email']."'";
   $db = config::getConnexion();
   $liste=$db->query($sql);
   foreach($liste as $row){

   $plan="forgetpassword.php";
   $nom="change your password";
$num=$row['Telephone'];
      $email=$row['Email'];
   $headers="gsdhhgsd";
   mail("$email","mot  de passe oblier  ", "http://localhost:82/electromimi/login/changepassword.php","");
	// Authorisation details.
	$username = "myriam.abdesslem@esprit.tn";
	$hash = "7b052b9079e5edc62829b3fd71ef60af2a8ecfd6269e0769a2dc32d14b180482";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "API Test"; // This is who the message appears to be from.
	$numbers = "+216.$num"; // A single number or a comma-seperated list of numbers
	$message = "check your mail please";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
   header('Location: login.html');


   }
  }

?>