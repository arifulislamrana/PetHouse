<?php
include('header.php');
?>

<head>
 <style>
 body{
     margin: 0%;
     padding: 0%;
     box-sizing: border-box;
 }
 section{
     width: 100%;
     height: 80vh;
     display: flex;
     flex-direction: row;
     justify-content: space-around;
     background-image: radial-gradient( circle farthest-corner at 12.3% 19.3%,  rgba(85,88,218,1) 0%, rgba(95,209,249,1) 100.2% );
 }
 .shop{
     margin-top:5% ;
     flex: 1;
     display: flex;
     flex-direction: column;
     border-radius: 10px;
     height: 60vh;
     width: 25%;
     background-image: linear-gradient( 109.6deg,  rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% );
     padding: 2%;
     justify-content: space-around;
     text-align: center;
 }
 </style>
</head>

<body>
    
    <section>
        <div class="shop">
            <h1>Dhanmondi</h1>
            <img src="pics/shop1.jpg" alt="">
            <h3>Shimanto square</h3>
            <h4>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</h4>
            <h5>Phone:01232243454</h5>
        </div>
        <div class="shop">
            <h1>Noakhali</h1>
            <img src="pics/shop2.jpg" alt="">
            <h3>R.D. Complex</h3>
            <h4>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</h4>
            <h5>Phone:01232243454</h5>
        </div>
        <div class="shop">
            <h1>Pabna</h1>
            <img src="pics/shop3.jpg" alt="">
            <h3>A.R. Corner</h3>
            <h4>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</h4>
            <h5>Phone:01232243454</h5>
        </div>
    </section>
</body>

<?php
include('footer.php');
?>