<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Main page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/aos.min.css">
    <link rel="stylesheet" href="css/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/animsition.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="shortcut icon" href="/images/os.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  
  <div class="js-animsition animsition" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">

    <header class="templateux-navbar"  data-aos="fade-down">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3 col-3">  <div class="site-logo"><a href="index.html" class="animsition-link">Nick Matsnev</a></div></div>
          <div class="col-sm-9 col-9 text-right">

            <button class="hamburger hamburger--spin toggle-menu ml-auto js-toggle-menu" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>  

            <nav class="templateux-menu js-templateux-menu" role="navigation">
              <ul class="list-unstyled">
                <li><a href="index.html" class="animsition-link">Home</a></li>
                <li><a href="about.html" class="animsition-link">About</a></li>
              </ul>
            </nav>  
          </div>
        </div>
      </div>
    </header>

    <!-- END templateux-navbar -->
    <section class="templateux-hero mb-5"  data-scrollax-parent="true">
      <!-- <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img src="images/hero_2.jpg" /></div> -->

      <div class="container">
        <div class="row align-items-center justify-content-center intro">
          <div class="col-md-6" data-aos="fade-up">
            <h1>Get in touch</h1>
            <h3>My phone number is <strong>+420 731 048 150</strong> and please don't hesitate to contact me via <strong>matsnnik@fit.cvut.cz</strong>
            <p class="lead">Have a great idea or just want to talk with me? Let me know using the form below</p>
            
          </div>
        </div>
      </div>
    </section>
    <!-- END templateux-hero -->
    
     
<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['sub'])) {$sub = $_POST['sub']; if ($sub == '') {unset($sub);}}
if (isset($_POST['body'])) {$body = $_POST['body']; if ($body == '') {unset($body);}}
 
if (isset($name) && isset($email) && isset($sub) && isset($body)){
 
$address = "matsnev2001@yandex.com";
$mes = "Name: $name \n E-mail: $email \n Theme: $sub \n Message: $body";
$send = mail($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
if ($send == 'true')
{echo "Sent successfully. Go to the <a href='index.html'>main page</a>, and continue your working";}
else {echo "Error, Message is not sent!";}
 
}
else
{
echo "";
}
?>
    <section class="templateux-portfolio-overlap mb-2" data-aos="fade-up" id="next">
      <div class="container">
        <!-- <div class="row"> -->
          <form name="MyForm"  action="" method="post">
            <div class="row">
              <div class="col-md-4  mb-4">
              <p><input class="input" name="name" type="text" /> Your name</p>
              </div>
              <div class="col-md-4  mb-4">
              <p><input class="input" name="email" type="text"  /> Your e-mail</p>
              </div>
              <div class="col-md-4  mb-4">
              <p><input class="input" name="sub" type="text"  /> Phone</p>
              </div>
            </div>
            <div class="row">
            </div>
            <div class="row">
              <div class="col-md-12  mb-4">
                <textarea name="body" class="form-control" id="" cols="30" rows="10" placeholder="Write your message"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4  mb-4">
              <p style="color:black;"><input id="submit" value="Send" type="submit" /></p>
              </div>
            </div>
          </form>
        <!-- </div> -->
      </div>
    </section>


    

  </div>

  
  <script src="js/scripts-all.js"></script>
  <script src="js/main.js"></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  </body>
</html>