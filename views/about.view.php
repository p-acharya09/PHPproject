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
        <a href="index"><h1>Samrat Art Gallery</h1></a>
        <!-- Navigation Menu -->
        <nav>
            <ul class="nav-items" id="nav-items">
                <li><a href="index">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="media">Media</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
            
            <a class="toggle" onclick="showNav()"><i class="fa fa-bars"></i></a>
        </nav>
    </header>


        <!-- Artist Section -->
        <section class="artist-about">
            <!-- Artist Image -->
            <img src="./images/artist.jpeg" alt="Samrat Subedi">
            <div class="artist-about-detail">
                <h4>About Artist</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </section>


        <!-- About Art Gallery -->
        <section class="art-gallery-about">
            <div class="art-gallery-about-detail">
                <h3>About Art Studio</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <img src="./images/art-studio.jpg" alt="Samrat Subedi Art Studio">
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