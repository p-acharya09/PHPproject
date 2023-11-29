<?php include'partials/header.php';?>

        <!-- Art Detail Section -->
        <section class="art-detail">
            <div class="art-detail-section">
                <h3><?= $list['title']?></h3>
                <p><?= $list['subtitle']?></p>
            </div>
            <img title="<?= $list['title']?>" src= <?= $list['images']?> >
        </section>

        <section class="suggested">
            <h2>Recommended ArtWorks</h2>
            <div class="suggested-art-detail">
                <?php foreach($listall as $data):?>
                    <figure>
                        <a href="./artdetail/<?=$data['id']?>">
                            <img title="<?= $data['title'] ?>" src="<?= $data['images']?>">
                            <figcaption><?= $data['title'] ?></figcaption>
                            <p><?= $data['subtitle'] ?></p>
                        </a>
                    </figure>
                <?php endforeach ?>
            </div>
        </section>


<?php include'partials/footer.php';?>
