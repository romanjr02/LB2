<?php
 include 'connect.php';
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LB2</title>
    <script src="script.js"></script>
</head>
<body>
<form action="" method="post">
    <input type="datetime-local" name="date">
    <input type="submit" value="OK"><br>
</form>

<br>

<form action="" method="post">
    <span>Получить автомобили с пробегом меньше указанного: </span>
    <input type="text" name="race">
    <input type="submit" value="OK"><br>
</form>

<br>

<form action="" method="post">
    <span>Вывести все марки машин: </span>
    <input type="hidden" name="car">
    <input type="submit" value="OK"><br>
</form>
<div id="content"></div>
<br>
<input type="button" value="сохранить" onclick="add()">
<input type="button" value="показать" onclick="get()">
<?php
if (isset($_POST["date"])) {
    getcostInDate($rent, $_POST["date"]);
} elseif (isset($_POST["race"])) {
    getCarsWithRaceLessЕransmittedRace($car, $_POST["race"]);
} elseif (isset($_POST["car"])) {
    getCarBrands($car);
}
?>
</body>
</html>

