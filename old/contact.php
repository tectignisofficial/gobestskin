<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/aesthetic/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 07:29:24 GMT -->

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Aesthetic Template">
  <meta name="keywords" content="Aesthetic, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aesthetic | Template</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/flaticon.css" type="text/css">
  <link rel="stylesheet" href="css/nice-select.css" type="text/css">
  <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
  <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <script nonce="a98f9797-0542-47b5-9fa1-c3b47a7f92e9">
    (function (w, d) {
      ! function (e, f, g, h) {
        e.zarazData = e.zarazData || {};
        e.zarazData.executed = [];
        e.zaraz = {
          deferred: [],
          listeners: []
        };
        e.zaraz.q = [];
        e.zaraz._f = function (i) {
          return function () {
            var j = Array.prototype.slice.call(arguments);
            e.zaraz.q.push({
              m: i,
              a: j
            })
          }
        };
        for (const k of ["track", "set", "debug"]) e.zaraz[k] = e.zaraz._f(k);
        e.zaraz.init = () => {
          var l = f.getElementsByTagName(h)[0],
            m = f.createElement(h),
            n = f.getElementsByTagName("title")[0];
          n && (e.zarazData.t = f.getElementsByTagName("title")[0].text);
          e.zarazData.x = Math.random();
          e.zarazData.w = e.screen.width;
          e.zarazData.h = e.screen.height;
          e.zarazData.j = e.innerHeight;
          e.zarazData.e = e.innerWidth;
          e.zarazData.l = e.location.href;
          e.zarazData.r = f.referrer;
          e.zarazData.k = e.screen.colorDepth;
          e.zarazData.n = f.characterSet;
          e.zarazData.o = (new Date).getTimezoneOffset();
          if (e.dataLayer)
            for (const r of Object.entries(Object.entries(dataLayer).reduce(((s, t) => ({
                ...s[1],
                ...t[1]
              }))))) zaraz.set(r[0], r[1], {
              scope: "page"
            });
          e.zarazData.q = [];
          for (; e.zaraz.q.length;) {
            const u = e.zaraz.q.shift();
            e.zarazData.q.push(u)
          }
          m.defer = !0;
          for (const v of [localStorage, sessionStorage]) Object.keys(v || {}).filter((x => x.startsWith(
            "_zaraz_"))).forEach((w => {
            try {
              e.zarazData["z_" + w.slice(7)] = JSON.parse(v.getItem(w))
            } catch {
              e.zarazData["z_" + w.slice(7)] = v.getItem(w)
            }
          }));
          m.referrerPolicy = "origin";
          m.src = "https://preview.colorlib.com/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(e
            .zarazData)));
          l.parentNode.insertBefore(m, l)
        };
        ["complete", "interactive"].includes(f.readyState) ? zaraz.init() : e.addEventListener("DOMContentLoaded",
          zaraz.init)
      }(w, d, 0, "script");
    })(window, document);
  </script>
</head>

<body>

  <div id="preloder">
    <div class="loader"></div>
  </div>

  <div class="offcanvas-menu-overlay"></div>
  <div class="offcanvas-menu-wrapper">
    <div class="offcanvas__logo">
      <a href="index.html"><img src="img/logo.png" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__btn">
      <a href="#" class="primary-btn">Appointment</a>
    </div>
    <ul class="offcanvas__widget">
      <li><i class="fa fa-phone"></i> 1-677-124-44227</li>
      <li><i class="fa fa-map-marker"></i> Los Angeles Gournadi, 1230 Bariasl</li>
      <li><i class="fa fa-clock-o"></i> Mon to Sat 9:00am to 18:00pm</li>
    </ul>
    <div class="offcanvas__social">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-instagram"></i></a>
      <a href="#"><i class="fa fa-dribbble"></i></a>
    </div>
  </div>


  <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <ul class="header__top__left">
              <li><i class="fa fa-phone"></i> 1-677-124-44227</li>
              <li><i class="fa fa-map-marker"></i> Los Angeles Gournadi, 1230 Bariasl</li>
              <li><i class="fa fa-clock-o"></i> Mon to Sat 9:00am to 18:00pm</li>
            </ul>
          </div>
          <div class="col-lg-4">
            <div class="header__top__right">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-dribbble"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
          <div class="header__logo">
            <a href="index.html"><img src="img/logo.png" alt=""></a>
          </div>
        </div>
        <div class="col-lg-10">
          <div class="header__menu__option">
            <nav class="header__menu">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="#">Pages</a>
                  <ul class="dropdown">
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="doctor.html">Doctor</a></li>
                    <li><a href="blog-details.html">Blog Details</a></li>
                  </ul>
                </li>
                <li><a href="blog.html">News</a></li>
                <li class="active"><a href="contact.html">Contact</a></li>
              </ul>
            </nav>
            <div class="header__btn">
              <a href="#" class="primary-btn">Appointment</a>
            </div>
          </div>
        </div>
      </div>
      <div class="canvas__open">
        <i class="fa fa-bars"></i>
      </div>
    </div>
  </header>


  <section class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="breadcrumb__text">
            <h2>Contact Us</h2>
            <div class="breadcrumb__links">
              <a href="index.html">Home</a>
              <span>Contact</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="contact spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="contact__widget">
            <div class="contact__widget__icon">
              <i class="fa fa-map-marker"></i>
            </div>
            <div class="contact__widget__text">
              <h5>Address</h5>
              <p>Los Angeles Gournadi, 1230 Bariasl</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="contact__widget">
            <div class="contact__widget__icon">
              <i class="fa fa-phone"></i>
            </div>
            <div class="contact__widget__text">
              <h5>Hotline</h5>
              <p>1-677-124-44227 ??? 1-688-356-66889</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="contact__widget">
            <div class="contact__widget__icon">
              <i class="fa fa-envelope"></i>
            </div>
            <div class="contact__widget__text">
              <h5>Email</h5>
              <p><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__"
                  data-cfemail="db88aeababb4a9af9bbcb6bab2b7f5b8b4b6">[email&#160;protected]</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="contact__content">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="contact__pic">
              <img src="img/contact-pic.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="contact__form">
              <h3>Get in touch</h3>
              <form action="#">
                <input type="text" placeholder="Name">
                <input type="text" placeholder="Email">
                <input type="text" placeholder="Website">
                <textarea placeholder="Message"></textarea>
                <button type="submit" class="site-btn">Send Message</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include("include/footer.php")?>


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/masonry.pkgd.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/jquery.slicknav.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
    integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
    data-cf-beacon='{"rayId":"769e07654a608606","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.0","si":100}'
    crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/aesthetic/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 07:29:25 GMT -->

</html>