<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>LLVL&KB</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='%23EFCD52' class='w-6 h-6'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' d='M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12'/%3E%3C/svg%3E">
  </head>
  <body>
    <header class="header">
      <nav>
        <div class="nav__bar">
          <div class="logo nav__logo">
            <a href="#"><img src="{{ asset('storage/llbl.png') }}" alt="logo " style="max-width: 40%;" /></a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-3-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="#home">HOME</a></li>
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#service">SERVICE</a></li>
          <li><a href="#client">REVIEWS</a></li>
          <a href="{{ route('login') }}" class="header-nav__item">Login</a>
        </ul>
      </nav>
      <div class="section__container header__container" id="home">
        <div class="header__content">
          <h1>Focus on fun. We’ll take care of the rest.</h1>
        </div>
      </div>
    </header>

    <section class="banner__container">
      <div class="banner__card">
        <h4>Satisfaction Guaranteed or Your Dent Back.</h4>
      </div>
      <div class="banner__card">
        <h4>Caring For Your Car The Way You Would.</h4>
      </div>
      <div class="banner__image">
        <img src="https://img.freepik.com/premium-photo/hand-car-mechanic-with-wrench-auto-repair-garage-mechanic-works-engine-car-garage-repair-service-concept-car-inspection-service-car-repair-service_545582-907.jpg" alt="banner" />
      </div>
    </section>

    <section class="section__container experience__container" id="about" >
      <div class="experience__image">
        <img src="https://img.freepik.com/free-photo/benchman-fixing-engine-car_114579-2807.jpg" alt="experience" />
      </div>
      <div class="experience__content">
        <p class="section__subheader">WHO WE ARE</p>
        <h3 class="section__header">
          We are LLVL & KV Automotive Repair Services with 2 years of experience
        </h3>
        <p class="section__description">
          With a owner of business in this industry have spanning 30 years of experience, our commitment to excellence in
          car servicing is unwavering. Our seasoned team brings a wealth of
          experience to ensure your vehicle receives top-notch care. Trust in
          our expertise to keep your car running smoothly and safely.
        </p>
      </div>
    </section>

    <section class="service" id="service">
      <div class="section__container service__container">
        <p class="section__subheader">WHY CHOOSE US</p>
        <h2 class="section__custom">Great Car Service</h2>
        <p class="section__description">
          Trust us to keep your automobile running smoothly and reliably.
        </p>
        <div class="service__grid">
          <div class="service__card">
            <img src="https://media.istockphoto.com/id/504070478/photo/portrait-of-a-mechanic-replacing-wheel.jpg?s=612x612&w=0&k=20&c=wqpTQkW90bemaEcLquTLVRerleOciPB9rS8yu1iEzZ0=" alt="service" />
            <h4>Aligned Wheel</h4>
            <p>
              Experience smoother rides and extended tire life with our wheel
              alignment service.
            </p>
          </div>
          <div class="service__card">
            <img src="https://www.ultimateautoelectrical.com.au/wp-content/uploads/2017/12/service-banner.jpg" alt="service" />
            <h4>Electrical system</h4>
            <p>
              Elevate car's electrical system to peak performance with our
              specialized expertise.
            </p>
          </div>
          <div class="service__card">
            <img src="https://1734811051.rsc.cdn77.org/data/images/full/381849/how-new-technologies-are-changing-auto-mechanics.jpg" alt="service" />
            <h4>System Service</h4>
            <p>
              We utilize cutting-edge diagnostics and techniques to ensure
              optimal condition.
            </p>
          </div>
          <div class="service__card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSx5VMQzZC8du1ECoWpqJKk76J6FkiuM9gwxQ&usqp=CAU" alt="service" />
            <h4>Engine Diagnostics</h4>
            <p>
              Unlock the secrets of your car's performance with state-of-the-art
              diagnostic services.
            </p>
          </div>
          <div class="service__card">
            <img src="https://www.shutterstock.com/image-photo/mechanic-pouring-oil-into-engine-600nw-2196366251.jpg" alt="service" />
            <h4>Change Oil</h4>
            <p>
              Ensure peak engine performance with our oil change service. We'll replace the old oil, swap out the filter, and refill it with top-quality oil.
            </p>
          </div>
          <div class="service__card">
            <img src="https://qph.cf2.quoracdn.net/main-qimg-de4b6d5c404b9e6dc8ab4b946e0b9b09" alt="service" />
            <h4>Tune Up</h4>
            <p>
                Boost efficiency and reduce emissions with our tune-up service. Our experts will inspect and optimize key components, including spark plugs and fuel injectors.
            </p>
          </div>
          <div class="service__card">
            <img src="https://www.vtechauto.co.uk/assets/images/car-body-repair01.jpg" alt="service" />
            <h4>Body Repair</h4>
            <p>
                Restore your vehicle's look and structure with our professional body repair. From minor dents to major collision damage, we'll bring your car back to its pre-accident condition.
            </p>
          </div>
          <div class="service__card">
            <img src="https://www.servicegm.com/blogs/1652/wp-content/uploads/2021/11/brakes.jpg" alt="service" />
            <h4>Brake Repair</h4>
            <p>
                Prioritize safety with our brake repair service. Our skilled technicians will diagnose and address any brake issues, ensuring reliable stopping power.
            </p>
          </div>
        </div>
      </div>
    </section>



    <section class="contact">
      <div class="section__container contact__container">
        <div class="contact__content">
          <p class="section__subheader">CONTACT US</p>
          <h2 class="section__header">Person in charge</h2>
          <p class="section__description">
            Percival F. Lasquety <br>
            Cellphone no# 09178515875 / 09183395464 <br>
            Email - vallasquety@yahoo.com
          </p>
          <div class="contact__btns">

          </div>
        </div>
      </div>
    </section>

    <section class="section__container testimonial__container" id="client">
      <p class="section__subheader">CLIENT TESTIMONIALS</p>
      <h2 class="section__header">100% Approved By Customers</h2>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="testimonial__card">
              <img src="https://img.freepik.com/free-photo/young-smiling-asian-man-standing-grey-wall_171337-10473.jpg" alt="testimonial" />
              <p>
                I couldn't believe my eyes when I got my car back from the
                service. It looked and drove like it had just rolled off the
                assembly line. The team did an incredible job, and I'm a
                customer for life!
              </p>
              <h4>- Weynard T.</h4>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial__card">
              <img src="https://apiwp.thelocal.com/cdn-cgi/image/format=webp,width=850,quality=75/https://apiwp.thelocal.com/wp-content/uploads/2018/12/6d67730d16af04f3f956389d4cc244af808b8381c23b1e3d218ecd792de14fa8.jpg" alt="testimonial" />
              <p>
                I've been bringing my car here for years, and they never
                disappoint. Their attention to detail and commitment to quality
                service is unmatched. My car always feels brand new after a
                visit.
              </p>
              <h4>- John P.</h4>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial__card">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSu0IhjJOzg0jzzdbgPwKWKSBYTynTsUtREbA&usqp=CAU" alt="testimonial" />
              <p>
                As a car enthusiast, I'm extremely particular about who touches
                my prized possession. Their team's expertise and passion for
                cars truly shine through in their work. My car has never looked
                better.
              </p>
              <h4>- David S.</h4>
            </div>
          </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <footer class="footer">




      </div>
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="logo footer__logo">
            <a href="#"><img src="{{ asset('storage/llbl.png') }}" /></a>
          </div>
          <p class="section__description">
            Our unwavering commitment to excellence in car servicing sets us apart. Whether it's a routine oil change, a precision tune-up, meticulous body repair, or ensuring top-notch brake performance, we go above and beyond to deliver quality and reliability with every service.
          </p>
          <ul class="footer__socials">
            <li>
              <a href="#"><i class="ri-facebook-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-google-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-instagram-line"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-youtube-line"></i></a>
            </li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Our Services</h4>
          <ul class="footer__links">
            <li><a href="#">Skilled Mechanics</a></li>
            <li><a href="#">Routine Maintenance</a></li>
            <li><a href="#">Customized Solutions</a></li>
            <li><a href="#">Competitive Pricing</a></li>
            <li><a href="#">Satisfaction Guaranteed</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Contact Info</h4>
          <ul class="footer__links">
            <li>
              <p>
                Experience the magic of a rejuvenated ride as we pamper your car
                with precision care
              </p>
            </li>
            <li>
              <p>Phone: <span>09178515875</span></p>
            </li>
            <li>
              <p>Email: <span>vallasquety@yahoo.com</span></p>
            </li>
          </ul>
        </div>
      </div>
    </footer>


    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

:root {
  --primary-color: #ffe603;
  --primary-color-dark: #ffe603;
  --secondary-color: #15151f;
  --secondary-color-dark: #0a0b0f;
  --text-light: #6b7280;
  --extra-light: #f8f7fd;
  --white: #ffffff;
  --max-width: 1200px;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.section__container {
  max-width: var(--max-width);
  margin: auto;
  padding: 5rem 1rem;
}

.section__subheader {
  font-size: 1rem;
  font-weight: 500;
  color: var(--primary-color);
}

.section__header {
  font-size: 2.5rem;
  font-weight: 700;
  line-height: 3.5rem;
  color: var(--secondary-color-dark);
}
.section__custom{
    font-size: 2.5rem;
  font-weight: 700;
  line-height: 3.5rem;
    color: white;
}

.section__description {
  margin-bottom: 2rem;
  color: var(--text-light);
}
.header-nav__item {
            text-decoration: none;
            padding: 10px 20px;
            border: 2px solid #ffe603;
            color: #ffe603;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
        }

        /* Hover effect */
        .header-nav__item:hover {
            background-color: #1d1e1f;
            color: #fff;
        }
.btn {
  padding: 0.75rem 1.5rem;
  font-size: 1rem;
  color: var(--white);
  background-color: var(--primary-color);
  outline: none;
  border: none;
  border-radius: 5px;
  transition: 0.3s;
  cursor: pointer;
}

.btn:hover {
  background-color: var(--primary-color-dark);
}

img {
  width: 100%;
  display: flex;
}

.logo img {
  max-width: 150px;
}

a {
  text-decoration: none;
}

ul {
  list-style: none;
}

html,
body {
  scroll-behavior: smooth;
}

body {
  font-family: "Poppins", sans-serif;
}

.header {
  padding-block: 5rem;
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url("https://images.unsplash.com/photo-1625047509248-ec889cbff17f?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y2FyJTIwcmVwYWlyfGVufDB8fDB8fHww");
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}

nav {
  position: fixed;
  isolation: isolate;
  top: 0;
  width: 100%;
  max-width: var(--max-width);
  margin: auto;
  z-index: 9;
}

.nav__bar {
  padding: 1rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 2rem;
  background-color: var(--secondary-color-dark);
}

.nav__menu__btn {
  font-size: 1.5rem;
  color: var(--white);
  cursor: pointer;
}

.nav__links {
  position: absolute;
  width: 100%;
  padding: 2rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 2rem;
  background-color: var(--secondary-color);
  transform: translateY(-100%);
  transition: 0.5s;
  z-index: -1;
}

.nav__links.open {
  transform: translateY(0);
}

.nav__links a {
  color: var(--white);
  transition: 0.3s;
}

.nav__links a:hover {
  color: var(--primary-color);
}

.header__content {
  max-width: 600px;
}

.header__content h1 {
  margin-bottom: 2rem;
  font-size: 3rem;
  font-weight: 600;
  line-height: 4rem;
  color: var(--white);
}

.banner__container {
  display: grid;
  grid-auto-rows: minmax(0, 350px);
}

.banner__card {
  padding: 5rem 2rem;
  display: grid;
  place-content: center;
}

.banner__card:nth-child(1) {
  background-color: var(--secondary-color);
}

.banner__card:nth-child(2) {
  background-color: var(--secondary-color-dark);
}

.banner__card h4 {
  max-width: 300px;
  margin: auto;
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--white);
}

.banner__image img {
  height: 100%;
  object-fit: cover;
}

.experience__container {
  display: grid;
  gap: 2rem;
}

.experience__image img {
  max-width: 500px;
  margin: auto;
}

.service {
  background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
    url("https://wallpaperset.com/w/full/7/9/e/35761.jpg");
}

.service__container {
  text-align: center;
}

.service__grid {
  margin-top: 4rem;
  display: grid;
  gap: 4rem 2rem;
}

.service__card img {
  max-width: 25 0px;
  margin-inline: auto;
  margin-bottom: 1rem;
  border-radius: 10%;
  box-shadow: 5px 5px 20px rgb(0, 0, 0);
}

.service__card h4 {
  margin-bottom: 0.5rem;
  font-size: 1.2rem;
  font-weight: 600;
  color: white;
}


.service__card p {
  color: #ffffffde;
}

.customisation {
  background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
    url("assets/customisation.jpg");
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}

.customisation__container {
  text-align: center;
}

.customisation__container :is(.section__header, .section__description) {
  max-width: 750px;
  margin: auto;
  color: var(--white);
}

.customisation__grid {
  margin-top: 4rem;
  display: grid;
  gap: 4rem 2rem;
}

.customisation__card h4 {
  font-size: 3rem;
  font-weight: 700;
  color: var(--white);
}

.customisation__card p {
  color: var(--white);
}

.price__container {
  text-align: center;
}

.price__grid {
  margin-top: 4rem;
  display: grid;
  gap: 2rem 1rem;
}

.price__card {
  position: relative;
  overflow: hidden;
  padding: 4rem 1rem;
  border-top: 5px solid var(--extra-light);
  border-radius: 10px;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
  transition: 0.3s;
}

.price__card:hover {
  border-color: var(--primary-color);
  background-color: var(--extra-light);
}

.price__card__ribbon {
  position: absolute;
  width: fit-content;
  top: 2rem;
  right: -4.5rem;
  transform: rotate(45deg);
  padding: 5px 5rem;
  font-size: 0.9rem;
  color: var(--white);
  background-color: var(--primary-color);
  transition: 0.3s;
}

.price__card:hover .price__card__ribbon {
  font-size: 1rem;
}

.price__card h4 {
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--secondary-color-dark);
}

.price__card h3 {
  margin-bottom: 1rem;
  font-size: 2.5rem;
  font-weight: 600;
  color: var(--secondary-color-dark);
  transition: 0.3s;
}

.price__card h3 sup {
  font-size: 1.2rem;
  font-weight: 500;
  color: var(--text-light);
}

.price__card:hover h3 {
  color: var(--primary-color);
}

.price__card p {
  margin-bottom: 1rem;
  color: var(--text-light);
}

.price__card .btn {
  margin-top: 1rem;
  min-width: 150px;
}

.contact {
  background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
    url("https://us.123rf.com/450wm/sorapop/sorapop2307/sorapop230700610/211054466-people-connect-through-contact-us-or-customer-support-hotline-concept-finger-touch-to-access-contact.jpg?ver=6");
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}

.contact__container :is(.section__header, .section__description) {
  color: var(--white);
}

.contact__btns {
  display: flex;
  align-items: center;
  gap: 1rem;
}

.contact__btns .btn:nth-child(1) {
  background-color: transparent;
  border: 2px solid var(--white);
}

.contact__btns .btn:nth-child(2) {
  color: var(--primary-color);
  background-color: var(--white);
  border: 2px solid var(--white);
}

.testimonial__container {
  text-align: center;
}

.swiper {
  width: 100%;
  margin-top: 4rem;
  padding-bottom: 4rem;
}

.testimonial__card {
  max-width: 600px;
  margin: auto;
}

.service__card:hover {
            transform: scale(1.1);
            transition: transform 0.3s ease-in-out;
        }
.testimonial__card img {
  max-width: 100px;
  margin: auto;
  margin-bottom: 1rem;
  border-radius: 100%;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
}

.testimonial__card p {
  margin-bottom: 1rem;
  color: var(--secondary-color-dark);
}

.testimonial__card h4 {
  font-size: 1.2rem;
  font-weight: 500;
  color: var(--primary-color);
}

.footer {
  background-color: var(--secondary-color-dark);
}

.subscribe__container {
  padding-bottom: 0;
  display: grid;
  gap: 2rem;
}

.subscribe__content .section__header {
  color: var(--white);
}

.subscribe__form form {
  width: 100%;
  max-width: 400px;
  margin-left: auto;
  display: flex;
  align-items: center;
  gap: 1rem;
}

.subscribe__form input {
  width: 100%;
  padding: 0.75rem 1rem;
  outline: none;
  border: none;
  border-radius: 5px;
}

.footer__container {
  display: grid;
  gap: 4rem 2rem;
}

.footer__logo {
  margin-bottom: 2rem;
}

.footer__socials {
  display: flex;
  align-items: center;
  gap: 1rem;
}

.footer__socials a {
  padding: 5px 10px;
  font-size: 1.25rem;
  color: var(--text-light);
  background-color: var(--secondary-color);
  border-radius: 100%;
  transition: 0.3s;
}

.footer__socials a:hover {
  color: var(--primary-color);
  background-color: var(--white);
}

.footer__col h4 {
  margin-bottom: 2rem;
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--white);
}

.footer__links li {
  margin-bottom: 1rem;
}

.footer__links a {
  color: var(--text-light);
  transition: 0.3s;
}

.footer__links a:hover {
  color: var(--white);
}

.footer__links p {
  color: var(--text-light);
}

.footer__links p span {
  font-weight: 500;
  color: var(--white);
}

.footer__bar {
  padding: 1rem;
  font-size: 0.8rem;
  color: var(--white);
  background-color: var(--secondary-color);
  text-align: center;
}

@media (width > 480px) {
  .header__content h1 {
    font-size: 4rem;
    line-height: 5rem;
  }

  .banner__container {
    grid-template-columns: repeat(2, 1fr);
  }

  .banner__image {
    grid-column: 1/3;
  }

  .service__grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .customisation__grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .price__grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .footer__container {
    grid-template-columns: repeat(2, 1fr);
  }

  .footer__col:first-child {
    grid-column: 1/3;
  }
}

@media (width > 768px) {
  nav {
    padding: 2rem 1rem;
    position: static;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .nav__bar {
    padding: 0;
    background-color: transparent;
  }

  .nav__menu__btn {
    display: none;
  }

  .nav__links {
    padding: 0;
    width: unset;
    position: static;
    transform: none;
    flex-direction: row;
    background-color: transparent;
  }

  .header {
    padding-top: 0;
  }

  .header__content h1 {
    font-size: 5rem;
    line-height: 6rem;
  }

  .banner__container {
    grid-template-columns: repeat(4, 1fr);
  }

  .banner__image {
    grid-column: 3/5;
  }

  .experience__container {
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
  }

  .service__grid {
    grid-template-columns: repeat(4, 1fr);
  }

  .customisation__grid {
    grid-template-columns: repeat(4, 1fr);
  }

  .price__grid {
    grid-template-columns: repeat(3, 1fr);
  }

  .contact__container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
  }

  .contact__content {
    grid-column: 2/3;
  }

  .subscribe__container {
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
  }

  .footer__container {
    grid-template-columns: repeat(4, 1fr);
  }

  .footer__col:first-child {
    max-width: 400px;
  }
}

@media (width > 1024px) {
  .price__grid {
    gap: 2rem;
  }
}
</style>
<script>
    const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", (e) => {
  navLinks.classList.toggle("open");

  const isOpen = navLinks.classList.contains("open");
  menuBtnIcon.setAttribute(
    "class",
    isOpen ? "ri-close-line" : "ri-menu-3-line"
  );
});

navLinks.addEventListener("click", (e) => {
  navLinks.classList.remove("open");
  menuBtnIcon.setAttribute("class", "ri-menu-3-line");
});

const scrollRevealOptions = {
  distance: "50px",
  origin: "bottom",
  duration: 1000,
};

// header container
ScrollReveal().reveal(".header__content h1", {
  ...scrollRevealOptions,
});

ScrollReveal().reveal(".header__btn", {
  ...scrollRevealOptions,
  delay: 500,
});

// service container
ScrollReveal().reveal(".service__card", {
  ...scrollRevealOptions,
  interval: 500,
});

// price container
ScrollReveal().reveal(".price__card", {
  ...scrollRevealOptions,
  interval: 500,
});

const swiper = new Swiper(".swiper", {
  loop: true,
  pagination: {
    el: ".swiper-pagination",
  },
});
document.addEventListener('DOMContentLoaded', function () {
                    var serviceCards = document.querySelectorAll('.service__card');

                    serviceCards.forEach(function (card) {
                        card.addEventListener('mouseenter', function () {
                            card.classList.add('hovered');
                        });

                        card.addEventListener('mouseleave', function () {
                            card.classList.remove('hovered');
                        });
                    });
                });
</script>
