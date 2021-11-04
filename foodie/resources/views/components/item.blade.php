<li class="makanan">
    <img src="<?= $food['picture_url']?>" height="50">
    <a href="<?=route('detail',['id'=>$key])?>">
        <p><?= $food['title'] ?></p>
    </a>
    <p><?= $food['base_price']?></p>

</li>
