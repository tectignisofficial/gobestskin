<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/aesthetic/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 07:29:00 GMT -->

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
  <script nonce="cf38508f-a613-4942-bf70-3ca406c04982">
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
                <li class="active"><a href="services.html">Services</a></li>
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


  <section class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="breadcrumb__text">
            <h2>Our Services</h2>
            <div class="breadcrumb__links">
              <a href="index.html">Home</a>
              <span>Services</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="services-page spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 order-lg-2">
          <div class="services__details">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="services__details__title">
                  <span>Facial procedures</span>
                  <h3>Min Facelift</h3>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="services__details__widget">
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <h3>$ 159.50</h3>
                </div>
              </div>
            </div>
            <div class="services__details__pic">
              <img src="img/services/services-details.jpg" alt="">
            </div>
            <div class="services__details__text">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                viverra maecenas accumsan lacus vel facilisis magnam aliquid. Cupiditate!</p>
              <p>Aut ipsam consequuntur non rem tenetur dolore consequatur ducimus a labore excepturi quae
                nisi, quisquam, maxime voluptates magnam aliquid.</p>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="services__details__item__pic">
                  <img src="img/services/sd-1.jpg" alt="">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="services__details__item__pic">
                  <img src="img/services/sd-2.jpg" alt="">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="services__details__item__pic">
                  <img src="img/services/sd-3.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="services__details__desc">
              <p>Atque eum alias debitis suscipit, sint dignissimos minus quisquam recusandae nostrum quas
                eligendi odit, fugiat eius rem. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <ul class="services__details__feature">
                    <li><i class="fa fa-check-circle"></i> Routine and medical care</li>
                    <li><i class="fa fa-check-circle"></i> Excellence in Healthcare every</li>
                    <li><i class="fa fa-check-circle"></i> Building a healthy environment</li>
                    <li><i class="fa fa-check-circle"></i> cumsan lacus vel facilisis.</li>
                  </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <ul class="services__details__feature">
                    <li><i class="fa fa-check-circle"></i> Routine and medical care</li>
                    <li><i class="fa fa-check-circle"></i> Excellence in Healthcare every</li>
                    <li><i class="fa fa-check-circle"></i> Building a healthy environment</li>
                    <li><i class="fa fa-check-circle"></i> cumsan lacus vel facilisis.</li>
                  </ul>
                </div>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque eum alias debitis
                suscipit, sint dignissimos minus quisquam recusandae nostrum quas eligendi odit, fugiat
                eius rem. Cumque, labore placeat! Velit, vitae. Lorem ipsum dolor sit amet consectetur
                adipisicing elit.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-lg-1">
          <div class="services__sidebar">
            <div class="services__accordion">
              <div class="services__title">
                <h4><img src="img/icons/services-icon.png" alt=""> All services</h4>
              </div>
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-heading active">
                    <a data-toggle="collapse" data-target="#collapseOne">
                      Facial Procedures
                    </a>
                  </div>
                  <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li><a href="#">Facelift</a></li>
                        <li><a href="#">Mini facelift</a></li>
                        <li><a href="#">Eyelid lift</a></li>
                        <li><a href="#">Brow lift</a></li>
                        <li><a href="#">Rhinoplasty</a></li>
                        <li><a href="#">Chin implants</a></li>
                        <li><a href="#">Facial fillers</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading">
                    <a data-toggle="collapse" data-target="#collapseTwo">
                      Body Procedures
                    </a>
                  </div>
                  <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li><a href="#">Facelift</a></li>
                        <li><a href="#">Mini facelift</a></li>
                        <li><a href="#">Eyelid lift</a></li>
                        <li><a href="#">Brow lift</a></li>
                        <li><a href="#">Rhinoplasty</a></li>
                        <li><a href="#">Chin implants</a></li>
                        <li><a href="#">Facial fillers</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading">
                    <a data-toggle="collapse" data-target="#collapseThree">
                      Breast procedures
                    </a>
                  </div>
                  <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li><a href="#">Facelift</a></li>
                        <li><a href="#">Mini facelift</a></li>
                        <li><a href="#">Eyelid lift</a></li>
                        <li><a href="#">Brow lift</a></li>
                        <li><a href="#">Rhinoplasty</a></li>
                        <li><a href="#">Chin implants</a></li>
                        <li><a href="#">Facial fillers</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading">
                    <a data-toggle="collapse" data-target="#collapseFour">
                      Buttocks
                    </a>
                  </div>
                  <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li><a href="#">Facelift</a></li>
                        <li><a href="#">Mini facelift</a></li>
                        <li><a href="#">Eyelid lift</a></li>
                        <li><a href="#">Brow lift</a></li>
                        <li><a href="#">Rhinoplasty</a></li>
                        <li><a href="#">Chin implants</a></li>
                        <li><a href="#">Facial fillers</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading">
                    <a data-toggle="collapse" data-target="#collapseFive">
                      Skin care
                    </a>
                  </div>
                  <div id="collapseFive" class="collapse" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li><a href="#">Facelift</a></li>
                        <li><a href="#">Mini facelift</a></li>
                        <li><a href="#">Eyelid lift</a></li>
                        <li><a href="#">Brow lift</a></li>
                        <li><a href="#">Rhinoplasty</a></li>
                        <li><a href="#">Chin implants</a></li>
                        <li><a href="#">Facial fillers</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="services__appoinment">
            <div class="services__title">
              <h4><img src="img/icons/services-icon.png" alt=""> Get an appointment</h4>
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
    data-cf-beacon='{"rayId":"769e0745f8f42e04","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.0","si":100}'
    crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/aesthetic/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 07:29:06 GMT -->

</html>