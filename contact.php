
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta charset="utf-8">
  <title>Booking Confirmed</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="stylesheet/booking.css">
  <link rel="stylesheet" href="stylesheet/home.css">
  <link rel="stylesheet" href="stylesheet/base.css">
  <link rel="stylesheet" href="stylesheet/reservation.css">
</head>

<body>
  <!-- This is the Navbar which will be on every page -->

  <nav class="navbar navbar-expand-lg  navbar-dark navbar-inverse fixed-top">
    <div class="container-fluid">

      <a class="navbar-brand" href="homePage.html">SNOOZE.com</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- All items in here will be in the collapse button -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="booking.php">Search</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cancel.php">Reservation Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Log in</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End of Navbar -->




  <section class="reserve-area-two">
    <div class="section-top">
      <span class="heading-top">Contact Request</span>
    </div>
    <body>

      <?php
        if(isset($_POST['submit'])){
          $name=$_POST['name'];
          $email=$_POST['email'];
          $msg=$_POST['msg'];
          $conNum=$_POST['conNum'];

          $to='moslehpourmina@gmail.com'; // Receiver
          $subject='Customer Request From Snooze.com';
          $message="Name :".$name."\n"."Confirmation # :".$conNum."\n"."Message :"."\n\n".$msg;
          $headers="From: ".$email;

          if(mail($to, $subject, $message, $headers)){
            echo "<h1>Thank you"." ".$name. ", ". "your requst has been submited successfully! We will get back to you shortly.</h1>";
          }
          else{
            echo "We are sorry that something went wrong... please try again. ";
          }
        }
      ?>

    </body>
  </section>
</body>
</html>
