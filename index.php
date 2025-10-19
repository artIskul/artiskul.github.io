
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
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <header>
    <div class="container">
      <nav>
        <div class="nav-brand">
          <a href="#"><img src="mylogo.png" alt="Logo"></a>
        </div>
        <div class="menu-icons open"><i class="icon ion-md-menu"></i></div>
        <ul class="nav-list" id="close">
          <div class="menu-icons close"><i class="icon ion-md-close"></i></div>
          <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="#portfolio" class="nav-link">Portfolio</a></li>
          <li class="nav-item" id="navbarskill"><a href="#skills" class="nav-link skills">Skills</a></li>
          <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <!-- Hero Section -->
    <section class="hero">
      <div class="container">
        <div class="loader"></div>
        <div class="title">
          <h1>Art Santos</h1>
          <h6>Power BI Dev || Front End Dev || Web Developer</h6>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
      <div class="container">
        <div class="about-details">
          <div class="about-heading">
            <h1>ABOUT</h1>
            <h3>MY SELF</h3>
          </div>
          <p>
            Hi! I’m Art Santos … (your bio here) …
          </p>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
      <div class="container">
        <div class="section-heading">
          <h2>SERVICES</h2>
          <h6>What can I do for you?</h6>
        </div>
        <div class="services-group">
          <div class="services-item webdesign"><i class="fas fa-laptop-code"></i><h1>WEB DESIGN</h1></div>
          <div class="services-item frontend"><i class="fas fa-code"></i><h1>FRONT END WEB DEVELOPMENT</h1></div>
          <div class="services-item wordpress"><i class="fab fa-wordpress-simple"></i><h1>WORDPRESS</h1></div>
        </div>
      </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="section-heading">
          <h2>PORTFOLIO</h2>
          <h6>My Recent Work</h6>
        </div>
        <div class="portfolio-item">
          <ul class="portfolio-list" id="myBtnContainer">
            <li class="portfolio-item"><button class="btn active" onclick="filterSelection('all')">SHOW ALL</button></li>
            <li class="portfolio-item"><button class="btn" onclick="filterSelection('pbidashboard')">PBI DASHBOARD</button></li>
            <li class="portfolio-item"><button class="btn" onclick="filterSelection('html')">HTML/CSS/JS</button></li>
            <li class="portfolio-item"><button class="btn" onclick="filterSelection('laravel')">LARAVEL</button></li>
            <li class="portfolio-item"><button class="btn" onclick="filterSelection('react')">REACT.JS</button></li>
            <li class="portfolio-item"><button class="btn" onclick="filterSelection('wordpress')">WORDPRESS</button></li>
          </ul>
        </div>

        <div class="portfolio-all">
          <div class="filterDiv pbidashboard">
            <a><img src="OD1.png" alt="PBI Dashboard Image 1"></a><br><br>
            <a class="extra-img"><img src="OD2.png" alt="PBI Dashboard Image 2"></a><br><br>
            <a class="extra-img"><img src="OD3.png" alt="PBI Dashboard Image 3"></a><br><br>
            <p>About: PBI Dashboard Project</p>
          </div>

          <div class="filterDiv wordpress">
            <a href="https://dentricadentalcenter.000webhostapp.com/" target="_blank"><img src="dentrica.png" alt="Dentrica Dental Center"></a><br><br>
            <p class="btn-web">View Website</p>
          </div>

          <div class="filterDiv html">
            <a href="https://olfupamp.000webhostapp.com/" target="_blank"><img src="olfu.png" alt="OLFU Project"></a><br><br>
            <p class="btn-web">View Website</p>
          </div>

          <!-- Add your other filterDivs similarly -->
        </div>
      </div>
    </section>

    <!-- Skills Section -->
    <section class="skill" id="skills">
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
            <div you want bring more bars likewise ></div>
          </div>
          <div class="scale"><h1>Newbie</h1><h1>Geek</h1><h1>Ninja</h1><h1>Jedi</h1></div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
      <div class="container">
        <div class="section-heading">
          <h2>CONTACT</h2>
          <h6>Let's work together</h6>
        </div>

        <?php
          if (isset($_GET['success'])) {
            echo '<div class="success">Message has been sent!</div>';
          }
        ?>

        <div class="contact-form">
          <form action="contact.php" method="post">
            <label>Name</label><br>
            <input type="text" id="name" name="name" placeholder="Name" required><br>
            <label>E‑mail</label><br>
            <input type="email" id="email" name="email" placeholder="Email" required><br>
            <label>Subject</label><br>
            <input type="text" id="subject" name="subject" placeholder="Subject" required><br>
            <label>Message</label><br>
            <textarea name="body" id="body" cols="30" rows="10" required></textarea><br>
            <input class="btn‑send" type="submit" name="btn‑send" value="Send">
          </form>
        </div>

      </div>
    </section>
  </main>

  <footer class="copyright">
    <a href="#top"><div class="up"><i class="fas fa-chevron‑up"></i></div></a>
    <div class="container">
      <div class="footer-group">
        <div class="footer-left">
          <i class="far fa‑envelope"> yelsantos0@gmail.com</i><br>
          <i class="fas fa‑mobile‑alt"> +639776887033</i><br>
          <i class="fas fa‑map‑marker‑alt"> Pampanga</i>
        </div>
        <div class="footer-right">
          <a href="https://www.facebook.com/yel.santos.986" target="_blank"><i class="fab fa‑facebook‑square"> Facebook</i></a><br>
          <a href="https://www.instagram.com/paperclayart18/" target="_blank"><i class="fab fa‑instagram"> Instagram</i></a><br>
          <a href="https://github.com/artIskul" target="_blank"><i class="fab fa‑github‑square"> Github</i></a>
        </div>
      </div>
    </div>
  </footer>

  <script src="main.js"></script>
</body>
</html>
