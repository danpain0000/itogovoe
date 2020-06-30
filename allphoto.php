<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form class="form-signin" method="post">
        <h2>Все фото</h2>
        <a href='myphoto.php' class='btn btn-lg btn-primary btn-block'>Мои фото</a>
        <a href='allphoto.php' class='btn btn-lg btn-primary btn-block'>Все фото</a>
        <a href='loader.php' class='btn btn-lg btn-primary btn-block'>Загрузить фото</a>
        <a href='logout.php' class='btn btn-lg btn-primary btn-block'>Выйти</a>
    </form>
</div>
<?php
require ('connect.php');
$username=$_SESSION['username'];
$query = "SELECT url FROM photos";
$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
while($row = mysqli_fetch_array($result)) {
    $url=$row['url'];
    echo "<img src='uploads/$url' width='350' height='300'>";
    $url='';
}
?>
</body>
</html>
