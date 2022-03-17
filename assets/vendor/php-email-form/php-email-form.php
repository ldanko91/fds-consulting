<?php 
if(isset($_POST['submit'])){
    $to = "contacto@fdsconsulting.com.ar"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
/*     $last_name = $_POST['last_name']; */
    $subject = $_POST['subject'];
    
    $message = $name . " " . " escribió lo siguiente:" . "\n\n" . $_POST['message'];
  

   /*  $headers = "De:" . $from; */
  
    mail($to,$subject,$message);

    echo "Se envió tu mensaje" . $first_name . ", pronto nos pondremos en contacto con vos.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    } else {
        echo "No se pudo enviar tu mensaje";
    }
?>