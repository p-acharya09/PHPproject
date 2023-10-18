        <!-- Hero Section -->
        <section class="hero">
                <img src="./images/background.jpg" alt="hero image">
                <!-- Image Text -->
                <p>Captures the essence of the moment</p>
                <!-- Buttons for hero section -->
                <div class="hero-button">
                    <a href="media"><button class="primary-button">Explore</button></a>
                    <a href="contact"><button class="secondary-button">Contact Us</button></a>
                </div>
        </section>


        <!-- Section Popular Artworks -->
        <section class="popular">
            <h2>Popular</h2>
            <div class="popular-art-figure">
                <figure>
                    <a href="artdetail">
                    <img title="Nabin K Bhattarai" src="./images/nkb.jpeg">
                    <figcaption>Nabin K Bhattarai</figcaption>
                    <p>Popular Nepali Singer</p>
                    </a>
                </figure>
                <figure>
                    <a href="artdetail">
                    <img title="Old Man" src="./images/ol.jpeg">
                    <figcaption>Man</figcaption>
                    <p>Lorem Ipsum </p>
                    </a>
                </figure>
                <figure>
                    <a href="artdetail">
                    <img title="Horse" src="./images/horse.jpeg">
                    <figcaption>Horse</figcaption>
                    <p>Lorem Ipsum </p>
                    </a>
                </figure>
                <figure>
                    <a href="artdetail">
                    <img title="Man Behind Wall" src="./images/mbtw.jpeg">
                    <figcaption>Man Behind Wall</figcaption>
                    <p>Man Behind Wall</p>
                    </a>
                </figure>
            </div>
        </section>


        <!-- Section Latest Artworks -->
        <section class="latest">
            <h2>Latest</h2>
            <div class="latest-art-figure">
                <figure>
                    <a href="artdetail">
                    <img title="Thanos" src="./images/thanos.jpeg">
                    <figcaption>Thanos</figcaption>
                    <p>Marvel Cinematic Universe</p>
                    </a>
                </figure>
                <figure>
                    <a href="artdetail">
                    <img title="Wall Cry" src="./images/wallcry.jpeg">
                    <figcaption>Wall Cry</figcaption>
                    <p>Lorem Ipsum</p>
                    </a>
                </figure>
                <figure>
                    <a href="artdetail">
                    <img title="Monalisa" src="./images/monalisa.jpeg">
                    <figcaption>Monalisa</figcaption>
                    <p>Famous Painting</p>
                    </a>
                </figure>
                <figure>
                    <a href="artdetail">
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
                <div class="social">
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
              console.log(element);
              element.classList.toggle("show-items");
            }
        </script>
    </body>
</html>