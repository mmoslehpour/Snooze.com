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
            <a class="nav-link" href="#">About<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="booking.html">Reservations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Log in</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <section class="reserve-area-two">
    <div class="section-top">
      <span class="heading-top">Congratulations, your trip has been confirmed!</span>
    </div>
    <body>

      <?php
      if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $sender = 'moslehpourmina@gmail.com'; // replace with another sender email
        $phone = $_POST['phone'];
        $numGenerator = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
        $comfirmationNum = substr(str_shuffle($numGenerator), 0, 8);
        $receiver=$_POST['email']; // Receiver Email
        $subject='Snooze Hotel Booking Comfirmation';
        $message="Thank you for booking with Snooze.com, here is your reservation details: "."\n"."Name: ".$name."\n"."Phone: ".$phone."\n"."Comfirmation Number: ".$comfirmationNum;
        $headers="From: ".$sender;

        if(mail($receiver, $subject, $message, $header)){
          //header("Location: booking-confirmed.php");
          echo "<h4>Here is your reservation details. An email will be sent to you shortly with your confirmation number. To manage your reservation, see manage reservations.<br><br></h4> ";
          echo "<h4>Name: "." ".$name."<br><br></h4>";
          echo "<h4>Email: "." ".$receiver."<br><br></h4>";
          echo "<h4>Phone: "." ".$phone."<br><br></h4>";
          echo "<h4>Comfirmation #: "." ".$comfirmationNum."<br><br></h4>";
        }
        else{
          echo "Something went wrong... please try again. ";
        }
      }
       ?>
    </body>
  </section>
</body>
</html>
