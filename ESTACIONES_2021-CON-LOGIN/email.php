<?php 

    require "PHPMailer/Exception.php";
    require "PHPMailer/PHPMailer.php";
    require "PHPMailer/SMTP.php";
    use  PHPMailer\PHPMailer\PHPMailer ;
    use  PHPMailer\PHPMailer\Exception ;
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'gasolineriamaster.mycaes.mx';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'master_contacto@gasolineriamaster.mycaes.mx';                     // SMTP username
        $mail->Password   = '48t281ufqd';                               // SMTP password
        $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('master_contacto@gasolineriamaster.mycaes.mx', 'Master');
        $mail->addAddress('gustavo.salazar.rd@gmail.com');     // Add a recipient
        // $mail->addAddress('ellen@example.com');               // Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
    
        // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Mensaje de prueba';
        $mail->Body    = 'Hola mundo';
        // $mail->AltBody = 'Mensaje desde el servidor a un correo';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
      

?>
