<?php
require('newdb.php');
$id=$_GET['id'];
$sql='SELECT * FROM practice WHERE id='.$id;
$res=mysqli_query($connection,$sql);
$datas=mysqli_fetch_all($res,MYSQLI_ASSOC);
mysqli_free_result($res);
?>
<button><a href="datas.php">back</a></button>
<section>
    <?php foreach($datas as $data): ?>

        name:<?php echo $data['name']; ?><br>
        <img src="<?php echo $data['pic']; ?>" alt="">
        <?php endforeach?>
</section>
