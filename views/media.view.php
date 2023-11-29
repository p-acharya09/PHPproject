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
                <?php foreach($list as $data):?>
                <figure>
                    <a href="./artdetail/<?=$data['id']?>">
                    <img title="<?= $data['title'] ?>" src="<?= $data['images'] ?>">
                    <figcaption><?= $data['title'] ?></figcaption>
                    <p><?= $data['subtitle'] ?></p>
                    </a>
                </figure>
                <?php endforeach ?>
            </div>
        </section>


<?php include'partials/footer.php';?>
