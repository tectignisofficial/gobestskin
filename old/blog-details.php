<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/aesthetic/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 07:29:10 GMT -->

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
  <script nonce="ffab55ca-7a12-45cd-90bc-7493011bd8be">
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


  <header class="header header--normal">
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
                <li class="active"><a href="blog.html">News</a></li>
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


  <section class="blog-details spad">
    <div class="container">
      <div class="blog__details__hero set-bg" data-setbg="img/blog/details/blog-hero.jpg">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-7 text-center">
            <div class="blog__hero__text">
              <h2>Here???s how you can get a natural glow this party season</h2>
              <ul>
                <li><img src="img/blog/blog-author.jpg" alt=""> John Doe</li>
                <li>Dec 06, 2019</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <div class="blog__details__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
          </div>
          <div class="blog__details__text">
            <div class="blog__details__text__item">
              <h5>Step 1 - Anesthesia</h5>
              <p>Medications are administered for your comfort during the surgical procedure. The choices
                include intravenous sedation and general anesthesia. Your doctor will recommend the best
                choice for you.</p>
            </div>
            <div class="blog__details__text__item">
              <h5>Step 2 - The incision</h5>
              <p>Depending on the degree of change you'd like to see, your neck lift choices include a
                traditional neck lift incision or a limited incision neck lift.</p>
            </div>
          </div>
          <div class="blog__details__desc">
            <p>A traditional neck lift incision often begins in the hairline at the level of the sideburn,
              continues down and around the ear and ends in the posterior hair. Fat may be sculpted or
              redistributed from the jowls and neck. The tissue underlying the neck skin is repositioned,
              and commonly the platysma muscle is tightened. Skin is redraped over the uplifted contours
              and excess skin is trimmed away. A separate incision under the chin is often necessary for
              liposuction of this area and for repair of the muscle. Sutures or skin adhesives close the
              incisions.</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="blog__details__pic">
            <div class="row">
              <div class="col-sm-4">
                <img src="img/blog/details/bd-1.jpg" alt="">
              </div>
              <div class="col-sm-4">
                <img src="img/blog/details/bd-2.jpg" alt="">
              </div>
              <div class="col-sm-4">
                <img src="img/blog/details/bd-3.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="blog__details__desc__more">
            <p>A limited incision neck lift may involve incisions only around the ear. While the incisions
              are shorter, the results may be more limited.</p>
          </div>
          <div class="blog__details__text">
            <div class="blog__details__text__item">
              <h5>Step 3 - Closing the incisions</h5>
              <p>Incision lines are closed with sutures and perhaps skin glue. Sutures may be dissolving,
                or may need to be removed after a few days. Once healed, the incision lines from a neck
                lift are usually well concealed within the hairline and in the natural contours of the
                ear.</p>
            </div>
            <div class="blog__details__text__item">
              <h5>Step 4 - See the results</h5>
              <p>The visible improvements of a neck lift appear as swelling and bruising subside. Your
                final neck lift result should not only restore a more youthful and rested appearance,
                but also help you feel more confident about yourself.</p>
            </div>
          </div>
          <div class="blog__details__tag">
            <p><i class="fa fa-tag"></i> Tag:</p>
            <a href="#">Wedding</a>
            <a href="#">Event</a>
            <a href="#">Couple</a>
          </div>
          <div class="blog__details__btns">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <a href="#" class="blog__details__btn__item">
                  <h6 class="title"><i class="fa fa-angle-left"></i> Previous posts</h6>
                  <div class="blog__details__btn__pic">
                    <img src="img/blog/details/prev.jpg" alt="">
                  </div>
                  <div class="blog__details__btn__text">
                    <h6>Looking for Music & Sounds for my new Android...</h6>
                    <span>Nov 27, 2019</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <a href="#" class="blog__details__btn__item blog__details__btn__prev">
                  <h6 class="title">Next posts <i class="fa fa-angle-right"></i></h6>
                  <div class="blog__details__btn__pic">
                    <img src="img/blog/details/next.jpg" alt="">
                  </div>
                  <div class="blog__details__btn__text">
                    <h6>Looking for Music & Sounds for my new Android...</h6>
                    <span>Nov 27, 2019</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="blog__details__related">
            <h3>Recent posts</h3>
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                  <div class="blog__item__pic">
                    <img src="img/blog/blog-8.jpg" alt="">
                  </div>
                  <div class="blog__item__text">
                    <h5><a href="#">What are the steps of a body lift procedure?</a></h5>
                    <span>Dec 06, 2019</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                  <div class="blog__item__pic">
                    <img src="img/blog/blog-6.jpg" alt="">
                  </div>
                  <div class="blog__item__text">
                    <h5><a href="#">What are the steps of a neck lift procedure?</a></h5>
                    <span>Dec 06, 2019</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                  <div class="blog__item__pic">
                    <img src="img/blog/blog-9.jpg" alt="">
                  </div>
                  <div class="blog__item__text">
                    <h5><a href="#">How to shop for a cosm surgery procedure</a></h5>
                    <span>Dec 06, 2019</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="blog__details__comment">
            <h3>Leave a comment</h3>
            <form action="#">
              <div class="row">
                <div class="col-lg-4 col-md-4">
                  <input type="text" placeholder="Name">
                </div>
                <div class="col-lg-4 col-md-4">
                  <input type="text" placeholder="Email">
                </div>
                <div class="col-lg-4 col-md-4">
                  <input type="text" placeholder="Website">
                </div>
              </div>
              <textarea placeholder="Comment"></textarea>
              <button type="submit" class="site-btn">Send Message</button>
            </form>
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
    data-cf-beacon='{"rayId":"769e07584bdd8606","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.0","si":100}'
    crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/aesthetic/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 07:29:18 GMT -->

</html>