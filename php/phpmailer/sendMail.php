<?php
    //Include required files
    require 'PHPMailer.php';
    require 'SMTP.php';
    require 'Exception.php';

    //Define name spaces
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    Use PHPMailer\PHPMailer\SMTP;

    //host
    $host = "smtp.hostinger.com";
    //mail user name
    $userName = "info@gmzeo.edu.lk";
    //mail password
    $password = "@Studio0512";
    //sender's mail
    $sentby = "info@gmzeo.edu.lk";
    //mail subject
    $subject = "Test mail using phpmailer";
    //mail body
    $body = "This is sample mail";
    //receiver's mail
    $receiver = "@gmail.com";

    //Create instance of phpmailer
    $mail = new PHPMailer();
    //Set mailer to use smtp
    $mail->isSMTP();
    //Define smtp host
    $mail->Host = $host;
    //Enable smtp authentication
    $mail->SMTPAuth = "true";
    //set typr of encryption
    $mail->SMTPSecure = "tls";
    //set port to connect smtp
    $mail->Port = "587";
    //set gmail username
    $mail->Username = $userName;
    //set gmail password
    $mail-> Password = $password;
    //set sender email
    $mail->setFrom($sentby);
    //set email subject
    $mail->Subject = $subject;
    //email body
    $mail->Body = $body;
    //add receiver
    $mail->addAddress($receiver);
    //send mail
    if ($mail->Send()) {
        echo"Email Sent..!";
    }
    else{
        echo "Error".$mail->ErrorInfo;
    }
    //close smtp connection
    $mail->smtpClose();