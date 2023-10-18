<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Primary Meta Tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Samrat Art Gallery | Sketch Artworks</title>
        <meta name="title" content="Samrat Art Gallery | Contact Us">
        <meta name="description" content="Find sketches by Samrat Subedi which captures the essence of the moment">
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


        <!-- Contact Information Section -->
        <section class="contact-us">
            <!-- Contact Detail -->
            <div class="contact-us-detail">
                <h3>Contact Us</h3>
                <ul>
                    <li>Phone: 1234567890</li>
                    <li>Email: mycontact@contact.com</li>
                    <li>Address: Kathmandu, Nepal</li>
                </ul>
            </div>
            <img title="Location" src="./images/maps.png">    
        </section>


        <!-- Contact Message Section -->
        <section class="contact-us-message">
            <h4>Send Us Your Message</h4>
            <form>
                <div class="form-row">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name">
                  </div>
                  <div class="form-row">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                  </div>
                  <div class="form-row">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone">
                  </div>
                  <div class="form-row">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message"></textarea>
                  </div>
                  <div class="form-row">
                    <input class="button-submit" type="submit" value="Submit">
                  </div>
            </form>
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