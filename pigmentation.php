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
            src="https://www.olivaclinic.com/wp-content/banner/service/desktop/skin-lightening.jpg?var=1"
            alt="Skin Lightening Treatment" width="100%" height="200">
    </div>
    <section class="col-xs-12 col-sm-12 col-md-12">
        <div class="inner-page-content">
            <div class="col-md-12 col-sm-12 col-xs-12 blog-pages">
                <div class="container">
                    <div class="breadcrumb">
                        <ul style="display:flex;font-size:12px;    padding-top: 11px;padding-left:0">
                            <li><i class="fa fa-home"></i> <a href="index.php" title="Home"><span>Home&nbsp;&nbsp;
                                    </span></a>
                            </li> /
                            <li> <span title="Laser Hair Removal">&nbsp;&nbsp; Skin Pigmentation</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="template_concern_page">
                <section class="col-xs-12 col-sm-12 col-md-12 about-allergies">
                    <div class="container">
                        <pre
                            style="display:none;">24449<br>page-template/template_concern_page.php<br><br>35959<br>page-template/template_cities_area_clinic.php</pre>
                        <h1 class="med_bottompadder40">Skin Pigmentation : Causes, Symptoms And Solutions</h1>
                        <div class="nav-folderized">
                            <div class="table-of-contents  ftr__list checknav">
                                <h4>Table of contents</h4>
                                <ul>
                                    <li></li>
                                    <li><a href="#intro">Intro</a></li>
                                    <li><a href="#causes">Causes</a></li>
                                    <li><a href="#symptoms">Symptoms</a></li>
                                    <li><a href="#diagnosis">Diagnosis</a></li>
                                    <li><a href="#risk_factors">Risk Factors</a></li>
                                    <li><a href="#prevention">Prevention</a></li>
                                    <li><a href="#treatments">Treatments</a></li>
                                    <li><a href="#prognosis">Prognosis</a></li>
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
                                    <li><a href="#symptoms">Symptoms</a></li>
                                    <li><a href="#diagnosis">Diagnosis</a></li>
                                    <li><a href="#risk_factors">Risk Factors</a></li>
                                    <li><a href="#prevention">Prevention</a></li>
                                    <li><a href="#treatments">Treatments</a></li>
                                    <li><a href="#prognosis">Prognosis</a></li>
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
                                <li>Skin pigmentation can be observed as the general darkening of skin or having dark
                                    patches on the face and body.</li>
                                <li>It is caused by both internal (genetic) and external factors. It is noted more
                                    commonly in women but is also seen in men.</li>
                                <li>Pigmentary concerns affect skin of all colour. As sun exposure is a major cause of
                                    pigmentation, this skin condition is common among Asian people or those living
                                    around equatorial regions.</li>
                                <li>It is more prominent among middle-aged people as some types of pigmentation are
                                    accelerated with aging.</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="intro" class="intro">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">What is Pigmentation?</h2>
                            <p>The normal colouring of the skin, hair, mucous membranes, and the retina of the eye is
                                due to the deposition of the pigment, melanin, which is produced by specialized cells
                                called melanocytes. Whenever there is an excess production of melanin
                                (hyperpigmentation), it causes dark spots, patches or the discolouration of the skin.
                                This eventually affects the colour of our skin leading to uneven skin tone.</p>
                            <p>Hyperpigmentation usually affects patches of the skin making our skin appear darker than
                                usual in some areas. They may vary in size or appear anywhere on the body. Therefore, a
                                dermatologist will be the right person to determine the exact cause behind pigmentation.
                            </p>
                        </div>
                    </div>
                </section>
                <section id="causes" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">What Causes Skin Pigmentation?</h2>
                            <p>Increased production of melanin due to certain internal or external factors can lead to
                                the disorders of skin pigmentation.</p>
                            <ul>
                                <li><strong>External Factors:</strong>
                                    <ul>
                                        <li><strong>Sun exposure</strong> – Pigmentation can be caused by sun exposure,
                                            specifically by its UVA rays, which penetrate deep into the skin and can
                                            cause excessive melanin production.</li>
                                        <li><strong>Injury</strong> – An external injury such as a cut, bruise or even
                                            pimples, improper hair removal, or depilatory creams can trigger an
                                            inflammatory reaction to the injury, leading to the production of extra
                                            melanin.</li>
                                        <li><strong>Medication</strong> – Certain medication can result in unwanted
                                            pigmentation as a side effect and is commonly seen with chemotherapy,
                                            tetracycline antibiotics etc.</li>
                                        <li><strong>Allergies</strong> – Contact dermatitis to cosmetics, hair dyes,
                                            etc. can cause pigmentation.</li>
                                    </ul>
                                </li>
                                <li><strong>Internal Factors</strong>
                                    <ul>
                                        <li><strong>Hormonal fluctuations</strong> – Pigmentation occurs as a result of
                                            a hormonal imbalance due to a rise in levels of estrogen and progesterone in
                                            the body. This type of pigmentation, known as Melasma, can be triggered by
                                            pregnancy or birth control pills.</li>
                                        <li><strong>Hereditary</strong> – Hereditary factors can play a major role in
                                            pigmentation of the skin. For instance, lentigines are a type of pigmentary
                                            condition associated with hereditary multisystemic syndromes.</li>
                                        <li><strong>Illness or disease</strong> – Certain medical conditions such as
                                            Addison’s disease and other endocrine diseases result in the disruption of
                                            the body’s hormonal levels, and this can increase melanin production.</li>
                                    </ul>
                                </li>
                            </ul>
                            <hr>
                            <p><strong>Informative Resources:</strong></p>
                            <ul>
                                <li><a href="#">Myths And Facts About
                                        Fair Skin</a></li>
                                <li><a href="#">How
                                        To Remove Sun Tan From Body?</a></li>
                            </ul>
                            <hr>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </section>
                <section id="symptoms" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Pigmentation Symptoms</h2>
                            <p>You will notice discolouration on the skin or dark patches on specific areas that may be
                                brown or black in colour. When exposed to sunlight, these patches can grow darker.<br>
                                <strong>Common types of pigmentation include –</strong></p>
                            <ul>
                                <li><strong>Freckles</strong> – <a href="#">Freckles</a>
                                    are a common type of skin pigmentation occurring as a result of frequent exposure to
                                    sunlight. They appear as tiny circular spots on exposed areas, like the face etc.,
                                    and they usually affect people with a lighter skin tone. Heredity factors also play
                                    a role in causing them.</li>
                                <li><strong>Post-inflammatory pigmentation</strong> – This occurs as our skin’s response
                                    to an injury such as bruises, burns, friction or harsh chemical treatments. This can
                                    also occur post-acne breakouts resulting in reddish, brown, or black marks.</li>
                                <li><strong>Melasma</strong> – Melasma is a type of facial pigmentation that affects the
                                    deeper layers of the skin. It occurs in women more commonly as irregular brown to
                                    grey patches on the cheeks, nose, jawline, etc.</li>
                                <li><strong>Sunspots</strong> – Also referred to as solar lentigines, these are
                                    pigmentation spots with clearly defined edges. These spots form due to sun exposure
                                    and the extent of pigmentation depends on the exposure of melanin pigment to UV
                                    rays.</li>
                            </ul>
                            <p>🔗 – <strong><a href="#">Gobest Skin & Hair’s
                                        Skin Pigmentation Treatment&nbsp;</a></strong></p>
                        </div>
                    </div>
                </section>
                <section id="diagnosis" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Diagnosis</h2>
                            <p>An experienced dermatologist can diagnose accurately and recommend treatment options to
                                treat the specific type of pigmentation. The treatment starts with a visible
                                examination, a dermascan analysis, or a biopsy of the dark patch. The dermatologist will
                                also review your medical history, family history and conduct further skin examination to
                                ascertain the factors responsible for pigmentation.</p>
                            <p>After careful examination, the dermatologist often suggests topical medication or
                                advanced dermatological procedures for treating the specific type of pigmentation.</p>
                        </div>
                    </div>
                </section>
                <section id="risk_factors" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Are You At Risk?</h2>
                            <p>Regardless of skin type, geographical location, age, or gender, everyone is susceptible
                                to pigmentation though it is slightly common in Asians. Most times, pigmentation is
                                caused by sun exposure. A single day of sun exposure can damage the skin. Those who have
                                a hereditary tendency are more prone to have pigmentation. Hence, timely diagnosis and
                                early intervention are helpful to reverse it effectively.</p>
                            <p>🔗 – <strong><a href="#">Gobest Skin & Hair’s
                                        Skin Lightening Solutions</a></strong></p>
                        </div>
                    </div>
                </section>
                <section id="prevention" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Prevention and Management </h2>
                            <ul>
                                <li>Always use a broad-spectrum sunscreen with the highest SPF that protects from both
                                    UVA and UVB rays of the sun.</li>
                                <li>Follow a good skin care routine to protect it from environmental damage, pollutants,
                                    and dirt.</li>
                                <li>Wear hats or scarves to avoid sun exposure during peak hours of sunlight.</li>
                            </ul>
                            <p><strong>Home Remedies </strong></p>
                            <p>We do not recommend home remedies as there is no scientific data to support them.
                                Furthermore, it may even irritate the skin, prolonging the course of treatment. Medical
                                intervention is important for appropriate treatments and results.</p>
                        </div>
                    </div>
                </section>
                <section id="treatments" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Treatment Options</h2>
                            <ul>
                                <li>Topical medication</li>
                                <li>Chemical Peels<br>
                                    <iframe
                                        title="Chemical Peel Treatment - Result, Benefit, Procedure, Before &amp; After 💰 Up to 50% Off"
                                        width="640" height="360" class="iframevideo"
                                        src="https://www.youtube.com/embed/gBypU29ipnA?feature=oembed" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen=""></iframe></li>
                                <li>Laser therapy with Q-switched NdYAG lasers<br>
                                    <iframe
                                        title="Laser Treatment To Remove Pigmentation, Dark Spots &amp; Uneven Skin Tone - Up To 50% Off"
                                        width="640" height="360" class="iframevideo"
                                        src="https://www.youtube.com/embed/2SO8eI1b7Xg?feature=oembed" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen=""></iframe></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="prognosis" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Prognosis</h2>
                            <p>Pigmentation on the skin may not be a serious medical condition, but it may aggravate if
                                not treated in a timely manner. Dark spots, acne marks, and sunspots may fade with
                                topical treatments, but severe discolouration requires an advanced treatment procedure
                                such as laser therapy. A dermatologist can determine the extent of pigmentation and
                                suggest the treatment method that works best for you.</p>
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