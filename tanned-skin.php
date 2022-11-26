<?php include('include/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Gobest Skin &amp; Hair Clinic – Advanced Skin/Hair Treatments In Pune</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        @media only screen and (max-width: 991px) {
            .table-of-contents.mobile-view button {
                background: transparent;
                border: none;
                font-size: 19px;
                color: #00b5bd;
                border-bottom: 1px solid #d7e8e0;
                width: 100%;
                text-align: left;
                position: relative;
            }
            .breadcrumb{
margin-top:33%  !important;
margin-left: 0 !important;
        }

            .table-of-contents.mobile-view button.collapsed:before {
                content: "+" !important;
                font-size: 24px;
            }

            .table-of-contents.mobile-view button:before {
                content: "-";
                margin-right: 10px;
                font-size: 24px;
            }

            .table-of-contents.mobile-view #contents ul {
                padding: 10px 20px 0;
            }

            .page-template-template_concern_page section ul {
                margin-left: 20px;
            }

            .table-of-contents.mobile-view #contents ul li {
                padding: 10px 0;
                margin: 0;
                border-bottom: 1px solid #e5e5ea;
                border-right: none;
                font-size: 14px;
                color: #1dadba;
                display: block;
            }

            .page-template-template_concern_page section .table-of-contents ul li {
                padding: 0 22px !important;
            }

            .table-of-contents.mobile-view {
                display: block;
                margin: 8px 0;
            }

            .collapse.in {
                display: block;
            }

            .table-of-contents.mobile-view #contents ul li a {
                font-size: 17px;
            }

            .about-allergies ul li {
                display: block !important;
            }
        }

        @media only screen and (max-width: 991px) {
            .template_concern_page .med_bottompadder40 {
                padding-bottom: 20px;
                line-height: 34px;
            }
        }


        section {
            margin-bottom: -25px;
            padding-top:0 !important;
        }
        .breadcrumb{
margin-top:10%;
margin-left:7%
        }
        .intro{
            padding-top:30px !important;
        }

        .inner-page-content {
            width: 100%;
            float: left;
            padding-top: 0px;
            padding-bottom: 35px;
        }

        .types h2 {
            padding-top: 1px;
        }

        .causes h2 {
            padding-top: 1px;
        }

        .about-allergies h1 {
            font-size: 36px;
        }

        .about-allergies h1 {
            color: #111;
            text-align: left;
            font-size: 30px;
            line-height: 52px;
            margin: 0 0 20px;
            font-weight: 700;
            padding-top: 40px;
        }

        .page-template-template_concern_page section ul {
            margin: 0;
            padding: 0;
            margin-left: 20px;
        }

        .about-allergies ul {
            list-style: none;
        }

        .page-template-template_concern_page section .table-of-contents ul li {
            padding: 0 22px !important;
        }

        .about-allergies ul li:first-child {
            display: none;
        }

        .page-template-template_concern_page section li {
            font-size: 18px;
            line-height: 24px;
            color: #000;
        }

        .page-template-template_concern_page section li {
            margin-bottom: 12px;
            list-style-position: outside;
        }

        .about-allergies ul li {
            display: inline;
            padding: 0 22px;
            border-right: 1px solid #bcbfc5;
        }

        .about-allergies ul li a {
            font-size: 22px;
            text-align: center;
            display: inline-block;
        }

        .template_concern_page a {
            border-bottom: 1px dashed #00b6bd;
        }

        a {
            color: #00b6be;
            text-decoration: none;
        }

        .table-of-contents.mobile-view {
            display: none;
        }

        .page-template-template_concern_page section {
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .highlights {
            padding: 20px 0;
        }

        .highlights-main {
            background-color: #d9ebed;
            position: relative;
            width: 100%;
            float: left;
        }

        .highlights h2 {
            background-color: #00b5bd;
            color: #fff !important;
            text-align: center;
            line-height: 40px;
            padding: 0 20px;
            position: absolute;
            left: 25px;
            top: -10px;
            font-size: 22px;
            text-transform: uppercase;
        }

        .row {
            margin-right: -15px;
            margin-left: -15px;
        }

        .container,
        .container-new {
            width: 90%;
            float: none;
        }

        .page-template-template_concern_page h2 {
            color: #000;
        }

        .page-template-template_concern_page p {
            font-size: 18px;
            line-height: 24px;
            margin: 0 0 12px;
            color: #000;
        }

        .page-template-template_concern_page section ul li {
            padding-left: 5px;
        }

        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        .highli {
            padding-top: 50px;
            padding-bottom: 40px;
        }
    </style>

</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="align-items-center d-none d-md-flex">
                <i class="bi bi-clock"></i> Monday - Saturday, 8AM to 10PM
            </div>
            <div class="d-flex align-items-center">
                <i class="bi bi-phone"></i> Call us now +1 5589 55488 55
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
   <?php include("include/header.php");?>
    <!-- End Header -->


    <section>
            <div class="inner-page-content">
            <div class="breadcrumb">
                                    <ul style="display:flex;font-size:10px;    padding-top: 11px;">
                                        <li><i class="fa fa-home"></i> <a href="index.php"
                                                title="Home"><span>Home&nbsp;&nbsp; </span></a>
                                        </li> /
                                        <li> <span title="Laser Hair Removal">&nbsp;&nbsp; Laser
                                                Hair
                                                Removal</span></li>
                                    </ul>
                                </div>
                <div class="template_concern_page">
                    <section class="about-allergies col-xs-12 col-sm-12 col-md-12">
                        <div class="container">

                            <h1 class="med_bottompadder40">Tanned Skin: Causes, Prevention And Treatment</h1>
                            <div class="nav-folderized">
                                <div class="table-of-contents  ftr__list checknav">
                                    <h4>Table Of contents</h4>
                                    <ul>
                                        <li></li>
                                        <li><a href="#intro">Intro</a></li>
                                        <li><a href="#causes">Causes</a></li>
                                        <li><a href="#types">Types</a></li>
                                        <li><a href="#diagnosis">Diagnosis</a></li>
                                        <li><a href="#prevention">Prevention</a></li>
                                        <li><a href="#treatment">Treatment</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="table-of-contents mobile-view " > -->
                            <!-- <button class="collapsed" data-toggle="collapse" data-target="#contents">Table of
                                    contents</button> -->
                            <!-- <div id="contents" class="collapse ftr__list checknav">
                                
                                    <ul>
                                        <li><a href="#intro">Intro</a></li>
                                        <li><a href="#causes">Causes</a></li>
                                        <li><a href="#types">Types</a></li>
                                        <li><a href="#diagnosis">Diagnosis</a></li>
                                        <li><a href="#prevention">Prevention</a></li>
                                        <li><a href="#treatment">Treatment</a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </section>
                    <section class="col-xs-12 col-sm-12 col-md-12 highlights">
                        <div class="container">
                            <div class="highlights-main">
                                <h2>Highlights</h2>
                                <ul class="highli">
                                    <li>Skin tanning is a natural process where the skin darkens in colour because of
                                        the exposure to ultraviolet light.</li>
                                    <li>Due to the resulting increase in melanin production, oxidation of melanin or
                                        rise in the number of melanocytes, the complexion may continue to darken.</li>
                                    <li>Suntanned skin is most prominent on the forehead, temples, and outer aspects
                                        of the arms.</li>
                                    <li> Sunscreen is the best defence against the harmful ultraviolet rays of the sun.
                                    </li>
                                    <li>Any individual is prone to skin tanning, but factors such as ethnicity, age,
                                        outdoor activity, the pattern of clothing and skin type determine the extent of
                                        it.</li>
                                    <li>Anyone under the age of 5 and over 50 years can develop skin tanning due to UV
                                        ray exposure.</li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section id="intro" class="col-xs-12 col-sm-12 col-md-12 intro">
                        <div class="container">
                            <div class="row">
                                <h2 class="med_bottompadder40">What Is Tanned Skin?</h2>
                                <p>Tanned skin is skin that has darkened due to excess sun exposure, especially UV rays.
                                    It is a result of an increase in the melanin content of the skin, which is the
                                    body’s natural protective measure triggered to minimise additional skin damage.
                                    Eumelanin is the specific type of melanin that tans the skin with a brown colour.
                                </p>
                                <p>Tanning is mostly visible on uncovered parts of the body such as the face, arms,
                                    hands, legs, feet, back and neck.</p>
                            </div>
                        </div>
                    </section>
                    <section id="causes" class="col-xs-12 col-sm-12 col-md-12 causes">
                        <div class="container">
                            <div class="row">
                                <h2 class="med_bottompadder40">Causes Of Tanned Skin</h2>
                                <p><strong>The leading causes of skin tanning are:</strong></p>
                                <ul>
                                    <li><strong>UV-A Exposure:</strong> UV-A rays are dangerous because they are capable
                                        of penetrating the deeper skin layers, causing cellular damage.</li>
                                    <li style="list-style-type: none;">
                                        <ol>
                                            <li>UV-A exposure occurs all year round, as it can pass through the ozone
                                                layer in the atmosphere.</li>
                                            <li>The increase in the production of the melanin pigment released from the
                                                melanocytes into keratinocytes is responsible for the browned, darkened
                                                colour of the skin.</li>
                                            <li>UV-A rays break down the natural collagen reserve in the skin, which
                                                results in premature ageing.</li>
                                            <li>Chronic exposure to UV-A rays also results in DNA damage, which is a
                                                leading cause of skin cancer.</li>
                                        </ol>
                                    </li>
                                </ul>
                                <ul>
                                    <li><strong>UV-B Exposure</strong>: UV-B light is harmful because it can burn the
                                        upper skin layers.
                                        <ol>
                                            <li>UV-B exposure surges during the summer and decreases during winter
                                                months.</li>
                                            <li>The Earth’s ozone layer can block a majority of UV-B rays. However,
                                                5-10% of UV-B rays can penetrate.</li>
                                            <li>Exposure to UV-B rays prompts the DNA damage that induces an increase in
                                                melanin production.</li>
                                            <li>Overexposure to UV-B rays is likely to cause sunburns, moles, skin
                                                ageing, skin tanning and some types of skin cancer.</li>
                                            <li>UV-B rays are also responsible for the production of Vitamin D in the
                                                skin.</li>
                                        </ol>
                                    </li>
                                    <li><strong>Artificial Tanning Equipment: </strong>Use of tanning lamps can also
                                        result in pigmented skin.</li>
                                </ul>
                                <hr>
                                <p><strong>Informative Resources:</strong></p>
                                <ul>
                                    <li><a
                                            href="https://www.olivaclinic.com/blog/sun-tan-removal-treatment-tips-skin-face/">How
                                            To Remove Sun Tan From Face?</a></li>
                                    <li><a href="https://www.olivaclinic.com/blog/how-to-become-fair/">Myths And Facts
                                            About Skin Fairness</a></li>
                                </ul>
                                <hr>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </section>
                    <section id="types" class="col-xs-12 col-sm-12 col-md-12 types ">
                        <div class="container">
                            <div class="row">
                                <h2 class="med_bottompadder40">Types &amp; Classification:</h2>
                                <p>Accurate classification of your skin type can provide an estimate of the extent of
                                    tanning that your skin may experience.</p>
                                <ul>
                                    <li>If you have Skin Type I, you have pale white skin that may never tan.</li>
                                    <li>If you have Skin Type II, you have a white to light beige complexion that may
                                        tan minimally.</li>
                                    <li>If you have Skin Type III, you have a beige skin tone that may gradually tan to
                                        a light-brown colour.</li>
                                    <li>If you have Skin Type IV, you have light brown skin, which may tan to a dark
                                        brown colour.</li>
                                    <li>If you have Skin Type V, you have a moderately brown complexion, which may tan
                                        to a more profuse brown colour.</li>
                                    <li>If you have Skin Type VI, you have a dark brown or black complexion that may tan
                                        generously.</li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section id="diagnosis" class="col-xs-12 col-sm-12 col-md-12 diagnosis">
                        <div class="container">
                            <div class="row">
                                <h2 class="med_bottompadder40">Diagnosis:</h2>
                                <p>A dermatologist can assess and diagnose the severity of skin tan. During the
                                    consultation, you may have to undergo a physical examination as your doctor will try
                                    to understand the cause and extent of the tanning.</p>
                                <p><strong>Are You at Risk?</strong></p>
                                <p>Everyone can get skin tan. However, individuals who are most at risk include:</p>
                                <ul>
                                    <li>Children below the age of 5 years and mature adults over 50 years have a reduced
                                        thickness of skin that is usually more sensitive to harmful ultraviolet
                                        radiation.</li>
                                </ul>
                                <p>Individuals with immune deficiencies and chronic conditions are more vulnerable to
                                    the side effects of UV exposure.</p>
                            </div>
                        </div>
                    </section>
                    <section id="prevention" class="col-xs-12 col-sm-12 col-md-12 prevention">
                        <div class="container">
                            <div class="row">
                                <h2 class="med_bottompadder40">Prevention and Management:</h2>
                                <p>Dermatologists recommend the following tips to prevent skin tanning:</p>
                                <ul>
                                    <li>Use a sunscreen which is labelled to protect against UV-A and UV-B rays
                                        throughout the year. The SPF factor in the sunscreen lotion should be a minimum
                                        of 30 for most skin types. Some individuals may need SPF 50 depending on their
                                        skin type. A dermatologist-prescribed sunscreen is ideal for use.</li>
                                    <li>Avoid sun exposure, when the sunrays are harshest, especially between 10 am and
                                        4 pm.</li>
                                    <li>Cover your head with a hat or a scarf and wear sunglasses to protect your eyes.
                                    </li>
                                    <li>Wear protective clothing. Dark, tightly woven or knitted fabric clothing is
                                        better to prevent skin damage due to sun exposure.</li>
                                </ul>
                                <p><strong>Self-care:</strong></p>
                                <p>Several home remedies are available to treat tanned skin. Though they are popular
                                    recourses, one does best to avoid them as far as possible. While they may offer
                                    temporary relief, it is advisable to seek medical assistance before advancing with
                                    self-care measures.</p>
                            </div>
                        </div>
                    </section>
                    <section id="treatment" class="col-xs-12 col-sm-12 col-md-12 treatment">
                        <div class="container">
                            <div class="row">
                                <h2 class="med_bottompadder40">Treatment Options </h2>
                                <p>If you are hoping to treat suntanned skin effectively, then look no further than
                                    Oliva Skin &amp; Hair Clinic. Types of anti-tan treatments available here include:
                                </p>
                                <ul>
                                    <li class="chemicalpeels">Chemical Peels<br>
                                        <iframe
                                            title="Chemical Peel Treatment - Result, Benefit, Procedure, Before &amp; After 💰 Up to 50% Off"
                                            width="640" height="360"
                                            src="https://www.youtube.com/embed/gBypU29ipnA?feature=oembed"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen=""></iframe></li>
                                    <li>Laser Toning Treatments<br>
                                        <iframe
                                            title="Laser Treatment To Remove Pigmentation, Dark Spots &amp; Uneven Skin Tone - Up To 50% Off"
                                            width="640" height="360"
                                            src="https://www.youtube.com/embed/2SO8eI1b7Xg?feature=oembed"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen=""></iframe></li>
                                    <li>Topical and Oral Medications</li>
                                </ul>
                                <p>The experienced and trained dermatologists at Oliva Clinic can chalk out a
                                    custom-designed treatment plan for you. They can also guide you on post-treatment
                                    care to ensure you get optimal results and long-lasting satisfaction. Reach out
                                    today.</p>
                                <p><strong>Prognosis:</strong></p>
                                <p>Your dermatologist will work with you every step of the way to improve your skin tone
                                    post tanning. Call to book an appointment with an experienced dermatologist at Oliva
                                    Hair &amp; Skin Clinic because protecting your skin is essential.</p>                               
                            </div>
                        </div>
                    </section>
                </div>

            </div>

    </section>

    <!--=======Footer=======-->
    <?php include("include/footer.php");?>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>