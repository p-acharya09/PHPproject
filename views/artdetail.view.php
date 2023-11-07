<?php include'partials/header.php';?>

        <!-- Art Detail Section -->
        <section class="art-detail">
            <div class="art-detail-section">
                <h3><?= $list['title']?></h3>
                <p><?= $list['subtitle']?></p>
            </div>
            <img title="<?= $list['title']?>" src="./images/nkb.jpeg">
        </section>

        <section class="suggested">
            <h2>Recommended ArtWorks</h2>
            <div class="suggested-art-detail">
                <figure>
                    <a href="./artdetail">
                        <img title="Nabin K Bhattarai" src="./images/nkb.jpeg">
                        <figcaption>Nabin K Bhattarai</figcaption>
                        <p>Popular Nepali Singer</p>
                    </a>
                </figure>
                <figure>
                    <a href="./artdetail">
                        <img title="Old Man" src="./images/ol.jpeg">
                        <figcaption>Man</figcaption>
                        <p>Lorem Ipsum </p>
                    </a>
                </figure>
                <figure>
                    <a href="./artdetail">
                        <img title="Horse" src="./images/horse.jpeg">
                        <figcaption>Horse</figcaption>
                        <p>Lorem Ipsum </p>
                    </a>
                </figure>
                <?php foreach ($listall as $data): ?>
                <figure>
                    <a href="./artdetail">
                        <img title="<?= $data['title']?>" src="./images/mbtw.jpeg">
                        <figcaption><?= $data['title']?></figcaption>
                        <p><?= $data['subtitle']?></p>
                    </a>
                </figure>
                <?php endforeach ?>
            </div>
        </section>


<?php include'partials/footer.php';?>
