<!DOCTYPE html>
<html>
    <head>
        <title>PetHouse</title>
        <link rel="icon" type="image/x-icon" href="pics/logo.png">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" href="css/footer.css">
        <script src="js/index.js"></script>
    </head>

    <body>
        <header>
            <nav>
                <div class="logo">
                    <img src="pics/logo.png" alt="">
                </div>
                <div class="list">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="all.php">ALL</a></li>
                        <li><a href="popular.php">POPULAR</a></li>
                        <li><a href="new.php">NEW</a></li>
                        <li><a href="sign.php">SIGN-IN</a></li>
                        <li><a href="contacts.php">CONTACTS</a></li>
                    </ul>
                </div>
            </nav>
            <section class="container">
                <div class="right">
                    <img class="slide" src="pics/fish.png">
                    <img class="slide" src="pics/fox.png">
                    <img class="slide" src="pics/bird.png">
                </div>
                <div class="left">
                    <h1>WELCOME TO PetHouse</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ipsam illum corrupti eius, commodi fuga qui autem inventore dolores et?</p>
                    <button><a href="all.php" style="text-decoration:none;color:white">OUR PETS</a></button>
                </div>
            </section>
        </header>

        <div class="container2">
            <div class="left1">
                <h2>Order Process:</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quidem incidunt reprehenderit quo necessitatibus nulla veritatis quas reiciendis consequuntur quam, ad sint, et, facere beatae. Vel dolores sit quia consectetur, tempora ut commodi fugit, dolore iste doloremque animi doloribus provident ullam minus voluptate, consequuntur eligendi tempore reprehenderit harum unde quae ex error ipsum? Ipsam assumenda minus molestias libero soluta, mollitia dolor tempora sunt. Tenetur incidunt saepe atque consectetur, exercitationem consequatur ad laudantium iure molestiae dolor ullam, animi voluptatibus! Explicabo voluptates et, eveniet eligendi consequuntur dignissimos. Repellendus quo a quisquam perspiciatis quasi eveniet ab doloribus, ea, consequatur quia ipsa provident? Suscipit.</p>
            </div>
            <div class="mid1">
                <h3>Welcome to PetHouse official website</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus pariatur vel amet aperiam aspernatur! Iure nobis vel at debitis inventore laboriosam nam odio, laudantium soluta dolore quisquam dolorum consequatur reprehenderit! Illum nemo nulla labore doloremque blanditiis error deleniti totam optio. Ipsum aliquam ea eos libero aliquid quo maxime quibusdam repellat voluptates impedit. Laudantium eos recusandae dolores! Tempora suscipit, culpa quis placeat explicabo obcaecati deleniti. Placeat sed suscipit tempore, at eius veritatis odit vitae quam? Cumque quisquam praesentium, quo ad natus accusamus omnis amet, ducimus itaque facere et, enim esse officiis! Unde sed neque illo culpa in cum facilis consequuntur laboriosam dolore libero error cumque veniam amet, dolorum, maiores voluptatum sapiente commodi quos provident totam nostrum harum. Quia aperiam perspiciatis similique voluptates delectus quisquam iusto numquam fugiat amet praesentium, odit dolor modi assumenda error corporis, nesciunt distinctio. Aliquam quaerat odit unde rem corporis consequuntur totam, esse quod quos error aliquid soluta modi neque debitis nobis. Esse illo nulla dolor explicabo laborum exercitationem vel itaque, earum quasi iusto libero laboriosam nisi distinctio facilis facere neque voluptatum officiis? Laboriosam eos et eligendi qui, deserunt hic, ab ratione quam corrupti quaerat fugit quae illum! Sint incidunt cupiditate debitis impedit nesciunt accusamus cum eligendi ab placeat, assumenda commodi provident veritatis nam delectus dolor ullam deleniti qui. Dolores, voluptatem sed dicta mollitia velit nulla perferendis eveniet, molestias placeat ratione, labore alias iusto autem accusamus quae iure dolore excepturi impedit fuga sit eius sequi culpa! Nulla numquam laudantium quisquam eos facilis voluptate nesciunt ipsam optio ad aperiam!</p>
            </div>
            <div class="right1">
                <h2>Highest Sell</h2>
                <div class="sell">
                    <img src="pics/rabit.png" alt="">
                    <h4>Name:</h4>
                    <h5>Lorem, ipsum.</h5>
                </div>
                <div class="sell">
                    <img src="pics/labradordog.png" alt="">
                    <h4>Name:</h4>
                    <h5>Lorem, ipsum.</h5>
                </div>
                <div class="sell">
                    <img src="pics/pelican.png" alt="">
                    <h4>Name:</h4>
                    <h5>Lorem, ipsum.</h5>
                </div>
            </div>

        </div>

        <?php include("footer.php");?>
        
        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
            var slides = document.getElementsByClassName("slide");
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1} 
            if (slideIndex ==1){
                slides[0].style.display = "block";
                slides[1].style.display = "none";
                slides[2].style.display = "none";
            }
            if (slideIndex ==2){
                slides[0].style.display = "none";
                slides[1].style.display = "block";
                slides[2].style.display = "none";
            }
            if (slideIndex ==3){
                slides[0].style.display = "none";
                slides[1].style.display = "none";
                slides[2].style.display = "block";
            }
                
            setTimeout(showSlides, 2500);
            }
        </script>
    </body>
</html>
