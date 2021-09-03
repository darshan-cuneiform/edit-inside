<!DOCTYPE html>
<html>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-187808695-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-187808695-1');
</script>
</head>
<body>
</body>
</html>

<?PHP
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["emailadd"];
$country = $_POST["country"];
$phno = $_POST["phno"];
$univ = $_POST["university"];
$subjectareas = $_POST["subjectareas"];
$formatoption = $_POST["formatoption"];
$noj = $_POST["noj"];
$isbnno = $_POST["isbnno"];
$langsel = $_POST["langsel"];
$txtmsg = $_POST["textBox"];

$services = $_POST["services"];
$editingservices = $_POST["editingservices"];
$nodoc = $_POST["no-doc"];

// Function to get the client IP address
$ip = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');

$user_agent = $_SERVER['HTTP_USER_AGENT'];

function getOS() { 

    global $user_agent;

    $os_platform  = "Unknown OS Platform";

    $os_array     = array(
                          '/windows nt 10/i'      =>  'Windows 10',
                          '/windows nt 6.3/i'     =>  'Windows 8.1',
                          '/windows nt 6.2/i'     =>  'Windows 8',
                          '/windows nt 6.1/i'     =>  'Windows 7',
                          '/windows nt 6.0/i'     =>  'Windows Vista',
                          '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                          '/windows nt 5.1/i'     =>  'Windows XP',
                          '/windows xp/i'         =>  'Windows XP',
                          '/windows nt 5.0/i'     =>  'Windows 2000',
                          '/windows me/i'         =>  'Windows ME',
                          '/win98/i'              =>  'Windows 98',
                          '/win95/i'              =>  'Windows 95',
                          '/win16/i'              =>  'Windows 3.11',
                          '/macintosh|mac os x/i' =>  'Mac OS X',
                          '/mac_powerpc/i'        =>  'Mac OS 9',
                          '/linux/i'              =>  'Linux',
                          '/ubuntu/i'             =>  'Ubuntu',
                          '/iphone/i'             =>  'iPhone',
                          '/ipod/i'               =>  'iPod',
                          '/ipad/i'               =>  'iPad',
                          '/android/i'            =>  'Android',
                          '/blackberry/i'         =>  'BlackBerry',
                          '/webos/i'              =>  'Mobile'
                    );

    foreach ($os_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $os_platform = $value;

    return $os_platform;
}

function getBrowser() {

    global $user_agent;

    $browser        = "Unknown Browser";

    $browser_array = array(
                            '/msie/i'      => 'Internet Explorer',
                            '/firefox/i'   => 'Firefox',
                            '/safari/i'    => 'Safari',
                            '/chrome/i'    => 'Chrome',
                            '/edge/i'      => 'Edge',
                            '/opera/i'     => 'Opera',
                            '/netscape/i'  => 'Netscape',
                            '/maxthon/i'   => 'Maxthon',
                            '/konqueror/i' => 'Konqueror',
                            '/mobile/i'    => 'Handheld Browser'
                     );

    foreach ($browser_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $browser = $value;

    return $browser;
}


$user_os        = getOS();
$user_browser   = getBrowser();

$device_details = $user_browser.", ".$user_os;

if($services=='es'){$services_sel='Editing Service';}
if($services=='ts'){$services_sel='Translation Service';}


$output_dir = "uploads/main/";/* Path for file upload */
$fileCount = count($_FILES["fileUpload"]['name']);
for($i=0; $i < $fileCount; $i++)
    
    {
        $RandomNum   = $fname;
    
        $ImageName      = str_replace(' ','-',strtolower($_FILES['fileUpload']['name'][$i]));
        $ImageType      = $_FILES['fileUpload']['type'][$i]; /*"image/png", image/jpeg etc.*/
     
        $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt       = str_replace('.','',$ImageExt);
        $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
        $ret[$NewImageName]= $output_dir.$NewImageName;
        $ret2[$NewImageName]= $NewImageName;

        $files_name = rtrim(implode(',', $ret2), ',');
        

        /* Try to create the directory if it does not exist */
        if (!file_exists($output_dir . $last_id))
        {
            @mkdir($output_dir . $last_id, 0777);
        }
                
        move_uploaded_file($_FILES["fileUpload"]["tmp_name"][$i],$output_dir.$last_id."/".$NewImageName );
        
         /*$insert_img = "insert into `category_images` SET `category_ads_id`='".$category_ads_id_image."', `image`='".$NewImageName."'";
          $result = $dbobj->query($insert_img);*/
           }

           $output_dir_ref = "uploads/reference/";/* Path for file upload */
$fileCount_ref = count($_FILES["reffileUpload"]['name']);
for($j=0; $j < $fileCount_ref; $j++)
    
    {
        $RandomNum_ref   = $fname;
    
        $ImageName_ref      = str_replace(' ','-',strtolower($_FILES['reffileUpload']['name'][$j]));
        $ImageType_ref      = $_FILES['reffileUpload']['type'][$j]; /*"image/png", image/jpeg etc.*/
     
        $ImageExt_ref = substr($ImageName_ref, strrpos($ImageName_ref, '.'));
        $ImageExt_ref       = str_replace('.','',$ImageExt_ref);
        $ImageName_ref      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName_ref);
        $NewImageName_ref = $ImageName_ref.'-'.$RandomNum_ref.'.'.$ImageExt_ref;
        $ret_ref[$NewImageName_ref]= $output_dir_ref.$NewImageName_ref;
        $ret2_ref[$NewImageName_ref]= $NewImageName_ref;

        $files_name_ref = rtrim(implode(',', $ret2_ref), ',');
        

        /* Try to create the directory if it does not exist */
        if (!file_exists($output_dir_ref . $last_id_ref))
        {
            @mkdir($output_dir_ref . $last_id_ref, 0777);
        }
                
        move_uploaded_file($_FILES["reffileUpload"]["tmp_name"][$j],$output_dir_ref.$last_id_ref."/".$NewImageName_ref );
        
         /*$insert_img = "insert into `category_images` SET `category_ads_id`='".$category_ads_id_image."', `image`='".$NewImageName."'";
          $result = $dbobj->query($insert_img);*/
           }


// Specify the SMTP settings.
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$host = 'smtp.gmail.com';
$username = 'editinside34@gmail.com';
$password = 'Edit@data34';
$port = 587;
$smtpsecure = 'tls';

$to = "projects@editinside.com";
$subject = "New Client Inquiry";
$headers = "$email";
$message = "A visitor to your site has sent the following details.\n
Service Selected : $services_sel \n
Editing Service Selected : $editingservices \n
First Name : $fname \n
Last Name : $lname \n
Email Address: $email \n
Country: $country \n
Phone No: $phno \n
University: $univ \n
Subjest Area: $subjectareas \n
Formatting required: $formatoption \n
Name of Journal: $noj \n
ISBN No: $isbnno \n
Language: $langsel \n
Files uploaded: $files_name \n
Reference Files uploaded: $files_name_ref \n
Message: $txtmsg \n
\n
IPaddress : $ip \n
Device details : $device_details \n
\n
\n
$services_sel | $editingservices | $fname | $lname | $email | $country | $phno | $univ | $files_name $nodoc | $files_name_ref | $subjectareas | $formatoption | $noj | $isbnno | $langsel | $txtmsg | $ip | $device_details
";

//ADMIN EMAIL
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->setFrom($headers, 'Edit Inside');
$mail->Username = $username;
$mail->Password = $password;
$mail->Host = $host;
$mail->Port = $port;
$mail->SMTPAuth = true;
$mail->SMTPSecure = $smtpsecure;
$mail->addCustomHeader('X-SES-CONFIGURATION-SET');
$mail->addAddress($to);
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = "";
$mail->Send();


//USER EMAIL
$user = "$email";
$usersubject = "Thank You";
$userheaders = "projects@editinside.com";
$usermessage = "Thank you For Choosing Edit Inside As Your Language Partner. \n
Your enquiry has been received successfully. \n
One of our team member will get back to you within 30 Minutes.";

$usermail = new PHPMailer(true);
$usermail->isSMTP();
$usermail->setFrom($userheaders, 'Edit Inside');
$usermail->Username = $username;
$usermail->Password = $password;
$usermail->Host = $host;
$usermail->Port = $port;
$usermail->SMTPAuth = true;
$usermail->SMTPSecure = $smtpsecure;
$usermail->addCustomHeader('X-SES-CONFIGURATION-SET');
$usermail->addAddress($user);
$usermail->isHTML(true);
$usermail->Subject = $usersubject;
$usermail->Body = $usermessage;
$usermail->AltBody = "";
$usermail->Send();

// mail($to,$subject,$message,$headers);
// mail($user,$usersubject,$usermessage,$userheaders);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Hotjar Tracking Code for www.editinside.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1866247,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Thank you</title>
    <meta name="description"
        content="Get your manuscript professionally translated and edited by subject-matter experts. We designed our services to help you publish your paper.">
    <meta name="keywords" content="">
    <link rel='shortcut icon' type='image/x-icon' href='new-favicon.svg' />

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="contact-us contact-us-ty">
    <?php include ("includes/header.php"); ?>

    <section>
        <div class="contact-wrap">
            <div class="container">
                <div class="no-gutter">
                    <div class="">
                        <div class="text-center">
                            <div class="box-shadow row">
                                <div class="col-md-12">
                                    <div class="mb-20"> <img src="images/ty-tick.png" class="img-fluid"
                                            alt="Responsive image"></div>
                                    <div class="mb-20"> <img src="images/thankyou.png" class="img-fluid"
                                            alt="Responsive image"></div>
                                    <p>Thank you For Choosing Edit Inside As Your Language Partner.<br>
                                        Your enquiry has been received successfully.<br>
                                        One of our team member will get back to you within 30 Minutes.</p>
                                    <div class="ty-social">
                                        <div class="row justify-content-md-center">
                                            <div class="col-md-3">
                                                <a href="https://www.facebook.com/editinside" target="_blank"><img
                                                        src="images/ty-fb.png" class="img-fluid"
                                                        alt="Responsive image"></a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="https://twitter.com/edit_inside" target="_blank"><img
                                                        src="images/ty-twitter.png" class="img-fluid"
                                                        alt="Responsive image"></a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="https://www.linkedin.com/company/edit-inside/"
                                                    target="_blank"><img src="images/ty-linkedin.png" class="img-fluid"
                                                        alt="Responsive image"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="index">&lt; Back to Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </section>

    <?php include ("includes/footer.php"); ?>


</body>