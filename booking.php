<!DOCTYPE html>
<!-- <html lang="en" dir="ltr"> -->

<head>
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta charset="utf-8">
  <title>Booking</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- <link rel="stylesheet" href="stylesheet/nav-v2.css"> -->
  <link rel="stylesheet" href="stylesheet/booking.css">
  <link rel="stylesheet" href="stylesheet/home.css">
  <link rel="stylesheet" href="stylesheet/base.css">


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
              <a class="nav-link" href="login2.0.html">Log in</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End of Navbar -->


  <!-- <header>
    <div class="topnav">
      <b>SNOOZE.com</b>
      <a href="#contact">CONTACT</a>
      <a href="#reservations">RESERVATIONS</a>
      <a href="#about">ABOUT</a>
      <a class="active" href="#home">HOME</a>
    </div>
  </header> -->
  <section class="booking-area">
    <div class="container">
      <form action="reservation.php" method="POST" class="form">
        <div class="input-group">
          <label for="destination" class="input-label">State</label>
          <input type="text" class="input-b" id="destination" value="<?php echo $_POST['state']; ?>"></input>
        </div>
        <div class="input-group">
          <label for="checkin" class="input-label">Check In</label>
          <input type="date" class="input" name="checkInDate" id="checkin" required></input>
        </div>
        <div class="input-group">
          <label for="checkout" class="input-label">Check Out</label>
          <input type="date" class="input" name="checkOutDate" id="checkout" required></input>
        </div>
        <div class="input-group-b">
          <label for="rooms" class="input-label-b">Room(s)</label>
          <select type="text" class="options" name="rooms" id="rooms">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>


    </div>
  </section>

<section class="rooms">
  <div class="rooms-continer">
    <h5 class="section-head">
      <span class="heading">Explore Hotels in California</span>
    </h5>
    <div class="grid rooms-grid">
      <div class="grid-item featured-rooms">
        <div class="image-wrap">
          <img class="room-image" src="hotel-images/hardrock.jpg">
          <h5 class="room-name">Hard Rock - Hollywood</h5>
        </div>
        <div class="room-info-wrap">
          <span class="room-price">$160 <span class="per-night">/ night</span></span>
          <p class="paragraph">Located in Gaslamp Distring in the heart of Downtown San Diego. Magnificent view the Pacific Ocean and a walking distance from Petco Park.</p>
          <li>WiFi</li>
          <li>All Inclusive</li>
          <li>Free Cancellation

                <input type="hidden" name="hardRockHollyWood" value="Hard Rock - Holly Wood">
              <input class="btn rooms-btn" type="submit" name="hardRock" value="Book Now &rarr;" style="float: right; margin-right: 50px;">

          </li>
        </div>
      </div>
      <div class="grid-item featured-rooms">
        <div class="image-wrap">
          <img class="room-image" src="hotel-images/palmsprings.jpg">
          <h5 class="room-name">Solare - Palm Springs</h5>
        </div>
        <div class="room-info-wrap">
          <span class="room-price">$98 <span class="per-night">/ night</span></span>
          <p class="paragraph">Enjoy your Summer stay in Palm Springs wth Solare. Over six different pools. Night Entertainment and over plenty of rooms to choose from</p>
          <li>WiFi</li>
          <li>All Inclusive</li>
          <li>Cancel within 24 hours before checking in

                <input type="hidden" name="solarePS" value="Solare - Palm Springs">
                <input class="btn rooms-btn" type="submit" name="solare" value="Book Now &rarr;" style="float: right; margin-right: 50px;">

          </li>
        </div>
      </div>
      <div class="grid-item featured-rooms">
        <div class="image-wrap">
          <img class="room-image" src="hotel-images/sanfran.jpg">
          <h5 class="room-name">Monarch - San Francisco</h5>
        </div>
        <div class="room-info-wrap">
          <span class="room-price">$320 <span class="per-night">/ night</span></span>
          <p class="paragraph">San Francisco is the place to be. Monarch is located in the heart of San Franciso and offers a great 360 view of the city and the harbor.</p>
        <li>WiFi</li>
        <li>All Inclusive</li>
        <li>Free Cancellation

                <input type="hidden" name="monarchHotel" value="Monarch - San Francisco">
                <input class="btn rooms-btn" type="submit" name="monarch" value="Book Now &rarr;" style="float: right; margin-right: 50px;">

        </li>
        </div>
      </div>
      <div class="grid-item featured-rooms">
        <div class="image-wrap">
          <img class="room-image" src="hotel-images/w_hollywood.png">
          <h5 class="room-name">W - Hollywood</h5>
        </div>
        <div class="room-info-wrap">
          <span class="room-price">$190 <span class="per-night">/night</span></span>
          <p class="paragraph">Whether if your new stay is for business or pleasure. The luxurious W in Hollywood will make you feeling like a celeberty</p>
          <li>WiFi</li>
          <li>All Inclusive</li>
          <li>Free Cancellation

              <input type="hidden" name="wHotel" value="W - Holly Wood">
              <input class="btn rooms-btn" type="submit" name="w" value="Book Now &rarr;" style="float: right; margin-right: 50px;">

          </li>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- These scripts are required on every page -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
