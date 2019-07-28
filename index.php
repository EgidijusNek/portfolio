<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Portfolio</title>
  </head>
  <body>
    <!-- <video autoplay muted loop class="parallax1">
      <source src="img/videobg.mp4" type="video/mp4" />
    </video>
    <div class="video-overlay"></div> -->
    <div class="parallax1">
      <div class="heading">
        Egidijus Nekliajevas
        <h1>Junior web developer</h1>
      </div>
    </div>
    <section>
      <img src="img/profile1.jpg" class="two-col foto" alt="My picture" />

      <div class="two-col">
        <h1>About me</h1>
        <p>
          Hi! My name is Egidijus and I like to create websites. I've been
          interested in web technologies for about 10 years now, and started to
          learn programing languages and and web developement two years ago. If
          you want to know more about me you can read my resume by clicking
          green button bellow. If you need a website, want to hire me or have
          any other related questions, contact me on a form at the end of the
          page and I'll be happy to help you.
        </p>

        <br />

        <a class="button button1" href="http://egidijus.site/cv/">
          View My Full Resume
        </a>
      </div>
    </section>
    <div class="parallax2">
      <div class="heading-sm"></div>
    </div>
    <section class="dark">
      <h2>Projects that I have already created</h2>

      <div class="grid-container">
        <div class="grid-item">
          <p>Baskeball league of Varėna</p>
          <a href="http://krepsinis.varena.lt/"
            ><img src="img/site1.png" alt="Varėnos krepšinis"
          /></a>
        </div>
        <div class="grid-item">
          <p>Motiejus virtual baskeball museum</p>
          <a href="http://motiejausmuziejus.lt/"
            ><img src="img/site2.png" alt="Motiejaus Muziejus"
          /></a>
        </div>
        <div class="grid-item">
          <p>My next project</p>
          <a href="#"
            ><img src="img/placeholder2.png" alt="A place for your project"
          /></a>
        </div>
        <div class="grid-item">
          <p>My next project</p>
          <a href="#"
            ><img src="img/placeholder.png" alt="A place for your project"
          /></a>
        </div>
        <div class="grid-item">
          <p>My next project</p>
          <a href="#"
            ><img src="img/placeholder.png" alt="A place for your project"
          /></a>
        </div>
        <div class="grid-item">
          <p>My next project</p>
          <a href="#"
            ><img src="img/placeholder.png" alt="A place for your project"
          /></a>
        </div>
      </div>
    </section>

    <div class="parallax3"></div>
    <!-- contact form starts here -->

    <div class="dark">
      <h3>Have questions? Contact me</h3>
      <div class="contact-form">
        <form id="contact-form" method="POST" action="contact.php">
          <h4>Your Name</h4>
          <input
            name="name"
            type="text"
            class="form-control"
            placeholder="Enter your full name"
            required
          />
          <br />
          <h4>Your email</h4>
          <input
            name="email"
            type="email"
            class="form-control"
            placeholder="Enter your email address"
            required
          />
          <br />
          <h4>Your message</h4>
          <textarea
            name="message"
            class="form-control"
            placeholder="Write your question"
            id=""
            cols="30"
            rows="10"
            required
          ></textarea>
          <br />
          <input
            type="submit"
            class="form-control submit"
            value="Send Message"
          />
        </form>
      </div>
    </div>
    <!-- contact form ends here -->
  </body>
</html>
