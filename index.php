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
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500&family=Water+Brush&display=swap" rel="stylesheet"> 


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
        <li class="main-nav__item" id = "about">
          <a href="#about" class="main-nav__about-link">About</a>
        </li>
        <li class="main-nav__item" id = "work">
          <a href="#work" class="main-nav__work-link">Work</a>
        </li>
        <li class="main-nav__item" id = "contact">
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
        <p class = "intro__location">located in <span>London</span></p>
      </header>

    <figure class="intro__images">
      
    </figure>
    
  </section>

  <section class="about" id="about">
    <div class="about__wrapper">
      <h1>About me</h1>
      <p>
        Like in every case there is a short and a long version of my story.
        The short goes like this:
      </p>

      <ul>
        <li>I am an artist that has found in coding a new form of expression.</li>
        <li>Trouble shooting is my second nature, so I try to solve any issue I can put my hands (and my brain-cycles) on.</li>
        <li>I work with a range of technologies, including (but not exclusively) <strong>HTML</strong>, <strong>CSS</strong>, <strong>JavaScript</strong> as well as <strong>PHP</strong>, and I constantly develop my already existing ones and new skills.</li>
      </ul>
      
      <p>
        If you wish to find out more here is the longer version.
        If you have any questions go ahead and <a href=#contact class="contact-link"> get in touch.</a>
      </p>


    </div>
  </section>

  <section class="work" id="work">
    <div class="work__wrapper">
      <h1>Latest Project</h1>
      <h2 class = "work__project-title">Project title goes here - this is a placeholder</h2>
        <p class = "work__project-description">
          A lot of Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Itaque eos, explicabo odio quis ipsa, neque modi et voluptate voluptatibus assumenda
          molestiae similique, doloremque veritatis laborum omnis dignissimos reiciendis
          atque maxime!
          <a href="http://solicitor-southkensington.rf.gd" target="_blank">
            <img class = work__project-image src="imgs\the-shard-london-skyline2-forweb.jpg" width = "500" height = "300" alt="black and white London skyline featuring the Shard"/>
            <!--the jpg with the first glance of the website goes here-->
          </a>
        </p>
      <!--This is a placeholder for a description of the latest project. 
                Let people know what exactly is it, like "this is a website of a so-and-so artist/ business",
            the reason for building it "bringing the wonderful aretwork to the world, etc", what techology was used to build it, like html, css, js, react etc,
        and make sure the website is live before making it go live. And finally add the link under the description. Should show up as a thumbnail.-->
    </div>
  </section>

  <section class="contact" id="contact">
    <div class = "contact__wrapper">
      <h1>Let's get in touch!</h1>

      <div class="contact__form-wrapper">
        <form class="contact__form" method="post" action="/form-to-email.php" name="formToEmail">

          <?php echo ((!empty($errorMessage)) ? $errorMessage : '') ?>

          <input name="name" type="text" class="contact__details, name" placeholder="Your name" required>
          <input name="email" type="email" class="contact__details, email" placeholder="Your email" required>
          <input name="subject" type="text" class="contact__details, subject" placeholder="Subject" required>
          <textarea name="message" class="contact__details, message" placeholder="Your message" required></textarea>

          <input type="submit" class="contact__details, submit" value="Send">

        </form>

      </div>
    </div>

  </section>
  <footer>

  <ul>
    <li><a href="https://www.facebook.com/annecreeyates" target=_blank class="fa fa-facebook"></a></li>
    <li><a href="https://twitter.com/CreeYates" target=_blank class="fa fa-twitter"></a></li>
    <li><a href="https://www.linkedin.com/in/annawrzosek/" target=_blank class="fa fa-linkedin"></a></li>
  </ul>
  <!--think if you want to add some other social media later - github-->

  <p class="references">
    Resources:
    <a> ... </a>
  </p>

</footer>
</body>

<script type="text/javascript" src="main.js"></script>

</html>