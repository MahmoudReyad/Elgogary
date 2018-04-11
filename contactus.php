<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $subject = 'Inquiring';
    $header = "From" . $name;
    if(mail('theghostspy1@gmail.com' , $subjetc  , $message , $header)){
      $success = true;
    }
    else {
      $faild = true;
      echo "Faild";
    }

  }
} else {
  echo "Faild";
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contactus.css">
    <title>Contact us</title>
  </head>
  <body>
    <!--Start Header  -->
    <header class="main-header">
          <nav class="navbar navbar-default">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.html"><img class="img-responsive" src="images/logo.png" alt="El-Goragy"></a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav navbar-right">
                  <li  data-value =".aboutus"><a href="index.html">Home</a></li>
                  <li  data-value =".aboutus"><a href="aboutus.html">About us </a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="livingrooms.html">Living Room</a></li>
                        <li><a href="bedrooms.html">Bedroom</a></li>
                        <li><a href="diningrooms.html">Dinning Room</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="kitchen.html">Kitchen Enterway</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Large Spaces</a></li>
                      </ul>
                    </li>
                    <li class="active" data-value =".contactus"><a href="#">Contact us<span class="sr-only">(current)</span></a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EN <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="ar/contactus.php">AR</a></li>
                    </ul>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
          <!--Start Slider-->

          <!--End Slider  -->
      <div class="container">
      </div> <!--Header Container-->
    </header>
    <!--End Header  -->
    <!--Start Contactus  -->
    <div class="contactus">
      <div class="container">
        <div class="col-lg-6">
          <div class="address">
            <h1>Showroom.</h1>
            <p>7 Mostafa Elnahas St. Extension,<br>Beside Al-Manhal School, Nasr City,</p>
            <p>tel.: +20 109 960 0014 - +20 100 914 5688 <br>info@elgogaryfurniture.com</p>
              <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27626.428574699024!2d31.346157090469344!3d30.0568316901623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzDCsDAzJzI0LjYiTiAzMcKwMjEnNDkuMiJF!5e0!3m2!1sen!2seg!4v1522679754369"
               width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
             <h2>Factory.</h2>
             <p>Al-Khayata, In front of Masjid Al-Taqwa. <br>Dammietta, Egypt.</p>


          </div>
        </div>
        <div class="col-lg-6">
          <div class="form" id="contact-form">
            <h1>Get in touch.</h1>
            <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
              <div class="form-group">
                <label>Name*</label>
                <input class="form-control" type="name" required pattern="^([a-zA-Z\s]{10,})$">
              </div>
              <div class="form-group">
                <label>Email*</label>
                <input class="form-control" type="email" required>
              </div>
              <div class="form-group">
                <label>Subject*</label>
                <input class="form-control" type="subject" required maxlength="25" pattern="^([a-zA-Z\s]{10,})$">
              </div>
              <div class="form-group">
                <label>Message*</label>
                <textarea class="form-control" name="name" rows="8" cols="80" required></textarea>
              </div>
              <input type="submit" value="submit" class="btn btn-primary" name="submit">

            </form>
          </div>
        </div>
      </div>
    </div>
    <!--End Contact us  -->
    <!--Start Footer  -->
    <div class="clearfix"></div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <p>&copy;  <span id="date"></span> El Gogary Furniture.</p>
            <a href="https://www.instagram.com/elgogaryfurnitureegypt/" id="f-insta" > <img src="images/insta.png" alt="insta"></a>
            <a href="https://www.facebook.com/elgogaryfurnitureegypt/" id="f-facebook"><img src="images/facebook.png" alt="Facebook"></a>
          </div>

        </div>
      </div>
    </footer>
    <!--End Footer  -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validation.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
