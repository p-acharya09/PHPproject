<?php 
    $proj_root = '/';
?>
<?php include'partials/header.php';?>

        <!-- Hero Section Media -->
        <section class="hero-media">
            <img src="./images/background.jpg" alt="hero image">
            <!-- Image Text -->
            <p>Captures the essence of the moment</p>
            <!-- Buttons for hero section -->
            <div class="hero-media-button">
                <a href="media"><button class="primary-button">Explore</button></a>
                <a href="contact"><button class="secondary-button">Contact Us</button></a>
            </div>
        </section>


        <!-- Media Gallery -->
        <section class="media-gallery">
            <h2>Media Gallery</h2>
            <div class="media-gallery-collection">
                <figure>
                    <a href="<?= $proj_root ?>artdetail">
                    <img title="Nabin K Bhattarai" src="./images/nkb.jpeg">
                    <figcaption>Nabin K Bhattarai</figcaption>
                    <p>Popular Nepali Singer</p>
                    </a>
                </figure>
                <figure>
                    <a href="<?= $proj_root ?>artdetail">
                    <img title="Old Man" src="./images/ol.jpeg">
                    <figcaption>Man</figcaption>
                    <p>Lorem Ipsum </p>
                    </a>
                </figure>
                <figure>
                    <a href="<?= $proj_root ?>artdetail">
                    <img title="Horse" src="./images/horse.jpeg">
                    <figcaption>Horse</figcaption>
                    <p>Lorem Ipsum </p>
                    </a>
                </figure>
                <figure>
                    <a href="<?= $proj_root ?>artdetail">
                    <img title="Man Behind Wall" src="./images/mbtw.jpeg">
                    <figcaption>Man Behind Wall</figcaption>
                    <p>Man Behind Wall</p>
                    </a>
                </figure>
                <figure>
                    <a href="<?= $proj_root ?>artdetail">
                    <img title="Thanos" src="./images/thanos.jpeg">
                    <figcaption>Thanos</figcaption>
                    <p>Marvel Cinematic Universe</p>
                    </a>
                </figure>
                <figure>
                    <a href="<?= $proj_root ?>artdetail">
                    <img title="Wall Cry" src="./images/wallcry.jpeg">
                    <figcaption>Wall Cry</figcaption>
                    <p>Lorem Ipsum</p>
                    </a>
                </figure>
                <figure>
                    <a href="<?= $proj_root ?>artdetail">
                    <img title="Monalisa" src="./images/monalisa.jpeg">
                    <figcaption>Monalisa</figcaption>
                    <p>Famous Painting</p>
                    </a>
                </figure>
                <figure>
                    <a href="<?= $proj_root ?>artdetail">
                    <img title="Art" src="./images/art.jpeg">
                    <figcaption>Art</figcaption>
                    <p>Lorem Ipsum</p>
                    </a>
                </figure>
                <?php foreach($list as $data):?>
                <figure>
                    <a href="<?= $proj_root ?>artdetail">
                    <img title="<?= $data['title'] ?>" src="./images/thanos.jpeg">
                    <figcaption><?= $data['title'] ?></figcaption>
                    <p><?= $data['subtitle'] ?></p>
                    </a>
                </figure>
                <?php endforeach ?>
            </div>
        </section>


<?php include'partials/footer.php';?>
