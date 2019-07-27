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
    <!-- Optional theme -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="form.css" />
    <script src="form.js"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Portfolio</title>
  </head>
  <body>
    <div>
      <video autoplay muted loop class="parallax1">
        <source src="img/videobg.mp4" type="video/mp4" />
      </video>
      <div class="video-overlay"></div>
      <!-- <div class="parallax1"> -->
      <div class="heading">
        Egidijus Nekliajevas
      </div>
    </div>
    <!-- </div> -->
    <section>
      <img src="img/profile1.jpg" class="two-col foto" alt="My picture" />

      <div class="two-col">
        <h1>About me</h1>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum vero
        quaerat sint dolorum omnis exercitationem esse ad laudantium delectus,
        molestiae sit dolor quibusdam odit impedit corrupti temporibus ex, iusto
        repudiandae at ipsum doloremque minus? Obcaecati iste sunt deserunt
        voluptatibus reiciendis. <br />

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
      <div class="two-col">
        <div class="contact-form">
          <form id="contact-form" method="POST" action="contact.php">
            <input
              name="name"
              type="text"
              class="form-control"
              placeholder="Your full name"
              required
            />
            <br />

            <input
              name="email"
              type="email"
              class="form-control"
              placeholder="Your email"
              required
            />
            <br />
            <textarea
              name="message"
              class="form-control"
              placeholder="Your message"
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

        <!-- <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form role="form" method="post" id="reused_form">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="name"> Your Full Name:</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" maxlength="50">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="email"> Email:</label>
                                    <input type="text" class="form-control" id="email" name="email" maxlength="50">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label for="name"> Message:</label>
                                    <textarea class="form-control" type="textarea" id="message" name="message"
                                        placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Post It!
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div id="success_message" style="width:100%; height:100%; display:none; ">
                            <h3>Sent your message successfully!</h3>
                        </div>
                        <div id="error_message" style="width:100%; height:100%; display:none; ">
                            <h3>Error</h3> Sorry there was an error sending your form.
                        </div>
                    </div> -->
      </div>
    </div>
    <!-- contact form ends here -->
  </body>
</html>
