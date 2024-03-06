<?php 
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require 'C:\xampp\composer\vendor\autoload.php';
?>



<?php 

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $tel = $order = "";

    $recaptchaCriteria = "";
    $sendCriteria = "";
    $errorCriteria = "";

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['customerName'];
        $email = $_POST['customerEmail'];
        $message = $_POST['customerMessage'];

        if(isset($_POST['customerPhone']))
        {
            $phone = $_POST['customerPhone'];
            $tel = "<br>Phone: ". test_input($phone) . "<br>";
        }

        if(isset($_POST['orderNumber']))
        {
            $orderNumber = $_POST['orderNumber'];
            $order = "<br>Order Number: " . test_input($orderNumber) . "<br>";
        }
		
		$to = ""; // Change your TO: email address  -- Step 1
/*
        $to = "cakewalk.cakeshop@gmail.com";
        $subject = "Contact Form from $name";
        $note = $message . $tel . $order;
        $headers = "From: $email \r\n";
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        mail($to, $subject, $note, $headers);
*/

						  $mail = new PHPMailer();
						  $mail->IsSMTP();

						  $mail->SMTPDebug  = 0;  
						  $mail->SMTPAuth   = TRUE;
						  $mail->SMTPSecure = "tls";
						  $mail->Port       = 587;
						  $mail->Host       = "smtp.gmail.com"; // change it according to your use - gmail or outlook  -- Step 2 
						  $mail->Username   = "";  // add your gmail id here  -- Step 3
						  $mail->Password   = "";  // add your gmail password here  -- Step 4

						  $mail->IsHTML(true);
						  $mail->AddAddress($to, "recipient-name");
						  $mail->Subject = "Contact Form from $name";
						  $note = $message . $tel . $order;

						  $mail->MsgHTML($note); 
						  if(!$mail->Send()) {
							echo "Error while sending your message.";
							var_dump($mail);
						  } else {
							echo "Message sent successfully";
						  }
    } 
?>