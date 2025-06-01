<!doctype html>
<html lang="en">
  <head>
    <title>Portfolio - Full Responsive Website</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Remix Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  </head>
  <body>
    <!-- -------------------------Navbar-------------------- -->

    <nav>
        <div class="container nav-container">
            <a href="index.php" class="logo">Port<span>folio</span></a>
            <ul class="navlist">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <!-- <li><a href="#services">Services</a></li> -->
                <li><a href="#portfolio">Portfolio</a></li>
                <!-- <li><a href="#testimonial">Testimonial</a></li> -->
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="nav-icons">
                <div class="ri-menu-line" id="menu-btn"></div>
                <div class="ri-moon-line" id="theme-btn"></div>
            </div>
        </div>
    </nav> 

    <!-- --------------------------Home---------------------- -->

    <section id="home" class="home">
        <div class="container home-container">
            <div class="left">
                <h4>Hello...</h4>
                <h1>I'm <span>Jeetendra Kumar</span></h1>
                <h3 style="margin-top: 10px;">Flutter & Native Android Developer</h3>
                <p>
                    Welcome to my portfolio! I'm a passionate mobile developer with over 1 year of hands-on experience in building intuitive and high-performance apps using Flutter and native Android (Java/Kotlin). I’ve worked on a variety of real-world projects involving REST APIs, Google Maps, Firebase, and more. I focus on creating scalable, responsive, and user-friendly applications for both Android and cross-platform environments.
                </p>                
                <button class="btn overlay" onclick="window.open('https://mail.google.com/mail/?view=cm&fs=1&to=jeetendrakumar5529@gmail.com&su=Hiring%20for%20Flutter%20Developer&body=Hi%20Jeetendra,%0D%0A%0D%0AI%20came%20across%20your%20portfolio%20and%20would%20like%20to%20discuss%20a%20potential%20opportunity.', '_blank')">
                    <span>Hire me</span>
                </button>
                <div class="social-icons-container">
                    <p>Follow me on Social media</p>
                    <div class="social-icons">
                        <!-- <a href=""><i class="ri-facebook-line"></i></a> -->
                        <a href="https://www.github.com/jeetendra-kumar-5529"><i class="ri-github-line"></i></a>
                        <a href="https://www.linkedin.com/in/jkay5529"><i class="ri-linkedin-line"></i></a>
                        <a href="https://www.x.com/@Jeet5529"><i class="ri-twitter-line"></i></a>
                        <!-- <a href="https://www.instagram.com/"><i class="ri-instagram-line"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="right">
                <img src="assets/images/me.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- -----------------------About------------------------ -->

    <section class="about" id="about">
        <div class="container about-container">
            <div class="left">
                <img src="assets/images/me2.jpeg" alt="">
            </div>
            <div class="right">
                <div class="title">
                    <h2>About <span>Me</span></h2>
                </div>
                <h3>I'm <span>Jeetendra Kumar</span> a Developer & Designer</h3>
                <p>
                    I'm a passionate Flutter & Native Android Developer with experience building real-world apps across ride-booking, e-commerce, and utility domains. I've worked on apps like Care Concierge (ride app with Geolocation API and UI enhancements), Care Cart (e-commerce app with UPC scanner), and iResident (home services app with 2-step verification via email and Twilio). On the native side, I developed mEinstein using Jetpack Compose, integrating full authentication and local storage with Room DB. I focus on clean UI, secure flows, and scalable mobile solutions.
                </p>
                <button class="btn overlay" onclick="downloadCV()">
                    <span>Download CV</span>
                </button>
                <div class="container">
                    <div class="progress-bar">
                        <div class="outer-circle">
                            <div class="inner-circle">
                                <div class="html-number number">
                                    <h4>Flutter</h4>
                                </div>
                            </div>
                        </div>
                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                            <defs>
                                <linearGradient id="GradientColor">
                                    <stop offset="0%" stop-color="#9b2fff" />
                                    <stop offset="100%" stop-color="#ff2f48" />
                                </linearGradient>
                            </defs>
                            <circle cx="80" cy="80" r="70"
                            stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="progress-bar">
                        <div class="outer-circle">
                            <div class="inner-circle">
                                <div class="html-number number">
                                    <h4>Dart</h4>
                                </div>
                            </div>
                        </div>
                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                            <defs>
                                <linearGradient id="GradientColor">
                                    <stop offset="0%" stop-color="#9b2fff" />
                                    <stop offset="100%" stop-color="#ff2f48" />
                                </linearGradient>
                            </defs>
                            <circle cx="80" cy="80" r="70"
                            stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="progress-bar">
                        <div class="outer-circle">
                            <div class="inner-circle">
                                <div class="html-number number">
                                    <h4>Kotlin</h4>
                                </div>
                            </div>
                        </div>
                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                            <defs>
                                <linearGradient id="GradientColor">
                                    <stop offset="0%" stop-color="#9b2fff" />
                                    <stop offset="100%" stop-color="#ff2f48" />
                                </linearGradient>
                            </defs>
                            <circle cx="80" cy="80" r="70"
                            stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="progress-bar">
                        <div class="outer-circle">
                            <div class="inner-circle">
                                <div class="html-number number">
                                    <h4>Firebase</h4>
                                </div>
                            </div>
                        </div>
                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                            <defs>
                                <linearGradient id="GradientColor">
                                    <stop offset="0%" stop-color="#9b2fff" />
                                    <stop offset="100%" stop-color="#ff2f48" />
                                </linearGradient>
                            </defs>
                            <circle cx="80" cy="80" r="70"
                            stroke-linecap="round" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -----------------------Services------------------------- -->

    <!-- <section class="services" id="services">
        <div class="title">
            <h2>Services i <span>provide</span></h2>
        </div>
        <div class="container services-container">
            <div class="box overlay">
                <div class="content">
                    <i class="ri-html5-fill"></i>
                    <h4>Web Development</h4>
                    <button class="btn">Book Service</button>
                </div>
            </div>
            <div class="box overlay">
                <div class="content">
                    <i class="ri-paint-fill"></i>
                    <h4>Web Designing</h4>
                    <button class="btn">Book Service</button>
                </div>
            </div>
            <div class="box overlay">
                <div class="content">
                    <i class="ri-stack-fill"></i>
                    <h4>Full Stack Development</h4>
                    <button class="btn">Book Service</button>
                </div>
            </div>
            <div class="box overlay">
                <div class="content">
                    <i class="ri-css3-fill"></i>
                    <h4>App Development</h4>
                    <button class="btn">Book Service</button>
                </div>
            </div>
            <div class="box overlay">
                <div class="content">
                    <i class="ri-bug-fill"></i>
                    <h4>Bug Fixing</h4>
                    <button class="btn">Book Service</button>
                </div>
            </div>
            <div class="box overlay">
                <div class="content">
                    <i class="ri-javascript-fill"></i>
                    <h4>Javacript Development</h4>
                    <button class="btn">Book Service</button>
                </div>
            </div>
        </div>
    </section> -->

    <!-- ---------------------Portfolio----------------------------- -->

    <section class="portfolio" id="portfolio">
        <div class="title">
            <h2>My <span>Work</span></h2>
        </div>
        <div class="container portfolio-container">
            <div class="portfolio-buttons">
                <button class="btn portfolio-tab active" onclick="tabOpen('all')">All</button>
                <button class="btn portfolio-tab" onclick="tabOpen('webdevelop')">Web Develop</button>
                <button class="btn portfolio-tab" onclick="tabOpen('appdevelop')">App Develop</button>
            </div>
            <div class="tab-content active-content" id="all">
                <div class="project-card">
                    <img src="assets/images/careconcierge.png" alt="Care Concierge">
                    <div class="overlay-content">
                        <h4>Care Concierge</h4>
                        <p>Ride-booking app like Ola/Uber.</p>
                        <a href="https://play.google.com/store/apps/details?id=com.gilsonshousingpartners.concierge" target="_blank" class="btn">View Project</a>
                    </div>
                </div>
                <div class="project-card">
                    <img src="assets/images/carecart.png" alt="Care Cart">
                    <div class="overlay-content">
                        <h4>Care Cart</h4>
                        <p>eCommerce app like Blinkit/Zepto.</p>
                        <a href="https://play.google.com/store/apps/details?id=com.gilsonhousingpartners.carecart" target="_blank" class="btn">View Project</a>
                    </div>
                </div>
                <div class="project-card">
                    <img src="assets/images/iresident.png" alt="iResident">
                    <div class="overlay-content">
                        <h4>iResident</h4>
                        <p>Home Services app like Urban Company.</p>
                        <a href="https://play.google.com/store/apps/details?id=com.app.iresident" target="_blank" class="btn">View Project</a>
                    </div>
                </div>
                <div class="project-card">
                    <img src="assets/images/meinstein.png" alt="mEinstein">
                    <div class="overlay-content">
                        <h4>mEinstein</h4>
                        <p>Personal AI assistant app.</p>
                        <a href="https://meinstein.ai/" target="_blank" class="btn">View Project</a>
                    </div>
                </div>
                <div class="project-card">
                    <img src="assets/images/hinduvahini.jpg" alt="Hindu Vahini">
                    <div class="overlay-content">
                        <h4>Hindu Vahini</h4>
                        <p>Hindu Organisation Website.</p>
                        <a href="https://www.hinduvahini.in/" target="_blank" class="btn">View Project</a>
                    </div>
                </div>
                <div class="project-card">
                    <img src="assets/images/digitalpathsala.png" alt="Digital Pathshala">
                    <div class="overlay-content">
                        <h4>Digital Pathshala</h4>
                        <p>Educational Coaching Website.</p>
                        <a href="https://github.com/jeetendra-kumar-5529/e-learning-web-app" target="_blank" class="btn">View Project</a>
                    </div>
                </div>
                <div class="project-card">
                    <img src="assets/images/portfolio (8).jpg" alt="Portfolio">
                    <div class="overlay-content">
                        <h4>Portfolio</h4>
                        <p>Portfolio Website.</p>
                        <a href="https://github.com/jeetendra-kumar-5529/portfolio-website" target="_blank" class="btn">View Project</a>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="webdevelop">
                <div class="project-card">
                    <img src="assets/images/hinduvahini.jpg" alt="Hindu Vahini">
                    <div class="overlay-content">
                        <h4>Hindu Vahini</h4>
                        <p>Hindu Organisation Website.</p>
                        <a href="https://www.hinduvahini.in/" target="_blank" class="btn">View Project</a>
                    </div>
                </div>
                <div class="project-card">
                    <img src="assets/images/digitalpathsala.png" alt="Digital Pathshala">
                    <div class="overlay-content">
                        <h4>Digital Pathshala</h4>
                        <p>Educational Coaching Website.</p>
                        <a href="https://github.com/jeetendra-kumar-5529/e-learning-web-app" target="_blank" class="btn">View Project</a>
                    </div>
                </div>
                <div class="project-card">
                    <img src="assets/images/portfolio (8).jpg" alt="Portfolio">
                    <div class="overlay-content">
                        <h4>Portfolio</h4>
                        <p>Portfolio Website.</p>
                        <a href="https://github.com/jeetendra-kumar-5529/portfolio-website" target="_blank" class="btn">View Project</a>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="appdevelop">
                <div class="project-card">
                    <img src="assets/images/careconcierge.png" alt="Care Concierge">
                    <div class="overlay-content">
                        <h4>Care Concierge</h4>
                        <p>Ride-booking app like Ola/Uber.</p>
                        <a href="https://play.google.com/store/apps/details?id=com.gilsonshousingpartners.concierge" target="_blank" class="btn">View Project</a>
                    </div>
                </div>
                 <div class="project-card">
                    <img src="assets/images/carecart.png" alt="Care Concierge">
                    <div class="overlay-content">
                        <h4>Care Cart</h4>
                        <p>eCommerce app like Blinkit/Zepto.</p>
                        <a href="https://play.google.com/store/apps/details?id=com.gilsonhousingpartners.carecart" target="_blank" class="btn">View Project</a>
                    </div>
                </div>
                <div class="project-card">
                    <img src="assets/images/iresident.png" alt="Care Concierge">
                    <div class="overlay-content">
                        <h4>iResident</h4>
                        <p>Home Services app like Urban Company.</p>
                        <a href="https://play.google.com/store/apps/details?id=com.app.iresident" target="_blank" class="btn">View Project</a>
                    </div>
                </div>
                <div class="project-card">
                    <img src="assets/images/meinstein.png" alt="Care Concierge">
                    <div class="overlay-content">
                        <h4>mEinstein</h4>
                        <p>Personal AI assistant app.</p>
                        <a href="https://meinstein.ai/" target="_blank" class="btn">View Project</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- --------------------Testimonial------------------------------- -->

    <!-- <section class="testimonial" id="testimonial">
        <div class="title">
            <h2>My <span>Work</span></h2>
        </div>
        <div class="main-container">
            <div class="container testimonial-container scrollbar">
                <div class="card">
                    <img src="assets/images/t (1).jpg" alt="">
                    <div class="info">
                        <h3>Kelly Doe</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sapiente id quo omnis accusantium facilis libero perferendis quam dolorum veniam nulla natus rerum iusto, fugiat tempore officiis, amet dignissimos accusamus?</p>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/t (2).jpg" alt="">
                    <div class="info">
                        <h3>Neil</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sapiente id quo omnis accusantium facilis libero perferendis quam dolorum veniam nulla natus rerum iusto, fugiat tempore officiis, amet dignissimos accusamus?</p>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/t (3).jpg" alt="">
                    <div class="info">
                        <h3>Williamson</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sapiente id quo omnis accusantium facilis libero perferendis quam dolorum veniam nulla natus rerum iusto, fugiat tempore officiis, amet dignissimos accusamus?</p>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/t (4).jpg" alt="">
                    <div class="info">
                        <h3>Denver</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sapiente id quo omnis accusantium facilis libero perferendis quam dolorum veniam nulla natus rerum iusto, fugiat tempore officiis, amet dignissimos accusamus?</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- -----------------------Contact----------------------- -->

    <section class="contact" id="contact">
        <div class="title">
            <h2>Contact <span>Me</span></h2>
        </div>
        <div class="contact-content">
            <div class="row">
                <div class="box">
                    <div class="box-icon">
                        <i class="ri-phone-line"></i>
                    </div>
                    <div class="box-info">
                        <h4>Phone Number:</h4>
                        <span>+91 9682755301</span>
                    </div>
                </div>
                <div class="box">
                    <div class="box-icon">
                        <i class="ri-home-line"></i>
                    </div>
                    <div class="box-info">
                        <h4>Address:</h4>
                        <span>Lucknow, India</span>
                    </div>
                </div>
                <div class="box">
                    <div class="box-icon">
                        <i class="ri-mail-line"></i>
                    </div>
                    <div class="box-info">
                        <h4>Email Address:</h4>
                        <span>jeetendrakumar5529@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <form action="contact-code.php" class="contact-form", method="post">
                    <div class="form-box">
                        <input type="text" placeholder="Enter Your Name" name="name" id="" required>
                    </div>
                    <div class="form-box">
                        <input type="email" placeholder="Enter Your Email" name="email" id="" required>
                    </div>
                    <div class="form-box">
                        <textarea name="message" id="" cols="20" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn overlay">
                        <span>Send Message</span>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <div class="copyright">
        <p>Copyright &copy; | This website is made with <i class="ri-heart-line"></i> by <span>Jeetendra Kumar</span></p>
    </div>

    <!-- Animation -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Script -->
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>    
  </body>
</html>