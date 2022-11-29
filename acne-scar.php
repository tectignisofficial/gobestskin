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

        .meaning {
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
    <img loading="lazy" src="https://www.olivaclinic.com/wp-content/banner/service/desktop/acne-scar.jpg?var=1" alt="Acne Scars" width="100%" height="200">
    </div>
    <section class="col-xs-12 col-sm-12 col-md-12">
        <div class="inner-page-content">
            <div class="col-md-12 col-sm-12 col-xs-12 blog-pages">
                <div class="container">
                <div class="breadcrumb">
                <ul style="display:flex;font-size:12px;    padding-top: 11px;">
                    <li><i class="fa fa-home"></i> <a href="index.php" title="Home"><span>Home&nbsp;&nbsp; </span></a>
                    </li> /
                    <li> <span title="Laser Hair Removal">&nbsp;&nbsp; Acne Scars</span></li>
                </ul>
            </div>
                </div>
            </div>
            <div class="template_concern_page">
                <section class="col-xs-12 col-sm-12 col-md-12 about-allergies">
                    <div class="container">
                        <pre
                            style="display:none;">24675<br>page-template/template_concern_page.php<br>https://www.olivaclinic.com/<br>4<br></pre>
                        <h1 class="med_bottompadder40">Acne Scars: Types, Diagnosis &amp; Correction Options</h1>
                        <div class="nav-folderized">
                            <div class="table-of-contents  ftr__list checknav">
                                <h4>Table of contents</h4>
                                <ul>
                                    <li></li>
                                    <li><a href="#meaning">Meaning</a></li>
                                    <li><a href="#causes_">Causes </a></li>
                                    <li><a href="#types">Types</a></li>
                                    <li><a href="#pathophysiology">Pathophysiology</a></li>
                                    <li><a href="#signs_&amp;_symptoms">Signs &amp; Symptoms</a></li>
                                    <li><a href="#diagnosis">Diagnosis</a></li>
                                    <li><a href="#prevention_">Prevention </a></li>
                                    <li><a href="#self-care_">Self-Care </a></li>
                                    <li><a href="#treatment">Treatment</a></li>
                                    <li><a href="#faqs">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-of-contents mobile-view">
                            <button class="collapsed" data-toggle="collapse" data-target="#contents">Table of
                                contents</button>
                            <!-- <div id="contents" class="collapse">
                                <ul>
                                    <li><a href="#meaning">Meaning</a></li>
                                    <li><a href="#causes_">Causes </a></li>
                                    <li><a href="#types">Types</a></li>
                                    <li><a href="#pathophysiology">Pathophysiology</a></li>
                                    <li><a href="#signs_&amp;_symptoms">Signs &amp; Symptoms</a></li>
                                    <li><a href="#diagnosis">Diagnosis</a></li>
                                    <li><a href="#prevention_">Prevention </a></li>
                                    <li><a href="#self-care_">Self-Care </a></li>
                                    <li><a href="#treatment">Treatment</a></li>
                                    <li><a href="#faqs">FAQs</a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </section>

                <section class="col-xs-12 col-sm-12 col-md-12 highlights">
                    <div class="container">
                        <div class="highlights-main">
                            <h2>Highlights</h2>
                            <ul>
                                <li>Acne is the primary cause of scarring irrespective of age, gender and skin type.
                                </li>
                                <li>An estimated 90% of the global population experiences acne during teenage years
                                    and end up getting scars on face, forehead, nose, chest, back etc. </li>
                                <li>These scars are permanent changes in the texture of the skin after an acne
                                    breakout subsides.</li>
                                <li>Acne scars leave visible signs in the form of pits, elevated scars or visible
                                    marks.</li>
                                <li>Acne scars are treatable by a dermatologist. Depending on the type of acne scars,
                                    treatment may take anywhere between 3 and 24 months.</li>
                                <li>While mild acne scars are easily treatable, old and deep scars may require several
                                    sessions to show visible improvement. </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="meaning" class="meaning">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">What Are Acne Scars And Why Do They Form?</h2>
                            <p>Acne scars are marks or depressions that appear after breakouts subside. Acne occurs when
                                a build-up of excessive sebum, dead cells and bacteria clog the skin pores and cause
                                inflammation. Mild acne may lead to <a
                                    href="#">post-inflammatory
                                    hyperpigmentation</a> or pimple marks. However, deeper lesions cause collagen damage
                                that adversely affects the texture of the skin and results in permanent acne scars.</p>
                            <p>Since pimples affect 90% of the teenagers, acne scar is a common skin concern that
                                requires medical attention. However, to minimise your acne scars, it is essential first
                                to manage your pimples effectively. Let us find out the primary causes of acne scars
                                before exploring its types and treatments.</p>
                            <p>🔗 <a href="#"><strong>Oliva’s Acne
                                        Scar Management Solutions</strong></a></p>
                        </div>
                    </div>
                </section>
                <section id="causes_" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">What Causes Acne Scars?</h2>
                            <p>Any <a href="#">grade or severity of acne</a>
                                can result in scars based on the healing response of the skin. However, you may be at a
                                higher risk of developing acne scars if:</p>
                            <ul>
                                <li>You are having severe breakouts that comprise of cysts and nodules.</li>
                                <li>You delayed the treatment response to a bout of inflammatory acne.</li>
                                <li>You picked, popped or squeezed the acne.</li>
                                <li>You have a family history of acne and acne scars.</li>
                            </ul>
                            <p>If you can relate to any of the above scenarios, you are likely to have acne scars. Go
                                ahead and learn more about the type of acne scar you may be having as that will
                                determine the specialised treatment you may require to reduce it.</p>
                        </div>
                    </div>
                </section>
                <section id="types" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Types Of Acne Scars:</h2>
                            <p>Two types of acne scars atrophic (depressed) or <a
                                    href="#">hypertrophic</a>
                                (elevated) occur based on the collagen levels of the skin while healing after a
                                breakout. Only 10% of acne scars are hypertrophic, also called <a
                                    href="#">keloids</a>.
                            </p>
                            <p>Expert dermatologists further classify atrophic scars into the following subtypes:</p>
                            <ul>
                                <li><a href="#"><strong>Ice
                                            pick scars</strong></a> refer to narrow and vertical acne scars that have
                                    sharp margins and a diameter of less than 2mm.</li>
                                <li><strong>Rolling scars</strong> are skin pits that have a diameter of up to 5mm, an
                                    undulating appearance and round margins.</li>
                                <li><strong>Boxcar scars</strong> are more extensive than rolling scars with defined
                                    margins and a width ranging from 1.5mm to 4mm.</li>
                            </ul>
                            <p>The success of scar revision treatment depends on the type and severity of the scar.</p>
                        </div>
                    </div>
                </section>
                <section id="pathophysiology" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Pathophysiology Of Acne Scars:</h2>
                            <p>Scars form when the body tries to heal itself after an injury or trauma to the skin. It
                                may be sequelae to acne, burns, wounds, chickenpox, vaccinations and surgeries. Acne
                                scars may be atrophic or deep-pitted due to collagen loss during the healing process.
                                Hypertrophic scars are raised, thick and lumpy in appearance and occur due to excessive
                                collagen production after acne subsides.</p>
                        </div>
                    </div>
                </section>
                <section id="signs_&amp;_symptoms" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Common Signs &amp; Symptoms:</h2>
                            <p>Here are the signs and symptoms of acne scars that may commonly appear on your face,
                                chest and back if you are prone to having pimples:</p>
                            <ul>
                                <li>Deep pits on the skin.</li>
                                <li>Raised lesions on the skin.</li>
                                <li>Dark pigmentary marks that occur after acne subsides.</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="diagnosis" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Diagnosis Of Acne Scars:</h2>
                            <p>Untreated acne may become severe, cause permanent collagen damage and leave behind
                                visible scars on the skin. A dermatologist can quickly diagnose scarring due to acne
                                during a physical examination. He/she can identify the grade of acne scars, whether it
                                is mild, moderate or severe and recommend a suitable treatment plan.</p>
                        </div>
                    </div>
                </section>
                <section id="prevention_" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Prevention and Management Of Acne Scars</h2>
                            <p>Here are some simple tips to prevent acne scars that you can follow if you have
                                pimple-prone skin:</p>
                            <ul>
                                <li>Seek immediate medical treatment if you are having acne breakouts.</li>
                                <li>Resist the temptation to squeeze or pop the pimple.</li>
                                <li>Do not attempt to pick at scabs.</li>
                                <li>Avoid experimenting with home-remedies as they may aggravate your skin inflammation.
                                </li>
                            </ul>
                            <p>It is time to seek professional solutions if the above tips are not working for you, and
                                you have acne scars.</p>
                        </div>
                    </div>
                </section>
                <section id="self-care_" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Self-Care </h2>
                            <p>Unfortunately, the safety and efficacy of home remedies, OTC products and other self-care
                                methods remain medically unproven till date. It is best to avoid using them to rule out
                                the risk of triggering acne, aggravating your scars and suffering from severe
                                side-effects.</p>
                            <hr>
                            <p><strong>Informative Resources:</strong></p>
                            <ul>
                                <li><a href="#">How
                                        Much Does Scar Removal Cost In India?</a></li>
                                <li><a
                                        href="#">Fractional
                                        Radiofrequency Microneedling</a></li>
                                <li><a href="#">Skin
                                        Conditions Treated With TCA Peels</a></li>
                            </ul>
                            <hr>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </section>
                <section id="treatment" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Professional Treatment Options For Acne Scars:</h2>
                            <p>Dermatologists at Oliva specialise in providing customised medico-aesthetic solutions for
                                reducing all types and grades of acne scars. They may recommend the following procedures
                                as a standalone or combination treatment based on your skin and scar type, the severity
                                of the condition and affected area to achieve optimal results:</p>
                            <ul>
                                <li><strong>Pixel Laser Skin Resurfacing:</strong> Our leading dermatologists use
                                    revolutionary USFDA-approved laser technology to stimulate collagen production in
                                    the scarred tissue.<br>
                                    <iframe width="640" height="360" class="iframevideo"
                                        src="https://www.youtube.com/embed/JxO3cBaT2cg?feature=oembed" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen=""></iframe></li>
                                <li><strong>Micro-needling Radiofrequency:</strong> This advanced acne scar treatment
                                    comes with skin tightening benefits too! It involves the use of radiofrequency
                                    technology to treat acne scars and improve skin texture.<br>
                                    <iframe
                                        title="Micro-needling Radiofrequency (RF) Treatment Result, Before &amp; After  💰 Up to 50% Off"
                                        width="640" height="360" class="iframevideo"
                                        src="https://www.youtube.com/embed/kG07d1Qoubs?feature=oembed" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen=""></iframe></li>
                                <li><strong>Chemical Peels:</strong> Our experienced medical team may apply plant-based
                                    extracts to exfoliate the damaged layers of the skin. TCA Cross peel is a
                                    specialised treatment for minimising ice pick scars.</li>
                                <li><strong>Subcision:</strong> This is a minimally invasive treatment performed by our
                                    expert doctors to reduce the depth of the acne scars effectively.</li>
                                <li><strong>Intralesional Injections:</strong> Our professional medical team may use
                                    specialised injections to reduce the size of raised acne scars visibly.</li>
                                <li><strong>Laser Toning:</strong> This modality involves the use of advanced laser
                                    technology to reduce flat, red and pigmented acne scars. It helps correct post-acne
                                    skin discolouration.</li>
                            </ul>
                            <p><strong>Pre &amp; Post-Care Guidelines Related To Acne Scar Treatments:</strong></p>
                            <p><strong>&nbsp;</strong>Dermatologists at Oliva have a holistic approach and provide
                                adequate pre and post-care guidance to achieve the best results with minimal downtime
                                and side-effects.</p>
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
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </section>
                <section id="faqs" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Common Questions</h2>
                            <ul>
                                <li><strong>Can Advanced Treatment Heal Acne Scars?<br>
                                    </strong>Yes, advanced acne scar removal treatment at Oliva can enhance the healing
                                    response of the skin to reduce the depth of the scars and improve the skin texture
                                    visibly.</li>
                            </ul>
                            <ul>
                                <li><strong>Do Acne Scars Go Away Naturally?<br>
                                    </strong>No, most of the acne scars may not fade away naturally and require
                                    procedural treatments performed by medical experts.</li>
                            </ul>
                            <ul>
                                <li><strong>Does Vitamin A Help To Treat Acne Scars?<br>
                                    </strong>Yes, your dermatologist may recommend topical applicants containing Vitamin
                                    A combined with procedural treatments to reduce the acne scars effectively.</li>
                            </ul>
                            <ul>
                                <li><strong>Are acne scars permanent?<br>
                                    </strong>All grades of acne may cause some form of permanent scars.</li>
                            </ul>
                            <ul>
                                <li><strong>Can advanced treatments remove acne scars completely?<br>
                                    </strong>Yes, you can expect up to 90% reduction in the visibility of scars by
                                    opting for acne scar revision treatment at Oliva! However, the results may vary
                                    based on the severity of the condition and the time-interval between scarring and
                                    treatment.</li>
                            </ul>
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