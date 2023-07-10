<?php
session_start();

require 'config.php';
    
    //customer
    $username = $_SESSION['username'];
    $phonenumber = $_SESSION['phonenumber'];
    $email = $_SESSION['email'];

    //room
    $roomno = $_SESSION['roomno'];
    $roomsize = $_SESSION['roomsize'];
    $roomprice = $_SESSION['roomprice'];
    $roompic = $_SESSION['roompic'];

    //payment
    $paymentid = $_SESSION['paymentid'];
    $name = $_SESSION['name'];
    $username = $_SESSION['paymentid'];
    $paymentid = $_SESSION['paymentid'];
    $paymentid = $_SESSION['paymentid'];
    $paymentid = $_SESSION['paymentid'];


    /* $conn = new Dbh();
    $cstmt = $conn->connect()->prepare("SELECT * from user WHERE username = :username");
    $cstmt->bindparam(":username", $username);
    $cstmt->execute();

    $cstmt = $conn->connect()->prepare("SELECT * from user WHERE username = :username");
    $cstmt->bindparam(":username", $username);
    $cstmt->execute(); */
    
    /* if($stmt->rowcount() > 0){
        $user = $stmt->fetch();
        if(password_verify($password, $user['password'])){
            $_SESSION['username'] = $user['username'];
            $_SESSION['password'] = $user['password'];
            header("location: CustomerPAge.html");
        }
        else
            echo '<script>alert("wrong password or username")</script>';

    }else{
        echo '<script>alert("wrong password or username")</script>';
    } */
?>

<!DOCTYPE html>
<html>
<head>
  <title>Product Payment Confirmation</title>
  <style>
    /* Add your custom styles here */
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      text-align: center;
    }

    h1 {
      color: #333;
      font-size: 28px;
      margin-bottom: 20px;
    }

    .success-message {
      color: #4caf50;
      font-size: 20px;
      margin-bottom: 20px;
    }

    .product-picture {
      margin-bottom: 20px;
    }

    .product-details {
      text-align: left;
      margin-bottom: 20px;
    }

    .product-details p {
      margin: 5px 0;
    }

    .customer-details {
      text-align: left;
      margin-bottom: 20px;
    }

    .customer-details p {
      margin: 5px 0;
    }

    .payment-details {
      text-align: left;
      margin-bottom: 20px;
    }

    .payment-details p {
      margin: 5px 0;
    }

    .payment-amount {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .confirmation-button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 20px;
      font-size: 18px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .confirmation-button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Payment Confirmation</h1>
    <div class="success-message">
      <p>Thank you for your purchase!</p>
      <p>Your payment has been successfully processed.</p>
    </div>
    <div class="product-picture">
      <img src="product-image.jpg" alt="Product Image" width="200">
    </div>
    <div class="product-details">
      <h2>Product Details</h2>
      <p>Product: Example Product</p>
      <p>Price: $19.99</p>
      <p>Quantity: 1</p>
    </div>
    <div class="customer-details">
      <h2>Customer Details</h2>
      <p>Name: John Doe</p>
      <p>Email: johndoe@example.com</p>
      <p>Address: 123 Main Street, City, Country</p>
    </div>
    <div class="payment-details">
      <h2>Payment Details</h2>
      <p>Payment Method: Credit Card</p>
      <p>Card Number: **** **** **** 1234</p>
      <p>Expiration Date: 12/24</p>
    </div>
    <p class="payment-amount">Total Payment: $19.99</p>
    <button class="confirmation-button">Confirm Payment</button>
  </div>
</body>
</html>
