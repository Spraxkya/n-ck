<?php
//Load Composer's autoloader
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if(isset($_POST["reset-request-submit"])) {

    if(!filter_var($_POST["reset-email"], FILTER_VALIDATE_EMAIL) === true) {
    /* ALL ANNAN INPUT ÄN EMAIL */

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "http://localhost/näck/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expires = date("U") + 1800;

    require 'db.inc.php';
    require_once 'functions.inc.php';

    $username = $_POST["reset-email"];

    if(userName($conn, $username) === false) {
        header("location: ../reset-password.php?UserDOESNTEXIST");
        exit();
    } else {
        $query = $conn->prepare("SELECT email FROM members WHERE username=?");
        $query->bind_param('s', $username); 
        $query->execute(); 
        $result = $query->get_result(); 
        $r = $result->fetch_array(MYSQLI_ASSOC); 
        $userEmail = $r['email']; 
    }

    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
    $stmt = mysqli_stmt_init($conn);
    
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }
    
    $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error";
        exit();
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'xn--nck-qla.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'tsarenavallt@xn--nck-qla.com';                     //SMTP username
        $mail->Password   = 'Hankallasmrcool-420';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('tsarenavallt@xn--nck-qla.com');
        $mail->addAddress($userEmail);     //Add a recipient
        
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Reset your password';
        $mail->Body    = '<a"' . $url . '">' . $url . 'Here is your password reset link: <a></p>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
        header("location: ../index.php?reset=success");
    
    
    } else {
                
        $selector = bin2hex(random_bytes(8));
        $token = random_bytes(32);

        $url = "http://localhost/näck/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

        $expires = date("U") + 1800;

        require 'db.inc.php';
        require_once 'functions.inc.php';

        $email = $_POST["reset-email"];

        if(userEmail($conn, $email) === false) {
            header("location: ../reset-password.php?EMAILDOESNTEXIST");
            exit();
        } else {
            $userEmail = $email;
        }

        $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)) {
            echo "There was an error";
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $userEmail);
            mysqli_stmt_execute($stmt);
        }

        $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)) {
            echo "There was an error";
            exit();
        } else {
            $hashedToken = password_hash($token, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
            mysqli_stmt_execute($stmt);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'xn--nck-qla.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'tsarenavallt@xn--nck-qla.com';                     //SMTP username
            $mail->Password   = 'Hankallasmrcool-420';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('tsarenavallt@xn--nck-qla.com');
            $mail->addAddress($userEmail);     //Add a recipient
            
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Reset your password';
            $mail->Body    = '<a"' . $url . '">' . $url . 'Here is your password reset link: <a></p>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
            header("location: ../index.php?reset=success");
    }     
} else {
        header("location: ../index.php");
        exit();
    }