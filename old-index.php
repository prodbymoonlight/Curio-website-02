<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<?php require_once 'ref/header.php'; ?>
<?php require_once 'ref/side-bar.php'; ?>
<body>
    <span class="spotlight"></span>
    <div class="image-section" style="background-image: url('img/bekleding-stof-patroon.jpg');"></div>
    <div class="wrapper">
        <!-- <video src="https://cdn.pixabay.com/video/2019/05/06/23354-334950206_large.mp4" muted autoplay></video> -->
        <div class="section">
        <h1>Vakken leerjaar 1</h1>
        <div class="subject-container">
            <?php for ($i = 0; $i < 8; $i++): ?>
                <div class="subject-card">
                    <h2 class="emphasis">Web</h2>
                    <h1 class="title">Front & Back-end</h1>
                    <!-- <p style="color: yellow; font-weight: bolder;">* * * * *</p> -->
                    <ul>
                        <li class="description"><span>Wat is het onderwerp: </span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ipsam quod perspiciatis voluptatem impedit! Architecto, asperiores odio porro maxime explicabo nesciunt vero minus, quod aspernatur deleniti voluptas molestias, velit iste!</li>
                        <li class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni maxime sunt perferendis, inventore obcaecati non cupiditate alias omnis doloremque suscipit facere laboriosam quibusdam molestiae dolores excepturi ipsam vero accusamus nobis.</li>
                    </ul>
                </div>

            <?php endfor; ?>
        </div>
        </div>
        <!-- <?php require_once 'ref/carousel.php'; ?> -->
</div>
</body>
<!-- <script src="java/spotlight.java"></script> -->
</html>