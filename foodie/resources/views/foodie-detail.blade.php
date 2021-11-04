<html>
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="mx-auto fit-content flex flex-column items-center">
            <div class="col-start-1 mr-1">
                <img src="<?= $food['picture_url']?>"  height="300">
            </div>
            <div class="text-left">
                <h2><?= $food['title'] ?></h2>
                <h4><?= $food['base_price']?></h4>
                <p><?= $food['description']?></p>
                <h5>Kategori:<?= implode (', ', $food['categories'])?></h6>
            </div>
    </body>
</html>