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
    <title>Application From | Edit Inside</title>
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

    <?php

session_start();

$digit1 = mt_rand(1,20);
$digit2 = mt_rand(1,20);
        $math = "$digit1 + $digit2";
        $mathans = $digit1 + $digit2;

?>

</head>

<body>
    <?php include ("includes/header.php"); ?>

    <div class="container ">
        <div class="application-form-wrap col-md-10">
            <h2 class="text-center">Application Form</h2>
            <form class="form-wrap" action="application-form-thankyou" method="post" name="appform"
                enctype="multipart/form-data">
                <div class="invoice-box ">
                    <div class="comp-title">Contact Details</div>
                    <div class="row align-items-center ">
                        <div class="col-md-4">First Name<span class="color-red float-right">*</span></div>
                        <div class="col-md-8"><input type="text" id="fname" name="fname" class="form-control"
                                required="">
                        </div>
                    </div>
                    <div class="row align-items-center ">
                        <div class="col-md-4">Last Name<span class="color-red float-right">*</span>
                        </div>
                        <div class="col-md-8"><input type="text" id="lname" name="lname" class="form-control"
                                required="">
                        </div>
                    </div>
                    <div class="row align-items-center ">
                        <div class="col-md-4">Country of residence<span class="color-red float-right">*</span></div>
                        <div class="col-md-8">
                            <select id="country" name="country" class="form-control" required>
                                <option value="">Please Select</option>
                                <option value="Afganistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bonaire">Bonaire</option>
                                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Canary Islands">Canary Islands</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Channel Islands">Channel Islands</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Island">Cocos Island</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote DIvoire">Cote DIvoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curaco">Curacao</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Ter">French Southern Ter</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Great Britain">Great Britain</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Hawaii">Hawaii</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="India">India</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea North">Korea North</option>
                                <option value="Korea Sout">Korea South</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Midway Islands">Midway Islands</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Nambia">Nambia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherland Antilles">Netherland Antilles</option>
                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                <option value="Nevis">Nevis</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau Island">Palau Island</option>
                                <option value="Palestine">Palestine</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Phillipines">Philippines</option>
                                <option value="Pitcairn Island">Pitcairn Island</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                <option value="Republic of Serbia">Republic of Serbia</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="St Barthelemy">St Barthelemy</option>
                                <option value="St Eustatius">St Eustatius</option>
                                <option value="St Helena">St Helena</option>
                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                <option value="St Lucia">St Lucia</option>
                                <option value="St Maarten">St Maarten</option>
                                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                <option value="Saipan">Saipan</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa American">Samoa American</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Tahiti">Tahiti</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Erimates">United Arab Emirates</option>
                                <option value="United States of America">United States of America</option>
                                <option value="Uraguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City State">Vatican City State</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                <option value="Wake Island">Wake Island</option>
                                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center ">
                        <div class="col-md-4">Native Language<span class="color-red float-right">*</span></div>
                        <div class="col-md-8">
                            <select id="nativelang" name="nativelang" class="form-control" required>
                                <option value="">Please Select</option>
                                <option value="Afrikaans">Afrikaans</option>
                                <option value="Albanian">Albanian</option>
                                <option value="Arabic">Arabic</option>
                                <option value="Armenian">Armenian</option>
                                <option value="Basque">Basque</option>
                                <option value="Bengali">Bengali</option>
                                <option value="Bulgarian">Bulgarian</option>
                                <option value="Catalan">Catalan</option>
                                <option value="Cambodian">Cambodian</option>
                                <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                                <option value="Croatian">Croatian</option>
                                <option value="Czech">Czech</option>
                                <option value="Danish">Danish</option>
                                <option value="Dutch">Dutch</option>
                                <option value="English">English</option>
                                <option value="Estonian">Estonian</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finnish">Finnish</option>
                                <option value="French">French</option>
                                <option value="Georgian">Georgian</option>
                                <option value="German">German</option>
                                <option value="Greek">Greek</option>
                                <option value="Gujarati">Gujarati</option>
                                <option value="Hebrew">Hebrew</option>
                                <option value="Hindi">Hindi</option>
                                <option value="Hungarian">Hungarian</option>
                                <option value="Icelandic">Icelandic</option>
                                <option value="Indonesian">Indonesian</option>
                                <option value="Irish">Irish</option>
                                <option value="Italian">Italian</option>
                                <option value="Japanese">Japanese</option>
                                <option value="Javanese">Javanese</option>
                                <option value="Korean">Korean</option>
                                <option value="Latin">Latin</option>
                                <option value="Latvian">Latvian</option>
                                <option value="Lithuanian">Lithuanian</option>
                                <option value="Macedonian">Macedonian</option>
                                <option value="Malay">Malay</option>
                                <option value="Malayalam">Malayalam</option>
                                <option value="Maltese">Maltese</option>
                                <option value="Maori">Maori</option>
                                <option value="Marathi">Marathi</option>
                                <option value="Mongolian">Mongolian</option>
                                <option value="Nepali">Nepali</option>
                                <option value="Norwegian">Norwegian</option>
                                <option value="Persian">Persian</option>
                                <option value="Polish">Polish</option>
                                <option value="Portuguese">Portuguese</option>
                                <option value="Punjabi">Punjabi</option>
                                <option value="Quechua">Quechua</option>
                                <option value="Romanian">Romanian</option>
                                <option value="Russian">Russian</option>
                                <option value="Samoan">Samoan</option>
                                <option value="Serbian">Serbian</option>
                                <option value="Slovak">Slovak</option>
                                <option value="Slovenian">Slovenian</option>
                                <option value="Spanish">Spanish</option>
                                <option value="Swahili">Swahili</option>
                                <option value="Swedish ">Swedish </option>
                                <option value="Tamil">Tamil</option>
                                <option value="Tatar">Tatar</option>
                                <option value="Telugu">Telugu</option>
                                <option value="Thai">Thai</option>
                                <option value="Tibetan">Tibetan</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Turkish">Turkish</option>
                                <option value="Ukrainian">Ukrainian</option>
                                <option value="Urdu">Urdu</option>
                                <option value="Uzbek">Uzbek</option>
                                <option value="Vietnamese">Vietnamese</option>
                                <option value="Welsh">Welsh</option>
                                <option value="Xhosa">Xhosa</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center ">
                        <div class="col-md-4">Email ID<span class="color-red float-right">*</span>
                        </div>
                        <div class="col-md-8"><input type="email" class="form-control" id="emailadd" name="emailadd"
                                aria-describedby="emailHelp" required="">
                        </div>
                    </div>
                    <div class="row align-items-center ">
                        <div class="col-md-4">Skype ID<span class="color-red float-right">*</span>
                        </div>
                        <div class="col-md-8"><input type="text" id="skypeid" name="skypeid" class="form-control"
                                required="">
                        </div>
                    </div>

                </div>
                <div class="invoice-box">
                    <div class="comp-title">Skills and Expetise</div>
                    <div class="row ">
                        <div class="col-md-4">Education Qualifications<span class="color-red float-right">*</span>
                        </div>
                        <div class="col-md-8"><textarea class="form-control" id="eduqualifation" rows="3"
                                name="eduqualifation" required></textarea>
                        </div>
                    </div>
                    <div class="row align-items-center ">
                        <div class="col-md-4">Any Certifications</div>
                        <div class="col-md-8"><input type="text" id="certification" name="certification"
                                class="form-control">
                        </div>
                    </div>
                    <div class="row align-items-center ">
                        <div class="col-md-4">Years of Editing Experience<span class="color-red float-right">*</span>
                        </div>
                        <div class="col-md-8 row">
                            <select class="form-control form-inline col" id="yearsexp" name="yearsexp" required>
                                <option value="">Years</option>
                                <?php
    for ($i=1; $i<=50; $i++)
    {
        ?>
                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                <?php
    }
?>
                            </select>
                            <select class="form-control form-inline col" id="monthsexp" name="monthsexp" required>
                                <option value="">Months</option>
                                <?php
    for ($i=0; $i<=11; $i++)
    {
        ?>
                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                <?php
    }
?>
                            </select>

                        </div>
                    </div>
                    <div class="row align-items-center ">
                        <div class="col-md-4">Mention your Subject Expertise <span
                                class="color-red float-right">*</span></div>
                        <div class="col-md-8">
                            <select class="form-control" id="subjectareas" name="subjectareas" required="">
                                <option value="">Subject Area Expertise</option>
                                <option value="Medical / Clinical Science ">Medical / Clinical Science</option>
                                <option value="Life Science">Life Science</option>
                                <option value="Physical Science">Physical Science</option>
                                <option value="The Arts &amp; Social Science">The Arts &amp; Social Science</option>
                                <option value="Economic and Business">Economic and Business</option>
                            </select>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-4">Mention any membership with any professional bodies</div>
                        <div class="col-md-8"><textarea class="form-control" id="membershiptxtbox" rows="3"
                                name="membershiptxtbox"></textarea>
                        </div>
                    </div>
                </div>

                <div class="invoice-box">
                    <div class="comp-title">Other Details</div>
                    <div class="row align-items-center ">
                        <div class="col-md-4">Full time or Part time membership<span
                                class="color-red float-right">*</span></div>
                        <div class="col-md-8">
                            <select class="form-control" id="membershiptype" name="membershiptype" required="">
                                <option value="">Select</option>
                                <option value="Full time">Full time</option>
                                <option value="Part time">Part time</option>
                            </select>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-4">How did you hear about us?<span class="color-red float-right">*</span>
                        </div>
                        <div class="col-md-8"><textarea class="form-control" id="hearabtus" rows="3" name="hearabtus"
                                required></textarea>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-4">Want to tell more about your self?<span
                                class="color-red float-right">*</span></div>
                        <div class="col-md-8"><textarea class="form-control" id="tellmore" rows="3" name="tellmore"
                                required></textarea>
                        </div>
                    </div>
                </div>

                <div class="invoice-box">
                    <div class="comp-title">Upload A Resume</div>
                    <div class="row align-items-center ">
                        <div class="col-md-4"><span class="color-red float-right">*</span>Please upload your
                            CV<br>(English Version / word, Excel, or PDF) </div>
                        <div class="col-md-8">
                            <div class="custom-file">
                                <input type="file" name="fileUpload[]" id="file" class="custom-file-input form-control"
                                    data-multiple-caption="{count} files selected" required>
                                <label class="custom-file-label" for="customFile">No file Chosen</label>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center ">
                        <div class="col-md-4">Prove you are not a robot <span class="color-red float-right">*</span>
                        </div>
                        <div class="col-md-8">What is <?php echo $math; ?> = <input name="answer" type="text"
                                class="form-control d-inlineblock" id="answer" required />
                        </div>
                    </div>
                </div>
                <div class="text-center ">
                    <button class="btn btn-primary" type="submit" value="Submit">Submit</button>
                </div>


            </form>
        </div>
    </div>



    <?php include ("includes/footer.php"); ?>
    <script>
    /* show file value after file select */
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = document.getElementById("file").files[0].name;
        var nextSibling = e.target.nextElementSibling
        nextSibling.innerText = fileName
    })
    </script>
    <script>
    var x = <?php echo $mathans; ?> ;
    $("form").submit(function() {
        var y = document.getElementById("answer").value;
        if (x == y) {
            return true;
        } else {
            alert('Wrong captcha');
            document.getElementById("answer").focus();
            return false;
        }
    });
    </script>

</body>

</html>