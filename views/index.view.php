<?php 
    $proj_root = '/';
?>
<?php include'partials/header.php';?>
<!-- Hero Section -->
        <section class="hero">
                <img src="./images/background.jpg" alt="hero image">
                <!-- Image Text -->
                <p>Captures the essence of the moment</p>
                <!-- Buttons for hero section -->
                <div class="hero-button">
                    <a href="<?= $proj_root ?>media"><button class="primary-button">Explore</button></a>
                    <a href="<?= $proj_root ?>contact"><button class="secondary-button">Contact Us</button></a>
                </div>
        </section>


        <!-- Section Popular Artworks -->
        <section class="popular">
            <h2>Popular</h2>
            <div class="popular-art-figure">
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
                <?php foreach($limitedData as $data):?>
                <figure>
                    <a href="<?= $proj_root ?>artdetail">
                    <img title="<?= $data['title']?>" src="./images/horse.jpeg">
                    <figcaption><?= $data['title']?></figcaption>
                    <p><?= $data['subtitle']?> </p>
                    </a>
                </figure>
                <?php endforeach ?> 
            </div>
        </section>


        <!-- Section Latest Artworks -->
        <section class="latest">
            <h2>Latest</h2>
            <div class="latest-art-figure">
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
                <?php foreach($limitedData as $data):?>
                <figure>
                    <a href="<?= $proj_root ?>artdetail">
                    <img title="<?= $data['title']?>" src="./images/horse.jpeg">
                    <figcaption><?= $data['title']?></figcaption>
                    <p><?= $data['subtitle']?> </p>
                    </a>
                </figure>
                <?php endforeach ?> 
            </div>
        </section>

<?php include'partials/footer.php';?>
