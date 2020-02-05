<?php
    require('db.php');
    include('header.php');
    
    $id = mysqli_real_escape_string($conn, $_GET['id']);

	$query = 'SELECT * FROM details WHERE id='.$id;

	$result = mysqli_query($conn, $query);

	$detail = mysqli_fetch_assoc($result);
	
	mysqli_free_result($result);

	mysqli_close($conn);
?>

<!DOCTYPE html>
	<html>
		<head>
			<title></title>
			<style>
				*{
					margin: 0%;
					padding: 0%;
					box-sizing: border-box;
				}
				body{
					margin: 0%;
					padding: 0%;
					box-sizing: border-box;
				}
				.single{
					margin-left: 5%;
					text-align: center;
					align-content: center;
					
				}
				.back{
					height: 7vh;
					width: 15vh;
					background: linear-gradient(160deg, green , rgb(255, 230, 0) ) ;
					margin-left: 5vh;
					margin-top: 5vh;
					border-radius: 5px;
   
				}
				.back a{
					text-decoration: none;
					color: white;
					font-size: 150%
				}
				.back:hover{
					background: linear-gradient(160deg , rgb(255, 230, 0), green ) ;
   
				}
			</style>
		</head>
	<body> 
		<button class="back"><a href="all.php">back</a></button>
		<div class="single">
				<img src="<?php echo $detail['picture']; ?>" width="450" height="450">
				<h3>type:<?php echo $detail['type']; ?></h3>
				<h4>NAME: <?php echo $detail['name']; ?> <br>
				Color: <?php echo $detail['color']; ?><br></h4>
				<h5><a>Age:<?php echo $detail['age']?></a></h5>
				<p>Price:<?php echo $detail['price']; ?></p>
				<div style="height: auto; width:50%; margin-left:25%">
					<br><h2>about</h2><br>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa eaque provident, perferendis laudantium labore similique laboriosam blanditiis ipsum repellat iure temporibus facere at, exercitationem facilis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, ad odit nesciunt eos blanditiis culpa accusamus accusantium natus dolor quo optio commodi facere deserunt perspiciatis iusto modi praesentium nam libero dolorum quidem suscipit aliquid. Atque, dolores voluptates debitis quod consequuntur eum sequi eius modi, facilis doloribus molestias illo dolorum? Consectetur!</p>
				</div>
		</div>


</body>
</html>

<?php
include('footer.php');

?>