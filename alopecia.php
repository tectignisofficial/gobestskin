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
                height: 120px !important;
            }

            .img-responsive {
                width: 350px !important;
                height: 165px !important;
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
            width: 180px;
            height: auto;
            margin-right: 05.6%;
            float: left;
        }

        .template_concern_page img {
            border: 2px solid #00b6bd;
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
        <img loading="lazy" src="https://www.olivaclinic.com/wp-content/banner/service/desktop/hair-loss.jpg?var=1"
            alt="Hair Loss" width="100%" height="200">
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
                            <li> <span title="Laser Hair Removal">&nbsp;&nbsp; Alopecia</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="template_concern_page">
                <section class="col-xs-12 col-sm-12 col-md-12 about-allergies">
                    <div class="container">
                        <pre
                            style="display:none;">26880<br>page-template/template_concern_page.php<br> <br>24714<br>page-template/template_concern_page.php</pre>
                        <h1 class="med_bottompadder40">Alopecia (Hair Loss): Types, Causes &amp; Management Options</h1>
                        <div class="nav-folderized">
                            <div class="table-of-contents  ftr__list checknav">
                                <h4>Table of contents</h4>
                                <ul>
                                    <li></li>
                                    <li><a href="#intro">Intro</a></li>
                                    <li><a href="#types">Types</a></li>
                                    <li><a href="#pathophysiology">Pathophysiology</a></li>
                                    <li><a href="#causes">Causes</a></li>
                                    <li><a href="#signs_&amp;_symptoms">Signs &amp; Symptoms</a></li>
                                    <li><a href="#diagnosis">Diagnosis</a></li>
                                    <li><a href="#risk's">Risk's</a></li>
                                    <li><a href="#self-care">Self-care</a></li>
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
                                    <li><a href="#types">Types</a></li>
                                    <li><a href="#pathophysiology">Pathophysiology</a></li>
                                    <li><a href="#causes">Causes</a></li>
                                    <li><a href="#signs_&amp;_symptoms">Signs &amp; Symptoms</a></li>
                                    <li><a href="#diagnosis">Diagnosis</a></li>
                                    <li><a href="#risk's">Risk's</a></li>
                                    <li><a href="#self-care">Self-care</a></li>
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
                                <li>The medical term for hair loss is alopecia.</li>
                                <li>A study identified that almost 58% of men between 30 and 50 years suffer from some
                                    form of alopecia. </li>
                                <li>12% of women between 20 and 29 years of age experience hair loss.</li>
                                <li>Hereditary or genetic factors are the primary reasons for hair loss.</li>
                                <li>Fortunately, with the recent advancements in trichology, doctors can treat even
                                    severe cases of hair loss. </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="intro" class="intro">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">What Is Hair Loss?</h2>
                            <p>Alopecia refers to hair loss that may be partial or complete, localised or generalised
                                due to external or internal factors. Typically, we lose roughly 100 hairs a day, but if
                                you lose more than that (around 120-150 or more) or if you see specific areas of the
                                scalp being affected, you must consult a trichologist immediately.</p>
                            <p>Hair loss can affect any part of the body, including the scalp. The most common form of
                                hair loss is androgenetic alopecia or patterned hair loss, and it develops gradually
                                with time. Hair loss can affect anyone, but androgenetic alopecia is affecting people as
                                early as in their 20s to 30s.</p>
                            <hr>
                            <p><a href="#">
                                    <picture>
                                        <source
                                            srcset="https://www.olivaclinic.com/wp-content/webp-express/webp-images/uploads/2019/12/hair-calculator.jpg.webp"
                                            type="image/webp"><img class="alignnone webpexpress-processed"
                                            src="https://www.olivaclinic.com/wp-content/uploads/2019/12/hair-calculator.jpg"
                                            alt="hair loss calculator" width="1250" height="250"></picture>
                                </a></p>
                            <hr>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </section>
                <section id="types" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Types Of Hair Loss:</h2>
                            <p><strong>Qualified trichologists categorise hair loss into the following types:</strong>
                            </p>
                            <ul>
                                <li><strong>Androgenetic Alopecia</strong> – It is a common form of hair loss that can
                                    affect both men and women as early as during teenage with the risk increasing with
                                    age.
                                    <ul>
                                        <li><a href="#"><strong>Male
                                                    Pattern Baldness</strong></a> – Hair loss occurs in a well-defined
                                            pattern, beginning above both the temples. Over time, the hairline recedes
                                            to form a characteristic ‘M’ shape. Hair also thins at the crown (near the
                                            top of the head), often progressing to partial or complete baldness.</li>
                                        <li><a href="#"><strong>Female
                                                    Pattern Baldness</strong></a> – Here, the hair becomes thinner over
                                            the top of the head with the midline parting becoming more pronounced.
                                            However, the hairline does not recede. This type of hair loss in women
                                            rarely leads to total baldness.</li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li><strong>Telogen Effluvium</strong> – It is the most common form of diffuse hair loss
                                    that affects the scalp coverage adversely. It occurs around three months after a
                                    triggering event and is self-limiting, usually lasting for about six months.</li>
                                <li><strong><a href="#">Alopecia
                                            Areata</a></strong> – It is a hair loss condition that causes discrete round
                                    bald patches appearing on different parts of the scalp with the remaining hairs on
                                    the head being entirely unaffected. However, it can eventually lead to total hair
                                    loss. It occurs when the immune system attacks and destroys healthy body tissue.
                                </li>
                                <li><strong>Trichotillomania</strong> – It is a type of alopecia caused by the repeated
                                    pulling of hair. Doctors associate this type of alopecia with an impulse control
                                    disorder.</li>
                                <li><strong>Involutional Alopecia</strong> – It is a form of hair loss that occurs
                                    because of the natural ageing process. The primary cause of this form of hair loss
                                    is the shortening of the anagen (growth) phase of the hair growth cycle. In this
                                    case, hair does not grow as fast as it sheds.</li>
                                <li><strong>Scarring Alopecia</strong> – Also known as <a href="#">cicatricial
                                        alopecia</a>, is a rare condition caused when inflammation or scarring due to
                                    various diseases hampers the scalp’s natural ability to grow hair.</li>
                            </ul>
                            <hr>
                            <p><strong>Informative Resources:</strong></p>
                            <ul>
                                <li><a href="#">How
                                        To Treat Temple Hair Loss?</a></li>
                                <li><a href="#">What
                                        Are The Early Signs Of Hair Loss And Balding?</a></li>
                                <li><a href="#">How
                                        To Reduce Hair Loss?</a></li>
                                <li><a href="#">How
                                        To Stop Hair Thinning?</a></li>
                            </ul>
                            <hr>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </section>
                <section id="pathophysiology" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Pathophysiology:</h2>
                            <p>Hair loss is a result of a disturbance to the <a href="#">hair growth
                                    cycle</a>. Hair growth occurs in the following phases:–</p>
                            <ul>
                                <li>Anagen or the active growth phase (2 to 7 weeks)</li>
                                <li>Catagen or the transition phase (1 to 2 weeks)</li>
                                <li>Telogen or the resting phase (5 to 12 weeks)</li>
                            </ul>
                            <p>On average, only 9 to 10% of hair is in the telogen phase on a healthy scalp. In
                                androgenetic alopecia, there is progressive miniaturisation (thinning) of the hair,
                                which causes increased scalp visibility. Also, the anagen phase shortens, and the
                                telogen phase lengthens. Eventually, the hair sheds, leading to hair loss.</p>
                            <p><strong>Must Watch:</strong></p>
                            <p><iframe
                                    title="Natural Hair Growth Cycle: Explainer Video On Anagen, Catagen &amp; Telogen Phases"
                                    width="640" height="360" class="iframevideo"
                                    src="https://www.youtube.com/embed/004UHWXWD8Y?feature=oembed" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen=""></iframe></p>
                        </div>
                    </div>
                </section>
                <section id="causes" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Hair Loss Causes:</h2>
                            <p><strong>Several factors can trigger hair loss, including the following:</strong></p>
                            <ul>
                                <li><strong>Heredity</strong> – Positive family history can increase your chances of
                                    having androgenetic alopecia. Men may notice bald patches or a receding hairline,
                                    whereas women may observe thinning of hair at the parting and increased scalp
                                    visibility.</li>
                                <li><strong>Hormonal disorders</strong> – Hormonal imbalance during pregnancy or
                                    menopause trigger hair loss in women. Also, hormonal shifts due to the use of birth
                                    control pills, childbirth and hysterectomy can induce hair loss due to the
                                    shortening of the anagen phase. Insulin resistance can also result in hair loss. Men
                                    also suffer from hair loss due to hormonal imbalance.</li>
                                <li><strong>Poor lifestyle</strong> – Stress, improper diet, nutritional deficiencies,
                                    and poor lifestyle habits can cause hair loss.</li>
                                <li><strong>Medication</strong> – Use of chemotherapy to treat cancer leads to hair loss
                                    as a side effect.</li>
                                <li><strong>Tight hairstyles and chemical treatments</strong> – High-tension hairstyles
                                    such as tight ponytails may cause traction of hair follicles and lead to hair loss.
                                    Chemical treatments with the use of bleach, colour, and dye may lead to temporary
                                    hair loss.</li>
                                <li><strong>Other causes</strong> – Some other less known causes can include chronic
                                    illnesses related to thyroid disorders, lupus, and polycystic ovarian disease
                                    (PCOD). Crash diets, habits like nervous hair pulling or scalp rubbing, rapid weight
                                    loss, infections, allergies to hair dyes, hair cosmetics, conditions like Seborrheic
                                    dermatitis or Psoriasis of the scalp may trigger acute hair loss.</li>
                            </ul>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </section>
                <section id="signs_&amp;_symptoms" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Signs And Symptoms:</h2>
                            <ul>
                                <li>Excessive and consistent hair loss.</li>
                                <li>Thinning of hair from the crown area.</li>
                                <li>Appearance of bald patches that are usually circular.</li>
                                <li>Sudden loss of hair due to fungal scalp infection accompanied with pain or itching.
                                </li>
                                <li>Patchy hair growth.</li>
                                <li>A receding hairline in the form of the letter M.</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="diagnosis" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Diagnosis:</h2>
                            <p>Trichologists diagnose hair loss based on medical history, a detailed physical
                                examination and trichoscopy. Also, your doctor may recommend a biopsy to ascertain the
                                cause of severe hair loss in case of doubt and find a suitable treatment option.</p>
                            <p>🔗&nbsp;<strong><a href="#">Oliva’s Hair
                                        Loss Solutions</a></strong></p>
                        </div>
                    </div>
                </section>
                <section id="risk's" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Are You At Risk?</h2>
                            <p>Usually, men with a family history of baldness are likely to suffer from the same. Women
                                who are experiencing hormonal imbalances due to pregnancy, menopause, use of birth
                                control pills or PCOD are also susceptible to having acute hair loss.</p>
                        </div>
                    </div>
                </section>
                <section id="self-care" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Prevention And Management:</h2>
                            <p><strong>Here are some simple tips to prevent hair loss:</strong></p>
                            <ul>
                                <li>Avoid using harsh chemical hair products as well as heat styling tools such as
                                    straighteners and perming irons.</li>
                                <li>Practice a healthy hair care routine and use a mild shampoo twice or thrice a week
                                    to keep your hair clean. The frequency of shampooing depends on your hair type and
                                    the exposure to dust and pollution.</li>
                                <li>Eat a balanced diet rich in essential nutrients and vitamins such as iron, vitamin
                                    B12, Vitamin D, protein, and Vitamin E.</li>
                                <li>Adopt a healthy lifestyle and keep stress at bay by exercising regularly or
                                    practising yoga or meditation.</li>
                                <li>Avoid hairstyles that put excessive traction on the hair.</li>
                            </ul>
                            <p><strong>Self-care:</strong></p>
                            <p>Self-care may help manage the hair loss problem temporarily, but it cannot provide an
                                effective long-term solution.</p>
                        </div>
                    </div>
                </section>
                <section id="treatments" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Treatment Options Available At Oliva Clinic:</h2>
                            <p><strong>Here are some of the treatment options our doctors recommend to treat hair
                                    loss:</strong></p>
                            <ol>
                                <li>Oral medication</li>
                                <li>Topical medication</li>
                                <li>Hair Regrowth Treatment</li>
                                <li>Hair Transplantation</li>
                            </ol>
                            <p><strong>Must Watch:</strong></p>
                            <p><iframe
                                    title="PRP Treatment For Hair Fall, Baldness &amp; Hair Regrowth: Before, After Results"
                                    width="640" height="360" class="iframevideo"
                                    src="https://www.youtube.com/embed/S_plTn5WaqI?feature=oembed" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen=""></iframe></p>
                            <picture>
                                <source
                                    srcset="https://www.olivaclinic.com/wp-content/webp-express/webp-images/uploads/2018/11/prp-hair-treatment-results.jpg.webp"
                                    type="image/webp"><img class="img-responsive webpexpress-processed"
                                    src="https://www.olivaclinic.com/wp-content/uploads/2018/11/prp-hair-treatment-results.jpg"
                                    alt="PRP Hair Treatment"></picture>
                        </div>
                    </div>
                </section>
                <section id="prognosis" class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="container">
                        <div class="row">
                            <h2 class="med_bottompadder40">Prognosis:</h2>
                            <p>One may reverse hair loss when caused by an underlying medical condition. On the other
                                hand, hereditary hair loss is challenging to treat and requires advanced aesthetic
                                procedures. The earlier the treatment starts, the better are the chances to revive the
                                lost hair. The safest approach is to consult a dermatologist and explore your options.
                                The diagnosis of the cause of hair loss plays a critical role in determining the
                                treatment plan.</p>
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