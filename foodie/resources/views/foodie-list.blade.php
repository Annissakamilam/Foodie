<html>
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="mx-auto fit-content flex flex-row items-center">
            <div class="col-start-1 mr-1">
                <img src="/assets/arsitek.jpg" width="30px" height="30px">
            </div>
            
            <div class="text-left">
                <h3>Foodie 0.1</h3>
                <h4>Teman setia perut kelaparan</h4>
            </div>
        </div>

        <div class="list-makanan mt-2 mx-auto">
        <h3>Daftar Menu</h3>
            <ul>
                <?php
                foreach($foods as $key=>$food){
                    ?>
                
                <li class="makanan">
                        <img src="<?= $food['picture_url']?>" height="50">
                        <a href="<?=route('detail',['id'=>$key])?>">
                            <p><?= $food['title'] ?></p>
                        </a>
                        <p><?= $food['base_price']?></p>
                    
                </li>

                <?php } ?>
            </ul>
        </div>
    </body>
</html>