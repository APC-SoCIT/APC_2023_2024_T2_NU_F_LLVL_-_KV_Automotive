<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ski Homepage</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/cb52a032da.js" crossorigin="anonymous"></script>

  <!-- External dependiences because Codepen -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.5.0/rellax.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.0.1/lazysizes.min.js"></script>
  <script src="https://unpkg.com/enter-view"></script>

  <link rel="stylesheet" href="styles/main.processed.css">
</head>

<body>
    <!--/.container--->
  </aside>
  <!--/.notice-bar--->
  <header class="site-header" style="background-color: #3FFFB0;">
    <div class="container">
      <div class="site-header__inner">
        <figure class="site-header__logo">
          <a href="#0" aria-label="Go to homepage">
              <img src="https://scontent.fmnl25-1.fna.fbcdn.net/v/t1.15752-9/370223258_570112988608092_2848893656772701518_n.png?_nc_cat=105&ccb=1-7&_nc_sid=8cd0a2&_nc_eui2=AeFbl01TuYhjxLGrlESH1HFBRawxEHTL7LlFrDEQdMvsuR9l6vAKw9hSu0qaVnnhuG5YIzZbcN1inVOEEvb9BmBY&_nc_ohc=rhvM57loqycAX8JFTxT&_nc_ht=scontent.fmnl25-1.fna&oh=03_AdRT59luscaG5mk8BJs1fDrjiXBBpNRy5FDK3X5MpUb-5Q&oe=658D6937" alt="LLBL & KV">
            </a>
        </figure>

        <div class="site-header__actions">
          <nav class="site-header__nav header-nav">
            <a href="#0" class="header-nav__item">My Account</a>
            <a href="#0" class="header-nav__item">Login</a>
          </nav>
          <a href="tel:" class="site-header__phone">
              <span class="site-header__phone-icon" aria-hidden>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31 31" width="16" height="16">
                  <title>Phnoe</title>
                  <path d="M29.964 22.653l-3.38-3.38a3.531 3.531 0 00-5 0l-.905.907a75.007 75.007 0 01-9.865-9.867l.905-.9a3.535 3.535 0 000-4.993l-3.38-3.38a3.531 3.531 0 00-5 0L1.484 2.894A5.137 5.137 0 00.838 9.34a74.328 74.328 0 0020.815 20.812 5.116 5.116 0 006.448-.647l1.855-1.855a3.527 3.527 0 00.008-4.997z"/>
                  <path d="M21.662 30.148A74.346 74.346 0 01.847 9.336a5.138 5.138 0 01.647-6.447l1.854-1.854a3.531 3.531 0 015 0l3.381 3.38a3.536 3.536 0 010 4.993l-.906.9a74.921 74.921 0 009.865 9.867l.905-.907a3.532 3.532 0 015 0l3.38 3.38a3.526 3.526 0 010 4.993l-1.854 1.855a5.119 5.119 0 01-6.448.647z" fill="#3bf0a6"/>
                </svg>
              </span>
              877-123-4567
            </a>
        </div>
        <!--/.site-header__actions-->
      </div>
      <!--/.site-header__inner-->
    </div>
    <!--/.container--->
  </header>
  <main>
    <!---------------------------
        Hero
      ----------------------------->
    <section class="hero">
      <img class=background-image aria-hidden src="https://www.carcility.com/blog/wp-content/uploads/2020/04/diy-car-repair.jpg" alt="">
      <div class="hero__overlay">
        <div class="container">
          <h2 class="hero__heading">Focus on fun. We’ll take care of the rest.</h2>
          <section class="booking-bar shadow-box">
            <header class="booking-bar__header">
              <p>My Car needs...</p>
            </header>
            <div class="booking-bar__main">
              <div class="booking-bar__location booking-bar__cell">
                <i class="booking-bar__icon fal fa-map-marker"></i>
                <p class="booking-bar__cell-copy">Service?</p>
              </div>
              <!--/.booking-bar__location-->
              <div class="booking-bar__dates booking-bar__cell">
                <i class="booking-bar__icon fal fa-calendar-alt"></i>
                <p class="booking-bar__cell-copy">When are you going?</p>
              </div>
              <!--/.booking-bar__dates-->
              <div class="booking-bar__submit">
                <button class="button button--green button--arrow">
                    <span class=button__text>schedule now</span>
                    <span class="button__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="29" height="14" viewBox="0 0 56.953 28.557">
                      <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="4">
                        <path d="M2 14.279h52.45"/>
                        <path d="M44.182 2.824l10.1 11.307-10.1 11.6"/>
                      </g>
                      </svg>
                    </span>
                  </button>
              </div>
              <!--/.booking-bar__submit-->
            </div>
            <!--/.booking-bar__main-->
          </section>
          <!--/.booking-bar-->
        </div>
        <!--/.container-->
      </div>
      <!--/.hero__overlay-->
    </section>

    <!---------------------------
        Accolades Row
      ----------------------------->
    <section class="accolades-row">
      <div class="container">
        <div class="accolades-row__inner">
          <div class="logo-card">
            <h2 class="logo-card__title">Certificate of Excellence</h2>
            <div class="star-ranking">
              <i class="icon fas fa-star"></i>
              <i class="icon fas fa-star"></i>
              <i class="icon fas fa-star"></i>
              <i class="icon fas fa-star"></i>
              <i class="icon fas fa-star"></i>
            </div>
            <!--/.star-ranking-->
          </div>
          <!--/.logo-card--->
          <div class="logo-card">
            <h2 class="logo-card__title">Certificate of Excellence</h2>
            <figure class="logo-card__logo">
              <img class="lazyload is-lazyloaded" data-src="https://www.iconpacks.net/icons/1/free-wrench-icon-951-thumb.png" alt="Trip Advisor Logo">
              <noscript>
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6791/trip-advisor.png" alt="Trip Advisor Logo">
                </noscript>
            </figure>
          </div>
          <!--/.logo-card--->
          <div class="logo-card">
            <h2 class="logo-card__title">Certificate of Excellence</h2>
            <figure class="logo-card__logo">
              <img class="lazyload is-lazyloaded" data-src="https://www.iconpacks.net/icons/1/free-car-icon-1057-thumb.png" alt="Conde Nast Traveler Logo">
              <noscript>
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6791/conde-nast.png" alt="Conde Nast Traveler Logo">
                </noscript>
            </figure>
          </div>
          <!--/.logo-card--->
        </div>
        <!--/.accolades-row__inner--->
      </div>
      <!--/.container--->
    </section>

    <!---------------------------
        Process
      ----------------------------->
    <section class="process page-section">
      <div class="container">
        <h2 class="section-heading">Service Made Simple</h2>
        <div class="image-text-row">
          <div class="image-text-row__image">
            <figure>
              <div class="image-wrapper" style="padding-bottom: 93.103448276%">
                <img class="lazyload is-lazyloaded" data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6791/ski-homepage-process-1.jpg" alt="Man and woman smiling at a computer">
                <noscript>
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6791/ski-homepage-process-1.jpg" alt="Man and woman smiling at a computer">
                  </noscript>
              </div>
              <!--/.image-wrapper-->
            </figure>
          </div>
          <!--/.image-text-row__image-->
          <div class="image-text-row__text">
            <h3 class="image-text-row__heading">
              Schedule
              <span class="image-text-row__underline underline-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="146.74" height="18.39" viewBox="0 0 146.74 18.39">
                  <path d="M5.26 18.35C50.45 13.69 96 12 141.43 11c7.07-.15 7.09-11.15 0-11C96 1 50.45 2.69 5.26 7.35c-7 .72-7 11.73 0 11z" fill="#3ffdb0"/>
                </svg>
              </span>
            </h3>
            <p class="image-text-row__copy">Begin your vacation with the peace of mind of having your equipment reserved ahead of time. Reserve online or call one of our reservation specialists.</p>
          </div>
          <!-- /.image-text-row__text -->
        </div>
        <!--/.image-text-row-->
        <div class="image-text-row image-text-row--reverse">
          <div class="image-text-row__image">
            <figure>
              <div class="image-wrapper" style="padding-bottom: 93.103448276%">
                <img class="lazyload is-lazyloaded" data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6791/ski-homepage-process-2.jpg" alt="Man and woman with skis">
                <noscript>
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6791/ski-homepage-process-2.jpg" alt="Man and woman with skis">
                  </noscript>
              </div>
              <!--/.image-wrapper-->
            </figure>
          </div>
          <!--/.image-text-row__image-->
          <div class="image-text-row__text">
            <h3 class="image-text-row__heading">
              Tell us, We fix it
              <span class="image-text-row__underline underline-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="279.82" height="17.05" viewBox="0 0 279.82 17.05">
                  <path d="M4.31 15.26a1301.09 1301.09 0 01211.4-3.54q30 1.95 59.81 5.3c5.75.63 5.71-8.37 0-9A1299.57 1299.57 0 0064.18 1.75q-30 1.56-59.87 4.51c-5.72.57-5.77 9.57 0 9z" fill="#3ffdb0"/>
                </svg>
              </span>
            </h3>
            <p class="image-text-row__copy">
              Spend more time with friends and family and not in a rental line. Your expert ski tech will fit you with top of the line equipment at your accommodations. We bring extra gear to ensure a perfect fit!
            </p>
          </div>
          <!-- /.image-text-row__text -->
        </div>
        <!--/.image-text-row-->
        <div class="image-text-row">
          <div class="image-text-row__image">
            <figure>
              <div class="image-wrapper" style="padding-bottom: 93.103448276%">
                <img class="lazyload is-lazyloaded" data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6791/ski-homepage-process-3.jpg" alt="Man and woman walking with ski bags">
                <noscript>
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6791/ski-homepage-process-3.jpg" alt="Man and woman walking with ski bags">
                </noscript>
              </div>
              <!--/.image-wrapper-->
            </figure>
          </div>
          <!--/.image-text-row__image-->
          <div class="image-text-row__text">
            <h3 class="image-text-row__heading">
              We call, you pick it up
              <span class="image-text-row__underline underline-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="254.94" height="21.95" viewBox="0 0 254.94 21.95">
                  <path d="M5.26 21.92a2385 2385 0 01244.37-10.86c7.08 0 7.09-11 0-11A2385 2385 0 005.26 10.92c-7 .67-7 11.68 0 11z" fill="#3ffdb0"/>
                </svg>
              </span>
            </h3>
            <p class="image-text-row__copy">
              Relax on your final day of your vacation while we pick up all your rented equipment at a time and place of your choosing.
            </p>
          </div>
          <!-- /.image-text-row__text -->
        </div>
        <!--/.image-text-row-->
      </div>
      <!--/.container-->
    </section>

    <!---------------------------
        Equipment Callout
      ----------------------------->
    <section class="equipment-callout page-section">
      <div class="container">
        <div class="equipment-callout__inner">
          <div class="equipment-callout__image">
            <img class="rellax" data-rellax-speed="0.4" src="truck-kun.png" alt="">
          </div>
          <!--/.equipment-callout__image-->
          <div class="equipment-callout__content">
            <h2 class="equipment-callout__heading">Revitalizing Car Care</h2>
            <p class="equipment-callout__copy">At LLBL & KV, we meticulously select top-tier maintenance products and services tailored to your vehicle's needs. Elevate your driving experience with our expert care, ensuring peak performance in every mile, for all makes and models. </p>
            <div class="equipment-callout__cta-row">
              <!-- <a href="/something" class="button button--white button--arrow"> -->
                  <!-- <span class=button__text>Browse Services</span> -->
                  <!-- <span class="button__icon"> -->
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="29" height="14" viewBox="0 0 56.953 28.557"> -->
                    <!-- <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="4"> -->
                      <!-- <path d="M2 14.279h52.45"/> -->
                      <!-- <path d="M44.182 2.824l10.1 11.307-10.1 11.6"/> -->
                    <!-- </g> -->
                    <!-- </svg> -->
                  <!-- </span> -->
                <!-- </a> -->
              <div class="equipment-callout__logo">
                <!-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6791/rossignol-logo.png" alt="Rossignol logo"> -->
              </div>
              <!--/.equipment-callout__logo-->
            </div>
            <!--/.equipment-callout__cta-row-->
          </div>
          <!--/.equipment-callout__content-->
        </div>
        <!--/.equipment-callout__inner-->
      </div>
      <!--/.container-->
    </section>

    <!---------------------------
        Location Slider
      ----------------------------->
    <section class="page-section">
      <div class="container">
        <h2 class="section-heading section-heading--tight">Services Offered...</h2>
      </div>
      <!--/.container-->
      <div class="slider swiper js-location-slider">
        <div class="swiper-wrapper">
          <article class="image-bg-card swiper-slide">
            <img class="image-bg-card__image lazyload is-lazyloaded" src="https://www.floridacareercollege.edu/wp-content/uploads/sites/4/2020/08/12-Reasons-to-Become-an-Automotive-Mechanic-Florida-Career-College.png" alt="">
            <noscript>
                  <img class="image-bg-card__image" src="https://www.floridacareercollege.edu/wp-content/uploads/sites/4/2020/08/12-Reasons-to-Become-an-Automotive-Mechanic-Florida-Career-College.png" alt="">
                </noscript>
            <div class="image-bg-card__overlay">
              <h2 class="image-bg-card__heading">ECU</h2>
              <h3 class="image-bg-card__sub-heading">Scanning</h3>
            </div>
            <!--/.image-bg-card__overlay-->
          </article>
          <article class="image-bg-card swiper-slide">
            <img class="image-bg-card__image lazyload is-lazyloaded" src="https://parkers-images.bauersecure.com/wp-images/177357/gettyimages-adding-engine-oil.jpg" alt="">
            <noscript>
                  <img class="image-bg-card__image" src="https://parkers-images.bauersecure.com/wp-images/177357/gettyimages-adding-engine-oil.jpg" alt="">
                </noscript>
            <div class="image-bg-card__overlay">
              <h2 class="image-bg-card__heading">Change </h2>
              <h3 class="image-bg-card__sub-heading">Oil</h3>
            </div>
            <!--/.image-bg-card__overlay-->
          </article>
          <article class="image-bg-card swiper-slide">
            <img class="image-bg-card__image lazyload is-lazyloaded" src="https://luxury-auto-service.com/wp-content/uploads/2018/09/Under-Service.jpg" alt="">
            <noscript>
                  <img class="image-bg-card__image" src="https://luxury-auto-service.com/wp-content/uploads/2018/09/Under-Service.jpg" alt="">
                </noscript>
            <div class="image-bg-card__overlay">
              <h2 class="image-bg-card__heading">Chasis</h2>
              <h3 class="image-bg-card__sub-heading">Repair</h3>
            </div>
            <!--/.image-bg-card__overlay-->
          </article>
          <article class="image-bg-card swiper-slide">
            <img class="image-bg-card__image lazyload is-lazyloaded" src="https://www.autolabusa.com/cm/dpl/images/create/services--electrical-content-01.jpg" alt="">
            <noscript>
                  <img class="image-bg-card__image" src="https://www.autolabusa.com/cm/dpl/images/create/services--electrical-content-01.jpg" alt="">
                </noscript>
            <div class="image-bg-card__overlay">
              <h2 class="image-bg-card__heading">Electrical</h2>
              <h3 class="image-bg-card__sub-heading">Repair</h3>
            </div>
            <!--/.image-bg-card__overlay-->
          </article>
          <article class="image-bg-card swiper-slide">
            <img class="image-bg-card__image lazyload is-lazyloaded" src="https://d3hvs2gyy8n2xz.cloudfront.net/blog/wp-content/uploads/2016/06/07110046/signs-its-time-for-an-auto-tune-up.jpg" alt="">
            <noscript>
                  <img class="image-bg-card__image" src="https://d3hvs2gyy8n2xz.cloudfront.net/blog/wp-content/uploads/2016/06/07110046/signs-its-time-for-an-auto-tune-up.jpg" alt="">
                </noscript>
            <div class="image-bg-card__overlay">
              <h2 class="image-bg-card__heading">Tune</h2>
              <h3 class="image-bg-card__sub-heading">Up</h3>
            </div>
            <!--/.image-bg-card__overlay-->
          </article>
          <article class="image-bg-card swiper-slide">
            <img class="image-bg-card__image lazyload is-lazyloaded" src="https://koehnsbodyshop.com/images/0/f/a/8/d/0fa8da5de1c9c17bd6e24c89b145f80276b8620b-need.jpg" alt="">
            <noscript>
                  <img class="image-bg-card__image" src="https://koehnsbodyshop.com/images/0/f/a/8/d/0fa8da5de1c9c17bd6e24c89b145f80276b8620b-need.jpg" alt="">
                </noscript>
            <div class="image-bg-card__overlay">
              <h2 class="image-bg-card__heading">Body Repair</h2>
              <h3 class="image-bg-card__sub-heading">Restoration</h3>
            </div>
            <!--/.image-bg-card__overlay-->
          </article>
        </div>
        <!--swiper-wrapper-->
        <div class="slider__navigation">
          <button aria-label="Previous slides" class="slider__nav-button slider__nav-previous">
                <i class="slider__nav-icon fas fa-chevron-left"></i>
              </button>
          <!--/.slider__nav-previous-->
          <button aria-label="Next slides" class="slider__nav-button slider__nav-next">
                <i class="slider__nav-icon fas fa-chevron-right"></i>
              </button>
          <!--/.slider__nav-previous-->
        </div>
        <!--/.slider__navigation-->
      </div>
      <!--/.swiper-container-->
    </section>
    <section class="page-section page-section--ice">
      <div class="container">
        <h2 class="section-heading">We've repaired many cars ... and counting</h2>
        <div class="quote-slider">
          <div class="quote-slider__inner shadow-box">
            <div class="quote-slider__quotation-mark" aria-hidden="true">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6791/quotes.png" alt="">
            </div>
            <div class="js-quote-slider swiper">
              <div class="swiper-wrapper">
                <div class="quote swiper-slide">
                  <div class="quote__image">
                    <img class="lazyload is-loaded" data-src="https://scontent.fmnl25-2.fna.fbcdn.net/v/t39.30808-6/290046797_109242278497574_3461038810952315400_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEjY8LpR2U94lvGpDSa5rHRQNCo5ixDHodA0KjmLEMehxwujZ7oqVBgVnrJnO5XyolZXktEPzDArEI3Oq4pggMp&_nc_ohc=T0v7R5HWPo4AX-Q8_Y0&_nc_ht=scontent.fmnl25-2.fna&oh=00_AfCO8Tl4gPYPVeEVTv_XIiX-t0osN3dHYUZ7h8Wo-F4HUg&oe=6569F3AD" alt="" aria-hidden="true">
                    <noscript>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6791/ski-homepage-avatar.jpg" alt="" aria-hidden="true">
                      </noscript>
                  </div>
                  <!--/.quote__image-->
                  <div class="quote__content">
                    <p class="quote__copy">“nung pumunta ako shop eh napaka accomodating nila eh pag dating mga mababait sila eh, tsaka napakalapit nila eh kaya't pag may aberya ey sugod kaagad to eh overall approve”</p>
                    <p class="quote__attribution">— Niñ0 B, internet influencer</p>
                  </div>
                  <!--/.quote__content-->
                </div>
                <!--/.quote-->
                <div class="quote swiper-slide">
                  <div class="quote__image">
                    <img class="lazyload is-lazyloaded" data-src="https://yt3.googleusercontent.com/qHii7Z3HXooPsaxWbyzLRxjyXVIAhI6lFLEhnTW6amjxQ4yW4u8V50kfJDslRBEqSl7oJeJ75w=s900-c-k-c0x00ffffff-no-rj" alt="" aria-hidden="true">
                    <noscript>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6791/ski-homepage-avatar.jpg" alt="" aria-hidden="true">
                      </noscript>
                  </div>
                  <!--/.quote__image-->
                  <div class="quote__content">
                    <p class="quote__copy">“I recently visited LLBL & KV Auto Repair for car repairs, and the experience was top-notch. The location is convenient, right in Manila Otis. The staff is professional, and the mechanics demonstrated expertise in diagnosing and fixing issues promptly. The service was efficient, and my car is running smoothly. I highly recommend LLBL & KV for reliable auto repairs in the area.”</p>
                    <p class="quote__attribution">— Joey B, using Ski Corp Services since 2011</p>
                  </div>
                  <!--/.quote__content-->
                </div>
                <!--/.quote-->
              </div>
              <!--/.swiper-wrapper-->
            </div>
            <!--/.swiper-container-->
          </div>
          <!--/.quote-slider__inner-->
          <div class="quote-slider__pagination">
          </div>
          <!--/.quote-slider__pagination-->
        </div>
        <!--/.quote-slider-->
      </div>
      <!--/.container-->
    </section>
    <footer class="site-footer">
      <div class="container">
        <div class="site-footer__newsletter newsletter-cta shadow-box">
          <div class="newsletter-cta__lede">
            <h2 class="newsletter-cta__heading">Suggestion & Concerns?</h2>
            <p class="newsletter-cta__copy">got any suggestion and concerns email us so that LLBL & KV may improve more</p>
          </div>
          <!--/.newsletter-cta__lede-->
          <div class="newsletter-cta__form">
            <div class="icon-input">
              <i class="icon-input__icon fas fa-paper-plane"></i>
              <label for="newsletter-email" class="u-visually-hidden">Email</label>
              <input type="email" id="newletter-email" class="newsletter-cta__form-input text-input" placeholder="LASQUETY@gmail.com">
            </div>
            <button type="submit" class="newsletter-cta__form-button button button--dark-green button--arrow">
                <span class=button__text>Send</span>
                <span class="button__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="29" height="14" viewBox="0 0 56.953 28.557">
                  <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="4">
                    <path d="M2 14.279h52.45"/>
                    <path d="M44.182 2.824l10.1 11.307-10.1 11.6"/>
                  </g>
                  </svg>
                </span>
              </button>
          </div>
          <!--/.newsletter-cta__form-->
        </div>
        <!--/.news-letter__cta-->

        <div class="site-footer__social-list social-list">
          <a href="#0" class="social-list__item">
              <i class="fab fa-instagram"></i>
            </a>
          <a href="#0" class="social-list__item">
              <i class="fab fa-facebook-f"></i>
            </a>
          <a href="#0" class="social-list__item">
              <i class="fab fa-twitter"></i>
            </a>
          <a href="#0" class="social-list__item">
              <i class="fab fa-youtube"></i>
            </a>
          <a href="#0" class="social-list__item">
              <i class="fas fa-rss"></i>
            </a>
        </div>
        <!--/.social-list-->
        <div class="footer-nav site-footer__nav">
          <div class="footer-nav__column">
            <h3 class="footer-nav__heading"></h3>
            <nav>
            </nav>
          </div>
          <div class="footer-nav__column">
            <h3 class="footer-nav__heading">Customer Service</h3>
            <nav>
              <a href="#0" class="footer-nav__item">123-456-7891</a>
              <a href="#0" class="footer-nav__item">Service Center Contracts</a>
              <a href="#0" class="footer-nav__item">Help</a>
              <a href="#0" class="footer-nav__item">Calcenaltion Policy</a>
            </nav>
          </div>
          <!--/.footer-nav__column-->
          <div class="footer-nav__column">
            <h3 class="footer-nav__heading">My Account</h3>
            <nav>
              <a href="#0" class="footer-nav__item">Login / Create Account</a>
            </nav>
          </div>
          <!--/.footer-nav__column-->
          <div class="footer-nav__column">
            <h3 class="footer-nav__heading">LLBL & KV</h3>
            <nav>
              <a href="#0" class="footer-nav__item">About</a>
              <a href="#0" class="footer-nav__item">Partners</a>
              <a href="#0" class="footer-nav__item"></a>
              <a href="#0" class="footer-nav__item"> </a>
              <a href="#0" class="footer-nav__item"></a>
            </nav>
          </div>
          <!--/.footer-nav__column-->
        </div>
        <!--/.footer-nav-->
      </div>
      <!--/.container-->
      <div class="site-footer__colophon">
        <div class="container">
          <p>&copy; 2023 LLBL & KV<sup>TM</sup> <a href="#0" class="site-footer__privacy">Privacy Policy</a></p>
        </div>
        <!--/.container-->
      </div>
      <!--/.colophon-->
      <div class="site-footer__snowflake snowflake-1" aria-hidden=true>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6791/snowflake--small.png" alt="">
      </div>
      <!--/.snowflake-1-->
      <div class="site-footer__snowflake snowflake-2" aria-hidden=true>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6791/snowflake--large.png" alt="">
      </div>
      <!--/.snowflake-2-->
      <div class="site-footer__snowflake snowflake-3" aria-hidden=true>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6791/snowflake--small.png" alt="">
      </div>
      <!--/.snowflake-3-->
      <div class="site-footer__snowflake snowflake-4" aria-hidden=true>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6791/snowflake--small.png" alt="">
      </div>
      <!--/.snowflake-4-->
      <div class="site-footer__snowflake snowflake-5" aria-hidden=true>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6791/snowflake--small.png" alt="">
      </div>
      <!--/.snowflake-5-->
      <div class="site-footer__snowflake snowflake-6" aria-hidden=true>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6791/snowflake--large.png" alt="">
      </div>
      <!--/.snowflake-6-->
      <div class="site-footer__snowflake snowflake-7" aria-hidden=true>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6791/snowflake--large.png" alt="">
      </div>
      <!--/.snowflake-7-->
    </footer>
  </main>
  <script src="scripts/main.processed.js"></script>
</body>

</html>
