
<?php
// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
// Include PHPMailer library files 
require 'PHPMailer/src/Exception.php'; 
require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php'; 
 

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail-> isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='info@proluxury.co';
    $mail->Password='jojcxfmguqjceyqo';
    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->setFrom($_POST["your-email"]);

    $mail->addAddress('info@proluxury.co');

    $mail->isHTML(true);

    $mail->Subject= "Profund London Baron Form Submission";
    $name = $_POST["your-name"];
    $contactNumber = $_POST["your-subject"];
    $email = $_POST["your-email"];
    $mail->Body = "Name: $name<br>Contact Number: $contactNumber<br>Email: $email";


    $mail->send();
    echo
    "
    <script>
    alert('send Successfully');
    document.location.href='index.php'
    </script>
    ";


}
  // You can use a library like PHPMailer to send emails, but here's a simple example:

?>
