<?php
if(isset($_POST['btn-send'])){
    $name = $_POST['name'];
    $email= $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    if(empty($name)||empty($email)||empty($subject)||empty($body))
    {
        header('location:index.php?error');
    }else{
        $to = 'yelsantos0@gmail.com';

        if(mail($to,$email,$subject,$body))
        {
            header('location:index.php?success');
        }
    }
}
else
{
    header('location:index.php');
}
?>



    <!-- This code is for PHPMailer  -->
 <?php
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\SMTP;
    // use PHPMailer\PHPMailer\Exception;

    // // Load Composer's autoloader
    // require 'vendor/autoload.php';
    // // if (isset($_POST['name']) && isset($_POST['email']))
    // if (isset($_POST['btn-send'])) {
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $subject = $_POST['subject'];
    //     $body = $_POST['body'];
    //     // Instantiation and passing `true` enables exceptions
    //     $mail = new PHPMailer(true);

    //     try {
    //         //Server settings
    //         // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    //         $mail->isSMTP();                                            // Send using SMTP
    //         $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    //         $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    //         $mail->Username   = 'smartplay042018@gmail.com';                     // SMTP username
    //         $mail->Password   = 'paperclay1987';                               // SMTP password
    //         $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    //         $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //         //Recipients
    //         $mail->setFrom('smartplay042018@gmail.com', 'artiskul');
    //         $mail->addAddress('smartplay042018@gmail.com', 'artiskul');     // Add a recipient
    //         // $mail->addAddress('ellen@example.com');               // Name is optional
    //         // $mail->addReplyTo('info@example.com', 'Information');
    //         // $mail->addCC('cc@example.com');
    //         // $mail->addBCC('bcc@example.com');

    //         // Attachments
    //         // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //         // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //         // Content
    //         $mail->isHTML(true);
    //         $mail->setFrom($email, $name);
    //         $mail->addAddress("smartplay042018@gmail.com");
    //         $mail->Subject = ("$email ($subject)");
    //         $mail->Body = $body;

    //         $mail->send();
    //         header('location:index.php?success');
    //         // echo 'Message has been sent';
    //     } catch (Exception $e) {
    //         header('location:index.php?error');
    //         // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    //     }
    //}
    ?>

