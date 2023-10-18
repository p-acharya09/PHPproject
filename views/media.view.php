<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Primary Meta Tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Samrat Art Gallery | Sketch Artworks</title>
        <meta name="title" content="Samrat Art Gallery | About Sketch Artworks">
        <meta name="description" content="Sketches by Samrat Subedi which captures the essence of the moment">
        <link rel="stylesheet" href="./style.css">
        <style><?php include'style.css';?></style>
        <link rel="icon" href="images/favicon.png"> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
        <script src="https://kit.fontawesome.com/6b52140ca6.js" crossorigin="anonymous"></script>
        <!-- 
            Buttons should not go in Anchor tag but its used to link pages. It will be resolved
        -->
        <!-- Prashant Acharya Project -->
    </head>

    <body>
        <!-- Header -->
        <header>
            <!-- Logo -->
            <a href="index.php"><h1>Samrat Art Gallery</h1></a>
            <!-- Navigation Menu -->
            <nav>
                <ul class="nav-items" id="nav-items">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="media.php">Media</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                
                <a class="toggle" onclick="showNav()"><i class="fa fa-bars"></i></a>
            </nav>
        </header>


        <!-- Hero Section Media -->
        <section class="hero-media">
            <img src="./images/background.jpg" alt="hero image">
            <!-- Image Text -->
            <p>Captures the essence of the moment</p>
            <!-- Buttons for hero section -->
            <div class="hero-media-button">
                <a href="media.php"><button class="primary-button">Explore</button></a>
                <a href="contact.php"><button class="secondary-button">Contact Us</button></a>
            </div>
        </section>


        <!-- Media Gallery -->
        <section class="media-gallery">
            <h2>Media Gallery</h2>
            <div class="media-gallery-collection">
                <figure>
                    <a href="art-detail.php">
                    <img title="Nabin K Bhattarai" src="./images/nkb.jpeg">
                    <figcaption>Nabin K Bhattarai</figcaption>
                    <p>Popular Nepali Singer</p>
                    </a>
                </figure>
                <figure>
                    <a href="art-detail.php">
                    <img title="Old Man" src="./images/ol.jpeg">
                    <figcaption>Man</figcaption>
                    <p>Lorem Ipsum </p>
                    </a>
                </figure>
                <figure>
                    <a href="art-detail.php">
                    <img title="Horse" src="./images/horse.jpeg">
                    <figcaption>Horse</figcaption>
                    <p>Lorem Ipsum </p>
                    </a>
                </figure>
                <figure>
                    <a href="art-detail.php">
                    <img title="Man Behind Wall" src="./images/mbtw.jpeg">
                    <figcaption>Man Behind Wall</figcaption>
                    <p>Man Behind Wall</p>
                    </a>
                </figure>
                <figure>
                    <a href="art-detail.php">
                    <img title="Thanos" src="./images/thanos.jpeg">
                    <figcaption>Thanos</figcaption>
                    <p>Marvel Cinematic Universe</p>
                    </a>
                </figure>
                <figure>
                    <a href="art-detail.php">
                    <img title="Wall Cry" src="./images/wallcry.jpeg">
                    <figcaption>Wall Cry</figcaption>
                    <p>Lorem Ipsum</p>
                    </a>
                </figure>
                <figure>
                    <a href="art-detail.php">
                    <img title="Monalisa" src="./images/monalisa.jpeg">
                    <figcaption>Monalisa</figcaption>
                    <p>Famous Painting</p>
                    </a>
                </figure>
                <figure>
                    <a href="art-detail.php">
                    <img title="Art" src="./images/art.jpeg">
                    <figcaption>Art</figcaption>
                    <p>Lorem Ipsum</p>
                    </a>
                </figure>
                <figure>
                    <a href="art-detail.php">
                    <img title="Thanos" src="./images/thanos.jpeg">
                    <figcaption>Thanos</figcaption>
                    <p>Marvel Cinematic Universe</p>
                    </a>
                </figure>
                <figure>
                    <a href="art-detail.php">
                    <img title="Wall Cry" src="./images/wallcry.jpeg">
                    <figcaption>Wall Cry</figcaption>
                    <p>Lorem Ipsum</p>
                    </a>
                </figure>
                <figure>
                    <a href="art-detail.php">
                    <img title="Monalisa" src="./images/monalisa.jpeg">
                    <figcaption>Monalisa</figcaption>
                    <p>Famous Painting</p>
                    </a>
                </figure>
                <figure>
                    <a href="art-detail.php">
                    <img title="Art" src="./images/art.jpeg">
                    <figcaption>Art</figcaption>
                    <p>Lorem Ipsum</p>
                    </a>
                </figure>
            </div>
        </section>


        <!-- Footer -->
        <footer>
            <h3>Contact Us</h3>
            <div class="footer-list">
                <ul>
                    <li>Email: <a href="#">mycontact@contact.com</a></li>
                    <li>Phone: 1234567890</li>
                    <li>Address: Kathmandu, Nepal</li>
                </ul>
                <div>
                    <i class="fas fa-envelope"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-facebook"></i>
                </div>
                <p>OnlyForCollegeProject@Samrat Art Gallery</p>

            </div>
        </footer>

        <script>
            function showNav() {
              var element = document.getElementById("nav-items");
              element.classList.toggle("show-items");
            }
        </script>

    </body>
</html>