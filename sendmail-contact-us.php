<?php

// Include and initialize phpmailer class

require 'PHPMailer/PHPMailerAutoload.php';

require 'PHPMailer/class.phpmailer.php';
  //echo "<pre>"; print_r($_POST); exit();



if (isset($_POST['submit'])) {
// print_r("expression"); exit;
   
   $fname = $_POST['fname'];

   $phcode = $_POST['phcode'];

   $phno = $_POST['phno'];

   $emailadd = $_POST['emailadd'];

   $university=$_POST['university'];

   $msg=$_POST['msg'];

   //$ts = date('Y-m-d');

   

    /* echo $yrname;

    echo $phno;

    echo $email;

	echo $gender;

	echo $msg; */

  

   // SMTP configuration

$mail = new PHPMailer;
//echo "<pre>";  print_r(get_class_methods($mail)); exit;    

$mail->isSMTP();

$mail->SMTPDebug = 0;

$mail->Host = 'tls://smtp.gmail.com:587';

$mail->SMTPAuth = true;

$mail->Username = 'vidhi.purohit88@gmail.com';

$mail->Password = 'vidhi_p1997';

//$mail->SMTPSecure = 'tls';

//$mail->Port = 587;



$mail->setFrom('vidhi.purohit88@gmail.com', 'editinside - Contact us');

$mail->addReplyTo('vidhi.purohit88@gmail.com', 'editinside - Contact us');

   

   $mail->addAddress('vidhi.purohit88@gmail.com');

   //$mail->addAddress('prakash.pipaliya@skyycs.com');

   // $mail->addCC("pooja.sharma@skyycs.com");

   // $mail->addBCC("prakash.pipaliya@skyycs.com");

   

   $mail->Subject = 'editinside - Contact tracing form';

   $body="";

   $body.="<table align='center'>

<table>

<table align='center' border='0'>

<tr><td colspan='2'><b>editinside New contact lead</b></td></tr>

<tr><td colspan='2'>&nbsp;</td></tr>

<tr><td><b> Name : </b></td><td>$fname

</td><tr><td><b> Phone Number : </b></td><td>$phno

</td><tr><td><b> Email : </b></td><td>$emailadd

</td><tr><td><b> University : </b></td><td>$university

</td><tr><td><b> Message : </b></td><td>$msg

</td></tr></table></td></tr>

</table></table>";


   

   $mail->Body =$body;
   $mail->isHTML(true);

   $from = 'vidhi.purohit88@gmail.com';

   $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  $headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

  $to = 'vidhi.purohit88@gmail.com';

  $subject = 'editinside -- contact form lead details';

  mail($to, $subject, $body, $headers);

   print ("<meta HTTP-EQUIV=\"refresh\" content=0;url=\"contact-us-thankyou.php\">");

 }

?>