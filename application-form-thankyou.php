<?PHP
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$country = $_POST["country"];
$nativelang = $_POST["nativelang"];
$email = $_POST["emailadd"];
$skypeid = $_POST["skypeid"];
$eduqualifation = $_POST["eduqualifation"];
$certification = $_POST["certification"];
$yearsexp = $_POST["yearsexp"];
$monthsexp = $_POST["monthsexp"];
$subjectareas = $_POST["subjectareas"];
$membershiptxtbox = $_POST["membershiptxtbox"];
$membershiptype = $_POST["membershiptype"];
$hearabtus = $_POST["hearabtus"];
$tellmore = $_POST["tellmore"];

$fu = $_FILES["fileUpload"]['name'];




$output_dir = "uploads/application/";/* Path for file upload */
$fileCount = count($_FILES["fileUpload"]['name']);
for($i=0; $i < $fileCount; $i++)
    
    {
        $RandomNum   = $name;
    
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

	

$to = "priteshbhavsar07@gmail.com";
$subject = "New Email Address from Application form";
$headers = "From: $email \n";
$message = "A visitor to your site has sent the following details through Application form.\n
First Name: $fname \n
Last Name: $lname \n
Country of residence: $country \n
Native Language: $nativelang \n
Email ID: $email \n
Skype ID: $skypeid \n
Education Qualifications: $eduqualifation \n
Any Certifications: $certification \n
Years of Editing Experience: $yearsexp Years $monthsexp Months \n
Mention your Subject Expertise:  $subjectareas \n
Mention any membership with any professional bodies: $membershiptxtbox \n
Full time or Part time membership: $membershiptype \n
How did you hear about us?*: $hearabtus \n
Want to tell more about your self?: $tellmore \n
Files uploaded: $files_name \n
\n";


$user = "$email";
$usersubject = "Thank You";
$userheaders = "From: priteshbhavsar07@gmail.com ";
$usermessage = "Thank for your application";
mail($to,$subject,$message,$headers);
mail($user,$usersubject,$usermessage,$userheaders);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Hotjar Tracking Code for www.editinside.com -->
    <script>
    (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
            hjid: 1866247,
            hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Thank you</title>
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
                                    <p>Thank for your application</p>
                                    <div class="ty-social">
                                        <div class="row justify-content-md-center">
                                            <div class="col-md-3">
                                                <a href="https://www.facebook.com/editinside" target="_blank"><img
                                                        src="images/ty-fb.png" class="img-fluid"
                                                        alt="Responsive image"></a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="https://twitter.com/editinside_com" target="_blank"><img
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