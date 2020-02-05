<?php
    require('db.php');
    include("header.php");
   
   if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
        $type = $_POST['types'];
        $color = $_POST['color'];
        $breed = $_POST['breed'];
        $age = $_POST['age'];
        $price = $_POST['price'];
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = "uploads/". $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        $allowTypes = array('jpg','png','jpeg','gif','pdf');
       if(in_array($fileType, $allowTypes)){
   
           if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
   
           }
       }
       $query = "INSERT INTO `details` (`type`, `name`, `color`, `price`, `age`, `picture`) VALUES ('$type', '$breed', '$color', '$price', '$age', '$targetFilePath')";
       if(mysqli_query($conn, $query)){
           echo "successfully uploaded";
       }
   }
   ?>
   <head>
       <link rel="stylesheet" href="css/addpets.css">
   </head>
   
   <form action="addpets.php" method="post" enctype="multipart/form-data">
       <div class="input">
                   <h3>pet types</h3>
                   <input type="text" name="types">
               </div>
               <div class="input">
                   <h3>Breed Name</h3>
                   <input type="text" name="breed">
               </div>
               <div class="input">
                   <h3>color</h3>
                   <input type="text" name="color">
               </div>
               <div class="input">
                   <h3>price</h3>
                   <input type="text" name="price">
               </div>
               <div class="input">
                   <h3>Age</h3>
                   <input type="text" name="age">
               </div>
               <div class="input">
                   <h3>imAge</h3>
                   <input type="file" name="file">
               </div>
               <div class="input">
       <input  type="submit" name="submit" value="Upload">
       </div>
   </form>

<?php
    include("footer.php");
?>