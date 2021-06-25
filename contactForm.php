
<?php

	$errors = array();

	// Check if name has been entered
	if (!isset($_POST['name'])) {
		$errors['name'] = 'Please enter your name';
	}

	// Check if email has been entered and is valid
	if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = 'Please enter a valid email address';
	}

	//Check if message has been entered
	if (!isset($_POST['message'])) {
		$errors['message'] = 'Please enter your message';
	}

	$errorOutput = '';

	if(!empty($errors)){

		$errorOutput .= '<div class="alert alert-danger alert-dismissible" role="alert">';
 		$errorOutput .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

		$errorOutput  .= '<ul>';

		foreach ($errors as $key => $value) {
			$errorOutput .= '<li>'.$value.'</li>';
		}

		$errorOutput .= '</ul>';
		$errorOutput .= '</div>';

		echo $errorOutput;
		die();
	}elseif (empty($errors)){
        //send the email
        $success = false;
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if (!empty($email) && !empty($name) && !empty($message) ) {

            $from = $email;
            $to = 'dhirajtejwani8@gmail.com';  // please change this email id
            $subject = 'Informacion';

            $body = "From: $name\n E-Mail: $email\n Message:\n $message";

            $headers = "From: ".$from;
            $success = mail($to,$name,$email,$body,$headers);

        }

    }





?>

<!DOCTYPE html>
<html lang="es">
        <head>
            <?php include "plantilla/head.php";?>
        </head>
        <body>
            <?php if ($success):
            ?>
                <div class="module">
                    <div class="module-title">Gracias, en breves contactaremos contigo!!</div>
                    <a class="btn btn-1 btn-lg center-block" href="index.php">Volver</a>
                </div>
            <?php else:
                        ?>
            <div class="module">
                 <div class="contenedor2">
                <div class="module-title">Lo siento, hemos tenido un problema, intentalo mas tarde!!</div>
                <a class="btn btn-1 btn-lg center-block" href="index.php">Volver</a>
            </div>
                </div>
         <?php endif;
         ?>
        </body>
</html>