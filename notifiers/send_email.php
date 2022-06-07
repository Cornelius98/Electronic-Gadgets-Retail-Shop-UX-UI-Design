<?php
require 'Exception.php';
require 'OAuth.php';
require 'PHPMailer.php';
require 'POP3.php';
require 'SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($v_email,$v_mobile,$v_name,$v_subject,$v_message){
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'theecornelius@gmail.com';                     
    $mail->Password   = 'omae@Founder*';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   
    $mail->Port       = 587;    
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );                                
    $mail->setFrom("$v_email", "$v_name");
    $mail->addAddress("corneliuskasokola101@gmail.com", "$v_name");
    $mail->addReplyTo("$v_email", "$v_name");
    $mail->isHTML(true);
    $mail->Subject = "$v_subject";
    $mail->Body    ='
        <head>
            <style>
                *{
                    font-size: large;
                }
            </style>
        </head>
        <body class="s-chaff">
            <div class="content-wrapper" style="position:absolute; 
                                                top:90%;
                                                left:50%;
                                                transform:translate(-50%,-50%);
                                                width:90%;
                                                font-family:Comic Sans MS">
                                              
                <p>
                    <h6 style="text-transform:capitalize;font-size:medium;">
                        Website: Message From '.$v_name.'.</h6>
                    <span>
                       '.echo nl2br($message);.'
                    </span>
                    <br><br><br><br><br>
                    <blockquote style="text-align:left;padding-bottom:30%;">
                        Kind Regards,<br>
                        '.$v_name.'<br>
                        Sent From Store Official Website.
                     </blockquote>
                </p>
               
            </div></body>';  
            if($mail->send()) 
                return true;
            else 
                return false;
}
?>