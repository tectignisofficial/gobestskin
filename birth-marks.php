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

            .med_tittle_section img{
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
    <img loading="lazy" src="https://www.olivaclinic.com/wp-content/banner/service/desktop/tattoo-removal.jpg?var=1" alt="Birth Marks" width="100%" height="200">
    </div>
    <section class="col-xs-12 col-sm-12 col-md-12">
        <div class="inner-page-content">
            <div class="col-md-12 col-sm-12 col-xs-12 blog-pages">
                <div class="container">
                <div class="breadcrumb">
                <ul style="display:flex;font-size:12px;    padding-top: 11px;">
                    <li><i class="fa fa-home"></i> <a href="index.php" title="Home"><span>Home&nbsp;&nbsp; </span></a>
                    </li> /
                    <li> <span title="Laser Hair Removal">&nbsp;&nbsp; Birth Marks</span></li>
                </ul>
            </div>
                </div>
            </div>
            <div class="template_concern_page">
                <section class="col-xs-12 col-sm-12 col-md-12 about-allergies">
                    <div class="container">
                        <pre
                            style="display:none;">24549<br>page-template/template_concern_page.php<br>
                            <br>24759<br>page-template/template_concern_page.php</pre>
                        <h1 class="med_bottompadder40">Birth Marks : Causes, Types And Management</h1>
                        <div class="nav-folderized">
                            <div class="table-of-contents  ftr__list checknav">
                                <h4>Table of contents</h4>
                                <ul>
                                    <li></li>
                                    <li><a href="#intro">Intro</a></li>
                                    <li><a href="#types">Types</a></li>
                                    <li><a href="#causes">Causes</a></li>
                                    <li><a href="#diagnosis">Diagnosis</a></li>
                                    <li><a href="#risks">Risks</a></li>
                                    <li><a href="#prevention">Prevention</a></li>
                                    <li><a href="#treatments">Treatments</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="table-of-contents mobile-view">
                            <button class="collapsed" data-toggle="collapse" data-target="#contents">Table of
                                contents</button>
                            <div id="contents" class="collapse">
                                <ul>
                                    <li><a href="#intro">Intro</a></li>
                                    <li><a href="#types">Types</a></li>
                                    <li><a href="#causes">Causes</a></li>
                                    <li><a href="#diagnosis">Diagnosis</a></li>
                                    <li><a href="#risks">Risks</a></li>
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
                                <li>Birthmarks, also called beauty marks affect both men and women.</li>
                                <li>The incidence and prevalence vary with the type of birthmark.</li>
                                <li>They may occur due to either malformation or proliferation of pigment cells (i.e.
                                    melanocytes) or capillaries during fetal development.</li>
                                <li>Birthmarks can occur due to positive family history or acquired.</li>
                                <li>Dermatologists can help you manage your birthmarks. Treatment duration and
                                    modality depend on type, size, and location of the mark.</li>
                                <li>Untreated birthmarks can have a variable course. They can grow in size, and/ cause
                                    pain, bleeding, itching, inflammation, ulceration or can resolve spontaneously on
                                    their own with age.</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="intro" class="intro">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">What Are Birthmarks?</h2>
                            <p>Birthmarks are the <a href="#">areas of
                                    discoloured skin</a> with or without alteration in skin texture formed due to an
                                error in the organisation of skin cells or blood vessels during the time of fetal
                                development.</p>
                            <p>Birthmarks can appear on any area of the body. Some of them appear above the skin
                                surface, while some form under the skin. Birthmarks occur and are usually apparent at
                                birth or in early childhood (first five years of life). In a few cases, small-sized
                                marks may not be noticeable at birth until they grow more prominent at a later age.</p>
                        </div>
                    </div>
                </section>
                <section id="types" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Types &amp; Classification Of Birthmarks:</h2>
                            <p>You can classify birthmarks into vascular&nbsp;(derived from blood vessels)
                                or&nbsp;pigmented&nbsp;(derived from pigment cells, i.e. melanocytes that control skin
                                colour by the production of a pigment called melanin).</p>
                            <ul>
                                <li><strong>Naevus flammeus (Port Wine Stains): </strong>The medical term for port wine
                                    stains (PWS) is naevus flammeus. Most PWS or firemarks affect the face but may
                                    involve any area of the skin. They begin as flat, faint red or purple-pink mark at
                                    birth. It often turns dark red or purple in adults, and the overlying skin becomes
                                    thicker than the surrounding one. Lumps can form, which may bleed readily. Lips or
                                    nose if involved may appear swollen. It does not go away on its own. Approximately
                                    three in every 1,000 babies (0.3%) have a port wine stain at birth.</li>
                            </ul>
                            <ul>
                                <li><strong>Macular stains – Stork bites or angel’s kiss: </strong>Medically referred to
                                    as Nevus Simplex, is a flat, pink, irregular shaped area of skin. The macular stain
                                    or salmon patch is termed as “angel’s kiss” when they appear on the front (forehead,
                                    bridge of the nose, eyelids, upper lip), and “stork bites” when they occur on the
                                    back (nape of the neck). The prevalence varies from 20-60 %. Majority of the macular
                                    stains resolve spontaneously on their own within the first year of age.</li>
                            </ul>
                            <ul>
                                <li><strong>Hemangiomas: </strong>Hemangiomas are lumpy, reddish-pink bulges on the
                                    skin. Some are superficial and appear&nbsp;on the surface of the skin (“strawberry
                                    marks”), while others form deeper under the skin surface. More than 50 % affect the
                                    head and neck. Usually, they involute with age (90% by nine years). The anatomical
                                    location determines the risk of complications, and they may be associated with
                                    specific syndromes.</li>
                            </ul>
                            <ul>
                                <li><strong>Dermal melanocytoses: </strong>Dermal melanocytoses are flat, bluish-grey
                                    areas of skin that look like bruises. Depending on the area of the body on which
                                    they appear, dermatologists may classify them as Mongolian spots, Nevus of Ota or
                                    Nevus of Ito. They occur due to abnormal persistence of pigment cells or melanocytes
                                    in the deeper layers of skin.</li>
                            </ul>
                            <ul>
                                <li><strong>Congenital melanocytic nevi: </strong>Congenital melanocytic nevi (CMN) are
                                    flat or raised birthmarks that range from light brown to black and can be of
                                    variable shapes and sizes (less than 1.5cm to more than 20 cm). Some nevi even have
                                    hair growing out of them. 1 in 100 people (1%) has one or more CMN at birth.
                                    Usually, they become paler in the first or second year of age, but in a few cases,
                                    they may indicate specific syndromes.</li>
                            </ul>
                            <ul>
                                <li><strong>Café-au-lait spots: </strong>Cafe-au-lait macules (CALM)&nbsp;are tan or
                                    light brown flat spots that are usually oval. Their incidence varies with race
                                    (0.3%-18%). Six or more such spots may be a sign of neurofibromatosis.</li>
                            </ul>
                            <p>🔗 – <strong><a href="#">Oliva’s
                                        Pigmentation Treatment</a></strong></p>
                        </div>
                    </div>
                </section>
                <section id="causes" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">What Are The Causes Of Birthmarks?</h2>
                            <p>Medical science has not explained the reasons for birthmark formation entirely yet. Most
                                occur by chance alone and are not associated with other underlying medical problems.
                                Some birthmark types can occur as part of a larger group of medical conditions called a
                                syndrome.</p>
                            <ul>
                                <li><strong>Vascular birthmarks:</strong> Vascular birthmarks occur due to improper
                                    formation of blood vessels/capillaries—there may be many clustered in an area, or
                                    they may be wider than usual.</li>
                                <li><strong>Pigmented birthmarks:</strong> Skin cells called melanocytes produce the
                                    pigment called melanin. Pigmented birthmarks occur due to proliferation or abnormal
                                    persistence of pigment cells in an area of the skin.</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="diagnosis" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Diagnosis, Exams &amp; Tests</h2>
                            <p>A dermatologist will perform a diagnosis in the form of a physical examination of the
                                lesion/mark. She may also use a dermascope wherever required. In case of deeper marks,
                                your doctor may recommend imaging tests (Ultrasound, CT scan, MRI) or a skin biopsy to
                                confirm the diagnosis.</p>
                        </div>
                    </div>
                </section>
                <section id="risks" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Are You At Risk?</h2>
                            <p>Most birthmarks are harmless. Some even fade or shrink over time. However, in rare
                                instances, birthmarks may impede healthy development or body functioning or may be
                                linked to other medical problems.</p>
                            <p>Strawberry marks at times turn into open sores due to ulceration or become infected. A
                                reasonably common birthmark type, the melanocytic nevi, can rarely transform into
                                cancer.</p>
                        </div>
                    </div>
                </section>
                <section id="prevention" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Prevention and Management </h2>
                            <p>Persons with birthmarks should monitor and take note of any changes in colour, size, or
                                texture of their skin lesions. You should consult a dermatologist immediately in case of
                                any pain, bleeding, itching, or inflammation of the mark/lesion.</p>
                            <hr>
                            <p><strong>Informative Resources</strong></p>
                            <ul>
                                <li><a href="#">Mangolian
                                        Spots – What Causes It And How To Remove</a></li>
                                <li><a href="#">How
                                        To Remove Black Spots On Legs?</a></li>
                            </ul>
                            <hr>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </section>
                <section id="treatments" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Treatment Options</h2>
                            <p>A dermatologist can remove birthmarks. Usually, the treatment method for removing a
                                particular birthmark depends on the type, size, severity, location and more. The most
                                common types of laser used for reducing birthmarks are:</p>
                            <ul>
                                <li>Q-switched Nd:YAG Lasers for pigmented birthmarks</li>
                                <li>Pulsed dye laser for vascular birthmarks</li>
                            </ul>
                            <p>Birthmarks are rarely life-threatening. Only marks that are functionally deforming or
                                exhibiting unwanted symptoms need medical treatment. A dermatologist must examine large
                                vascular or dermal lesions to determine the risk they pose and treat them accordingly.
                            </p>
                            <p>If you have birthmarks on your body, it is critical to consult a dermatologist today to
                                rule out any health complications in the future.</p>
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