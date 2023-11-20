<?php include'partials/header.php'?>

        <!-- Artist Section -->
        <section class="artist-about">
            <!-- Artist Image -->
            <img src="./images/artist.jpeg" alt="Samrat Subedi">
            <div class="artist-about-detail">
                <h4><?= $about['artist_header'];?></h4>
                <p><?= $about['artist_description'];?></p>
            </div>
        </section>


        <!-- About Art Gallery -->
        <section class="art-gallery-about">
            <div class="art-gallery-about-detail">
                <h3><?=$about['artgallery_header']?></h3>
                <p><?=$about['artgallery_description']?></p>
            </div>
            <img src="./images/art-studio.jpg" alt="Samrat Subedi Art Studio">
        </section>

<?php include'partials/footer.php'?>
<!-- Changed content in database -->