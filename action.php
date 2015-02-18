<?php
$f_electricity = $_POST["f_electricity"]; // put in as many variables as you want
$f_diesel = $_POST["f_diesel"];
$f_transportbyd = $_POST["f_transportbyd"];
$f_transportbyp = $_POST["f_transportbyp"];
$f_transportbyc = $_POST["f_transportbyc"];
$f_travellocal = $_POST["f_travellocal"];
$f_traveldomestic = $_POST["f_traveldomestic"];
$f_travelintl = $_POST["f_travelintl"];
$f_hotel = $_POST["f_hotel"];
$f_cafeelec = $_POST["f_cafeelec"];
$f_cafelpg = $_POST["f_cafelpg"];
$f_cafediststaff = $_POST["f_cafediststaff"];
$f_cafedistserv = $_POST["f_cafedistserv"];
$f_paperstrec = $_POST["f_paperstrec"];
$f_paperstvirgin = $_POST["f_paperstvirgin"];
$f_paperbeakrec = $_POST["f_paperbeakrec"];
$f_paperbeakvirgin = $_POST["f_paperbeakvirgin"];
$f_toilet = $_POST["f_toilet"];
$f_wastefood = $_POST["f_wastefood"];
$f_wastepaper = $_POST["f_wastepaper"];
$f_wastee = $_POST["f_wastee"];
$f_wastecarton = $_POST["f_wastecarton"];
$f_wastesolid = $_POST["f_wastesolid"];
$fname = $_POST["fname"];
$forgan = $_POST["forgan"];
$emailId = "rishabhaggarwal2@gmail.com";
$towrite = <<< EOFILE
<!DOCTYPE HTML>
<html>
<head></head>
<body>
$fname
$forgan


Electricity = $f_electricity
Diesel = $f_diesel
Trasnport by Diesel = $f_transportbyd
Trasnport by Petrol = $f_transportbyp
Trasnport by CNG = $f_transportbyc
Local Travel = $f_travellocal
Domestic Travel = $f_traveldomestic
International Travel = $f_travelintl
Hotel Nights = $f_hotel
Cafe Electricity = $f_cafeelec
Cafe LPG = $f_cafelpg
Cafe Dist Staff = $f_cafediststaff
Cafe Dist Serv = $f_cafedistserv
Paper Recycled Stationary = $f_paperstrec
Paper Fresh Stationary = $f_paperstvirgin
Paper Recycled Beaker = $f_paperbeakrec
Paper Virgin Beaker = $f_paperbeakvirgin
Toilet = $f_toilet
Waste Food = $f_wastefood
Waste Paper = $f_wastepaper
E-Waste = $f_wastee
Waste Carton = $f_wastecarton
Solid Waste = $f_wastesolid
</body>
</html>
EOFILE;
mail($emailId, "Here's the table", $towrite);
?>