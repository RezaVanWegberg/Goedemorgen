<?php
$timezone = date_default_timezone_set("Europe/Amsterdam");
// $timezone = date_default_timezone_set("America/Los_Angeles");
// $timezone = date_default_timezone_set("Asia/Tokyo");

$date = date('H:i');
// echo $date;

if ($date >= "06:00" && $date < "12:00") {
    $greet = "Good morning";
    $bg = "morning.png";
}
else if ($date >= "12:00" && $date < "18:00") {
    $greet = "Good afternoon";
    $bg = "afternoon.png";
}
else if ($date >= "18:00" && $date < "00:00") {
    $greet = "Good evening";
    $bg = "evening.png";
}
else if ($date >= "00:00" && $date < "06:00") {
    $greet = "Good night";
    $bg = "night.png";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goedemorgen</title>
</head>

<body> 
    <div id="center-text">
        <p> <?= $greet ?></p> 
        <p> <?= $date ?></p>
    </div>
</body>

<style>
    body {
        background-image: url(<?= $bg?>)
    }

    #center-text {
    font-size: 35px;
    color: white;
    text-align: center;
    margin: auto;
    width: 50%;
    }
</style>


</html>