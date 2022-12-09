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
    <img loading="lazy" src="https://www.olivaclinic.com/wp-content/uploads/2020/12/moles.jpg" alt="moles" width="100%" height="200" class="webpexpress-processed">
    </div>
    <section class="col-xs-12 col-sm-12 col-md-12">
        <div class="inner-page-content">
            <div class="col-md-12 col-sm-12 col-xs-12 blog-pages">
                <div class="container">
                <div class="breadcrumb">
                <ul style="display:flex;font-size:12px;    padding-top: 11px;">
                    <li><i class="fa fa-home"></i> <a href="index.php" title="Home"><span>Home&nbsp;&nbsp; </span></a>
                    </li> /
                    <li> <span title="Laser Hair Removal">&nbsp;&nbsp; Moles</span></li>
                </ul>
            </div>
                </div>
            </div>
            <div class="template_concern_page">
                <section class="col-xs-12 col-sm-12 col-md-12 about-allergies">
                    <div class="container">
                        <pre
                            style="display:none;">24714<br>page-template/template_concern_page.php<br> <br>25869<br>page-template/template_concern_page.php</pre>
                        <h1 class="med_bottompadder40">Moles: Causes, Types And Treatment Options</h1>
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
                                    <li><a href="#types">Types</a></li>
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
                                <li>Moles, medically termed as Nevi, are common, small spots on the skin that can
                                    appear anywhere on the body.</li>
                                <li>Most people develop 10 to 40 moles in their entire lifetime by the age of 50
                                    years.</li>
                                <li>Sometimes, few moles may progress towards cancer, and their removal becomes
                                    mandatory.</li>
                                <li>Note any sudden changes in the appearance of a mole like associated itching, a
                                    sudden increase in size, etc. It is important to undergo an examination by a
                                    dermatologist to rule out any cancerous change.</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="intro" class="intro">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">What Is A Skin Mole?</h2>
                            <p>Moles or melanocytic nevus is a common type of skin growth often caused by a cluster of
                                pigmented cells. Moles are either perfectly flat or raised and have an oval or round
                                shape. A typical mole is a brown spot. Otherwise, moles come in a variety of colours
                                such as black, tan, red, blue, pink or skin-coloured. Some moles have hairs growing out
                                of them.</p>
                            <p>Moles can appear anywhere on the body including areas such as the face, neck, scalp,
                                armpits, genitals and even under the fingernails. They may occur alone or in groups.
                                Most of the moles present during birth are big.</p>
                        </div>
                    </div>
                </section>
                <section id="types" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Types And Classification Of Moles:</h2>
                            <p>We can classify moles into three basic types depending on their appearance, onset or
                                development-</p>
                            <ul>
                                <li><strong>Congenital moles –</strong> Also called congenital nevi these moles are
                                    present at birth. They usually occur in about one in 100 people. The chances of this
                                    type of mole to become cancerous depend on its size.</li>
                                <li><strong>Acquired moles –</strong> This term refers to those moles, which develop
                                    during early childhood or adulthood. Excessive sun exposure may cause a spurt in
                                    their appearance. This form of moles rarely turns into skin cancer.</li>
                                <li><strong>Atypical or irregular moles –</strong> Also known as dysplastic nevi, these
                                    moles are large, have an irregular shape and size with a dark brown centre. These
                                    spots are hereditary and may have more risk of developing cancerous changes.</li>
                                <li><strong>Cancerous moles or melanomas –&nbsp;</strong>These are highly irregular and
                                    asymmetrical moles that often evolve into skin cancer or melanoma over time.</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="causes" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">What Causes Moles?</h2>
                            <p>Here are some of the factors that cause moles:</p>
                            <ol>
                                <li><strong>Genetics:</strong> The genes we inherit from our parents determine the
                                    presence, pattern and number of moles on our body. Ethnicity also determines the
                                    hereditary occurrence of moles; for instance, fair-skinned people are likely to have
                                    more moles than others. Genetic mutations are likely to be responsible for the
                                    formation of moles also reported by a research study in 2015. The genetic mutation
                                    of the BRAF gene was present in 78% of benign moles acquired due to heredity.</li>
                                <li><strong>Sun exposure</strong>: Sun exposure results in the development of more moles
                                    especially during childhood or early teen years. Moles also tend to become dark due
                                    to excessive sun exposure.</li>
                                <li><strong>Hormonal fluctuations</strong>: Hormonal changes during puberty or pregnancy
                                    also result in developing moles. Moles tend to become darker or bigger due to
                                    hormonal fluctuations in the body.</li>
                            </ol>
                            <p><strong>Why Do Moles Suddenly Appear?</strong></p>
                            <p>Moles are usually darker than the skin colour and become more apparent due to prolonged
                                sun exposure. Moles appear when skin cells called <a
                                    href="#">melanocytes</a>
                                start to grow in clusters instead of spreading throughout the skin. Melanocytes, which
                                make the pigment ‘melanin’, are responsible for imparting skin its natural colour.</p>
                            <p>Common moles rarely turn into melanoma. A few dysplastic nevi may turn into melanoma
                                especially if there occurs an apparent change in colour, shape, size or the feel of an
                                existing mole. Since melanomas may appear as a new coloured area on the skin, one should
                                check for any new moles on the body.</p>
                        </div>
                    </div>
                </section>
                <section id="diagnosis" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Diagnosis For Sudden Appearance Of Moles:</h2>
                            <p>Irregular or abnormal moles can appear anywhere on the body and pose a risk of melanoma.
                                The dermatologist will conduct primary skin analysis in the form of physical
                                examination. He would then analyse your family history for developing irregular or
                                changing moles to evaluate the causes before suggesting an appropriate treatment. He may
                                advise a biopsy to check for melanoma.</p>
                        </div>
                    </div>
                </section>
                <section id="risks" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Are You At Risk Of Developing Melanoma?</h2>
                            <p>If you live in a tropical region and your skin suffers from excessive exposure to UV
                                rays, then you have an increased risk of melanoma due to moles. Light-skinned people and
                                women are prone to develop atypical moles. Any occurrence of a new mole or physical
                                change in the appearance of moles on a woman’s lower leg or calf needs immediate medical
                                evaluation. Having a family history of melanoma or the presence of more than 50 odd
                                moles on one’s body increases our risk of skin cancer.</p>
                            <p><strong>Tips To Look Out For Melanoma:</strong></p>
                            <p>Here are the common changes to look for in a mole to identify the risk of melanoma:</p>
                            <ol>
                                <li>Any change in colour, shape, texture or height</li>
                                <li>Any mole that is irregular in growth</li>
                                <li>Any mole that becomes hard</li>
                                <li>Any associated dryness or flaking</li>
                                <li>Any associated itching</li>
                                <li>Any visible oozing/bleeding</li>
                            </ol>
                        </div>
                    </div>
                </section>
                <section id="prevention" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Prevention And Management Of Moles:</h2>
                            <p>Since we cannot change our genes, so it is not possible to prevent all types of moles.
                                Following these simple measures listed here can help in better management of moles –</p>
                            <ol>
                                <li><strong>Sun protection –</strong> It is essential to avoid sun exposure, especially
                                    during the peak hours of sunlight, between 10 am and 4 pm. Also, make it a habit to
                                    use sunscreen every time you step outdoors. Try to stay indoors or use
                                    sun-protective clothing items such as pants, long sleeves etc. Use a wide-brimmed
                                    hat and sunglasses to minimise the damaging effect of the UV rays.</li>
                                <li><strong>Watch out for changes –</strong> Examine your skin regularly for any change
                                    in size or colour of existing moles or look out for changes that may indicate
                                    melanoma especially if it runs in your family. Schedule a medical examination with
                                    your dermatologist on a routine basis.</li>
                                <li><strong>Avoid the use of tanning lamps –&nbsp;</strong>Tanning lamps emit UV rays
                                    and may pose an increased risk of skin cancer. So try to avoid using them.</li>
                            </ol>
                            <p><strong>Home Remedies For Moles:</strong></p>
                            <p>Most moles are harmless, yet those indicating early melanoma cannot be treated using home
                                remedies. Call for professional medical intervention and get appropriate treatment.</p>
                        </div>
                    </div>
                </section>
                <section id="treatment" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Treatment Options:</h2>
                            <p>Here are some of the services we offer for mole removal.</p>
                            <ul>
                                <li>Laser treatment</li>
                                <li>Topical medications</li>
                                <li>Punch excision</li>
                            </ul>
                            <p style="text-align: right;"><strong>READ MORE:</strong>&nbsp;<strong><em><a
                                            href="#">Safe And Effective Mole
                                            Removal Treatment</a></em></strong></p>
                            <p><strong>Prognosis:</strong></p>
                            <p>Skin cancer or melanoma may appear as a regular mole, but it is a significant cause of
                                concern. Therefore, seek a medical examination by a dermatologist if you notice an
                                altered appearance of a mole for early detection of melanoma. Smaller moles are
                                generally easier to remove than larger ones and barely leave scars.</p>
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