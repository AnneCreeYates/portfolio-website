<!DOCTYPE html>
<html lang="en-UK">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles.css" type="text/css" media="screen">

  <!-- Font Awsome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Allison&family=Palette+Mosaic&display=swap" rel="stylesheet">

  <title>
    Anne C. Yates
  </title>
</head>

<body>

  <?php
  include("form-to-email.php");
  ?>

  <header class="header">
    <nav id="navbar" class="navbar">
      <!-- <a href="#" class="nav-logo">Anne Cree Yates</a> -->
      <ul class="nav-menu">
        <!-- <li class="nav-item">
                    <a href="#home" class="nav-link">Home</a>
                </li> -->
        <li class="nav-item">
          <a href="#about" class="nav-link">About</a>
        </li>
        <li class="nav-item">
          <a href="#work" class="nav-link">Work</a>
        </li>
        <li class="nav-item">
          <a href="#contact" class="nav-link">Contact</a>
        </li>
      </ul>
      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>
  </header>

  <section class="introduction" id="introduction">
    <div class="framed-image">
      <h1>Hello!</h1>
      <img class="image" src="./imgs/polaroid-and-flowers.png">
      <!--image of the frame around the photo-->
      <img class="image2" src="./imgs/pontu.gif">
      <h3> I'm Anna</h3>
    </div>
    <h2>Front End Developer</h2><br>
    <h4>located in <span>London</span></h4>
  </section>

  <article class="about" id="about">
    <h3>About me</h3>
    <div class="container">
      <p>
        Like in every case there is a short and a long version of my story.
        The short goes like this:
      </p>
      <br>

      <ul>
        <li>I am an artist that has found in coding a new form of expression.</li>
        <li>Trouble shooting is my second nature, so I try to solve any issue I can put my hands (and my brain-cycles) on.</li>
        <li>I work with a range of technologies, including (but not exclusively) <strong>HTML</strong>, <strong>CSS</strong>, <strong>JavaScript</strong> as well as <strong>PHP</strong>, and I constantly develop my already existing ones and new skills.</li>
      </ul>
      <br>
      <p>
        If you wish to find out more here is the longer version.
        If you have any questions go ahead and <br><a href=#contact class="contact-link"> get in touch.</a>
      </p>


    </div>
  </article>

  <section class="work" id="work">
    <div class="description">
      <h3>Latest Project</h3>
      <p><span>Project title goes here - this is a placeholder</span><br>
        A lot of Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Itaque eos, explicabo odio quis ipsa, neque modi et voluptate voluptatibus assumenda
        molestiae similique, doloremque veritatis laborum omnis dignissimos reiciendis
        atque maxime!
        <br>
        <br>
        <a href="https://annecreeyates.com/" target="_blank">
          <img class=project-image src="imgs/pontu.gif" alt="Anne Cree Yates Shop website" />
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
    <div>
      <h3>Let's get in touch!</h3>

      <div class="contact-form">
        <form id="contact-form" method="post" action="/form-to-email.php" name="formToEmail">

          <?php echo ((!empty($errorMessage)) ? $errorMessage : '') ?>

          <input name="name" type="text" class="form-controller" placeholder="Your name" required>
          <br>
          <input name="email" type="email" class="form-controller" placeholder="Your email" required>
          <br>
          <input name="subject" type="text" class="form-controller" id="subject" placeholder="Subject" required>
          <br>
          <textarea name="message" class="form-controller, message" placeholder="Your message" required></textarea>
          <br>

          <input type="submit" class="form-controller-submit" value="Send">

        </form>

      </div>
    </div>

  </section>

</body>
<footer>

  <ul>
    <li><a href="https://www.facebook.com/annecreeyates" target=_blank class="fa fa-facebook"></a></li>
    <li><a href="https://twitter.com/CreeYates" target=_blank class="fa fa-twitter"></a></li>
    <li><a href="https://www.linkedin.com/in/annawrzosek/" target=_blank class="fa fa-linkedin"></a></li>
  </ul>
  <!--think if you want to add some other social media later-->

  <p class="references">
    Resources:
    <br>
    <a href='https://pngtree.com/so/polaroid'>polaroid png from pngtree.com/</a>
  </p>

</footer>
<script type="text/javascript" src="main.js"></script>

</html>