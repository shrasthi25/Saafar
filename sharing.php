<?php
if($_POST['from']== 'dwarka' && $_POST['to']== 'cp')
{
	$distance = 22;
}
else if($_POST['from']== 'dwarka' && $_POST['to']== 'gurugram')
{
	$distance = 16;
}
else if($_POST['from']== 'dwarka' && $_POST['to']== 'noida')
{
	$distance = 44;
}
else if($_POST['from']== 'cp' && $_POST['to']== 'dwarka')
{
	$distance = 22;
}
else if($_POST['from']== 'cp' && $_POST['to']== 'gurugram')
{
	$distance = 32;
}
else if($_POST['from']== 'cp' && $_POST['to']== 'noida')
{
	$distance = 25;
}
else if($_POST['from']== 'gurugram' && $_POST['to']== 'dwarka')
{
	$distance = 16;
}
else if($_POST['from']== 'gurugram' && $_POST['to']== 'cp')
{
	$distance = 32;
}
else if($_POST['from']== 'gurugram' && $_POST['to']== 'noida')
{
	$distance = 47;
}
else if($_POST['from']== 'noida' && $_POST['to']== 'dwarka')
{
	$distance = 44;
}
else if($_POST['from']== 'noida' && $_POST['to']== 'cp')
{
	$distance = 25;
}
else if($_POST['from']== 'noida' && $_POST['to']== 'gurugram')
{
	$distance = 47;
}
else
{
	echo "<br><b>INVALID PLACE.";
}
echo "</br>From ";
echo $_POST['from'];
echo "</br>to ";
echo $_POST['to'];
echo "</br>distance is ";
echo $distance;
$total = 100 + ($distance*2);
$fare = $total/4;
echo "</br>fare is ";
echo $fare;
if($_POST['passangerno']== '1')
{
	$amt= $fare*1;
}
else if($_POST['passangerno']== '2')
{
	$amt= $fare*2;
}
else if($_POST['passangerno']== '3')
{
	$amt= $fare*3;
}
else if($_POST['passangerno']== '4')
{
	$amt= $fare*4;
}
else
{
    echo "Invalid passanger number";
}
?>


<html>
<head>
    <title>City Taxi Fare</title>
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
  
  
<!-- taxi section starts -->

<section class="taxi">
    <div class="imgBx">
        <img src="assets\img\Taxi.jpg" style="height: 600px; margin-top: 100px; " />
    </div>
    <div class="contentBx">
        <div class="formBx" style="margin-top: 100px; ">
                <table>
                <tr >
                    <td>From</td>
                    <td><?php echo $_POST['from'];?></td>
                </tr>
                <tr >
                    <td>To</td>
                    <td><?php echo $_POST['to'];?></td>
                </tr>
                <tr >
                    <td>Distance</td>
                    <td><?php echo $distance;?></td>
                </tr>
                <tr>
                    <td>Fixed charges</td>
                    <td>Rs. 100</td>
                </tr>
                <tr>
                    <td>Per KM charges</td>
                    <td>Rs. 2</td>
                </tr>
                <tr>
                    <td>No. of person</td>
                    <td><?php echo $_POST['passangerno'];?></td>
                </tr>
                <tr>
                    <td>Total charges</td>
                    <td>Rs. <?php echo $total;?></td>
                </tr>
                <tr>
                    <td>Per person charges</td>
                    <td>Rs. <?php echo $fare;?></td>
                </tr>
                <tr>
                    <td>Charges to be paid</td>
                    <td>Rs. <?php echo $amt;?></td>
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
<!-- taxi section ends -->

<!--JS-->
<script src="assets\js\script.js"></script>
</body>
</html>