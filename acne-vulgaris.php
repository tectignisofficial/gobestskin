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

            .img-3 img {
                width: 100% !important;
                height: 100% !important;
                margin-right: 1.3% !important;
                float: left !important;
            }

            .img-3 {
                width: 27% !important;
            }

            .alignnone {
                width: 350px !important;
                height: 245px !important;
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
            color: #3fbbc0 !important;
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
.checknav>ul>li>a{
    color:black !important;
}
.social-links>a{
    color:white !important;
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

        .img-3 {
            width: 200px;
            height: auto;
            margin-right: 0.6%;
            float: left;
        }


        .img-3 img {
            width: 100% !important;
            height: 100% !important;
        }

        .appointment {
    padding-top: 40px !important;
    padding-bottom: 50px !important;
        }
        .breadcrumb{
            background:white !important;
        }
        #navbar>ul>li>a{
            color:black !important;
        }
        .scrollto{
            color:white !important;
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
        <img loading="lazy" src="https://www.olivaclinic.com/wp-content/banner/service/desktop/acne.jpg?var=1"
            alt="Acne Vulgaris" class="banner-image" width="100%" height="200">
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
                            <li> <span title="Laser Hair Removal">&nbsp;&nbsp; Acne Vulgaris</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="template_concern_page">
                <section class="col-xs-12 col-sm-12 col-md-12 about-allergies">
                    <div class="container">
                        <pre style="display:none;">23643<br>page-template/template_concern_page.php<br>
                            <br>24675<br>page-template/template_concern_page.php</pre>
                        <h1 class="med_bottompadder40">Acne Vulgaris: Types, Images, Causes &amp; Management Tips</h1>
                        <div class="nav-folderized">
                            <div class="table-of-contents  ftr__list checknav">
                                <h4>Table of contents</h4>
                                <ul>
                                    <li></li>
                                    <li><a href="#intro">Intro</a></li>
                                    <li><a href="#types">Types</a></li>
                                    <li><a href="#causes">Causes</a></li>
                                    <li><a href="#pathophysiology_">Pathophysiology </a></li>
                                    <li><a href="#signs_&amp;_symptoms">Signs &amp; Symptoms</a></li>
                                    <li><a href="#diagnosis">Diagnosis</a></li>
                                    <li><a href="#risk">Risk</a></li>
                                    <li><a href="#prevention_">Prevention </a></li>
                                    <li><a href="#treatment">Treatment</a></li>
                                    <li><a href="#prognosis">Prognosis</a></li>
                                    <li><a href="#faqs">FAQs</a></li>
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
                                    <li><a href="#pathophysiology_">Pathophysiology </a></li>
                                    <li><a href="#signs_&amp;_symptoms">Signs &amp; Symptoms</a></li>
                                    <li><a href="#diagnosis">Diagnosis</a></li>
                                    <li><a href="#risk">Risk</a></li>
                                    <li><a href="#prevention_">Prevention </a></li>
                                    <li><a href="#treatment">Treatment</a></li>
                                    <li><a href="#prognosis">Prognosis</a></li>
                                    <li><a href="#faqs">FAQs</a></li>
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
                                <li>Acne vulgaris affects approximately 200-300 million people in India alone. </li>
                                <li>It occurs in people between 15 and 40 years of age. </li>
                                <li>Its common symptoms include bumps, rashes, boils, pimples, redness, and
                                    tenderness. </li>
                                <li>Treatments for this condition include antibiotics, creams, cleansers peels and
                                    laser therapy. </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="intro" class="intro">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Acne Vulgaris - Meaning And Medical Definition:</h2>
                            <p>Acne vulgaris is a medical term for common “pimples”, “zits” or “breakouts”. The skin
                                disorder affects the pilosebaceous gland, i.e. the hair follicle and the oil gland
                                associated with it. The excessive production of natural oil or sebum combined with the
                                buildup of dead cells and bacteria leads to the clogging of the hair follicles. It
                                results in inflammation and <a href="#" target="_blank" rel="noopener">redness</a> in
                                the form of acne.</p>
                            <p>Facial acne is one of the most widespread skin concern that includes breakouts on the
                                forehead, nose, cheek, chin, jawline and even neck. However, pimples may also appear on
                                other areas of the body, including chest, shoulders, arms and back. Acne usually occurs
                                during the teenage phase due to puberty. However, for some of us, pimples may persist or
                                become more severe during adulthood. Let us find out more about the types, causes and
                                symptoms of acne vulgaris before exploring preventive tips and treatment options.</p>
                            <p>🔗 –&nbsp;<strong><a href="#">Oliva’s
                                        Acne Management Options</a></strong></p>
                        </div>
                    </div>
                </section>
                <section id="types" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Types And Classification Of Acne:</h2>
                            <p>There are two broad types of acne vulgaris- inflammatory and non-inflammatory. You may
                                suffer from mild, moderate or severe forms of acne. Your dermatologist is the best
                                person to identify and classify acne into the following grades based on the type,
                                severity, and extent of the distribution:</p>
                            <ul>
                                <li><strong>Grade 1 –</strong> Includes <a href="#">blackheads</a>,
                                    whiteheads and few papules.</li>
                                <li><strong>Grade 2 –</strong> Consists of multiple <a href="#">papules</a>
                                    and pustules, aggravated blackheads and whiteheads.</li>
                                <li><strong>Grade 3 –</strong> Comprises of numerous papules, <a href="#">pustules</a>
                                    and inflamed nodules occasionally.</li>
                                <li><strong>Grade 4 –</strong> Constitutes of multiple, large and painful pustules, <a
                                        href="#">nodules</a>,
                                    <a href="#">cysts</a>
                                    and abscesses.</li>
                            </ul>
                            <p><strong>Check out the acne vulgaris pictures to know what the skin condition looks
                                    like:</strong></p>
                            <div class="img-3">
                                <picture>
                                    <source
                                        srcset="https://www.olivaclinic.com/wp-content/webp-express/webp-images/uploads/2019/07/whiteheads.jpg.webp"
                                        type="image/webp"><img class="alignnone webpexpress-processed"
                                        title="whitehead acne on nose"
                                        src="https://www.olivaclinic.com/wp-content/uploads/2019/07/whiteheads.jpg"
                                        alt="whitehead acne on nose" width="263" height="250"></picture>
                            </div>
                            <div class="img-3">
                                <picture>
                                    <source
                                        srcset="https://www.olivaclinic.com/wp-content/webp-express/webp-images/uploads/2019/07/type-of-acne-1.jpg.webp"
                                        type="image/webp"><img class="alignnone webpexpress-processed"
                                        title="blackheads on nose"
                                        src="https://www.olivaclinic.com/wp-content/uploads/2019/07/type-of-acne-1.jpg"
                                        alt="blackheads on nose" width="263" height="250"></picture>
                            </div>
                            <div class="img-3">
                                <picture>
                                    <source
                                        srcset="https://www.olivaclinic.com/wp-content/webp-express/webp-images/uploads/2019/07/papule.jpg.webp"
                                        type="image/webp"><img class="alignnone webpexpress-processed"
                                        title="papules acne"
                                        src="https://www.olivaclinic.com/wp-content/uploads/2019/07/papule.jpg"
                                        alt="papules acne" width="263" height="250"></picture>
                            </div>
                            <div class="img-3">
                                <picture>
                                    <source
                                        srcset="https://www.olivaclinic.com/wp-content/webp-express/webp-images/uploads/2019/07/pustule.jpg.webp"
                                        type="image/webp"><img class="alignnone webpexpress-processed"
                                        title="pustules acne"
                                        src="https://www.olivaclinic.com/wp-content/uploads/2019/07/pustule.jpg"
                                        alt="pustules acne" width="263" height="250"></picture>
                            </div>
                            <div class="img-3">
                                <picture>
                                    <source
                                        srcset="https://www.olivaclinic.com/wp-content/webp-express/webp-images/uploads/2019/07/cystic.jpg.webp"
                                        type="image/webp"><img class="alignnone webpexpress-processed"
                                        title="cystic acne vulgaris"
                                        src="https://www.olivaclinic.com/wp-content/uploads/2019/07/cystic.jpg"
                                        alt="cystic acne vulgaris" width="263" height="250"></picture>
                            </div>
                            <div class="img-3">
                                <picture>
                                    <source
                                        srcset="https://www.olivaclinic.com/wp-content/webp-express/webp-images/uploads/2019/07/nodule.jpg.webp"
                                        type="image/webp"><img class="alignnone webpexpress-processed"
                                        title="nodular acne vulgaris"
                                        src="https://www.olivaclinic.com/wp-content/uploads/2019/07/nodule.jpg"
                                        alt="nodular acne vulgaris" width="263" height="250"></picture>
                            </div>
                            <div>
                                <hr>
                                <p><strong>Informative Resources:</strong></p>
                            </div>
                            <ul>
                                <li><a href="#">What
                                        Are The Best Acne Treatments For Adults?</a></li>
                                <li><a href="#">Best
                                        Ways To Get Rid Of Teenage Acne Problems</a></li>
                            </ul>
                            <hr>
                            <div></div>
                        </div>
                    </div>
                </section>
                <section id="causes" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Common Causes Of Acne Vulgaris:</h2>
                            <p>Here are the top reasons for acne you need to know-</p>
                            <p><strong>Internal Causes –</strong> It includes the primary factors that play a
                                significant role in causing acne–</p>
                            <ul>
                                <li><strong>Heredity:</strong> If either of your parents had acne, then there is a high
                                    probability of you having pimples too.</li>
                                <li><strong>Hormonal Changes:</strong> Hormonal disorders related to conditions like
                                    PCOS can stimulate sebaceous glands to produce more sebum, leading to acne
                                    outbreaks. Hormonal changes during puberty, menstruation, pregnancy and menopause
                                    too may trigger breakouts.</li>
                            </ul>
                            <p><strong>External Causes –</strong> Here are some secondary factors that may play a
                                critical role in irritating your acne-prone skin and aggravating your skin condition.
                                These include –</p>
                            <ul>
                                <li><strong>Stress:</strong> A high-stress lifestyle can trigger the activity of
                                    sebaceous glands and can result in excess sebum production and acne.</li>
                                <li><strong>Medications:</strong> Specific medicines containing androgen,
                                    corticosteroids, DHEA, and lithium cause acne as a side-effect.</li>
                                <li><strong>Diet:</strong> Regular consumption of sugary foods that have a high glycemic
                                    index can also trigger acne.</li>
                                <li><strong>Improper Skincare:</strong> Using skincare and makeup products that contain
                                    harsh chemicals or are not suitable for your skin type may clog your pores and cause
                                    breakouts.</li>
                            </ul>
                            <hr>
                            <p><strong>Informative Resources:</strong></p>
                            <ul>
                                <li><a href="#">Skin
                                        Care Routine For Acne Prone Skin</a></li>
                                <li><a href="#">Best
                                        Acne Treatment For Oily Skin</a></li>
                            </ul>
                            <hr>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </section>
                <section id="pathophysiology_" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">What Is The Pathophysiology of Acne?</h2>
                            <p>Here are the four processes that take place in the pilosebaceous unit of the skin (that
                                comprises of the hair follicle and oil gland) and lead to the occurrence of acne:</p>
                            <ol>
                                <li>Hormonal changes trigger excess oil or sebum production in areas such as T-zone of
                                    the face and neck that have dense sebaceous glands.</li>
                                <li>Blockages of the follicles occur due to excess deposition of sebum and keratinocytes
                                    (dead skin cells).</li>
                                <li>The increased activity of P. acnes bacteria takes place in the clogged follicles.
                                </li>
                                <li>The inflammatory reaction of our body’s defence system leads to the formation of
                                    acne lesions.</li>
                            </ol>
                        </div>
                    </div>
                </section>
                <section id="signs_&amp;_symptoms" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Signs And Symptoms Of Acne:</h2>
                            <p>The signs and symptoms of acne vary based on the type and severity of the condition.
                                However, you may note the following if you have acne-prone skin:–</p>
                            <ul>
                                <li>Clogged pores with white or transparent lesions</li>
                                <li>Redness and inflammation in the form of bumps and rashes</li>
                                <li>Painful pus-filled pimples</li>
                                <li>Cysts with deep abscesses</li>
                                <li><a href="#">Scar</a> and <a href="#">pigmentation&nbsp;</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="diagnosis" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">How Does A Dermatologist Diagnose Acne?</h2>
                            <p>Experienced dermatologists at Oliva can diagnose acne vulgaris by looking out for the
                                above common signs and symptoms during a physical examination. Due to their holistic
                                approach, they may record your family and medical history, lifestyle habits and suggest
                                blood investigations to identify any hormonal imbalance. They will recommend a
                                customised treatment plan based on the underlying cause, type and severity of your acne.
                            </p>
                        </div>
                    </div>
                </section>
                <section id="risk" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Are You At Risk?</h2>
                            <p>In India alone, more than 10 million people complain of acne every year. People who have
                                a family history of acne vulgaris or <a href="#">hormonal
                                    issues like PCOS</a> are more prone to breakouts than others. Also, those of you
                                undergoing hormonal changes due to puberty, pregnancy or menopause have an increased
                                risk of having acne. If you have a stressful lifestyle or poor dietary habits, your
                                probability of having pimples is high. It is advisable to seek medical assistance as
                                soon as you experience an acne outbreak to prevent recurrence and unwanted scarring or
                                pigmentation in the future.</p>
                        </div>
                    </div>
                </section>
                <section id="prevention_" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">How To Prevent Acne Vulgaris?</h2>
                            <p>Here are the top skincare tips for acne-prone skin recommended by leading dermatologists
                                for the prevention and management of acne:</p>
                            <ul>
                                <li>Wash your face twice a day with a mild cleanser, especially after a sweaty workout.
                                </li>
                                <li>Avoid using makeup or skincare products containing harsh chemicals. Opt for products
                                    labelled non-comedogenic and oil-free.</li>
                                <li>Never pop, squeeze or pick pimples as this may aggravate the inflammation and lead
                                    to permanent scarring.</li>
                                <li>Always use a sunblock cream suitable for your skin type before going out in the sun.
                                    Do not forget to use it even on rainy days.</li>
                                <li>Maintain cleanliness and change your pillowcases every week.</li>
                                <li>Stay hydrated to flush out toxins from your body and minimise acne.</li>
                            </ul>
                            <p><strong>Does Self-Care Help?</strong></p>
                            <p>Self-care may provide temporary relief, but it may not prove effective in the long run,
                                especially in cases of moderate to severe acne, which leads to scarring. If the above
                                tips are not working for you, it is time to seek urgent medical help to prevent
                                permanent scars.</p>
                            <hr>
                            <p><strong>Informative Resources:</strong></p>
                            <ul>
                                <li><a href="#">Top 10
                                        Beauty Tips For Acne Breakouts</a></li>
                                <li><a href="#">Top 10 Mistakes
                                        To Avoid Worsening Your Acne Outbreaks!</a></li>
                                <li><a href="#">Top 10 Acne
                                        Myths Your Need To Bust Now!</a></li>
                            </ul>
                            <hr>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </section>
                <section id="treatment" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Professional Treatments For Acne Vulgaris:</h2>
                            <p>Doctors at Oliva have a holistic approach and specialise in providing medico-aesthetic
                                solutions to treat the underlying cause of acne and deliver visible results. They may
                                suggest the following as a standalone or combination treatment to ensure you enjoy
                                long-lasting satisfaction.</p>
                            <p><strong>Medical Treatments:</strong></p>
                            <ul>
                                <li><strong>Topical Retinoids:</strong> Many leading doctors prescribe topical creams or
                                    gels that contain retinoids in conjunction with advanced procedures to unclog the
                                    pores effectively and reduce acne.</li>
                                <li><strong>Topical Antibiotics:</strong> Our medical experts may suggest the <a
                                        href="#">application
                                        of antibiotic</a> creams to minimise the bacterial activity and inflammation
                                    associated with acne.</li>
                                <li><strong>Oral Medications:</strong> Your experienced dermatologist at Oliva may
                                    recommend hormonal therapy for you to treat underlying conditions like PCOS and
                                    insulin resistance that may be triggering your acne breakouts.</li>
                            </ul>
                            <p><strong>Advanced Aesthetic Procedures:</strong></p>
                            <ul>
                                <li><strong><a href="#">Chemical
                                            Peels</a>:</strong> Top dermatologists at Oliva apply plant-based extracts
                                    for controlled exfoliation of the skin to minimise acne.</li>
                            </ul>
                            <p>Check out the video here to know all about the advanced chemical peel treatment procedure
                                at Oliva Clinic.</p>
                            <p><iframe title="Chemical Peel Treatment – Benefits, Procedure, Before &amp; After Results"
                                    width="640" height="360" class="iframevideo"
                                    src="https://www.youtube.com/embed/gBypU29ipnA?feature=oembed" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen=""></iframe></p>
                            <ul>
                                <li><strong>Comedone Extraction:</strong> Our medical experts may use specialised tools
                                    in a sterile environment to remove mild forms of acne safely and effectively.</li>
                                <li><strong>Intralesional Injections:</strong> Experienced doctors at Oliva may
                                    administer specialised injections to reduce the inflammation due to nodular and
                                    cystic acne visibly and alleviate pain.</li>
                                <li><strong>Laser Treatments:</strong> Leading skin specialists at Oliva may recommend
                                    this advanced procedure as part of your acne treatment plan. They may combine it
                                    with other modalities to give you the best results.</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="prognosis" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Prognosis:</h2>
                            <p>Usually, teenage acne clears up on its own by the mid-20s. Adult acne, especially in
                                women, may persist up to the age of 40. It generally needs detailed diagnosis and
                                holistic treatment to subside. Most adults usually develop mild to moderate acne lesions
                                and seeking immediate treatment may help them prevent recurrence and scarring. Acne in
                                its various stages can lead to permanent scars if left untreated during its early onset.
                                Seeking early medical help is advisable.</p>
                            <hr>
                            <p><em>Delivering World-class dermatology solutions is our mission! Redefining the quality
                                    of care is a passion!</em></p>
                            <p><strong>How to get started?&nbsp;</strong><strong>🔗<a
                                        href="make-an-appointment.php">Book Appointment</a> or
                                    📞<a href="tel:1800-103-3893">1800-103-3893</a> to enjoy the best results!</strong>
                            </p>
                            <hr>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </section>
                <section id="faqs" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Common Questions</h2>
                            <ul>
                                <li><strong>Does Acne Go Away On Its Own?<br>
                                    </strong>Teen acne may subside on its own over time. However, adult acne usually
                                    requires medical help to diagnose and treat the underlying cause and reduce the risk
                                    of recurrence and scarring.</li>
                            </ul>
                            <ul>
                                <li><strong>Is Acne Vulgaris Contagious?<br>
                                    </strong>No, acne vulgaris is not a contagious skin condition.</li>
                            </ul>
                            <ul>
                                <li><strong>How Long Does Acne Vulgaris Last?<br>
                                    </strong>Acne vulgaris is most prevalent during puberty and may last until the early
                                    20s. However, due to hormonal disturbances, some people may experience adult acne.
                                </li>
                            </ul>
                            <ul>
                                <li><strong>Should I Pop Acne?<br>
                                    </strong>No, it is essential to resist the temptation of popping pimples as it may
                                    aggravate your skin condition and lead to permanent scars.</li>
                            </ul>
                            <ul>
                                <li><strong>Is There A Permanent Cure For Acne Vulgaris?<br>
                                    </strong>No, there is no permanent cure for acne vulgaris. However, by opting for
                                    Oliva’s holistic acne treatment, you can minimise your breakouts effectively.</li>
                            </ul>
                            <ul>
                                <li><strong>When Is The Best Time To Seek Help Of A Doctor?<br>
                                    </strong>It is advisable to consult a doctor immediately after a breakout to reduce
                                    the risk of recurrence and scarring.</li>
                            </ul>
                            <ul>
                                <li><strong>How Soon Can An Acne Treatment Show Results?<br>
                                    </strong>You can note a visible reduction in your skin condition after undergoing
                                    the first few sessions of acne treatment at Oliva. However, you should complete your
                                    recommended sessions to enjoy optimal results.</li>
                            </ul>
                            <ul>
                                <li><strong>Why Am I Getting Recurring Breakouts On Face?<br>
                                    </strong>Wrong skincare regimen, poor scalp hygiene and underlying hormonal issues
                                    along with genetic propensity and unhealthy lifestyle habits may be responsible for
                                    frequent facial breakouts.</li>
                            </ul>
                            <ul>
                                <li><strong>Do All Forms Of Acne Leave A Permanent Scar?<br>
                                    </strong>All grades of acne may cause some form of scars. However, moderate and
                                    severe acne may involve a higher risk of permanent scarring.</li>
                            </ul>
                            <ul>
                                <li><strong>Are There Any Side-Effects Of Acne Medication and Antibiotics?<br>
                                    </strong>No, anti-acne medication and antibiotics do not cause any side-effects when
                                    used under the supervision of an expert dermatologist.</li>
                            </ul>
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