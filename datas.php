<?php
require('newdb.php');
$sql = 'SELECT*FROM practice';
$result = mysqli_query($connection,$sql);
$datas = mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <?php foreach($datas as $data):?>
          name:<?php echo $data['name'];?>
          <img style="height: 70px; width:70px" src="<?php echo $data['pic'];?>" alt="">
          <br>
          <a href="ekta.php?id=<?php echo $data['id'];?>">read more</a><br>
        <?php endforeach;?>
    </section>
</body>
</html>