<!DOCTYPE html>
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
    <script src="https://www.googleoptimize.com/optimize.js?id=OPT-5HWVG48"></script>
    <!--Google site verification code-->
    <meta name="google-site-verification" content="rf_k-wN9mmEdOMGmMimfS1kipfbojN0d4c37DYg-_4Y" />
    <!--Yandex verification code-->
    <meta name="yandex-verification" content="353b3952342e6088" />
    <!--Bing verification code-->
    <meta name="msvalidate.01" content="13D0FA7383624F1D171AD300C59CCC24" />
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='shortcut icon' type='image/x-icon' href='new-favicon.svg' />
    <title>Get a free quote from a professional team of Edit Inside</title>
    <meta name="description" content="Get a free quote for English Editing service, Proofreading, Language Translation and others.">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'
        rel='stylesheet'>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- <header class="container mb-3">
        <div class="text-right">
            <div class="header-top mr-4 pt-1">
                <a href="#"><img src="image/Email.png" class="img-fluid">editinside@gmail.com</a>
            </div>
        </div>
         <nav class="navbar navbar-expand-lg navbar-light justify-content-between py-0">
             <a class="navbar-brand logo p-0" href="#"><img src="image/logo.png" class="img-fluid"></a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
             </button>
             <div class="text-right d-flex justify-content-end align-items-center order-lg-1">
                <a href="#" class="btn btn-yellow rounded-0 shadow-sm text-uppercase">Get A Quote</a>
             </div>
             <div class="collapse navbar-collapse" id="navbarNavDropdown">
                 <ul class="navbar-nav mr-4 ml-auto">
                 <li class="nav-item active">
                     <a class="nav-link" href="home.html">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="about.html">About us</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">English Services</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">How it Works</a>
                 </li>
                 
                 </ul>
             </div>
         </nav>
    </header> -->

    <!-- include your header.php file here  -->

    <?php 
error_reporting(0);
ini_set('display_errors', 'On');

// echo "abcd";
include("check.php");

// echo "abcd";
// $mysqli = new mysqli("localhost", "nativela_admin", "Native@uk37", "nativela_user");

if(isset($_REQUEST['submit'])){
    //echo "<pre>"; print_r($_FILES); exit;
   $tmp_name    = $_FILES['myfile1']['tmp_name'];
    $name        = $_FILES['myfile1']['name'];
    $size        = $_FILES['myfile1']['size'];
    $type        = $_FILES['myfile1']['type'];
    $error       = $_FILES['myfile1']['error'];
   
    $tmp_name2    = $_FILES['myfile2']['tmp_name'];
    $name2        = $_FILES['myfile2']['name'];
    $size2       = $_FILES['myfile2']['size'];
    $type2        = $_FILES['myfile2']['type'];
    $error2       = $_FILES['myfile2']['error'];
   //echo "<pre>"; print_r($tmp_name2); exit;

    //$to = ['vidhi.purohit16@gmail.com', $_REQUEST['email']];

    $to = "project@editinside.com, vidhi.purohit16@gmail.com, ".$_REQUEST['email'];
    //echo "<pre>"; print_r($to); exit;
    $from = 'project@editinside.com'; 
    $subject = "Lead From editinside";
    

    if($_REQUEST['englishservice'] !='Select English Editing*') {
        $editingservices = $_REQUEST['englishservice'];
    } else {
        $editingservices = $_REQUEST['translateservice'] .' To '.$_REQUEST['tolanguge'];
    }
    //echo "<pre>"; print_r($editingservices); exit;
    

    $message = "<table border=1>
            <tr>

            <th>Service</th>
            <td>".$_REQUEST['service']."</td>
            </tr>

            <tr>
            <th>Sub Service</th>
            <td>".$editingservices."</td>
            </tr>";

            if($_REQUEST['days'] == "Others"){
                $message .= "<tr><th>Date</th>";
                $message .= "<td>".$_REQUEST['date']."</td><tr>";
            } else {
                $message .= "<tr><th>Days</th>";
                $message .= "<td>".$_REQUEST['days']."</td></tr>";
            }
            $message .= "<tr>
            <th>Area</th>
            <td>".$_REQUEST['area']."</td>
            </tr>";

            
            $message .= "<tr>
            <th>Name of Journal</th>
            <td>".$_REQUEST['journalname']."</td>
            </tr>";

            $message .= "<tr>
            <th>Instruction to Editor</th>
            <td>".$_REQUEST['instruction']."</td>
            </tr>";

            $message .= "<tr>
            <th>Language Style</th>
            <td>".$_REQUEST['langstyle']."</td>
            </tr>";

            $message .= "<tr>
            <th>first Name</th>
            <td>".$_REQUEST['fname']."</td>
            </tr>";

            $message .= "<tr>
            <th>Last Name</th>
            <td>".$_REQUEST['lname']."</td>
            </tr>";

            $message .= "<tr>
            <th>Phone Number</th>
            <td>".$_REQUEST['number']."</td>
            </tr>";

            $message .= "<tr>
            <th>Country</th>
            <td>".$_REQUEST['country']."</td>
            </tr>";


            $message .= "<tr>
            <th>University / Affiliation</th>
            <td>".$_REQUEST['uni']."</td>
            </tr>";

            $message .= "<tr>
            <th>Voucher Code</th>
            <td>".$_REQUEST['voucher']."</td>
            </tr>";

            // $message .= "<tr>
            // <th>Journal Name</th>
            // <td>".$_REQUEST['journalname']."</td>
            // </tr>";

            // $message .= "<tr>
            // <th>ISBN Number</th>
            // <td>".$_REQUEST['isbn_number']."</td>
            // </tr>";


            $message .= "</tr>
            </table>";

    $headers = "From: $from";

     /*$query = "INSERT INTO `web_user`(`fname`,`lname`,`phone`,`country`,`university`,`email`,
     `journalname`,`isbn_number`,`status`) VALUES ('".$_REQUEST['fname']."','".$_REQUEST['lname']."','".$_REQUEST['number']."','".$_REQUEST['country']."','".$_REQUEST['uni']."','".$_REQUEST['email']."','".$_REQUEST['journalname']."','".$_REQUEST['isbn_number']."',''1')";*/


    $query = "INSERT INTO `web_user`(`fname`,`lname`,`phone`,`country`,`university`,`email`,`status`) VALUES ('".$_REQUEST['fname']."','".$_REQUEST['lname']."','".$_REQUEST['number']."','".$_REQUEST['country']."','".$_REQUEST['uni']."','".$_REQUEST['email']."','1')";

    //echo "<pre>"; print_r($query); exit;


    $result = mysqli_query($conn, $query);

            
            
    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";


    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
    $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
    $message .= "--{$mime_boundary}\n";

    // preparing attachments
        
        for($x=0;$x<2;$x++){
          
            if($x == 0){
                $file = fopen($tmp_name, "rb");
                $data = fread($file, filesize($tmp_name));
                fclose($file);
                $data = chunk_split(base64_encode($data));
                $name = $name;
            }else{
                $file = fopen($tmp_name2, "rb");
                $data = fread($file, filesize($tmp_name2));
                fclose($file);
                $data = chunk_split(base64_encode($data));
                $name = $name2;
            }
       
            $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" .
                    "Content-Disposition: attachment;\n" . " filename=\"$name\"\n" .
                    "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
            $message .= "--{$mime_boundary}\n";
        }
    
    // send
      
    $ok = mail($to, $subject, $message, $headers);
    if ($ok) {
        //$url = 'http://editinside.com/submission-form-thankyou.php';
        header("Location: http://editinside.com/submission-form-thankyou.php");
        //echo "<p style='tex-align:center'>mail sent to $to!</p>";
    } else {
        echo "<p>mail could not be sent!</p>";
    }
    die;
    ?>
    <script>
    window.top.location.href = "http://editinside.com/ei_final/thankyou.php";
    </script>

    <?php
    //header("location: http://www.paraspandya.com/demo/editinside/thank-you/");
 die;
} 

?>
    <?php include ("includes/header.php"); ?>
    <section class="form-contant">
        <div class="container">
            <h3 class="text-center my-4">Please Fill the Form</h3>
            <div class="form-field">
                <form method="POST" action="#" enctype="multipart/form-data">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email Address">
                        </div>
                    </div>
                    <h3 class="text-center my-4">Service Section</h3>
                    <div>
                        <div class="row mx-0">
                            <div class="col-md-12">
                                <select name="service" id="service" required class="form-control">
                                    <option>Select Service*</option>
                                    <option value="English Editing">English Editing</option>
                                    <option value="Translation Service">Translation Service</option>
                                    <option value="Thesis Editing">Thesis Editing </option>
                                </select>
                            </div>
                        </div>
                        <div id="english_translate" style="display:none;">
                            <h3 class="text-center my-4"> English Editing</h3>
                            <div class="row mx-0">
                                <div class="col-md-12">
                                    <select name="englishservice" required class="form-control">
                                        <option>Select English Editing*</option>
                                        <option value="Substantive Editing">Substantive Editing</option>
                                        <option value="Copy Editing">Copy Editing</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="translation_translate" style="display:none;">
                            <h3 class="text-center my-4">Translation Service</h3>
                            <div class="row mx-0">
                                <div class="col-md-6">
                                    <select name="translateservice" id="translateservice" required class="form-control">
                                        <option>From</option>
                                        <option value="English">English</option>
                                        <option value="French">French</option>
                                        <option value="Spanish">Spanish</option>
                                        <option value="Japanese">Japanese</option>
                                        <option value="Korean">Korean</option>
                                        <option value="Chinese">Traditional Chinese</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <select name="tolanguge" class="tolanguge" required>
                                        <option>To</option>
                                        <option value="English">English</option>
                                        <option value="French">French</option>
                                        <option value="Spanish">Spanish</option>
                                        <option value="Japanese">Japanese</option>
                                        <option value="Korean">Korean</option>
                                        <option value="Chinese">Traditional Chinese</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-center my-4">Upload File</h3>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="file" name="myfile1" id="file-7" class="inputfile">
                            <label for="file-7"><span class="archive-name">Upload File</span><span
                                    class="btn-inputfile">Select File</span></label>
                        </div>
                    </div>
                    <h3 class="text-center my-4">Upload Reference File</h3>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="file" name="myfile2" id="file-8" class="inputfile">
                            <label for="file-8"><span class="archive-name">Upload Reference File</span><span
                                    class="btn-inputfile">Select File</span></label>
                        </div>
                    </div>
                    <h3 class="text-center my-4">Delivery Date</h3>
                    <div>
                        <div class="row mx-0">
                            <div class="col-md-12">
                                <select name="days" required id="dayes" class="form-control">
                                    <option value="">Select Date</option>
                                    <option value="3 Days">3 Days</option>
                                    <option value="4 Days">4 Days</option>
                                    <option value="5 Days">5 Days</option>
                                    <option value="6 Days">6 Days</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="parent" style="display:none;" id="datepciker">
                            <div class="row mx-0">
                                <div class="col-md-12">
                                    <h3 class="text-center my-4">Select Date</h3>
                                </div>
                            </div>
                            <div class="row mx-0">
                                <div class="col-md-12">
                                    <input type="text" name="date" id="date" class="form-control"
                                        placeholder="Select date">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-center my-4">Subject Area</h3>
                    <div class="col-md-12">
                        <div class="form-group">
                            <select name="area" class="form-control" required id="sa">
                                <option value="">Subject Area</option>
                                <option value="Medicine">Medicine</option>
                                <option value="Life Science">Life Science</option>
                                <option value="Physical sceince and engineering">Physical sceince and engineering
                                </option>
                                <option value="Arts of social science">Arts of social science</option>
                                <option value="Economic and business">Economic and business</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-start m-4 flex-sm-row flex-column">
                        <h3 class="text-center">Formating Required</h3>
                        <div>
                            <div class="radio form-check form-check-inline">
                                <input id="radio-1" name="radio" type="radio" checked>
                                <label for="radio-1" class="radio-label">Yes</label>
                            </div>
                            <div class="radio form-check form-check-inline">
                                <input id="radio-2" name="radio" type="radio">
                                <label for="radio-2" class="radio-label">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" name="journalname"
                                    placeholder="Name of Journal">
                            </div>
                            <div class="col">
                                <input type="number" name="isbn_number" class="form-control" placeholder="ISBN Number">
                            </div>
                        </div>
                    </div>
                    <h3 class="text-center my-4">Instruction to Editor</h3>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control" name="instruction" placeholder="Instruction to Editor"
                                rows="4"></textarea>
                        </div>
                    </div>
                    <h3 class="text-center my-4">Language Style</h3>
                    <div class="col-md-12">
                        <div class="form-group">
                            <select class="form-control" name="langstyle">
                                <option>Select Language Style</option>
                                <option>American English</option>
                                <option>British English</option>
                            </select>
                        </div>
                    </div>
                    <h3 class="text-center my-4">Personal Details</h3>
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="col-sm-6 col-12 mb-2">
                                <input type="text" class="form-control" name="fname" required placeholder="First Name">
                            </div>
                            <div class="col-sm-6 col-12 mb-2">
                                <input type="text" class="form-control" name="lname" required placeholder="Last Name">
                            </div>
                            <div class="col-sm-6 col-12 mb-2">
                                <input type="text" name="country" required class="form-control" placeholder="Country">
                            </div>
                            <div class="col-sm-6 col-12 mb-2">
                                <div class="row">
                                    <div class="col-md-3 col-sm-5 col-5 pr-2">
                                        <input type="text" class="form-control" placeholder="Code">
                                    </div>
                                    <div class="col-md-9 col-sm-7 col-7 pl-0">
                                        <input type="text" class="form-control" name="number" required
                                            placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12 mb-2">
                                <input type="text" class="form-control" name="uni" required
                                    placeholder="University / Affiliation">
                            </div>
                            <div class="col-sm-6 col-12 mb-2">
                                <input type="text" class="form-control" name="voucher" placeholder="Voucher Code">
                            </div>
                        </div>
                    </div>
                    <div class="container text-center">
                        <!-- <a href="#" class="btn btn-yellow btn-manuscript">Submit Your Manuscript (Get Quatation within an Hour)</a> -->
                        <input type="submit" class="submit-btn btn btn-yellow btn-manuscript" name="submit"
                            value="Submit Your Manuscript (Get Quotation within an Hour)" />
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php include ("includes/footer.php"); ?>
    <!-- <div class="my-md-5 my-3">
        <div class="container text-center">
            <a href="#" class="btn btn-yellow btn-manuscript">Submit Your Manuscript (Get Quatation within an Hour)</a>
            <input type="submit" class="submit-btn btn btn-yellow btn-manuscript" name="submit" value="Submit Your Manuscript (Get Quatation within an Hour)"/>
        </div>
    </div> -->
    <!-- <footer class="footer p-md-5 p-3">
        <div class="container">
            <div>
                <h3 class="main-title">About Edit Inside</h3>
                <p class="sub-title">Research Communication Services Assist Universities And Journals To Enhance The Reach And Impact Of Their Publications Through The Use Of Engaging Text,  Graphical, And  Audio-Visual  Formats. Our  Researcher Education Site,  Editage Insights,  Shares  Valuable  Content  On  Manuscript  Preparation  And Publication For Free.Research Communication Services Assist Universities And Journals To Enhance The Reach.</p>
            </div>
            <div class="row mt-5 justify-content-between">
                <div class="col-md-2 col-sm-4 col-12 pl-lg-3 pl-0 pr-0 pr-lg-3">
                    <a href="#" class="d-block">Editing process</a>
                    <a href="#" class="d-block">How to use editing</a>
                    <a href="#" class="d-block">Editing Prices</a>
                    <a href="#" class="d-block">Payment options</a>
                    <a href="#" class="d-block">Video Gallery</a>
                    <a href="#" class="d-block">FAQs</a>
                </div>
                <div class="col-md-2 col-sm-4 col-12 pl-lg-3 pl-0 pr-0 pr-lg-3">
                    <a href="#" class="d-block">Editage for labs</a>
                    <a href="#" class="d-block">Editage prepaid card</a>
                    <a href="#" class="d-block">Editage Insights</a>
                    <a href="#" class="d-block">How we help authors</a>
                    <a href="#" class="d-block">Contact us</a>
                    <a href="#" class="d-block">Partner with us</a>
                </div>
                <div class="col-md-2 col-sm-4 col-12 pl-lg-3 pl-0 pr-0 pr-lg-3">
                    <a href="#" class="d-block">About us</a>
                    <a href="#" class="d-block">News</a>
                    <a href="#" class="d-block">Careers</a>
                    <a href="#" class="d-block">Terms of Use</a>
                    <a href="#" class="d-block">Privacy Policy</a>
                    <a href="#" class="d-block">Sitemap</a>
                </div>
                <div class="col-md-4 col-12 text-center text-md-left mt-md-0 mt-4 social-icon">
                    <p>Follow us</p>
                    <div class="mb-3">
                        <a href="#" class="mx-1 fb"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="mx-1 tw"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="mx-1 li"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->

    <!-- include your footer.php file here -->



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/form.js"></script>
    <script src="js/jquery-ui.js"></script>
    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

    <script>
    $(function() {
        $("#date").datepicker({
            minDate: 0
        });
    });

    $('input[type=radio][name=optradio]').change(function() {
        if ($(this).val() == "yes") {
            $("#nameof").fadeIn();
        } else {
            $("#nameof").fadeOut();
        }

    });

    $('#sa').on('change', function() {
        if ($(this).val() != "") {
            $(".js").fadeIn();
        } else {
            $(".js").fadeOut();
        }
    });

    $('#dayes').on('change', function() {
        if ($(this).val() == "Others") {
            $("#datepciker").fadeIn();
        } else {
            $("#datepciker").fadeOut();
        }
    });

    $('#service').on('change', function() {

        if (this.value == "English Editing") {
            $('#english_translate').show();
            $('#translation_translate').hide();
        } else if (this.value == "Translation Service") {
            $('#translation_translate').show();
            $('#english_translate').hide();
        } else {
            $('#translation_translate').hide();
            $('#english_translate').hide();
        }
    });

    $('#translateservice').on('change', function() {

        var r = this.value;
        $('.tolanguge').find('option').remove();
        $('.tolanguge').append(new Option('To', '', false, false));
        $('.tolanguge').append(new Option('English', 'English', false, false));
        $('.tolanguge').append(new Option('French', 'French', false, false));
        $('.tolanguge').append(new Option('Spanish', 'Spanish', false, false));
        $('.tolanguge').append(new Option('Japanese', 'Japanese', false, false));
        $('.tolanguge').append(new Option('Korean', 'Korean', false, false));
        $('.tolanguge').append(new Option('Traditional Chinese', 'Chinese', false, false));

        $(".tolanguge option[value=" + r + "]").remove();

    });
    </script>



</body>

</html>