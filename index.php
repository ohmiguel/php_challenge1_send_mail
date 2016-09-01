
<!DOCTYPE html>
<html lang="en">
		<head>
				<title>Contact Form</title>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		</head>
<body>

<div class="container">

	<body>
		<h1>CONTACT FORM</h1>

		<form method="post">
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" name="name" id="name"><br>
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control name="email" id="email"><br>
			</div>

			<div class="form-group">
				<label for="comments">Comments:</label><br>
				<textarea type="comments" class="form-control name="comments"></textarea><br>
			</div>

			<input type="submit" name="send" value="Send Message">

		</form>

	</div>

<?php
    if(!empty($_POST)) {
        extract($_POST);
        $valid = true;
        if(empty($nom)){
            $valid=false;
            $erreurnom="Vous n'avez pas rempli votre nom";
        }
        if(!preg_match("/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i",$email)){
            $valid = false;
            $erreuremail="Votre email n'est pas valide";
        }
        if(empty($email)){
            $valid=false;
            $erreuremail="Vous n'avez pas rempli votre email";
        }
        if(empty($message)){
            $valid=false;
            $erreurmessage="Vous n'avez pas rempli votre message";
        }
        if($valid){
            $to = "ohmiguel@gmail.com";
            $sujet = $nom." a contacté le site";
            $header = "From : $nom <$email>";
            if(mail($to,$sujet,$message,$header)){
                $erreur = "Votre message m'est bien parvenu !";
                unset($nom);
                unset($email);
                unset($message);
            }
            else{
                $erreur = "Une erreur est survenue et votre mail n'est pas parti";
            }
        }
    }
?>


	</body>
</html>





 
