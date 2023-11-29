<?php include'partials/header.php';?>
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
                <?php foreach($limitedData as $data):?>
                <figure>
                    <a href="./artdetail/<?=$data['id']?>">
                    <img title="<?= $data['title']?>" src="<?= $data['images'] ?>">
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
                <?php foreach($limitedDatas as $data):?>
                <figure>
                    <a href="./artdetail/<?=$data['id']?>">
                    <img title="<?= $data['title']?>" src="<?= $data['images'] ?>">
                    <figcaption><?= $data['title']?></figcaption>
                    <p><?= $data['subtitle']?> </p>
                    </a>
                </figure>
                <?php endforeach ?> 
            </div>
        </section>

<?php include'partials/footer.php';?>
