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

        .hypertrichosis {
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
    <img loading="lazy" src="https://www.olivaclinic.com/wp-content/uploads/2019/10/Underarm-sweat-mirradry.j.jpg" alt="Underarm-sweat-mirradry.j" width="100%" height="200" class="webpexpress-processed">
    </div>
    <section class="col-xs-12 col-sm-12 col-md-12">
        <div class="inner-page-content">
            <div class="col-md-12 col-sm-12 col-xs-12 blog-pages">
                <div class="container">
                <div class="breadcrumb">
                <ul style="display:flex;font-size:12px;    padding-top: 11px;">
                    <li><i class="fa fa-home"></i> <a href="index.php" title="Home"><span>Home&nbsp;&nbsp; </span></a>
                    </li> /
                    <li> <span title="Laser Hair Removal">&nbsp;&nbsp; Hypertrichosis</span></li>
                </ul>
            </div>
                </div>
            </div>
            <div class="template_concern_page">
                <section class="col-xs-12 col-sm-12 col-md-12 about-allergies">
                    <div class="container">
                        <pre
                            style="display:none;">26896<br>page-template/template_concern_page.php<br> <br>26880<br>page-template/template_concern_page.php</pre>
                        <h1 class="med_bottompadder40">Hypertrichosis: Types, Prevention And Treatment Options</h1>
                        <div class="nav-folderized">
                            <div class="table-of-contents  ftr__list checknav">
                                <h4>Table of contents</h4>
                                <ul>
                                    <li></li>
                                    <li><a href="#hypertrichosis">Hypertrichosis</a></li>
                                    <li><a href="#types">Types</a></li>
                                    <li><a href="#difference">Difference</a></li>
                                    <li><a href="#diagnosis">Diagnosis</a></li>
                                    <li><a href="#risk_factors">Risk Factors</a></li>
                                    <li><a href="#prevention">Prevention</a></li>
                                    <li><a href="#treatment">Treatment</a></li>
                                    <li><a href="#prognosis">Prognosis</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="table-of-contents mobile-view">
                            <button class="collapsed" data-toggle="collapse" data-target="#contents">Table of
                                contents</button>
                            <div id="contents" class="collapse">
                                <ul>
                                    <li><a href="#hypertrichosis">Hypertrichosis</a></li>
                                    <li><a href="#types">Types</a></li>
                                    <li><a href="#difference">Difference</a></li>
                                    <li><a href="#diagnosis">Diagnosis</a></li>
                                    <li><a href="#risk_factors">Risk Factors</a></li>
                                    <li><a href="#prevention">Prevention</a></li>
                                    <li><a href="#treatment">Treatment</a></li>
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
                                <li>Hypertrichosis is a disorder that causes excessive hair growth in a localised or
                                    generalised form.</li>
                                <li>The very first case of hypertrichosis was reported and documented in the 17th
                                    century in the Canary Islands. </li>
                                <li>Laser hair removal can be an effective solution for hypertrichosis.</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="hypertrichosis" class="hypertrichosis">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">What Is Hypertrichosis?</h2>
                            <p>Hypertrichosis refers to a dermatological condition that results in excessive hair growth
                                anywhere on the body.</p>
                            <p>Dermatologists may classify the condition in the following categories:</p>
                            <ul>
                                <li>Congenital (from birth) or acquired</li>
                                <li>Localised or Generalised and</li>
                                <li>Depending on the type of hair, i.e. lanugo, vellus or terminal hair</li>
                            </ul>
                            <p>The most visible symptom of hypertrichosis is the presence of hair in higher amounts than
                                average. This hair can be either lanugo (soft, unpigmented hair that is generally
                                visible in newborns during the first few days of life) or vellus (thin and fine hair) or
                                terminal hair the thick hair that appears on legs).</p>
                            <p>The excessive growth of hair can occur all over the body or in small, isolated patches.
                                This rare condition can affect both men and women equally. It can manifest at birth or
                                develop at a later stage in life.</p>
                        </div>
                    </div>
                </section>
                <section id="types" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Types &amp; Classification</h2>
                            <p>The causes of hypertrichosis are not clear yet. However, dermatologists generally
                                classify hypertrichosis into congenital and acquired. Here are the significant
                                differences between the two types of hypertrichosis:</p>
                            <p><strong>Congenital Hypertrichosis:</strong></p>
                            <p>This type of hypertrichosis occurs from birth, forming a part of many syndromes or
                                hereditary diseases where other features like enlarged gums and facial dysmorphism may
                                be present.</p>
                            <p>It can also be the only feature in many individuals with no other associated health
                                issues, but a positive family history of excessive hairiness.</p>
                            <p>Congenital hypertrichosis can occur either in a generalised or localised form.</p>
                            <ul>
                                <li><strong>Generalised Hypertrichosis:</strong> It is a rare entity with many possible
                                    underlying causes. Congenital generalised hypertrichosis can form a part of many
                                    syndromes. Ambras syndrome, Cantu syndrome and Cornelia de Lange syndrome are a few
                                    of these syndromes associated not only with the excessive hair growth but also with
                                    other features.<br>
                                    There are disorders such as congenital hypertrichosis lanuginosa and universal
                                    hypertrichosis where excessive hair growth is the only feature. Sometimes,
                                    intrauterine exposure to medications like hydantoin and alcohol can also cause this.
                                </li>
                                <li><strong>Localised Hypertrichosis:</strong> As the condition may be a part of an
                                    underlying abnormality of the vertebrae and spinal cord. It can appear along with
                                    birthmarks like congenital melanocytic nevus or Becker’s nevus.</li>
                            </ul>
                            <p><strong>Acquired Hypertrichosis:</strong></p>
                            <p>An individual having the condition does not have excessive hair growth at birth but
                                develops it later in life. It can be generalised or localised. Acquired hypertrichosis
                                can occur as a result of chronic medical conditions like cancers or thyroid disorders or
                                anorexia nervosa. It may also occur due to constant irritation of the skin (rubbing)
                                after the use of a plaster cast for fracture or topical medications like steroids or
                                minoxidil. It can also develop as a part of diseases like Dermatomyositis (over the
                                knees).</p>
                        </div>
                    </div>
                </section>
                <section id="difference" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Is There A Difference Between Hirsutism And Hypertrichosis?
                            </h2>
                            <p>Check out the critical differences between the two dermatological concerns:</p>
                            <ul>
                                <li>Hirsutism, which is only hormonally induced (by androgens), only affects women,
                                    while hypertrichosis affects both men and women.</li>
                                <li>In hirsutism, the body hair is coarse and terminal with a classic male hair-growth
                                    distribution pattern. With hypertrichosis, the hair can be thick or thin and can
                                    cover the entire body.</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="diagnosis" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Diagnosis:</h2>
                            <p>Dermatologists diagnose hypertrichosis with a detailed physical examination of the excess
                                hair growth while taking into consideration other factors such as the individual’s age,
                                sex, ethnicity and his or her androgen sensitivity.<br>
                                During a clinical consultation, a dermatologist may record information related to your
                                medical and family history, lifestyle habits and recent medicinal intake for an accurate
                                conclusion.</p>
                        </div>
                    </div>
                </section>
                <section id="risk_factors" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Are You At Risk?</h2>
                            <p>You are likely to have hypertrichosis if you come under the following high-risk groups:
                            </p>
                            <ul>
                                <li>If you suffer from excessive hair growth that affects the entire body.</li>
                                <li>If you are on medication that may trigger hypertrichosis.</li>
                                <li>If you were using steroids, oral or topical without supervision.</li>
                                <li>If you have a habit of rubbing your skin.</li>
                                <li>If you have health issues like Porphyria Cutanea Tarda.</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="prevention" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Prevention &amp; Management:</h2>
                            <p>Prevent acquired hypertrichosis by following the below tips:</p>
                            <ul>
                                <li>Avoid the use of medications that can trigger the condition.</li>
                                <li>Strictly use prescription drugs under supervision.</li>
                            </ul>
                            <p>You cannot prevent congenital hypertrichosis. However, you can manage it temporarily
                                with:</p>
                            <ul>
                                <li>Trimming</li>
                                <li>Shaving</li>
                                <li>Depilatory creams</li>
                                <li>Plucking</li>
                                <li>Electrolysis</li>
                                <li>Waxing</li>
                                <li>Threading</li>
                            </ul>
                            <p><strong>Self-Care:</strong></p>
                            <p>Self-care with the use of conventional hair removal methods mentioned above can bring
                                only short-term relief. With a condition like hypertrichosis, these remedies do not stop
                                hair from growing back. Opt for a permanent solution by seeking appropriate medical
                                assistance.</p>
                        </div>
                    </div>
                </section>
                <section id="treatment" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Treatment Options Available At Oliva Clinic:</h2>
                            <p>Oliva Clinic offers laser hair removal for managing hypertrichosis. Our qualified
                                dermatologists may use the following laser technologies for delivering the best results:
                            </p>
                            <ul>
                                <li>Diode</li>
                                <li>Alexandrite</li>
                                <li>Nd: YAG</li>
                                <li>Super hair reduction (AFT)</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="prognosis" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Prognosis</h2>
                            <p>It is essential to identify the type of hypertrichosis before attempting to manage it or
                                treat it.</p>
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