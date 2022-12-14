<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi </title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
</head>

<body>
    <!-- <div class="song-card">
    <div class="song-img">
        <img :src="songCard.poster" alt="">
    </div>

    <h3>{{ songCard.title }}</h3>
    <h4>{{ songCard.author }}</h4>
    <h5>{{ songCard.year }}</h5>
</div> -->
    <header>
        <div class="spotify-logo">
            <img class="w-100" src="./img/Spotify_logo_without_text.svg.png" alt="spotify logo">
        </div>
    </header>
    <main>
        <div class="main-wrapper">
            <div class=" d-flex flex-wrap mt-4">
                <?php
                include __DIR__ . '/json.php';
                foreach ($albums as $album) { ?>
                    <div class="song-card m-2">
                        <img class="w-100" src="<?php echo $album['poster'] ?>" alt="">
                        <h3><?php echo $album['title'] ?></h3>
                        <h4><?php echo $album['author'] ?></h4>
                        <h5><?php echo $album['year'] ?></h5>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>