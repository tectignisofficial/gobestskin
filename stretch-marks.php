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

            .breadcrumb {
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
            padding-top: 0 !important;
        }

        .breadcrumb {
            margin-left: 7%
        }

        .intro {
            padding-top: 30px !important;
        }

        .inner-page-content {
            width: 100%;
            float: left;
            padding-top: 0px;
            padding-bottom: 35px;
            background: white;
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
            position: initial;
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

        img.wp-smiley, img.emoji {
    display: inline !important;
    border: none !important;
    box-shadow: none !important;
    height: 1em !important;
    width: 1em !important;
    margin: 0 0.07em !important;
    vertical-align: -0.1em !important;
    background: none !important;
    padding: 0 !important;
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
    <div class="med_tittle_section  banner-image" style="padding-top: 106px;">
        <img loading="lazy" src="https://www.olivaclinic.com/wp-content/uploads/2020/12/Stretch-Marks.jpg"
            alt="Stretch-Marks" width="100%" height="200" class="webpexpress-processed">
    </div>

    <div class="inner-page-content">
        <div class="col-md-12 col-sm-12 col-xs-12 blog-pages">
            <div class="container">
                <div class="breadcrumb">
                    <ul style="display:flex;font-size:12px;    padding-top: 11px;">
                        <li><i class="fa fa-home"></i> <a href="index.php" title="Home"><span>Home&nbsp;&nbsp;
                                </span></a>
                        </li> /
                        <li> <span title="Laser Hair Removal">&nbsp;&nbsp; Tanned Skin</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="template_concern_page">
            <section class="col-xs-12 col-sm-12 col-md-12 about-allergies">
                <div class="container">
                    <pre
                        style="display:none;">24416<br>page-template/template_concern_page.php<br><br>24880<br>page-template/template_concern_page.php</pre>
                    <h1 class="med_bottompadder40">Stretch Marks: Causes, Treatments And Management</h1>
                    <div class="nav-folderized">
                            <div class="table-of-contents  ftr__list checknav">
                                <h4>Table of contents</h4>
                                <ul>
                                    <li></li>
                                    <li><a href="#intro">Intro</a></li>
                                    <li><a href="#types">Types</a></li>
                                    <li><a href="#causes">Causes</a></li>
                                    <li><a href="#symptoms">Symptoms</a></li>
                                    <li><a href="#diagnosis">Diagnosis</a></li>
                                    <li><a href="#treatments">Treatments</a></li>
                                    <li><a href="#prevention">Prevention</a></li>
                                </ul>
                            </div>
                        </div>
                    <!-- <div class="table-of-contents mobile-view">
                        <div class="nav-folderized">
                            <div id="contents" class="table-of-contents  ftr__list checknav">
                                <ul>
                                    <li><a href="#intro">Intro</a></li>
                                    <li><a href="#types">Types</a></li>
                                    <li><a href="#causes">Causes</a></li>
                                    <li><a href="#symptoms">Symptoms</a></li>
                                    <li><a href="#diagnosis">Diagnosis</a></li>
                                    <li><a href="#treatments">Treatments</a></li>
                                    <li><a href="#prevention">Prevention</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </section>

            <section class="col-xs-12 col-sm-12 col-md-12 highlights">
                <div class="container">
                    <div class="highlights-main">
                        <h2>Highlights</h2>
                        <ul>
                            <li>● Stretch marks, or striae, are commonly seen in adolescents going through puberty,
                                pregnant women, and obese adults. </li>
                            <li>● Stretch marks appear due to the stretching of the skin and are form on the abdomen,
                                glutes and thighs.</li>
                            <li>● Stretch marks are usually harmless, but in exceptional cases, they may indicate an
                                underlying ailment.</li>
                            <li>● Older stretch marks are more difficult to lighten; therefore, we recommend treatment
                                at the earliest. Lasers and Microneedling Radio Frequency (MNRF) have proven to be
                                effective.</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section id="intro" class="col-xs-12 col-sm-12 col-md-12 intro">
                <div class="container">
                    <div class="row">
                        <h2 class="med_bottompadder40">What Are Stretch Marks? </h2>
                        <p>Stretch marks or striae, are white or pink coloured linear scars that develop on the skin
                            when it gets stretched beyond its normal elasticity, causing the supportive collagen and
                            elastin beneath to rupture. The consequent healing process results in the appearance of
                            stretch marks. Stretch marks commonly form on the shoulders, abdomen, calves, hips and
                            thighs. They might reduce gradually, but do not disappear completely.</p>
                    </div>
                </div>
            </section>
            <section id="types" class="col-xs-12 col-sm-12 col-md-12 ">
                <div class="container">
                    <div class="row">
                        <h2 class="med_bottompadder40">Types of Stretch Marks:</h2>
                        <p><strong>Based on their formation and appearance, there are two types of stretch
                                marks:</strong></p>
                        <ul>
                            <li><strong>Striae Rubrae:</strong>&nbsp;Striae Rubrae are stretch marks in their initial
                                stages of formation. They are faintly raised red, vein-like, and linear lesions. These
                                fade over several months, or even year, to whitish striae.</li>
                            <li><strong>Striae Albae</strong>: These are white, creased, depressed stretch marks that
                                are more or less permanent. Furthermore, based on their appearance, they are classified
                                as Stria Atrophicans, Striae Enigrae, Striae Caerulea, and Striae Gravidarum.</li>
                        </ul>
                        <p><strong>Other classifications when it comes to types of stretch marks:</strong></p>
                        <ul>
                            <li><strong>Striae Atrophicans:</strong> Stretch marks associated with thin skin are called
                                Striae Atrophicans. They can be seen in medical conditions like Cushing’s Syndrome or
                                during the extensive use of corticosteroids.</li>
                            <li><strong>Stria Nigra:</strong> Usually associated with darker skin types, these kinds of
                                stretch marks are dark grey or black.</li>
                            <li><strong>Striae Caerulea:</strong> These are dark blue-purplish stretch marks common with
                                darker complexions.</li>
                            <li><strong>Striae Gravidarum:</strong> Pregnancy-related stretch marks.</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="causes" class="col-xs-12 col-sm-12 col-md-12 ">
                <div class="container">
                    <div class="row">
                        <h2 class="med_bottompadder40">What Causes Stretch Marks On Body?</h2>
                        <p>Here are some common reasons for stretch marks on body:</p>
                        <ul>
                            <li><strong>Growth During puberty – </strong>About <strong>6%-86%</strong> of people are
                                likely to experience stretch marks during puberty.Adolescents notice light pink or light
                                to dark brown striae on their thighs, breasts and back due to growth spurts.</li>
                            <li><strong>Obesity – </strong>Approximately <strong>43%</strong> of people experience them
                                due to rapid weight gain.Weight gain stretches the skin, resulting in the rupture of
                                underlying dermal tissue, giving way to unsightly stretch marks.</li>
                            <li><strong>Pregnancy – </strong>Pregnancy is found to be the most common cause as nearly
                                <strong>43-88% </strong>pregnant women are found to have stretch marks.The weight gain
                                during pregnancy causes massive stretching and itchy stretch marks, majorly on the
                                abdomen. Research suggests that younger mothers are more susceptible to
                                pregnancy-related stretch marks than older mothers.</li>
                            <li><strong>Hormonal Variations –</strong> Increased cortisone production from the adrenal
                                glands promotes protein catabolism, which usually occurs with injuries, stress, or
                                underlying medical conditions. As a result, the elastin fibres are negatively impacted,
                                resulting in the formation of stretch marks.</li>
                            <li><strong>Genetic Propensity –</strong> Though not extensively explored, it is suspected
                                that genes might play a part in the expression of striae. Individuals with a family
                                history of body stretch marks are likely to manifest the same at some point in their
                                lives due to a decreased expression of collagen and fibronectin genes.</li>
                            <li><strong>Symptomatic of Underlying Diseases –</strong> Striae atrophicans (thinned skin)
                                occurs in people suffering from Cushing Syndrome and Marfan Syndrome.</li>
                            <li><strong>Weight Loss –</strong> Loosening of the distended skin due to major weight loss
                                may also result in the appearance of stretch marks.</li>
                            <li><strong>Chronic Steroid Use –</strong> The extensive and extended usage of
                                corticosteroids can cause the appearance of striae.</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="symptoms" class="col-xs-12 col-sm-12 col-md-12 ">
                <div class="container">
                    <div class="row">
                        <h2 class="med_bottompadder40">Signs and Symptoms:</h2>
                        <p>Stretch marks may appear as raised, reddish, brown or purplish-pink scars, with a tendency to
                            itch. Over time, they become narrower and appear as deeper, darker or sometimes
                            white-coloured lines sunken into the skin. It is relatively easier and more effective to
                            treat stretch marks in their nascent stages.</p>
                    </div>
                </div>
            </section>
            <section id="diagnosis" class="col-xs-12 col-sm-12 col-md-12 ">
                <div class="container">
                    <div class="row">
                        <h2 class="med_bottompadder40">Diagnosis:</h2>
                        <p>If your stretch marks are extensive and/or itch persistently; we recommend that you consult a
                            specialist. Depending on the severity, a professional dermatologist can decide the course of
                            action in your best interest.</p>
                    </div>
                </div>
            </section>
            <section id="treatments" class="col-xs-12 col-sm-12 col-md-12 ">
                <div class="container">
                    <div class="row">
                        <h2 class="med_bottompadder40">Treatment Options Available:</h2>
                        <p>Stretch marks can be challenging to treat and require specific procedures to minimize their
                            appearance. The following stretch marks treatment solutions are available:</p>
                        <ul>
                            <li><a
                                    href="#">Micro-needling
                                    Radio Frequency (MNRF)</a></li>
                            <li>Chemical Peels</li>
                            <li>Tretinoin Cream</li>
                        </ul>
                        <p>🔗 <a href="#">Gobest Skin & Hair’s Advanced
                                Stretch Mark Removal Treatment</a></p>
                        <p><strong>Stretch Mark Removal Procedure at Gobest Skin And Hair Clinic:</strong></p>
                        <p><iframe width="640" height="360" class="iframevideo"
                                src="https://www.youtube.com/embed/cuMC2hgJsGU?feature=oembed" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen=""></iframe></p>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </section>
            <section id="prevention" class="col-xs-12 col-sm-12 col-md-12 ">
                <div class="container">
                    <div class="row">
                        <h2 class="med_bottompadder40">How To Prevent Stretch Marks?</h2>
                        <p>There is no medical evidence supporting the effectiveness of topical preparations in
                            preventing the formation of stretch marks during pregnancy.</p>
                        <p><em>Disclaimer:</em> Pregnant women are strictly advised to check with their doctors before
                            using any such treatments for the safety of their baby.</p>
                        <p>Although stretch marks are difficult to remove altogether, advanced technology and expert
                            medical supervision can drastically minimize their appearance. It is recommended to seek
                            proper medical advice to treat stretch marks.</p>
                        <hr>
                        <p><em>Delivering World-class dermatology solutions is our mission! Redefining the quality of
                                care is a passion!</em></p>
                        <p><strong>How to get started?&nbsp;</strong><strong><img class="emoji" role="img"
                                    draggable="false" src="https://s.w.org/images/core/emoji/13.0.0/svg/1f517.svg"
                                    alt="🔗"><a href="make-an-appointment.php">Book
                                    Appointment</a>&nbsp;or&nbsp;<img class="emoji" role="img" draggable="false"
                                    src="https://s.w.org/images/core/emoji/13.0.0/svg/1f4de.svg" alt="📞"><a
                                    href="tel:1800-103-3893">1800-103-3893</a>&nbsp;to enjoy the best results!</strong>
                        </p>
                        <hr>
                    </div>
                </div>
            </section>
        </div>

    </div>


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