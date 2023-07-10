<?php


  session_start();


  require_once 'config.php';
    if(isset($_POST['submit'])){
        $paymentid = $_POST['paymentid'];
        $name = $_POST['name'];
        $username = $_SESSION['username'];
        $cardno = $_POST['cardno'];
        $cvv = $_POST['cardno'];
        $months = $_POST['months'];
        $year = $_POST['years'];

        $conn = new Dbh();
            $stmt = $conn->insert()->prepare("INSERT INTO payment (paymentid, username, name, cardno) VALUES(?,?,?,?)")->execute(['0001', '000', $name, $cardno]);
            
            header("location: payment.php");
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-9">
    <title>Payment Form</title>
    <link rel="stylesheet" href="css/stylePay.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h1>Confirm Your Payment</h1>
        <div class="first-row">
            <div class="owner">
                <h3>Owner</h3>
                <div class="input-field">
                    <input type="text" name=name>
                </div>
            </div>
            <div class="cvv">
                <h3>CVV</h3>
                <div class="input-field">
                    <input type="password" name=cvv>
                </div>
            </div>
        </div>
        <div class="second-row">
            <div class="card-number">
                <h3>Card Number</h3>
                <div class="input-field">
                    <input type="text" name=cardno>
                </div>
            </div>
        </div>
        <div class="third-row">
            <h3>Card Number</h3>
            <div class="selection">
                <div class="date">
                    <select name="months" id="months">
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Aug">Aug</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                      </select>
                      <select name="years" id="years">
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                      </select>
                </div>
                <div class="cards">
                    <img src="mc.png" alt="">
                    <img src="vi.png" alt="">
                    <img src="pp.png" alt="">
                </div>
            </div>    
        </div>
        <input type="submit" value="submit" name="submit">
</form>
    </div>
</body>
</html>