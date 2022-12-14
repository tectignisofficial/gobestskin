<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/aesthetic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 07:27:55 GMT -->

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
  <script nonce="7bdaa28d-faaf-4999-816d-fcb7d51aa935">
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
                <li class="active"><a href="index.html">Home</a></li>
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
                <li><a href="contact.html">Contact</a></li>
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


  <section class="hero spad set-bg" data-setbg="img/hero-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="hero__text">
            <span>Eiusmod tempor incididunt </span>
            <h2>Take the world's best quality Treadment</h2>
            <a href="#" class="primary-btn normal-btn">Contact us</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="consultation">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="consultation__form">
            <div class="section-title">
              <span>REQUEST FOR YOUR</span>
              <h2>Consultation</h2>
            </div>
            <form action="#">
              <input type="text" placeholder="Name">
              <input type="text" placeholder="Email">
              <div class="datepicker__item">
                <input type="text" placeholder="Date" class="datepicker">
                <i class="fa fa-calendar"></i>
              </div>
              <select>
                <option value="">Type of service</option>
                <option value="">Advanced equipment</option>
                <option value="">Qualified doctors</option>
                <option value="">Certified services</option>
                <option value="">Emergency care</option>
              </select>
              <button type="submit" class="site-btn">Book appoitment</button>
            </form>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="consultation__text">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="consultation__text__item">
                  <div class="section-title">
                    <span>Welcon to Aesthetic</span>
                    <h2>Find Best Doctors With <b>AESTHETIC</b></h2>
                  </div>
                  <p>30 Years of experience in Cosmetic Surgery.Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="consultation__video set-bg" data-setbg="img/consultation-video.jpg">
                  <a href="https://www.youtube.com/watch?v=PXsuI67s2AA" class="play-btn video-popup"><i
                      class="fa fa-play"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="chooseus spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-title">
            <span>Why choose us?</span>
            <h2>Offer for you</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="chooseus__item">
            <img src="img/icons/ci-1.png" alt="">
            <h5>Advanced equipment</h5>
            <p>Lorem ipsum amet, consectetur adipiscing elit, sed do eiusmod tempor cididunt facilisis.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="chooseus__item">
            <img src="img/icons/ci-2.png" alt="">
            <h5>Qualified doctors</h5>
            <p>Lorem ipsum amet, consectetur adipiscing elit, sed do eiusmod tempor cididunt facilisis.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="chooseus__item">
            <img src="img/icons/ci-3.png" alt="">
            <h5>Certified services</h5>
            <p>Lorem ipsum amet, consectetur adipiscing elit, sed do eiusmod tempor cididunt facilisis.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="chooseus__item">
            <img src="img/icons/ci-4.png" alt="">
            <h5>Emergency care</h5>
            <p>Lorem ipsum amet, consectetur adipiscing elit, sed do eiusmod tempor cididunt facilisis.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="services spad set-bg" data-setbg="img/services-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-6">
          <div class="section-title">
            <span>Our services</span>
            <h2>Offer for you</h2>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="services__btn">
            <a href="#" class="primary-btn">Contact us</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="services__item">
            <div class="services__item__icon">
              <span class="flaticon-044-aesthetic"></span>
            </div>
            <div class="services__item__text">
              <h5>Body procedures</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="services__item">
            <div class="services__item__icon">
              <span class="flaticon-027-beauty"></span>
            </div>
            <div class="services__item__text">
              <h5>Facial Procedures</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="services__item">
            <div class="services__item__icon">
              <span class="flaticon-031-anatomy"></span>
            </div>
            <div class="services__item__text">
              <h5>Breast procedures</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="services__item">
            <div class="services__item__icon">
              <span class="flaticon-008-abdominoplasty"></span>
            </div>
            <div class="services__item__text">
              <h5>Skin care & Beauty</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="team spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-title">
            <span>Our Team</span>
            <h2>Our Expert Doctors</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="team__item">
            <img src="img/team/team-1.jpg" alt="">
            <h5>Caroline Grant</h5>
            <span>Plastic surgeon</span>
            <div class="team__item__social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-dribbble"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="team__item">
            <img src="img/team/team-2.jpg" alt="">
            <h5>Dr. Maria Angel</h5>
            <span>Plastic surgeon</span>
            <div class="team__item__social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-dribbble"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="team__item">
            <img src="img/team/team-3.jpg" alt="">
            <h5>Nathan Mullins</h5>
            <span>Plastic surgeon</span>
            <div class="team__item__social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-dribbble"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="gallery">
    <div class="gallery__container">
      <div class="grid-sizer"></div>
      <div class="gc__item set-bg" data-setbg="img/gallery/gallery-1.jpg">
        <a href="img/gallery/gallery-1.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
      </div>
      <div class="gc__item set-bg" data-setbg="img/gallery/gallery-2.jpg">
        <a href="img/gallery/gallery-2.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
      </div>
      <div class="gc__item set-bg" data-setbg="img/gallery/gallery-3.jpg">
        <a href="img/gallery/gallery-3.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
      </div>
      <div class="gc__item gc__item__large set-bg" data-setbg="img/gallery/gallery-4.jpg">
        <a href="img/gallery/gallery-4.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
      </div>
      <div class="gc__item set-bg" data-setbg="img/gallery/gallery-5.jpg">
        <a href="img/gallery/gallery-5.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
      </div>
      <div class="gc__item set-bg" data-setbg="img/gallery/gallery-6.jpg">
        <a href="img/gallery/gallery-6.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
      </div>
      <div class="gc__item set-bg" data-setbg="img/gallery/gallery-7.jpg">
        <a href="img/gallery/gallery-7.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
      </div>
    </div>
  </div>


  <section class="latest spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-6">
          <div class="section-title">
            <span>Our News</span>
            <h2>Skin care tips</h2>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="latest__btn">
            <a href="#" class="primary-btn">View all news</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="latest__item">
            <h5><a href="#">Here???s how you can get a natural glow this party season</a></h5>
            <p>Lorem ipsum, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            <ul>
              <li><img src="img/blog/blog-author.jpg" alt=""> John Doe</li>
              <li>Dec 06, 2019</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="latest__item">
            <h5><a href="#">Get better skin with these top 10 tips for skin care</a></h5>
            <p>Lorem ipsum, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            <ul>
              <li><img src="img/blog/blog-author.jpg" alt=""> John Doe</li>
              <li>Dec 06, 2019</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="latest__item">
            <h5><a href="#">8 Ways to Save Your Skin if You Exercise Outside This Winter</a></h5>
            <p>Lorem ipsum, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            <ul>
              <li><img src="img/blog/blog-author.jpg" alt=""> John Doe</li>
              <li>Dec 06, 2019</li>
            </ul>
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
    data-cf-beacon='{"rayId":"769e06f6db0f8606","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.0","si":100}'
    crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/aesthetic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 07:28:42 GMT -->

</html>