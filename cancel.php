<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta charset="utf-8">
  <title>Reservation</title>
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




  <section class="reserve-area">
    <div class="section-top">
      <span class="heading-top">Your Reservation</span>
    </div>
    <h4>Please enter your name and confirmation number below</h4>
     <form action="cancel2.php" method="POST" name="form" class="form-box">
      <div class="form-group">
        <label for="name">Name</label>
        <br />
        <input type="text" name="name" class="form-control" placeholder="Enter your first and last name" pattern="[A-Z\sa-z]{3,20}" required />
        <br />
        <label for="confirmationNumber">Confirmation Number</label>
        <br />
        <input type="text" name="confirmationNumber" class="form-control" placeholder="Enter your confirmation number" required />

        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <input type="submit" name="submit" value="SEND" class="sub-btn"/>

          </div>
        </div>
      </div>
    </form>
  </section>




  <!-- style for form -->
<style type="text/css" media="screen">
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: helvetica;
    }
    .form-box {
        padding: 15px;
    }
    label {
        font-size: 18px;
    }

    .sub-btn {
        width: 100%;
        padding: 5px;
        border-radius: 5px;
        margin-top: 5px;
        border: none;
        background: linear-gradient(#000033, #00001a);
        cursor: pointer;
        color: #fff;
        font-size: 20px;
        text-shadow: 1px 1px 1px #444;
    }
    .sub-btn:hover {
        background: linear-gradient(#800000, #dc143c);
        opacity: 0.8;
        transition: all ease-out 0.2s;
    }
    .sub-btn:focus {
        outline: none;
    }
    @media (max-width: 720px) {
        .main {
            width: 90%;
        }
    }
</style>
<!-- These scripts are required on every page -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>
