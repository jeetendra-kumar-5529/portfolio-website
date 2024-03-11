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
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#testimonial">Testimonial</a></li>
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
                <h3>A Web Developer</h3>
                <p>Welcome to my portfolio website! A seasoned Web Developer with expertise in a variety of technologies. My skill set includes ReactJs, NodeJs, ExpressJs, Laravel, and Codeignitor. With a passion for crafting dynamic and user-friendly web experiences, I strive to deliver innovative solutions tailored to meet diverse client needs. Explore my projects and let's collaborate to bring your ideas to life!</p>
                <button class="btn overlay">
                    <span>Hire me</span>
                </button>
                <div class="social-icons-container">
                    <p>Follow me on Social media</p>
                    <div class="social-icons">
                        <a href=""><i class="ri-facebook-line"></i></a>
                        <a href=""><i class="ri-github-line"></i></a>
                        <a href=""><i class="ri-twitter-line"></i></a>
                        <a href=""><i class="ri-linkedin-line"></i></a>
                        <a href=""><i class="ri-instagram-line"></i></a>
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
                <img src="assets/images/about.png" alt="">
            </div>
            <div class="right">
                <div class="title">
                    <h2>About <span>Me</span></h2>
                </div>
                <h3>I'm <span>Tanmay Singh</span> a Developer & Designer</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum libero facere autem dignissimos, mollitia ea alias harum eaque nobis accusamus. Assumenda ea harum voluptas molestias nobis suscipit ab expedita rem!
                Doloribus, quibusdam veritatis consectetur, praesentium libero aperiam suscipit assumenda quas labore et hic in nisi quia nesciunt, tenetur unde? Sit sapiente repellat natus laudantium, delectus autem voluptatum? Hic, tempore quis.</p>
                <button class="btn overlay">
                    <span>Download CV</span>
                </button>
                <div class="container">
                    <div class="progress-bar">
                        <div class="outer-circle">
                            <div class="inner-circle">
                                <div class="html-number number">
                                    <h4>Javacript</h4>
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
                                    <h4>React Js</h4>
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
                                    <h4>Node Js</h4>
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

    <section class="services" id="services">
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
    </section>

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
                <button class="btn portfolio-tab" onclick="tabOpen('digitalmarketing')">Digital Marketing</button>
            </div>
            <div class="tab-content active-content" id="all">
                <div class="image"><img src="assets/images/portfolio (1).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (2).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (3).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (21).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (4).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (19).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (14).jpg" alt=""></div>
            </div>
            <div class="tab-content" id="webdevelop">
                <div class="image"><img src="assets/images/portfolio (18).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (6).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (11).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (12).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (8).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (9).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (7).jpg" alt=""></div>
            </div>
            <div class="tab-content" id="appdevelop">
                <div class="image"><img src="assets/images/portfolio (1).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (5).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (8).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (13).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (4).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (14).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (11).jpg" alt=""></div>
            </div>
            <div class="tab-content" id="digitalmarketing">
                <div class="image"><img src="assets/images/portfolio (10).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (20).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (3).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (21).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (4).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (9).jpg" alt=""></div>
                <div class="image"><img src="assets/images/portfolio (10).jpg" alt=""></div>
            </div>
        </div>
    </section>

    <!-- --------------------Testimonial------------------------------- -->

    <section class="testimonial" id="testimonial">
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
    </section>

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
                        <span>+0123456789</span>
                    </div>
                </div>
                <div class="box">
                    <div class="box-icon">
                        <i class="ri-home-line"></i>
                    </div>
                    <div class="box-info">
                        <h4>Address:</h4>
                        <span>New Delhi, India</span>
                    </div>
                </div>
                <div class="box">
                    <div class="box-icon">
                        <i class="ri-mail-line"></i>
                    </div>
                    <div class="box-info">
                        <h4>Email Address:</h4>
                        <span>info@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <form action="" class="contact-form">
                    <div class="form-box">
                        <input type="text" placeholder="Enter Your Name" name="" id="" required>
                    </div>
                    <div class="form-box">
                        <input type="email" placeholder="Enter Your Email" name="" id="" required>
                    </div>
                    <div class="form-box">
                        <textarea name="Message" id="" cols="20" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn overlay">
                        <span>Send Message</span>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <div class="copyright">
        <p>Copyright &copy; | This website is made with <i class="ri-heart-line"></i> by <span>Tanmay Singh</span></p>
    </div>

    <!-- Animation -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Script -->
    <script src="assets/js/script.js"></script>
    
  </body>
</html>