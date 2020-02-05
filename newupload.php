<?php
require('newdb.php');

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $filename = $_FILES['file']['name'];
    $filetmpname = $_FILES['file']['tmp_name'];
    $folder = 'uploads/';

    move_uploaded_file($filetmpname, $folder.$filename);

    $sql = "INSERT INTO `practice` (`id`, `name`, `pic`) VALUES (NULL, 'bird', 'uploads/parrot.png')";
    $qry = mysqli_query($connection, $sql);
    if( $qry) {
    echo "</br>image uploaded";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="newupload.php" method="POST">
        <p>name</p>
        <input type="text" name="name">
        <p>image</p>
        <input type="file" name="file">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>