

<?php
    include("header.php");
    require('db.php');

    $dog='dog';
	$query = 'SELECT * FROM `details` WHERE new='.'1';

	$result = mysqli_query($conn, $query);

	$details = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

	mysqli_close($conn);
?>

<!DOCTYPE html>
	<html>
		<head>
            <link rel="stylesheet" href="css/all.css">
		</head>
	<body>
        <section>
            <?php foreach($details as $detail) : ?>
            
            <div class="card">
                
                <div class="box-1">
                    <h3>Type: <?php echo $detail['type']; ?></h3>
                    <h3>Breed NAME: <?php echo $detail['name']; ?></h3>
                    <p>Color:<?php echo $detail['color']; ?> <br>
                    Age: <?php echo $detail['age']; ?></p>
                    <p>Price:<?php echo $detail['price']; ?></p>
                    <a href=
				"singlepet.php?id=<?php echo $detail['id']; ?>">
				Read More</a>
                </div>
                

                <div class="box-2">
                    <img class="all" src="<?php echo $detail['picture']; ?>">
                </div>
                
            </div>
            <?php endforeach; ?>
        </section>

    </body>
</html>
<?php
include("footer.php");
?>
