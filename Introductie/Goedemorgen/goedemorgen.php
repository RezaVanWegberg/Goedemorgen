<?php
$timezone = date_default_timezone_set("Europe/Amsterdam");
// $date = date('m/d/Y H:i:s a', time());
$date = date('H:i');
echo $date;

if ($date >= "6:00" && $date < "12:00") {
    $greet = "Good morning";
}
else if ($date >= "12:00" && $date < "18:00") {
    $greet = "Good afternoon";
}
else if ($date >= "18:00" && $date < "00:00") {
    $greet = "Good evening";
}
else if ($date >= "00:00" && $date < "6:00") {
    $greet = "Good night";
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
        background-image: url('afternoon.png')
    }
</style>


</html>