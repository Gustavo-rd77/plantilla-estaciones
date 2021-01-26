<?php 
  require "PHPMailer/Exception.php";
  require "PHPMailer/PHPMailer.php";
  require "PHPMailer/SMTP.php";
  use  PHPMailer\PHPMailer\PHPMailer ;
  use  PHPMailer\PHPMailer\Exception ;

$error = array("error_name"=>"1",
                "error_email"=>"2",
                "error_phone"=>"3",
                "error_general"=>"4"); 
                
function writeMsg( string $name_f, string $email_f ,string $phone_f ,string $case_f,string $message_f){
    // $newMsg= $message_f."\r\n"."Atte. ".$name_f."\r\n"."Correo electrónico: ".$email_f."\r\n"."Telefono: ".$phone_f."\r\n";
    $newMsg="$message_f \n Atte. $name_f \n Correo electrónico: $email_f \n Telefono: $phone_f ";
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
    
        // Content
        $mail->isHTML(false);                                  // Set email format to HTML
        $mail->Subject = $case_f;
        $mail->Body    = $newMsg;
        $mail->send();
        echo 'ok';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
}               

    if(isset($_POST)){
        $name  = isset($_POST["name"])  ?  trim($_POST["name"]):false;
        $email = isset($_POST["email"]) ?  trim($_POST["email"]):false;
        $phone = isset($_POST["phone"]) ?  trim($_POST["phone"]):false;
        $case  = isset($_POST["case"])  ?  trim($_POST["case"]):false;
        $msg   = isset($_POST["msg"])   ?  trim($_POST["msg"]):false;
        if($name && $email && $phone && $case && $msg){
            if(preg_match("/[A-Za-zÀ-ÿ ]/",$name) == 0 || strlen($name) == 0){
            echo $error["error_name"];
            exit;
            }
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo $error["error_email"];
            exit;
            }
            if(preg_match("/^\d{7,10}$/",$phone)==0){
                echo $error["error_phone"];
                exit;
            }
             writeMsg($name,$email,$phone,$case,$msg);     

        }else{
            echo $error["error_general"];
        }
        
        
    }
?>