<?php
$con = mysqli_connect('localhost','root','', 'db_hotel_reservations');

$sql = "SELECT * FROM tbl_reservations";
$result = mysqli_query($con, $sql);

WHILE($row = mysqli_fetch_array($result))

{
$id = $row ['fldConfirmation'];
$firstname = $row ['fldName'];
$email = $row ['fldEmail'];
$hotel = $row['fldHotel'];
$checkin = $row['fldCheckin'];
$checkout = $row['fldCheckout'];
$phone = $row['fldPhone'];
$rooms = $row['fldRooms'];

echo $checkin. ' '. $firstname. ' '. $id. ' '.$email.' '.$phone.' '.$checkout.' '.$hotel.' '.$rooms;
echo '<br/><br/>';
}
 ?>
