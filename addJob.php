<?php

//Variables super globales
var_dump($_GET);
var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Job</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
            crossorigin="anonymous">
</head>
<body>
    <h1>Add Job</h1>
    <form action="./addJob.php" method="post">
        <label for="">Title</label>
        <input type="text" name="title"><br>
        <label for="">Description</label>
        <input type="text" name="description"><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>