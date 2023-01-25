<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

function registrationMail($conn, $email) {
    try {
        //Load Composer's autoloader
        require 'vendor/autoload.php';
        require 'db.inc.php';
    
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
    
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
        $mail->addAddress($email);     //Add a recipient
        
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Du är registrerad';
        $mail->Body    = 'Du är nu medlem i Näcks Kollektiv';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header("location: ../index.php?YOUGOTMAIL");
        exit();
    }
        header("location: ../index.php?YOUGOTMAIL");
}

function timeBooking($conn, $email, $nummer, $tid, $dag, $namn, $biz) {
    try {
        //Load Composer's autoloader
        require 'vendor/autoload.php';
        require 'db.inc.php';
    
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
    
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'xn--nck-qla.com';                      //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'tsarenavallt@xn--nck-qla.com';         //SMTP username
        $mail->Password   = 'Hankallasmrcool-420';                  //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('tsarenavallt@xn--nck-qla.com');
        $mail->addAddress('rikardoj8@gmail.com');                   //Add a recipient
        
        //Content
        $mail->isHTML(true);                                        //Set email format to HTML
        $mail->Subject = 'Lol';
        $mail->Body    = $email.' '.$nummer. ' ' .$tid. ' ' .$dag. ' ' .$namn. ' ' .$biz; 
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header("location: ../pa-natet/kampanj/1.php?fail");
        exit();
    }
    try {
        //Load Composer's autoloader
        require 'vendor/autoload.php';
        require 'db.inc.php';
    
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
    
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'xn--nck-qla.com';                      //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'web@nackcollective.com';               //SMTP username
        $mail->Password   = 'SoGstoarhpb-420';                      //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('web@nackcollective.com', 'Näck på nätet');
        $mail->addAddress($email);                                  //Add a recipient
        
        //Content
        $mail->isHTML(true);                                        //Set email format to HTML
        $mail->Subject = 'Tidsbokning' .$tid. ' den ' .$dag;
        $mail->Body    = 'Hej ' .$namn.'! <br><br> Tack för din tidsbokning! <br><br> Tid:' .$tid. '<br><br> Datum:' .$dag.
         '<br><br> Vi kommer så snart som möjligt återkomma till dig med en digital mötesinbjudan! <br><br>
         Har du några frågor innan dess så tveka inte att höra av dig. Du når oss enklast på: <br><br> Tel:
         072-403 42 29 <br><br> E-post: web@nackcollective.com <br><br> Vill du ändra något gällande din bokade tid så gör du
         det enklast genom att svara på det här mejlet och skriva vad det gäller. <br><br> <strong>Med vänliga hälsningar,</strong>
         <br><br> Näck på nätet<br><br>+46 (0)72-403 42 29<br>web@nackcollective.se<br><a href="www.näck.com/på-nätet">www.näck.com/på-nätet</a>
         <br> <img src="https://www.näck.com/tpl/images/pa-natet/smultron.png"><br>Skomakargatan 5<br>781 70 Borlänge<br>Omania AB<br>559271-0270'; 
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->CharSet="UTF-8";
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header("location: ../pa-natet/kampanj/1.php?fail");
        exit();
    }
        header("location: ../pa-natet/kampanj/tack.php?tack2");
}

function grattis($conn, $namn, $efternamn, $epost, $timme, $minut, $dag, $kodi) {

    try {
        //Load Composer's autoloader
        require 'vendor/autoload.php';
        require 'db.inc.php';
    
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
    
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'xn--nck-qla.com';                      //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'web@nackcollective.com';               //SMTP username
        $mail->Password   = 'SoGstoarhpb-420';                      //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('strandimora@xn--nck-qla.com', 'Strand Kök & Bar');
        $mail->addAddress($epost, 'rikardoj8@gmail.com');     //Add a recipient
        
        $mail->CharSet="UTF-8";
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Grattis '.$namn.' '.$efternamn;
        $mail->Body    = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="font-family:arial, `helvetica neue`, helvetica, sans-serif">
        <head>
            <meta charset="UTF-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
            <meta name="x-apple-disable-message-reformatting">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="telephone=no" name="format-detection">
            <meta name="color-scheme" content="light">
            <meta name="supported-color-schemes" content="light">
            <title>New message</title><!--[if (mso 16)]>
                <style type="text/css">
                a {text-decoration: none;}
                </style>
                <![endif]--><!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--><!--[if gte mso 9]>
            <xml>
                <o:OfficeDocumentSettings>
                <o:AllowPNG></o:AllowPNG>
                <o:PixelsPerInch>96</o:PixelsPerInch>
                </o:OfficeDocumentSettings>
            </xml>
            <![endif]--><!--[if !mso]><!-- -->
            <!--<![endif]-->
        </head>
        <body style="width:100%;font-family:arial, `helvetica neue`, helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
        <div class="es-wrapper-color" style="background-color:#F6F6F6"><!--[if gte mso 9]>
                  <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
                      <v:fill type="tile" color="#f6f6f6"></v:fill>
                  </v:background>
              <![endif]-->
         <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#F6F6F6">
           <tr>
            <td valign="top" style="padding:0;Margin:0">
             <table class="es-header" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
               <tr>
                <td align="center" bgcolor="#161616" style="padding:0;Margin:0;background-color:#161616">
                 <table class="es-header-body" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:520px">
                   <tr>
                    <td align="center" bgcolor="#000000" style="Margin:0;padding-bottom:10px;padding-top:20px;padding-left:20px;padding-right:20px;background-color:#000000">
                     <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                       <tr>
                        <td valign="top" align="center" style="padding:0;Margin:0;width:480px">
                         <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                           <tr>
                            <td align="center" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:17px;color:white !important;font-size:14px"><strong><span style="font-size:55px;line-height:66px;color: white;">VINNARE</span><br><span style="font-size:28px;line-height:34px;color: white;">AV SKATTJAKTEN</span></strong></p></td>
                           </tr>
                         </table></td>
                       </tr>
                     </table></td>
                   </tr>
                   <tr>
                    <td align="center" style="padding:10px;Margin:0;background-image:url(`https://www.xn--nck-qla.com/tpl/images/mora/GUL.jpg`);">
                     <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                       <tr>
                        <td valign="top" align="center" style="padding:0;Margin:0;width:500px">
                         <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                           <tr>
                            <td align="center" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:17px;color:transparent;font-size:14px"><span style="font-size:18px;line-height:22px;color:black;">Det tog bara...</span><br><span style="font-size:39px;line-height:47px;color:black;">'.$dag.' '.$timme.' '.$minut.'</span><br><span style="font-size:18px;line-height:22px;color:black;">för dig att hitta biljetten</span></p></td>
                           </tr>
                         </table></td>
                       </tr>
                     </table></td>
                   </tr>
                   <tr>
                    <td align="center" style="padding:0;Margin:0">
                     <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                       <tr>
                        <td valign="top" align="center" style="padding:0;Margin:0;width:520px">
                         <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                           <tr>
                            <td align="center" style="padding:0;Margin:0;font-size:0px"><img class="adapt-img" src="https://www.xn--nck-qla.com/tpl/images/mora/ElPapi.jpg" alt style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" width="520"></td>
                           </tr>
                         </table></td>
                       </tr>
                     </table></td>
                   </tr>
                   <tr>
                    <td align="center" style="padding:5px;background-color:white;Margin:0;background-image:url(`https://www.xn--nck-qla.com/tpl/images/mora/GUL.jpg`);">
                     <table cellspacing="0" cellpadding="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                       <tr>
                        <td valign="top" align="center" style="padding:0;Margin:0;width:510px">
                         <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                           <tr>
                            <td align="center" class="h-auto" bgcolor="#070100" height="261" style="padding:5px;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:44px;color:white !important;font-size:30px;text-align:center">VIKTIG INFO</p>
                             <ul style="color: white;">
                              <li style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, `helvetica neue`, helvetica, sans-serif;line-height:17px;Margin-bottom:15px;margin-left:0;color:white !important;font-size:14px;text-align:left"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:17px;color:white !important;font-size:14px;text-align:left;">Kontakta oss på Instagram så kommer vi överens om hur vi lämnar över biljetten!</p></li>
                              <li style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, `helvetica neue`, helvetica, sans-serif;line-height:17px;Margin-bottom:15px;margin-left:0;font-size:14px;text-align:left"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:17px;font-size:14px;color:white !important;text-align:left;">Visa upp koden från det här mejlet när du hämtar biljetten.</p></li>
                              <li style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, `helvetica neue`, helvetica, sans-serif;line-height:17px;Margin-bottom:15px;margin-left:0;font-size:14px;text-align:left"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:17px;font-size:14px;color:white !important;text-align:left;">Biljetten är personlig och får ej överlämnas.</p></li>
                              <li style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, `helvetica neue`, helvetica, sans-serif;line-height:17px;Margin-bottom:15px;margin-left:0;font-size:14px;text-align:left"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:17px;font-size:14px;color:white !important;text-align:left;">Ta med biljetten och visa upp den i insläppet till evenemanget.</p></li>
                             </ul><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:22px;font-size:18px;text-align:center;color:white;"><strong>DIN KOD ÄR:</strong></p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:17px;font-size:14px;text-align:center;color:white !important;">'.$kodi.'</p></td>
                           </tr>
                         </table></td>
                       </tr>
                     </table></td>
                   </tr>
                   <tr>
                    <td align="center" bgcolor="#000000" style="Margin:0;padding-top:15px;padding-bottom:15px;padding-left:20px;padding-right:20px;background-color:#000000">
                     <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                       <tr>
                        <td valign="top" align="center" style="padding:0;Margin:0;width:480px">
                         <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                           <tr>
                            <td align="center" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:21px;color:white !important;font-size:14px">Vi syns den&nbsp;28:e Januari!</p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:21px;color:white !important;font-size:14px"><br></p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:21px;color:white !important;font-size:14px"><span style="font-size:16px"><strong>Med glada hälsningar,&nbsp;</strong></span><br><br>Strand Kök &amp; Bar i Mora</p></td>
                           </tr>
                         </table></td>
                       </tr>
                     </table></td>
                   </tr>
                 </table></td>
               </tr>
             </table>
             <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
               <tr>
                <td align="center" bgcolor="#161616" style="padding:0;Margin:0;background-color:#161616">
                 <table class="es-footer-body" cellspacing="0" cellpadding="0" bgcolor="black" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#black;width:520px">
                 <tbody><tr>
                    <td align="center" style="padding:5px;Margin:0">
                    <table cellspacing="0" cellpadding="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                      <tbody><tr>
                        <td align="center" style="padding:0;Margin:0;width:510px">
                        <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                          <tbody><tr>
                            <td align="center" style="padding:0;Margin:0;font-size:0px">
                            <table cellpadding="0" cellspacing="0" class="es-table-not-adapt es-social" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                              <tbody><tr>
                                <td align="center" valign="top" style="padding:0;Margin:0;padding-right:10px"><a target="_blank" href="https://www.facebook.com/strandilgusto/" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#FFFFFF;font-size:14px"><img src="https://aejsqm.stripocdn.email/content/assets/img/social-icons/rounded-colored-bordered/facebook-rounded-colored-bordered.png" alt="Fb" title="Facebook" height="32" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a></td>
                                <td align="center" valign="top" style="padding:0;Margin:0"><a target="_blank" href="https://www.instagram.com/strandimora/" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#FFFFFF;font-size:14px"><img src="https://aejsqm.stripocdn.email/content/assets/img/social-icons/rounded-colored-bordered/instagram-rounded-colored-bordered.png" alt="Ig" title="Instagram" height="32" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a></td>
                              </tr>
                            </tbody></table></td>
                          </tr>
                        </tbody></table></td>
                      </tr>
                    </tbody></table></td>
                  </tr>
                </tbody>
             </table></td>
           </tr>
         </table>
        </div>
        </body>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        exit();
    }
}

function attans2($conn, $namn, $efternamn, $epost) {
    try {
        //Load Composer's autoloader
        require 'vendor/autoload.php';
        require 'db.inc.php';
    
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
    
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'xn--nck-qla.com';                      //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'web@nackcollective.com';               //SMTP username
        $mail->Password   = 'SoGstoarhpb-420';                      //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('strandimora@xn--nck-qla.com', 'Strand Kök & Bar');
        $mail->addAddress($epost, 'rikardoj8@gmail.com');     //Add a recipient
        
        $mail->CharSet="UTF-8";
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Vi är taggade på nästa tävling!';
        $mail->Body    = '
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="font-family:arial, `helvetica neue`, helvetica, sans-serif">
        <head>
            <meta charset="UTF-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
            <meta name="x-apple-disable-message-reformatting">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="telephone=no" name="format-detection">
            <meta name="color-scheme" content="light">
            <meta name="supported-color-schemes" content="light">
            <title>New message</title><!--[if (mso 16)]>
                <style type="text/css">
                a {text-decoration: none;}
                </style>
                <![endif]--><!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--><!--[if gte mso 9]>
            <xml>
                <o:OfficeDocumentSettings>
                <o:AllowPNG></o:AllowPNG>
                <o:PixelsPerInch>96</o:PixelsPerInch>
                </o:OfficeDocumentSettings>
            </xml>
            <![endif]--><!--[if !mso]><!-- -->
            <!--<![endif]-->
        </head>
        <body style="width:100%;font-family:arial, `helvetica neue`, helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
        <div class="es-wrapper-color" style="background-color:#F6F6F6"><!--[if gte mso 9]>
                  <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
                      <v:fill type="tile" color="#f6f6f6"></v:fill>
                  </v:background>
              <![endif]-->
         <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#F6F6F6">
           <tr>
            <td valign="top" style="padding:0;Margin:0">
             <table class="es-header" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
               <tr>
                <td align="center" bgcolor="#161616" style="padding:0;Margin:0;background-color:#161616">
                 <table class="es-header-body" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:520px">
                   <tr>
                    <td align="center" bgcolor="#000000" style="Margin:0;padding-bottom:10px;padding-top:20px;padding-left:20px;padding-right:20px;background-color:#000000">
                     <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                       <tr>
                        <td valign="top" align="center" style="padding:0;Margin:0;width:480px">
                         <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                           <tr>
                            <td align="center" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:17px;color:white !important;font-size:14px"><strong><span style="font-size:55px;line-height:66px;color: white;">Bättre lycka nästa gång!</span></strong></p></td>
                           </tr>
                         </table></td>
                       </tr>
                     </table></td>
                   </tr>
                   <tr>
                    <td align="center" style="padding:10px;Margin:0;background-image:url(`https://www.xn--nck-qla.com/tpl/images/mora/GUL.jpg`);">
                     <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                       <tr>
                        <td valign="top" align="center" style="padding:0;Margin:0;width:500px">
                         <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                           <tr>
                           <td align="center" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:17px;color:transparent;font-size:14px"><span style="font-size:18px;line-height:22px;color:black;">Hej '.$namn.' '.$efternamn.'! Vi mejlar dig...</span><br><span style="font-size:30px;line-height:47px;color:black;">ledtråden till nästa tävling</span><br><span style="font-size:18px;line-height:22px;color:black;">innan den kommer ut på våra medier</span></p></td>
                           </tr>
                         </table></td>
                       </tr>
                     </table></td>
                   </tr>
                   <tr>
                    <td align="center" style="padding:0;Margin:0">
                     <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                       <tr>
                        <td valign="top" align="center" style="padding:0;Margin:0;width:520px">
                         <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                           <tr>
                            <td align="center" style="padding:0;Margin:0;font-size:0px"><img class="adapt-img" src="https://www.xn--nck-qla.com/tpl/images/mora/ElPapi.jpg" alt style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" width="520"></td>
                           </tr>
                         </table></td>
                       </tr>
                     </table></td>
                   </tr>
                   <tr>
                    <td align="center" style="padding:5px;background-color:white;Margin:0;background-image:url(`https://www.xn--nck-qla.com/tpl/images/mora/GUL.jpg`);">
                     <table cellspacing="0" cellpadding="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                       <tr>
                        <td valign="top" align="center" style="padding:0;Margin:0;width:510px">
                         <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                           <tr>
                            <td align="center" class="h-auto" bgcolor="#070100" height="261" style="padding:5px;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:44px;color:white !important;font-size:30px;text-align:center">Vill du vara säker på att du inte missar evenemanget? </p>
                              <a style="text-decoration: none; color: unset !important;" target="_blank" href="https://secure.tickster.com/sv/j9h1m59b52ljtl2/products"><button style="width: 52%;height: 32%;min-width:300px;min-height:78px;margin:5%;background-image:url(`https://www.xn--nck-qla.com/tpl/images/mora/GUL.jpg`);font-size: 25px; border:solid black 5px; border-radius:10px;color:black;">Säkra din biljett nu!</button></a>
                            </td>
                           </tr>
                         </table></td>
                       </tr>
                     </table></td>
                   </tr>
                   <tr>
                    <td align="center" bgcolor="#000000" style="Margin:0;padding-top:15px;padding-bottom:15px;padding-left:20px;padding-right:20px;background-color:#000000">
                     <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                       <tr>
                        <td valign="top" align="center" style="padding:0;Margin:0;width:480px">
                         <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                           <tr>
                            <td align="center" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:21px;color:white !important;font-size:14px">Hoppas vi syns den&nbsp;28:e Januari!</p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:21px;color:white !important;font-size:14px"><br></p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:21px;color:white !important;font-size:14px"><span style="font-size:16px"><strong>Med glada hälsningar,&nbsp;</strong></span><br><br>Strand Kök &amp; Bar i Mora</p></td>
                           </tr>
                         </table></td>
                       </tr>
                     </table></td>
                   </tr>
                 </table></td>
               </tr>
             </table>
             <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
               <tr>
                <td align="center" bgcolor="#161616" style="padding:0;Margin:0;background-color:#161616">
                 <table class="es-footer-body" cellspacing="0" cellpadding="0" bgcolor="black" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#black;width:520px">
                 <tbody><tr>
                    <td align="center" style="padding:5px;Margin:0">
                    <table cellspacing="0" cellpadding="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                      <tbody><tr>
                        <td align="center" style="padding:0;Margin:0;width:510px">
                        <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                          <tbody><tr>
                            <td align="center" style="padding:0;Margin:0;font-size:0px">
                            <table cellpadding="0" cellspacing="0" class="es-table-not-adapt es-social" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                              <tbody><tr>
                                <td align="center" valign="top" style="padding:0;Margin:0;padding-right:10px"><a target="_blank" href="https://www.facebook.com/strandilgusto/" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#FFFFFF;font-size:14px"><img src="https://aejsqm.stripocdn.email/content/assets/img/social-icons/rounded-colored-bordered/facebook-rounded-colored-bordered.png" alt="Fb" title="Facebook" height="32" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a></td>
                                <td align="center" valign="top" style="padding:0;Margin:0"><a target="_blank" href="https://www.instagram.com/strandimora/" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#FFFFFF;font-size:14px"><img src="https://aejsqm.stripocdn.email/content/assets/img/social-icons/rounded-colored-bordered/instagram-rounded-colored-bordered.png" alt="Ig" title="Instagram" height="32" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a></td>
                              </tr>
                            </tbody></table></td>
                          </tr>
                        </tbody></table></td>
                      </tr>
                    </tbody></table></td>
                  </tr>
                </tbody>
             </table></td>
           </tr>
         </table>
        </div>
        </body>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        exit();
    }
}

function attans($conn, $namn, $efternamn, $epost) {
    try {
        //Load Composer's autoloader
        require 'vendor/autoload.php';
        require 'db.inc.php';
    
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
    
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'xn--nck-qla.com';                      //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'web@nackcollective.com';               //SMTP username
        $mail->Password   = 'SoGstoarhpb-420';                      //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('strandimora@xn--nck-qla.com', 'Strand Kök & Bar');
        $mail->addAddress($epost, 'rikardoj8@gmail.com');        //Add a recipient
        
        $mail->CharSet="UTF-8";
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Vi är taggade på nästa tävling!';
        $mail->Body    = '
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="font-family:arial, `helvetica neue`, helvetica, sans-serif">
        <head>
            <meta charset="UTF-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
            <meta name="x-apple-disable-message-reformatting">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="telephone=no" name="format-detection">
            <meta name="color-scheme" content="light">
            <meta name="supported-color-schemes" content="light">
            <title>New message</title><!--[if (mso 16)]>
                <style type="text/css">
                a {text-decoration: none;}
                </style>
                <![endif]--><!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--><!--[if gte mso 9]>
            <xml>
                <o:OfficeDocumentSettings>
                <o:AllowPNG></o:AllowPNG>
                <o:PixelsPerInch>96</o:PixelsPerInch>
                </o:OfficeDocumentSettings>
            </xml>
            <![endif]--><!--[if !mso]><!-- -->
            <!--<![endif]-->
        </head>
        <body style="width:100%;font-family:arial, `helvetica neue`, helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
        <div class="es-wrapper-color" style="background-color:#F6F6F6"><!--[if gte mso 9]>
                  <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
                      <v:fill type="tile" color="#f6f6f6"></v:fill>
                  </v:background>
              <![endif]-->
         <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#F6F6F6">
           <tr>
            <td valign="top" style="padding:0;Margin:0">
             <table class="es-header" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
               <tr>
                <td align="center" bgcolor="#161616" style="padding:0;Margin:0;background-color:#161616">
                 <table class="es-header-body" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:520px">
                   <tr>
                    <td align="center" bgcolor="#000000" style="Margin:0;padding-bottom:10px;padding-top:20px;padding-left:20px;padding-right:20px;background-color:#000000">
                     <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                       <tr>
                        <td valign="top" align="center" style="padding:0;Margin:0;width:480px">
                         <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                           <tr>
                            <td align="center" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:17px;color:white !important;font-size:14px"><strong><span style="font-size:55px;line-height:66px;color: white;">Bättre lycka nästa gång!</span></strong></p></td>
                           </tr>
                         </table></td>
                       </tr>
                     </table></td>
                   </tr>
                   <tr>
                    <td align="center" style="padding:10px;Margin:0;background-image:url(`https://www.xn--nck-qla.com/tpl/images/mora/GUL.jpg`);">
                     <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                       <tr>
                        <td valign="top" align="center" style="padding:0;Margin:0;width:500px">
                         <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                           <tr>
                           <td align="center" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:17px;color:transparent;font-size:14px"><span style="font-size:18px;line-height:22px;color:black;">Hej '.$namn.' '.$efternamn.'! Vi mejlar dig...</span><br><span style="font-size:30px;line-height:47px;color:black;">ledtråden till nästa tävling</span><br><span style="font-size:18px;line-height:22px;color:black;">innan den kommer ut på våra medier</span></p></td>
                           </tr>
                         </table></td>
                       </tr>
                     </table></td>
                   </tr>
                   <tr>
                    <td align="center" style="padding:0;Margin:0">
                     <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                       <tr>
                        <td valign="top" align="center" style="padding:0;Margin:0;width:520px">
                         <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                           <tr>
                            <td align="center" style="padding:0;Margin:0;font-size:0px"><img class="adapt-img" src="https://www.xn--nck-qla.com/tpl/images/mora/ElPapi.jpg" alt style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" width="520"></td>
                           </tr>
                         </table></td>
                       </tr>
                     </table></td>
                   </tr>
                   <tr>
                    <td align="center" style="padding:5px;background-color:white;Margin:0;background-image:url(`https://www.xn--nck-qla.com/tpl/images/mora/GUL.jpg`);">
                     <table cellspacing="0" cellpadding="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                       <tr>
                        <td valign="top" align="center" style="padding:0;Margin:0;width:510px">
                         <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                           <tr>
                            <td align="center" class="h-auto" bgcolor="#070100" height="261" style="padding:5px;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:44px;color:white !important;font-size:30px;text-align:center">Vill du vara säker på att du inte missar evenemanget? </p>
                              <a style="text-decoration: none; color: unset !important;" target="_blank" href="https://secure.tickster.com/sv/j9h1m59b52ljtl2/products"><button style="width: 52%;height: 32%;min-width:300px;min-height:78px;margin:5%;background-image:url(`https://www.xn--nck-qla.com/tpl/images/mora/GUL.jpg`);font-size: 25px; border:solid black 5px; border-radius:10px;color:black;">Säkra din biljett nu!</button></a>
                            </td>
                           </tr>
                         </table></td>
                       </tr>
                     </table></td>
                   </tr>
                   <tr>
                    <td align="center" bgcolor="#000000" style="Margin:0;padding-top:15px;padding-bottom:15px;padding-left:20px;padding-right:20px;background-color:#000000">
                     <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                       <tr>
                        <td valign="top" align="center" style="padding:0;Margin:0;width:480px">
                         <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                           <tr>
                            <td align="center" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:21px;color:white !important;font-size:14px">Hoppas vi syns den&nbsp;28:e Januari!</p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:21px;color:white !important;font-size:14px"><br></p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather, georgia, `times new roman`, serif;line-height:21px;color:white !important;font-size:14px"><span style="font-size:16px"><strong>Med glada hälsningar,&nbsp;</strong></span><br><br>Strand Kök &amp; Bar i Mora</p></td>
                           </tr>
                         </table></td>
                       </tr>
                     </table></td>
                   </tr>
                 </table></td>
               </tr>
             </table>
             <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
               <tr>
                <td align="center" bgcolor="#161616" style="padding:0;Margin:0;background-color:#161616">
                 <table class="es-footer-body" cellspacing="0" cellpadding="0" bgcolor="black" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#black;width:520px">
                 <tbody><tr>
                    <td align="center" style="padding:5px;Margin:0">
                    <table cellspacing="0" cellpadding="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                      <tbody><tr>
                        <td align="center" style="padding:0;Margin:0;width:510px">
                        <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                          <tbody><tr>
                            <td align="center" style="padding:0;Margin:0;font-size:0px">
                            <table cellpadding="0" cellspacing="0" class="es-table-not-adapt es-social" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                              <tbody><tr>
                                <td align="center" valign="top" style="padding:0;Margin:0;padding-right:10px"><a target="_blank" href="https://www.facebook.com/strandilgusto/" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#FFFFFF;font-size:14px"><img src="https://aejsqm.stripocdn.email/content/assets/img/social-icons/rounded-colored-bordered/facebook-rounded-colored-bordered.png" alt="Fb" title="Facebook" height="32" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a></td>
                                <td align="center" valign="top" style="padding:0;Margin:0"><a target="_blank" href="https://www.instagram.com/strandimora/" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#FFFFFF;font-size:14px"><img src="https://aejsqm.stripocdn.email/content/assets/img/social-icons/rounded-colored-bordered/instagram-rounded-colored-bordered.png" alt="Ig" title="Instagram" height="32" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a></td>
                              </tr>
                            </tbody></table></td>
                          </tr>
                        </tbody></table></td>
                      </tr>
                    </tbody></table></td>
                  </tr>
                </tbody>
             </table></td>
           </tr>
         </table>
        </div>
        </body>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        exit();
    }
}

function  memo($conn, $namn, $efternamn) {

  try {
      //Load Composer's autoloader
      require 'vendor/autoload.php';
      require 'db.inc.php';
  
      //Create an instance; passing `true` enables exceptions
      $mail = new PHPMailer(true);
  
      //Server settings
      $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'xn--nck-qla.com';                      //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'web@nackcollective.com';               //SMTP username
      $mail->Password   = 'SoGstoarhpb-420';                      //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      //Recipients
      $mail->setFrom('strandimora@xn--nck-qla.com', 'Strand Kök & Bar');
      $mail->addAddress('web@nackcollective.com');     //Add a recipient
      
      $mail->CharSet="UTF-8";
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'En liten jävel har knipit den!';
      $mail->Body    = 'Vinnaren är '.$namn.' '.$efternamn;
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  
      $mail->send();
      echo 'Message has been sent';
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      exit();
  }
}