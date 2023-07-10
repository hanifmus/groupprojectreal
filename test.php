<?php

session_start();

$roomno = $_SESSION['roomno'];
  $fullname = $_SESSION['fullname'];
  $email = $_SESSION['email'];
  $checkin = $_SESSION['checkin'];
  $checkout = $_SESSION['checkout'];
  $adultqty = $_SESSION['adultqty'];
  $childqty = $_SESSION['childqty'];
  $request = $_SESSION['request'];

  echo "$fullname";