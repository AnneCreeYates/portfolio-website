<!DOCTYPE html>
<html lang="en-UK">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/index.css" type="text/css" media="screen">
  <!-- Font Awsome icons -->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Loop&display=swap" rel="stylesheet">


  <!-- make the title more gripping, more key words etc. for the purpose of SEO -->
  <title>
    Anne C. Yates | London | Front End Developer Portfolio
  </title>
</head>

<body>

  <?php
  include("form-to-email.php");
  ?>

    <nav class="main-nav">

      <ul class="main-nav__menu">
        <li class="main-nav__item" id = "about-bubble">
          <a href="#about" class="main-nav__about-link">About</a>
        </li>
        <li class="main-nav__item" id = "work-bubble">
          <a href="#work" class="main-nav__work-link">Work</a>
        </li>
        <li class="main-nav__item" id = "contact-bubble">
          <a href="#contact" class="main-nav__contact-link">Contact</a>
        </li>
      </ul>

      <div class="hamburger-bars">
        <span class="top-bar"></span>
        <span class="middle-bar"></span>
        <span class="bottom-bar"></span>
      </div>

    </nav>


  <section class="intro" id="intro">

      <header>
        <p class = "intro__hello">Hello!</p>
        <p class = "intro__name"> I'm Anna</p>
        <p class = "intro__title">Front End Developer</p>
        <p class = "intro__location">located in <span class = "intro-location__span">London</span></p>
      </header>

      
  </section>

  <section id = "about" class="about">
    <!-- <div class="about__wrapper"> -->
      <figure class = "laptop__image">
        <img src="/imgs/laptop.jpg" alt = "an open laptop on a wooden table with writing on the screen 'I design and devlop experiences that make people's lives simple'">
      </figure>
      <h1 class="about__title">About me</h1>
      <p class = "about__para">
      I am an artist that has found in front end development a new form of expression.
      By using my skills in coding and design as well as passion for giving the user the best experience possible I wish to create cutting edge interfaces that are engaging and look great. 
      Trouble shooting is my second nature, so I try to solve any issue I can put my hands (and my brain-cycles) on.
      I work with a range of technologies, including (but not exclusively) <strong>HTML</strong>, <strong>CSS</strong>, <strong>JavaScript</strong>, <strong>SaSS</strong> as well as <strong>PHP</strong>, and I constantly develop my already existing ones and new skills.

      <p class = "getInTouch__para">
        If you have any questions go ahead and<a href=#contact class="contact-link"> get in touch.</a>
      </p>


    <!-- </div> -->
  </section>

  <section class="work">
    <!-- <div class="work__wrapper"> -->
      <h1 id="work" class = "work__header">Latest Project</h1>
      <h2 class = "work__project-title">Landing page for a young solicitor</h2>
        <p class = "work__project-description">Beginning a new career in any industry is always stressful, so I built this simple landing page to help a young solicitor start growing their presence online and maybe build their confidence in their abilities.
The page is very simple. It contains short description of prided services and contact details – a business card style.</p>
        <a href="http://solicitor-southkensington.rf.gd" target="_blank">
            <img class = "work__project-image" src="imgs\the-shard-london-skyline2-forweb.jpg" alt="black and white London skyline featuring the Shard"/>
        </a>

        <!-- <button class = "github-repo__button" type = "button" >GitHub Repo</button> -->
    <!-- </div> -->
  </section>

  <section class="contact">
    <!-- <div class = "contact__wrapper"> -->
      <h1 id="contact" class = "contact__title">Let's get in touch!</h1>

      <!-- <div class="contact__form-wrapper"> -->
        <form class="contact__form" method="post" action="/form-to-email.php" name="formToEmail">

          <?php echo ((!empty($errorMessage)) ? $errorMessage : '') ?>

          <input name="name" type="text" class="contact__details, name" placeholder="Your name" required>
          <input name="email" type="email" class="contact__details, email" placeholder="Your email" required>
          <input name="subject" type="text" class="contact__details, subject" placeholder="Subject" required>
          <textarea name="message" class="contact__details, message" placeholder="Your message" required></textarea>

          <input type="submit" class="contact__details, submit" value="Send">

        </form>

      <!-- </div> -->
    <!-- </div> -->

  </section>
  <footer>

  <ul>
    <li class = "facebook"><a href="https://www.facebook.com/annecreeyates" target=_blank class="fa fa-facebook"></a></li>
    <li class = "twitter"><a href="https://twitter.com/CreeYates" target=_blank class="fa fa-twitter"></a></li>
    <li class = "linkedin"><a href="https://www.linkedin.com/in/annawrzosek/" target=_blank class="fa fa-linkedin"></a></li>
    <li class = "github"><a href="https://github.com/AnneCreeYates" target=_blank class="fa fa-github"></a></li>
  </ul>
  

  <!-- <p class="references">
    Resources:
    <a> ... </a>
  </p> -->

</footer>
</body>

<script type="text/javascript" src="nav.js"></script>

</html>