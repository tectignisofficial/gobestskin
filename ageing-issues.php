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

            .med_tittle_section img {
                width: 100% !important;
                height: 100px !important;
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

        .ageing_issues {
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
        <img loading="lazy" src="https://www.olivaclinic.com/wp-content/banner/service/desktop/anti-aging.jpg?var=1" alt="Ageing Issues" width="100%" height="200">
    </div>
    <section class="col-xs-12 col-sm-12 col-md-12">
        <div class="inner-page-content">
            <div class="col-md-12 col-sm-12 col-xs-12 blog-pages">
                <div class="container">
                <div class="breadcrumb">
                <ul style="display:flex;font-size:12px;    padding-top: 11px;">
                    <li><i class="fa fa-home"></i> <a href="index.php" title="Home"><span>Home&nbsp;&nbsp; </span></a>
                    </li> /
                    <li> <span title="Laser Hair Removal">&nbsp;&nbsp; Ageing Issues</span></li>
                </ul>
            </div>
                </div>
            </div>
            <div class="template_concern_page">
                <section class="col-xs-12 col-sm-12 col-md-12 about-allergies">
                    <div class="container">
                        <pre
                            style="display:none;">23724<br>page-template/template_concern_page.php<br>
                            <br>24549<br>page-template/template_concern_page.php</pre>
                        <h1 class="med_bottompadder40">Premature Aging Skin: Meaning, Causes And Treatment</h1>
                        <div class="nav-folderized">
                            <div class="table-of-contents  ftr__list checknav">
                                <h4>Table of contents</h4>
                                <ul>
                                    <li></li>
                                    <li><a href="#ageing_issues">Ageing Issues</a></li>
                                    <li><a href="#types">Types</a></li>
                                    <li><a href="#causes">Causes</a></li>
                                    <li><a href="#diagnosis">Diagnosis</a></li>
                                    <li><a href="#risk">Risk</a></li>
                                    <li><a href="#prevention">Prevention</a></li>
                                    <li><a href="#treatments">Treatments</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="table-of-contents mobile-view">
                            <button class="collapsed" data-toggle="collapse" data-target="#contents"
                                aria-expanded="false">Table of contents</button>
                            <div id="contents" class="collapse" aria-expanded="false" style="height: 0px;">
                                <ul>
                                    <li><a href="#ageing_issues">Ageing Issues</a></li>
                                    <li><a href="#types">Types</a></li>
                                    <li><a href="#causes">Causes</a></li>
                                    <li><a href="#diagnosis">Diagnosis</a></li>
                                    <li><a href="#risk">Risk</a></li>
                                    <li><a href="#prevention">Prevention</a></li>
                                    <li><a href="#treatments">Treatments</a></li>
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
                                <li>Premature ageing is a common complaint these days due to high levels of stress in
                                    our lives, and poor lifestyle habits. </li>
                                <li>Ageing is unavoidable, however, there are treatments available to remove signs of
                                    ageing. </li>
                                <li>Expert dermatologists can reverse the signs of ageing.</li>
                                <li>You need to know the anatomy of skin, causes of ageing and treatment options
                                    available to make an informed decision.</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="ageing_issues" class="ageing_issues">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">What Are The Ageing Issues?</h2>
                            <p>As we age, the natural and biological processes of the body cause changes on the surface
                                of the skin in the form of ageing issues like wrinkles, folds, fine lines, laugh lines,
                                sagging skin, etc.</p>
                            <p>Some extrinsic, as well as intrinsic factors, lead to ageing. These factors may include
                                changes at the genetic level or influence of environment or external catalysts that
                                accelerate the natural process of ageing. Our skin begins to look tired, dehydrated,
                                saggy, dull, full of lines or deep burrows that make one appear aged.</p>
                        </div>
                    </div>
                </section>
                <section id="types" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Types and Classification</h2>
                            <p>There are different types of ageing depending on the factors responsible for it. Find
                                below the primary or medical causes of ageing –</p>
                            <ul>
                                <li><strong>Genetic or Intrinsic Ageing:</strong>&nbsp;Our genetics or DNA determine our
                                    intrinsic or chronological ageing. Therefore, this type of ageing may vary from
                                    person to person and is a slow process. The free radicals present in our body
                                    accelerate genetic ageing. Intrinsic ageing includes the following signs:</li>
                                <li><strong>Sagging Skin:</strong> It occurs due to the breakdown of elastin and
                                    collagen proteins present underneath the skin.</li>
                                <li><strong>Age Spots:</strong> UV exposure usually leads to pigmentation and uneven
                                    skin tone causing age spots.</li>
                                <li><strong>Fine lines and wrinkles:</strong> As we age, our skin gets thinner, less
                                    elastic and drier; it forms folds, creases or ridges also known as wrinkles.</li>
                                <li><strong>Dry, thin and transparent skin:</strong>&nbsp;This may be due to lowered due
                                    to sweat and sebum secretions in the skin. Hormonal (estrogens)slow down especially
                                    in females may reduce the hydration and increase the dead skin layers making it look
                                    dull and dry.</li>
                            </ul>
                            <p>Apart from the above factors, secondary causes that contribute to ageing include the
                                following –</p>
                            <ul>
                                <li><strong>Mechanical Ageing:</strong> It refers to the fine lines which appear due to
                                    wear and tears we put our skin through during physical movements or repetitive
                                    facial expressions such as frowning, smiling, squinting, laughing etc. Mechanical
                                    ageing includes: Dynamic wrinkles around eyes, brow and mouth</li>
                                <li><strong>Extrinsic or Environmental Ageing:</strong>&nbsp;External factors such as
                                    sun exposure, stress, smoking, pollution accelerate the ageing process. The signs
                                    manifest in the form of fine lines, wrinkles, hyperpigmentation, uneven skin tone,
                                    sun spots, etc. Studies show that sun exposure alone contributes 80% to the effects
                                    of skin ageing.</li>
                            </ul>
                            <p>🔗 – <strong><a href="#">Oliva’s
                                        Anti-Aging Treatments</a></strong></p>
                        </div>
                    </div>
                </section>
                <section id="causes" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">What Causes Ageing?</h2>
                            <p>Primary factors are involved in triggering ageing related issues whereas secondary
                                factors are responsible for accelerating ageing.</p>
                            <p><strong>Primary causes behind ageing include –</strong></p>
                            <ul>
                                <li><strong>Sun Exposure –</strong> Chronic exposure to UV light causes structural
                                    instability by causing the breakdown of elastin and collagen fibres inside our skin.
                                    It results in the appearance of age spots, wrinkles, fine lines and other signs of
                                    premature ageing.</li>
                                <li><strong>Smoking –</strong> Smoking accelerates the ageing process and causes
                                    premature wrinkles. Tobacco can quicken the natural process of ageing by triggering
                                    skin degeneration. Smoking can cause an accumulation of free radicals in the skin,
                                    which can damage it and delay its healing mechanisms.&nbsp;It can decrease the
                                    capillary blood flow to the skin thus depriving it from oxygen and essential
                                    nutrients</li>
                                <li><strong>Dehydration –</strong> As we age, our skin loses its ability to retain
                                    water. If our skin stays dehydrated, it dries out and eventually develops fine lines
                                    or wrinkles.</li>
                            </ul>
                            <p><strong>Secondary factors that trigger ageing include –</strong></p>
                            <ul>
                                <li><strong>Alcohol Consumption –</strong> Excessive intake of alcohol causes
                                    nutritional deficiencies and dries out the skin leading to premature ageing.</li>
                                <li><strong>High-Stress Levels –</strong> Prolonged stress can wreak havoc on your skin
                                    especially on the face leading to wrinkles, folds or fine lines.</li>
                            </ul>
                            <hr>
                            <p><strong>Informative Resources:</strong></p>
                            <ul>
                                <li><a href="#">How To
                                        Get Rid Of Finelines On The Face And Under The Eyes?</a></li>
                                <li><a href="#">How To
                                        Remove Black Spots On Back And Neck?</a></li>
                            </ul>
                            <hr>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </section>
                <section id="diagnosis" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Diagnosis</h2>
                            <p>A dermatologist is the best person to help you identify ageing changes you may be
                                suffering from and its potential causes. After a thorough examination, your doctor may
                                suggest a treatment that addresses your ageing issues and is suitable for your skin
                                type.</p>
                        </div>
                    </div>
                </section>
                <section id="risk" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Are You At Risk For Premature Aging?</h2>
                            <p>No one can escape aging changes , but people who work long hours in the sun are
                                susceptible to develop signs of ageing earlier than others. Also, those who smoke or
                                consume alcohol regularly have a higher chance of developing premature wrinkles.</p>
                        </div>
                    </div>
                </section>
                <section id="prevention" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Prevention And Management: </h2>
                            <ul>
                                <li>Protect your skin from the UVA and UVB rays of the sun by applying sunscreen every
                                    day.</li>
                                <li>Make sure to keep yourself hydrated and your skin well-moisturised to prevent
                                    dryness.</li>
                                <li>Quit smoking and reduce your intake of alcohol to prevent premature ageing.</li>
                                <li>Eat a healthy and balanced diet full of essential nutrients such as Vitamin A that
                                    helps in repairing skin tissue, Vitamin E that keeps skin healthy and Vitamin C that
                                    helps in preventing age spots.</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="treatments" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Premature Ageing Skin Treatment</h2>
                            <ul>
                                <li>Fractional Microneedling Radio Frequency<br>
                                    <iframe
                                        title="Micro-needling Radiofrequency (RF) Treatment Result, Before &amp; After  💰 Up to 50% Off"
                                        width="640" height="360" class="iframevideo"
                                        src="https://www.youtube.com/embed/kG07d1Qoubs?feature=oembed" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen=""></iframe></li>
                                <li>Chemical Peels</li>
                                <li><a href="#" target="_blank"
                                        rel="noopener">Botulinum toxin injections</a> and Hyaluronic acid Fillers</li>
                                <li>Laser Resurfacing<br>
                                    <iframe
                                        title="Top Laser Skin Resurfacing Treatment: Procedure, Reviews &amp; Results 💰 Save Up to 50%!"
                                        width="640" height="360" class="iframevideo"
                                        src="https://www.youtube.com/embed/JxO3cBaT2cg?feature=oembed" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen=""></iframe></li>
                                <li>Laser Toning</li>
                            </ul>
                            <p>Basic anti-ageing treatments aim to remove the signs of premature ageing such as uneven
                                skin tone, age spots, fine lines, folds, hollows or surface wrinkles. For treating
                                deeper wrinkles, creases and hollows, your dermatologist may recommend more advanced
                                procedures such as hyaluronic acid fillers. All, these treatments work best to reduce
                                multiple signs of ageing and get youthful skin regardless of your age.</p>
                            <p>If you are suffering from signs of premature ageing, seek professional dermatological
                                care immediately.</p>
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