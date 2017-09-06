<?php
   if(isset($_POST['submit']))
 {
          	$name = $_POST['name'];
			$email = $_POST['email'];
			$query = $_POST['message'];
			$email_from = $name.'<'.'info.jfkorg@gmail.com'.'>';
			$msg = "";

			$query = wordwrap($query,70);

			$to="rhamy.belayachi@gmail.com";
			$subject="A user wishes to contact Just For Kidz";
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: <rhamy.belayachi@gmail.com>' . "\r\n";
			$message="	  
		 	   
		 		A user wishes to contact Just For Kidz!
		 		<br>
		 		<br>
		 		Name:
				$name 	   
		        <br>
		 		Email:
				$email 	   
		        <br>
		 		Message:
				$query 	   

   			";

			if(mail($to,$subject,$message,$headers))
				header("Location:../index.php?msg=Message Sent!");
			else
				header("Location:../index.php?msg=Error in sending email, please try again!");
}
?>
