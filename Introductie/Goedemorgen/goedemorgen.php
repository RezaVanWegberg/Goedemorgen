<?php
$timezone = date_default_timezone_set("Europe/Amsterdam");
// $date = date('m/d/Y H:i:s a', time());
$date = date('H:i');
echo $date;

if ($date >= "6:00" && $date < "12:00") {
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
else if ($date >= "00:00" && $date < "6:00") {
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
<p> <?= $greet ?></p> <!-- is hetzelfde als < ?php echo $greet ?>  -->
</body>

<style>
    body {
        background-image: url(<?= $bg?>)
    }
</style>


</html>