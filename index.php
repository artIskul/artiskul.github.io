<!-- 
Author:Art sAntos
Date: 05,2020
Gmail:yelsantos0@gmail.com 
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art!sKul</title>

    <link href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <header>
        <div class="container">
            <nav>
                <div class="nav-brand">
                    <a href="#">
                        <img src="mylogo.png" alt="">
                    </a>
                </div>

                <div class="menu-icons open">
                    <i class="icon ion-md-menu"></i>
                </div>

                <ul class="nav-list" id="close">
                    <div class="menu-icons close">
                        <i class="icon ion-md-close"></i>
                    </div>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link">services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link">Portfolio</a>
                    </li>
                    <li class="nav-item" id="navbarskill">
                        <a href="#skill" class="nav-link skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>

        <!-- Start Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="loader"></div>
                <div class="title">
                    <h1>aRt sAntos</h1>
                    <h6>Power BI Dev || Front End Dev || Web Developer</h6>
                </div>
            </div>
        </section>
        <!-- End Hero Section -->

        <!-- Start About Section -->
        <section class="about" id="about">
            <div class="container">
                <div class="about-details">
                    <div class="about-heading">
                        <h1>ABOUT</h1>
                        <h3>MY SELF</h3>
                    </div>
                    <p>
                          Hi! I’m Art Santos — a Power BI Developer, Paginated Report Developer, and Data Analyst with a background in Front-End and Web Development.
I’ve been working in the data field since 2020, after transitioning from web development. My current focus is on building interactive dashboards, designing paginated reports, and turning raw data into meaningful business insights.

I work with tools such as Power BI Desktop, DAX, Power Query,Tableau, SQL, Excel, and Report Builder to deliver effective, data-driven solutions that support decision-making and business growth.

In addition to my work with data, I also have experience in front-end and web development. I’ve worked with technologies like HTML5, CSS3, JavaScript, Bootstrap, WordPress, PHP, Laravel, and React.js (intermediate level). I'm also familiar with version control and development tools like GitHub, GitKraken, Sublime Text, and Visual Studio Code.

I value clear communication and collaboration to ensure each project meets user needs and business goals. Whether working with data or light front-end development, I aim to create solutions that are both functional and user-friendly.

I look forward to working with you!
                    </p>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- Start Services Section -->
        <section class="services" id="services">
            <div class="container">
                <div class="section-heading">
                    <h2>SERVICES</h2>
                    <h6>What can I do for you?</h6>
                </div>

                <div class="services-group">
                    <div class="services-item webdesign">
                        <i class="fas fa-laptop-code"></i>
                        <h1>WEB DESIGN</h1>
                    </div>
                    <div class="services-item frontend">
                        <i class="fas fa-code"></i>
                        <h1>FRONT END WEB DEVELOPMENT</h1>
                    </div>
                    <div class="services-item wordpress">
                        <i class="fab fa-wordpress-simple "></i>
                        <h1>WORDPRESS</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- Start Portfolio Section -->
        <section class="portfolio" id="portfolio">
            <div class="container">
                <div class="section-heading">
                    <h2>PORTFOLIO</h2>
                    <h6>My Recent Work</h6>
                </div>
                <div class="portfolio-item">

                    <ul class="portfolio-list" id="myBtnContainer">
                        <li class="portfolio-item">
                            <button class="btn active" onclick="filterSelection('all')"> SHOW ALL</button>
                        </li>
                        <li class="portfolio-item">
                            <button class="btn" onclick="filterSelection('html')"> HTML/CSS/JS</button>
                        </li>
                        <li class="portfolio-item">
                            <button class="btn" onclick="filterSelection('laravel')"> LARAVEL</button>
                        </li>
                        <li class="portfolio-item">
                            <button class="btn" onclick="filterSelection('react')"> REACT.JS</button>
                        </li>
                        <li class="portfolio-item">
                            <button class="btn" onclick="filterSelection('wordpress')"> WORDPRESS</button>
                        </li>
                        </li>
                               <li class="portfolio-item">
                            <button class="btn" onclick="filterSelection('pbidashboard')">PBI DASHBOARD</button>
                        </li>
                    </ul>
                </div>


                <div class="portfolio-all id=" myBtnContainer">

                    <div class="filterDiv wordpress">
                        <a href="https://dentricadentalcenter.000webhostapp.com/" target="_blank"><img src="dentrica.png" alt=""><br><br>
                            <p class="btn-web">View Website</p>
                        </a>
                    </div>

                    <div class="filterDiv html">
                        <a href="https://olfupamp.000webhostapp.com/" target="_blank"><img src="olfu.png" alt=""><br><br>
                            <p class="btn-web">View Website</p>
                        </a>
                    </div>

                    <div class="filterDiv wordpress">
                        <a href="https://charmblogs.000webhostapp.com/" target="_blank"><img src="charm.png" alt=""><br><br>
                            <p class="btn-web">View Website</p>
                        </a>
                    </div>

                    <div class="filterDiv html">
                        <a href=" http://hannearby.000webhostapp.com/" target="_blank"><img src="hanapp.png" alt=""><br><br>
                            <p class="btn-web">View Website</p>
                        </a>
                    </div>

                    <div class="filterDiv react">
                        <a href="info.html" target=" _blank"><img src="react.png" alt=""><br><br>
                            <p class="btn-web">View Website</p>
                        </a>
                    </div>

                    <div class="filterDiv laravel">
                        <a href="info.html" target=" _blank"><img src="click.png" alt=""><br><br>
                            <p class="btn-web">View Website</p>
                        </a>
                    </div>

                    <div class="filterDiv laravel">
                        <a href="info.html" target=" _blank"><img src="webfine.png" alt=""><br><br>
                            <p class="btn-web">View Website</p>
                        </a>
                    </div>

                    <div class="filterDiv html">
                        <a href="" target=" _blank"><img src="myweb.png" alt=""><br><br>
                            <p class="btn-web">View Website</p>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- Start Profile -->
        <section class="skill" id="skill">
            <div class="container">
                <div class="section-heading">
                    <h2>MY SKILLS</h2>
                    <h6>My skills</h6>
                </div>
                <div class="skills-group">
                    <div class="holder">
                        <div class="bar" data-percent="85%"><span class="label second">Power BI</span></div>
                        <div class="bar" data-percent="83%"><span class="label">HTML5</span></div>
                        <div class="bar" data-percent="80%"><span class="label second">CSS3</span></div>
                        <div class="bar" data-percent="74%"><span class="label">JavaScript</span></div>
                        <div class="bar" data-percent="60%"><span class="label second">React</span></div>
                        <div class="bar" data-percent="78%"><span class="label">Bootstrap</span></div>
                        <div class="bar" data-percent="70%"><span class="label second">PhP</span></div>
                        <div class="bar" data-percent="71%"><span class="label ">Laravel</span></div>
                        <div class="bar" data-percent="72%"><span class="label second">WordPress</span></div>
                    </div>
                    <div class="scale">
                        <h1>Newbie</h1>
                        <h1>Geek</h1>
                        <h1>Ninja</h1>
                        <h1>Jedi</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Profile -->


        <!-- Start Contact Section -->
        <section class="contact" id="contact">
            <div class="container">
                <div class="section-heading">
                    <h2>CONTACT</h2>
                    <h6>Let's work together</h6>
                </div>

                <!-- Message alert in contact form -->
                <?php
                $body = '';

                if (isset($_GET['success'])) {
                    $body = "Message has been sent!";
                    echo '<div class = "success">' . $body . '</div>';
                }
                ?>

                <div class="contact-form">
                    <form action="contact.php" method="post">
                        <label>Name</label><br>
                        <input type="text" id="name" name="name" placeholder="Name" autofocus required><br>
                        <label>E-mail</label><br>
                        <input type="email" id="email" name="email" placeholder="Email" required> <br>
                        <label>Subject</label><br>
                        <input type="text" id="subject" name="subject" placeholder="Subject" required> <br>
                        <!-- <select name="subject" id="subject">
                            <option class="option" name="subject" value="">Front End Development</option>
                            <option class="option" name="subject" value="">Web Development</option>
                            <option class="option" name="subject" value="">WordPress Development</option>
                            <option class="option"  name="subject" value="">Web Design/Web Development</option>
                        </select><br> -->
                        <label>Message</label><br>
                        <textarea name="body" id="body" cols="30" rows="10" required></textarea><br>
                        <input class='btn-send' type="Submit" name="btn-send" value="Send">
                    </form>
                </div>
            </div>
        </section>
    </main>
    <!-- End Contact Section -->

    <!-- Start Footer Section -->
    <footer id="footer" class="copyright">
        <a href="#top">
            <div class="up" id="up">
                <i class="fas fa-chevron-up"></i>
            </div>
        </a>
        <div class="container">
            <div class="footer-group">
                <div class="footer-left">
                    <i class="far fa-envelope"> yelsantos0@gmail.com</i><br>
                    <i class="fas fa-mobile-alt"> +639776887033</i><br>
                    <i class="fas fa-map-marker-alt"> Pampanga</i>
                </div>

                <div class="footer-right">

                    <a href="https://www.facebook.com/yel.santos.986" target="_blank"><i class="fab fa-facebook-square">
                            Facebook</i></a> <br>

                    <a href="https://www.instagram.com/paperclayart18/" target="_blank"> <i class="fab fa-instagram">
                            Instagram</i></a><br>
                      <a href = "https://github.com/artIskul"><i class="fab fa-github-square"> Github</i></a>
                </div>

            </div>
        </div>
        <!-- 
    </footer>
    <!-- End Footer Section -->


        <script src="main.js">

        </script>

        <!-- Cdn for bar animation -->
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


</body>

</html>





