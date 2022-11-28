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

            .img-3 {
                width: 32%;
                margin-right: 1.3%;
                float: left;
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

        .img-3 {
            width: 16%;
            margin-right: 10.6%;
            float: left;
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
        <img loading="lazy" src="https://www.olivaclinic.com/wp-content/banner/service/desktop/acne-scar.jpg?var=1"
            alt="Open Pores" width="100%" height="200">
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
                            <li> <span title="Laser Hair Removal">&nbsp;&nbsp; Open Pores</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="template_concern_page">
                <section class="col-xs-12 col-sm-12 col-md-12 about-allergies">
                    <div class="container">
                        <pre
                            style="display:none;">25869<br>page-template/template_concern_page.php<br><br>24449<br>page-template/template_concern_page.php</pre>
                        <h1 class="med_bottompadder40">Large Open Pores: Causes, Treatments, Results &amp; Prevention
                        </h1>
                        <div class="nav-folderized">
                            <div class="table-of-contents  ftr__list checknav">
                                <h4>Table of contents</h4>
                                <ul>
                                    <li></li>
                                    <li><a href="#intro">Intro</a></li>
                                    <li><a href="#causes">Causes</a></li>
                                    <li><a href="#diagnosis">Diagnosis</a></li>
                                    <li><a href="#risk">Risk</a></li>
                                    <li><a href="#self-care">Self-Care</a></li>
                                    <li><a href="#treatment">Treatment</a></li>
                                    <li><a href="#results">Results</a></li>
                                    <li><a href="#prevention">Prevention</a></li>
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
                                    <li><a href="#causes">Causes</a></li>
                                    <li><a href="#diagnosis">Diagnosis</a></li>
                                    <li><a href="#risk">Risk</a></li>
                                    <li><a href="#self-care">Self-Care</a></li>
                                    <li><a href="#treatment">Treatment</a></li>
                                    <li><a href="#results">Results</a></li>
                                    <li><a href="#prevention">Prevention</a></li>
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
                                <li>Pores represent the openings of ducts carrying sweat and oil or sebum from deeper
                                    layers of the skin on to the surface.</li>
                                <li>Pores vary in their occurrence across ethnicities and age. They are common in both
                                    men and women.</li>
                                <li>Facial pores become prominent with age. </li>
                                <li>Pores may be almost invisible to the naked eye in the early stages but can enlarge
                                    later due to skin damage, age, hormones, genetics and changes in sebaceous function.
                                </li>
                                <li>Pores are of different sizes, ranging between 5–10 μm and 40–80 μm in diameter.
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="intro" class="intro">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">What Are Open Pores?</h2>
                            <p>The term ‘open pores’ refers to enlarged skin pores that have become more noticeable over
                                time. The pores on the skin allow it to ‘breathe’ by releasing the sebum or natural oil
                                onto the surface. However, large skin pores often appear in areas that have a higher
                                density of sebaceous glands specifically, in the ‘t-zone’ of the face. They adversely
                                affect the skin texture and become an aesthetic concern for both men and women with oily
                                or combination skin types.</p>
                            <p>The skin concern affects teenagers undergoing hormonal changes and adults with ageing
                                skin or hormonal issues too! After knowing the meaning of open pores, it’s time to find
                                out its causes. Also, explore effective treatments and preventive tips for minimising
                                them, right here!</p>
                            <p><strong>Below are some images of open pores:</strong></p>
                            <div class="img-3">
                                <picture>
                                    <source
                                        srcset="https://www.olivaclinic.com/wp-content/webp-express/webp-images/uploads/2019/12/open-pores-face.jpg.webp"
                                        type="image/webp"><img class="alignnone webpexpress-processed"
                                        title="open pores on face"
                                        src="https://www.olivaclinic.com/wp-content/uploads/2019/12/open-pores-face.jpg"
                                        alt="open pores on face" width="263" height="250"></picture>
                            </div>
                            <div class="img-3">
                                <picture>
                                    <source
                                        srcset="https://www.olivaclinic.com/wp-content/webp-express/webp-images/uploads/2019/12/open-pores-nose.jpg.webp"
                                        type="image/webp"><img class="alignnone webpexpress-processed"
                                        title="open pores on nose"
                                        src="https://www.olivaclinic.com/wp-content/uploads/2019/12/open-pores-nose.jpg"
                                        alt="open pores on nose" width="263" height="250"></picture>
                            </div>
                            <div class="img-3">
                                <picture>
                                    <source
                                        srcset="https://www.olivaclinic.com/wp-content/webp-express/webp-images/uploads/2019/12/open-pores-forehead.jpg.webp"
                                        type="image/webp"><img class="alignnone webpexpress-processed"
                                        title="open pores on forehead "
                                        src="https://www.olivaclinic.com/wp-content/uploads/2019/12/open-pores-forehead.jpg"
                                        alt="open pores on forehead " width="263" height="250"></picture>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="causes" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">What Causes Large Open Pores?</h2>
                            <p>Check out the top reasons for the occurrence of open pores:</p>
                            <ul>
                                <li><strong>Excessive Sebum Production: </strong>Excessive secretion of sebum,
                                    especially in the case of those who have oily or combination skin leads to the
                                    enlargement of hair follicle openings and the appearance of large open pores.</li>
                                <li><strong>Increased Hair Follicle Volume:</strong> Hair follicles are tubular in
                                    structure. Thicker hair follicles have a bigger follicular opening that forms skin
                                    pores. These dilate further to allow the flow of natural oil and appear enlarged.
                                </li>
                                <li><strong>Heredity Factor:</strong> Genetic predisposition and ethnicity are
                                    significant internal factors that cause large open pores.</li>
                                <li><strong>Ageing And Sun Exposure:</strong> <a
                                        href="https://www.olivaclinic.com/ageing-issues/">Ageing</a> and sun damage may
                                    adversely affect the collagen and elastin fibres in the skin. Diminished strength
                                    and elasticity of the skin may make the pores appear crater-like in older adults.
                                </li>
                                <li><strong>Chronic Acne:</strong> Pores in <a
                                        href="https://www.olivaclinic.com/acne-vulgaris/">acne-prone skin</a>, clog and
                                    cause blackheads and whiteheads. Moreover, inflammatory acne weakens sebum glands
                                    and follicular openings and enlarges the pores.</li>
                                <li><strong>Hormonal Changes:</strong> Hormonal fluctuations stimulate the hyperactivity
                                    of sebaceous glands and trigger the production of excessive sebum, which results in
                                    large open pores.</li>
                                <li><strong>Acute Skin Conditions And Nutritional Deficiency:</strong> Chronic
                                    radiodermatitis and vitamin A deficiency are other uncommon causes of enlarged skin
                                    pores.</li>
                            </ul>
                            <hr>
                            <p><strong>Informative Resources:</strong></p>
                            <ul>
                                <li><a href="https://www.olivaclinic.com/blog/how-to-get-a-clear-skin/">Top 10 Mistakes
                                        To Avoid Wornesing Your Acne Outbreak!</a></li>
                                <li><a href="https://www.olivaclinic.com/blog/how-to-get-rid-of-pimples/">How To Get Rid
                                        Of Acne Fast?</a></li>
                            </ul>
                            <hr>
                        </div>
                    </div>
                </section>
                <section id="diagnosis" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">How To Diagnose Large Open Pores?</h2>
                            <p>A dermatologist will first perform a physical examination of the affected area. He or she
                                will determine the severity of the condition based on the following criteria:</p>
                            <ul>
                                <li>Size of the pores</li>
                                <li>Location of the pores</li>
                                <li>Severity of the condition</li>
                                <li>Size of the affected area</li>
                            </ul>
                            <p>Post-evaluation, the dermatologist will note your family and medical history, hormonal
                                health and lifestyle habits to identify the underlying cause of the concern. Based on
                                his assessment of <a
                                    href="https://www.olivaclinic.com/blog/how-to-know-your-skin-type/">your skin
                                    type</a>, the severity of the condition and the underlying cause, he will recommend
                                a customised treatment plan for reducing your open pores visibly.</p>
                        </div>
                    </div>
                </section>
                <section id="risk" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Are You At Risk? </h2>
                            <p>If along with large pores on your face, you experience skin infections or acne, you
                                should consult a dermatologist immediately. Keep in mind that large skin pores are
                                benign, cause no <a href="https://www.olivaclinic.com/pigmentation/">pigmentation</a>,
                                and do not cause other skin afflictions. They are not a serious medical concern.</p>
                            <p>However, seek medical help if you note a significant increase in pore size, distribution
                                or density. Your dermatologist can treat the condition effectively to improve your skin
                                texture.</p>
                        </div>
                    </div>
                </section>
                <section id="self-care" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Self-Care:</h2>
                            <p>Though it is the first line of action for most people, open pores treatment at home is a
                                bad idea. Avoid using any OTC products like creams, serums and toners for reducing open
                                pores as they will give you temporary results at best. Unsupervised use of medicated
                                ointments may cause a severe side-effect. Experimenting with home remedies for open
                                pores that have unproven safety and efficacy may cause an allergic reaction and worsen
                                your skin condition. It is best to consult a dermatologist for recommending any
                                skin-care products or aesthetic procedures based on your skin type, cause and condition.
                            </p>
                        </div>
                    </div>
                </section>
                <section id="treatment" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Advanced Treatments For Large Open Pores:</h2>
                            <p>Enlarged pores are challenging to treat as they may be a result of various underlying
                                factors. Leading dermatologists at Oliva combine medical treatments for open pores with
                                advanced aesthetic procedures to give you visible results. They focus on treating
                                primary triggers by controlling excessive sebum production and minimising skin damage
                                due to ageing.</p>
                            <p>Your medical expert at Oliva may suggest the following modalities as standalone or
                                combination treatment to give you the best results:</p>
                            <ul>
                                <li><strong>Topical Therapies:</strong> Many qualified skin experts recommend the use of
                                    topical applications like Tretinoin, topical nicotinamide, Vitamin C, or AHAs to
                                    diminish open pores. They also advise the dosage and direction for use to ensure
                                    visible improvement in your skin texture.</li>
                                <li><strong>Oral Medications:</strong> The medical experts at Oliva have a holistic
                                    approach. They may prescribe oral medicines such as oral retinoids (Isotretinoin),
                                    antiandrogens (spironolactone) and oral contraceptives to treat any hormonal cause
                                    of enlarged pores. You must follow the instructions related to the drug intake
                                    strictly to get the best results without any side-effects.</li>
                                <li><strong>Laser Toning:</strong> Top doctors at Oliva specialise in performing
                                    advanced laser treatment for open pores using USFDA-approved technology. They use
                                    Q-Switched YAG and fractionated erbium YAG laser to boost the collagen production in
                                    the skin and minimise the appearance of open pores effectively. A 2011 study
                                    revealed that Q-switched lasers visibly reduce open pores when used along with
                                    photo-activated topical solutions.</li>
                                <li><strong>Fractional Micro-Needling Radiofrequency (MNRF):</strong> Experienced
                                    dermatologists at Oliva may use tiny micro-needles to release radiofrequency energy
                                    in the deeper layers of the skin. It stimulates collagen and elastin production and
                                    thereby results in the decreased visibility of enlarged pores.</li>
                            </ul>
                            <p>Watch the video below to know more about the procedure, benefits and results of the MNRF
                                treatment at Oliva.</p>
                            <p><iframe width="640" height="360" class="iframevideo"
                                    src="https://www.youtube.com/embed/kG07d1Qoubs?feature=oembed" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen=""></iframe></p>
                            <ul>
                                <li><strong>Chemical Peels:</strong> The medical team at Oliva recommends the
                                    application of salicylic acid peels and glycolic acid peels for the controlled
                                    exfoliation of the dead cells. It helps control excess sebum production and aids
                                    skin renewal. It is an effective treatment for reducing large skin pores.</li>
                            </ul>
                            <p>Check out the video here to know all about the advanced chemical peel treatment at Oliva.
                            </p>
                            <p><iframe width="640" height="360" class="iframevideo"
                                    src="https://www.youtube.com/embed/gBypU29ipnA?feature=oembed" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen=""></iframe></p>
                            <ul>
                                <li><strong>Comedone Extraction:</strong>&nbsp;Our skin experts may use specialised
                                    tools to extricate open comedones (blackheads) and closed comedones (whiteheads).
                                    The procedure helps prevent clogging and subsequent widening of pores.</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="results" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Before And After Results</h2>
                            <p>
                                <picture>
                                    <source
                                        srcset="https://www.olivaclinic.com/wp-content/webp-express/webp-images/uploads/2020/04/open-pores.jpg.webp"
                                        type="image/webp"><img
                                        class="alignnone size-full wp-image-32869 webpexpress-processed"
                                        src="https://www.olivaclinic.com/wp-content/uploads/2020/04/open-pores.jpg"
                                        alt="open pores on face before and after results" width="800" height="345">
                                </picture>
                            </p>
                            <p>Now you know about all the available professional solutions for open pores. Are you aware
                                that a simple skin-care routine can work wonders for decreasing the appearance of open
                                pores? Read right ahead to know more!</p>
                        </div>
                    </div>
                </section>
                <section id="prevention" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">How To Prevent The Appearance Of Large Open Pores?</h2>
                            <p>If you are wondering how to close the open pores on your face; you can do your bit by
                                keeping the skin clean and sun-safe. Here are some simple skin-care tips you can follow
                                to prevent the open pores from becoming prominent:</p>
                            <ul>
                                <li><strong>Clean:</strong> Use a gentle, gel-based, non-comedogenic cleanser twice
                                    daily to unclog pores.</li>
                                <li><strong>Protect:</strong> Apply a broad-spectrum, water-resistant sunscreen with SPF
                                    30+ every day to prevent premature skin ageing due to sun damage.</li>
                                <li><strong>Nourish:</strong> Use water-based moisturisers suitable for oily/combination
                                    skin. You may also ask your skin specialist to recommend any collagen-boosting
                                    products, such as retinol.</li>
                            </ul>
                            <p>However, if you feel the above tips are not giving you the desired results, it’s
                                advisable to explore advanced solutions.</p>
                            <hr>
                            <p><strong>Informative Resources:</strong></p>
                            <ul>
                                <li><a href="#">How To
                                        Prevent Pimples On Face?</a></li>
                                <li><a href="#">What
                                        Is The Best Skin Care Routine For Acne Prone Skin?</a></li>
                            </ul>
                            <hr>
                        </div>
                    </div>
                </section>
                <section id="prognosis" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Prognosis:</h2>
                            <p>Please remember, no treatment can remove pores from your face completely or permanently.
                                However, advanced dermatological procedures can reduce the appearance of enlarged pores
                                and give you a smoother and more radiant skin texture than before.</p>
                            <p>If open pores are drawing all your attention of late, consult a dermatologist at Oliva
                                Skin &amp; Hair Clinic today to find a suitable treatment option that can restore your
                                smooth and flawless skin!</p>
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
                        </div>
                    </div>
                </section>
                <section id="faqs" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Common Questions</h2>
                            <ul>
                                <li><strong>What Is The Difference Between Acne Scars And Open Pores?</strong><br>
                                    Open pores occur due to excess sebum production that eventually leads to acne and <a
                                        href="#">scars</a>.</li>
                                <li><strong>Is It Possible To Close Open Pores Permanently?<br>
                                    </strong>No, it is not possible to permanently close open pores as they help us
                                    enjoy a healthy skin by releasing natural oils.</li>
                                <li><strong>Do Open Pores Cause Acne?<br>
                                    </strong>Open pores do not directly cause acne. They are a sign of excess sebum
                                    production, which may lead to clogging of pores and acne if left untreated.</li>
                                <li><strong>Are open pores curable?<br>
                                    </strong>Open pores are not curable. However, by opting for advanced
                                    medico-aesthetic treatment at Oliva, you can minimise them effectively.</li>
                                <li><strong>Can You Shrink Your Pores?<br>
                                    </strong>Yes, medico-aesthetic treatment performed by experienced dermatologists can
                                    visibly reduce the size of your skin pores.</li>
                                <li><strong>Is It Bad To Squeeze Nose Pores?<br>
                                    </strong>Yes, man-handling large pores on your nose can cause hyperpigmentation and
                                    scars.</li>
                                <li><strong>Are Open Pores Bad?<br>
                                    </strong>Large open pores adversely affect the texture and appearance of your skin
                                    and maybe a visible sign of premature ageing. However, there are many effective
                                    treatments available to decrease their appearance.</li>
                                <li><strong>Do Pores Get Bigger As You Age?<br>
                                    </strong>Yes, with ageing skin pores may appear enlarged for some people. However,
                                    it varies from person to person.</li>
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