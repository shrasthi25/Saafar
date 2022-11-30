<?php
$datel = date_create($_POST['datefrom']);
$date2 = date_create($_POST['dateto']);
$intval = date_diff($datel, $date2);
$days= $intval->format("%a");
$fare= 1000 + ($days*200);
?>

<html>
<head>
    <title>Rental Fare</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicons -->
    <link href="assets\img\favicon.png" rel="icon">
    <!--About US CSS-->
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\taxi.css">
    <!--Font Awesom CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        table, th, td {
            border:2px solid black;
            padding: 10px;
            text-align: center;
            font-size: 25px;
        }
    </style>
<head>
<body>
<!-- header section starts  -->

<header>
    <div>
        <!-- <img src="D:\travel\images\Safar_Logo.png" height="50px" width= "80px"> -->
        <a href="index.html" class="logo"><span>S</span>afar</a>
    </div>
    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="index.html">home</a>
        <a href="index.html#services">services</a>
        <a href="index.html#review">review</a>
        <a href="booking.html">book</a>
        <a href="about.html">about us</a>
        <a href="index.html#contact">contact</a>
        
    </nav>

    <div class="icons">
        <i class="fa fa-user" id="login-btn"></i>
    </div>
    
    <!--<form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>-->
</header>
<!-- header section ends -->
  
  
<!-- rental section starts -->

<section class="taxi">
    <div class="imgBx">
        <img src="assets\img\Rental.jpg" style="height: 600px; margin-top: 100px; margin-bottom: 100px; " />
    </div>
    <div class="contentBx">
        <div class="formBx" style="margin-top: 100px; ">
                <table>
                <tr >
                    <td>City</td>
                    <td><?php echo $_POST['city'];?></td>
                </tr>
                <tr >
                    <td>Number of days</td>
                    <td><?php echo $days;?></td>
                </tr>
                <tr>
                    <td>Fixed charges</td>
                    <td>Rs. 1000</td>
                </tr>
                <tr>
                    <td>Variable charges</td>
                    <td>Rs. <?php echo ($days*200);?></td>
                </tr>
                <tr>
                    <td>Total charges</td>
                    <td>Rs. <?php echo $fare;?></td>
                </tr>
            </table>
            </br>
            <form action="index.html">
                <div class="inputBx">
                    <input type="submit" value="OK" name="submit"/>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- rental section ends -->

<!--JS-->
<script src="assets\js\script.js"></script>
</body>
</html>
