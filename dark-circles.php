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

        img.wp-smiley,
        img.emoji {
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

        .appointment {
            padding-top: 40px !important;
            padding-bottom: 50px !important;
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
        <img loading="lazy"
            src="https://www.olivaclinic.com/wp-content/banner/service/desktop/pigmentation-treatment.jpg?var=1"
            alt="Dark Circles" width="100%" height="200">
    </div>
    <section class="col-xs-12 col-sm-12 col-md-12">
        <div class="inner-page-content">
            <div class="col-md-12 col-sm-12 col-xs-12 blog-pages">
                <div class="container">
                    <div class="breadcrumb">
                        <ul style="display:flex;font-size:12px;    padding-top: 11px;">
                            <li><i class="fa fa-home"></i> <a href="index.php" title="Home"><span>Home&nbsp;&nbsp;
                                    </span></a>
                            </li> /
                            <li> <span title="Laser Hair Removal">&nbsp;&nbsp; Dark Circles</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="template_concern_page">
                <section class="col-xs-12 col-sm-12 col-md-12 about-allergies">
                    <div class="container">
                        <pre style="display:none;">24759<br>page-template/template_concern_page.php<br>
                            /<br>26896<br>page-template/template_concern_page.php</pre>
                        <h1 class="med_bottompadder40">Dark Circles : Common Causes And Treatments</h1>
                        <div class="nav-folderized">
                            <div class="table-of-contents  ftr__list checknav">
                                <h4>Table of contents</h4>
                                <ul>
                                    <li></li>
                                    <li><a href="#intro">Intro</a></li>
                                    <li><a href="#causes">Causes</a></li>
                                    <li><a href="#diagnosis">Diagnosis</a></li>
                                    <li><a href="#risks">Risks</a></li>
                                    <li><a href="#prevention">Prevention</a></li>
                                    <li><a href="#treatment">Treatment</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="table-of-contents mobile-view">
                            <button class="collapsed" data-toggle="collapse" data-target="#contents">Table of
                                contents</button>
                            <div id="contents" class="collapse">
                                <ul>
                                    <li><a href="#intro">Intro</a></li>
                                    <li><a href="#causes">Causes</a></li>
                                    <li><a href="#diagnosis">Diagnosis</a></li>
                                    <li><a href="#risks">Risks</a></li>
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
                            <ul>
                                <li>According to a study published in the NCBI, dark circles affect women more than
                                    men. Dark circles are prominent in 47.50% of individuals between the ages of 16-25.
                                </li>
                                <li>One of the most common causes of dark circles is genetics.</li>
                                <li>Untreated dark circles can be permanent.</li>
                                <li>A thorough medical diagnosis followed by therapy can treat dark circles.</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="intro" class="intro">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">What Are Dark Circles?</h2>
                            <p>Dark circles refer to the <a href="#">darkening or
                                    discolouration of the skin</a> under or around the eyes. The affected skin appears
                                to look blue, black, or dark brown. This appearance of pigmented skin is also known as
                                Periorbital Hyperpigmentation (POH), Periorbital Melanosis, Infraorbital Darkening,
                                Infraorbital Discoloration or Periorbital dark circles.</p>
                            <p><iframe title="How To Get Rid Of Dark Circles | Under Eye Dark Circles" width="640"
                                    height="360" class="iframevideo"
                                    src="https://www.youtube.com/embed/ogzc8Rn_gDY?feature=oembed" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen=""></iframe></p>
                        </div>
                    </div>
                </section>
                <section id="causes" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">What Are The Causes? </h2>
                            <p>Dark circles are the result of a combination of factors, broadly divided into two groups.
                                The common ones are:</p>
                            <ul>
                                <li><strong>Internal or Endogenous Factors</strong>
                                    <ul>
                                        <li><strong>Heredity (or Constitutional POH): </strong>Genes determine the
                                            amount of melanin produced and its distribution across the body which
                                            directly influences hyper-pigmentation around the eyes.</li>
                                        <li><strong>Nutritional deficiency: </strong>Iron and Vitamin-K deficiencies can
                                            cause discolouration under the eyes.</li>
                                        <li><strong>Peri-Orbital Edema: </strong>This is when fluid accumulates under
                                            the eye, making it look “puffy”. Allergies, salt and water retention, high
                                            blood pressure, medical disorders (e.g. liver, thyroid, kidney) and sinus
                                            infections are some of the reasons for Peri-Orbital Edema or puffiness,
                                            resulting in post-inflammatory hyperpigmentation.</li>
                                        <li><strong>Prominent vasculature: </strong>Due to the reduced thickness of the
                                            overlying skin, the underlying vasculature becomes more prominent,
                                            particularly around veins making the area around the eyes appear darker.
                                        </li>
                                        <li><strong>Ageing: </strong>As we age, collagen in our skin begins to degrade
                                            and hyperpigmentation, sagging skin, fine lines, and wrinkles begin to
                                            appear. The skin under the eyes becomes thin, and the blood vessels become
                                            more prominent, making the area under the eye appear darker.</li>
                                        <li><strong>Tear trough depression: </strong>It is an age-related change which
                                            occurs due to the loss of fat content, the thinning of overlying skin, and
                                            the descent of the cheek area which results in a hollowing effect under the
                                            eye which casts shadows giving the appearance of dark circles.</li>
                                        <li><strong>Acanthosis Nigricans: </strong>This is a condition where the
                                            thickening of the skin gives a velvet-pigmented appearance around the eyes.
                                            It is related to an insulin hormone imbalance and other metabolic disorders.
                                        </li>
                                        <li><strong>Other causes: </strong>This includes post-inflammatory
                                            hyperpigmentation, dermal melanocytosis, and pigmentary demarcation lines.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <hr>
                            <p><strong>Informative Resources:</strong></p>
                            <ol>
                                <li><a href="#">Premature Aging Skin – Meaning,
                                        Causes And Treatments</a></li>
                                <li><a href="#">How To
                                        Get Rid Of Fine Lines On Face And Under The Eyes?</a></li>
                            </ol>
                            <hr>
                            <ul>
                                <li><strong>External or Exogenous Factors</strong>
                                    <ul>
                                        <li><strong>Fatigue and stress: </strong>A poor sleep cycle, environmental, and
                                            psychological stress can strain the muscles around the eyes, often causing
                                            POH. Dark circles under the eyes are not necessarily a sign of tiredness,
                                            but the two do appear correlated.</li>
                                        <li><strong>Sunlight: </strong>When the skin comes into contact with sunlight,
                                            it leads to an increase in the production of melanin, leading to POH.</li>
                                        <li><strong>Medication: </strong>Hormonal medication and ocular hypotensive
                                            eyedrops (like the type used to treat glaucoma) can cause dark circles to
                                            form.</li>
                                        <li><strong>Alcohol/Smoking: </strong>Excessive smoking and alcohol consumption
                                            can aggravate periorbital hyperpigmentation. Smoking, specifically, can
                                            affect the microcirculation of the skin and can cause dark circles.</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="diagnosis" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">How Is POH Diagnosed? </h2>
                            <p>Diagnosis for POH takes a multi-causal approach. A detailed medical and hereditary
                                history along with lifestyle, dietary habits, and environmental stressors, are all taken
                                into consideration and is followed by a thorough cutaneous examination. Only then is the
                                diagnosis established and treatment prescribed.</p>
                        </div>
                    </div>
                </section>
                <section id="risks" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Who Is At Risk?</h2>
                            <p>According to a study published in the Indian Journal of Dermatology, the “…commonest form
                                of POH was constitutional (51.50%) followed by post inflammatory (22.50%). Faulty habits
                                were observed viz. lack of adequate sleep (40%), frequent cosmetic use (36.50%),
                                frequent eye rubbing (32.50%), and lack of correction for errors of refraction like
                                myopia in 12% patients. The strong association of POH with stress (71%), atopic (33%)
                                and family history (63%) was noted.”</p>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </section>
                <section id="prevention" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">How Do I Prevent Dark Circles From Appearing Under Eyes?</h2>
                            <ul>
                                <li>Adequate sleep rests the facial muscles, which helps rejuvenate the whole body. The
                                    sleep cycle helps the body repair itself during the sleep cycle.</li>
                            </ul>
                            <ul>
                                <li>Drinking adequate amount of water keeps the skin hydrated. It is a natural
                                    moisturizer and cleanser through perspiration.</li>
                            </ul>
                            <ul>
                                <li>Diet plays a significant role in maintaining healthy skin and hair. It is advisable
                                    to avoid or limit processed food products.</li>
                            </ul>
                            <ul>
                                <li>The regular use of sunscreen and moisturizer protects the skin around the eyes.</li>
                                <li>Avoid rubbing your eyes frequently.</li>
                            </ul>
                            <p><strong>Are home remedies helpful?</strong></p>
                            <p>There is no dearth of information about home remedies to cure dark circles. These
                                remedies have no conclusive scientific evidence towards their efficiency in treating
                                skin concerns. It is recommended to refrain from practising home remedies as the
                                reactions to various ingredients may be unpredictable and could aggravate the situation.
                            </p>
                            <hr>
                            <p><strong>Informative Resource</strong></p>
                            <ul>
                                <li><a href="#">How
                                        To Get Rid Of Black Spots On Legs?</a></li>
                            </ul>
                            <hr>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </section>
                <section id="treatment" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Treatment Options</h2>
                            <ul>
                                <li>Topical medication containing retinoids and skin lightening agents like kojic acid,
                                    vitamin C, etc.</li>
                                <li>Dark circle peels</li>
                                <li>Brightening peels</li>
                                <li>Q-switched YAG lasers for deep pigmentation</li>
                                <li>Microneedling Radiofrequency for fine lines under the eye<br>
                                    <iframe
                                        title="Micro-needling Radiofrequency (RF) Treatment Result, Before &amp; After  💰 Up to 50% Off"
                                        width="640" height="360" class="iframevideo"
                                        src="https://www.youtube.com/embed/kG07d1Qoubs?feature=oembed" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen=""></iframe></li>
                                <li>Botox for fine lines on the outer corners of the eye</li>
                                <li><a href="#">Fillers</a>
                                    for tear troughs</li>
                            </ul>
                            <p>🔗 – <strong><a href="#">Oliva’s
                                        Anti-Aging Treatments</a></strong></p>
                            <p>Multiple factors cause dark circles. A thorough medical treatment plan, along with
                                lifestyle changes, should be implemented. It is always advisable to seek and pursue
                                treatments prescribed by a certified dermatologist.</p>
                            <hr>
                            <p><em>Delivering World-class dermatology solutions is our mission! Redefining the quality
                                    of care is a passion!</em></p>
                            <p><strong>How to get started?&nbsp;</strong><strong><img class="emoji" role="img"
                                        draggable="false" src="https://s.w.org/images/core/emoji/13.0.0/svg/1f517.svg"
                                        alt="🔗"><a href="make-an-appointment.php">Book
                                        Appointment</a>&nbsp;or&nbsp;<img class="emoji" role="img" draggable="false"
                                        src="https://s.w.org/images/core/emoji/13.0.0/svg/1f4de.svg" alt="📞"><a
                                        href="tel:1800-103-3893">1800-103-3893</a>&nbsp;to enjoy the best
                                    results!</strong></p>
                            <hr>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </section>
            </div>

        </div>

    </section>

    <?php include("include/book_call.php");?>
    <?php include("include/subscribe.php");?>

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