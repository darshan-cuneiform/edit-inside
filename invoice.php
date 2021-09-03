<!doctype html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->

    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start':

                new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],

            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =

            https: //www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); 

    })(window, document, 'script', 'dataLayer', 'GTM-KSM25V2');
    </script>

    <!-- End Google Tag Manager -->
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
    <script src="https://www.googleoptimize.com/optimize.js?id=OPT-5HWVG48"></script>
    <!--Google site verification code-->
    <meta name="google-site-verification" content="rf_k-wN9mmEdOMGmMimfS1kipfbojN0d4c37DYg-_4Y" />
    <!--Yandex verification code-->
    <meta name="yandex-verification" content="353b3952342e6088" />
    <!--Bing verification code-->
    <meta name="msvalidate.01" content="13D0FA7383624F1D171AD300C59CCC24" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Editing and Manuscript Proofreading Services by Edit Inside</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <?php include ("includes/header.php"); ?>

    <div class="container">
        <div class="invoice-wrap">
            <div class="box-shadow ">
                <div class="comp-title">Freelancer Invoice</div>
                <div class="upload-txt">
                    <p class="text-center">With an aim to bridge the gap between authors and publishers, Edit Inside
                        provides English editing, translation services, and publication support process to serve authors
                        from ESL (English as a second language) countries. Based in the United Kingdom and the United
                        States, our geographical location gives us an advantage to assemble a team of subject-matter
                        experts and also give us an edge on technology to provide high-quality support to authors from
                        across the globe. Our mission is to help authors from the globe to be able to publish in
                        International journals and contribute to the field of STEM without language being their barrier.
                    </p>
                    <form action="#" method="post" enctype="multipart/form-data" class="form-wrap">
                        <div class="row">
                            <div class="col align-self-center text-center">
                                <div class="dw-sample-wrap">Download Sample Invoice from <a href="#" id="sample-file">Here</a></div>
                            </div>
                        </div>
                        <script>
                            $(document).ready(function(){
                              $("#sample-file").click(function(){
                                //alert("hii");
                                $.ajax({
                                    url: "download_file.php",
                                    type: "POST",
                                    success: function(result){
                                      console.log("hii");
                                    }});
                              });
                            });
                        </script>
                        <div class="invoice-box ">
                            <div class="row align-items-center ">
                                <div class="col-md-4">Enter Your Name<span class="color-red float-right">*</span></div>
                                <div class="col-md-8"><input type="text" id="fname" name="fname" class="form-control"
                                        required></div>
                            </div>
                            <div class="row align-items-center ">
                                <div class="col-md-4">Enter Your FL Code<span class="color-red float-right">*</span>
                                </div>
                                <div class="col-md-8"><input type="text" id="flcode" name="flcode" class="form-control"
                                        required></div>
                            </div>
                            <div class="row align-items-center ">
                                <div class="col-md-4">Upload Invoice<span class="color-red float-right">*</span></div>
                                <div class="col-md-8">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input form-control" id="customFile">
                                        <label class="custom-file-label" for="customFile">No file Chosen</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="text-center ">
                            <button class="btn btn-primary" type="submit" value="Submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <?php include ("includes/footer.php"); ?>
    <script>
        /* show file value after file select */
document.querySelector('.custom-file-input').addEventListener('change',function(e){
  var fileName = document.getElementById("customFile").files[0].name;
  var nextSibling = e.target.nextElementSibling
  nextSibling.innerText = fileName
})
    </script>
</body>

</html>