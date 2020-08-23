<section class="container-row">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <div class="guestbook">
                <h1>Новости</h1>
                <?php
                if ($article){
                foreach ($article as $a):?>
                    <div class="note">
                        <div class="head"><a href="<?php echo '/news/article.php?id=' . $a->id; ?>"><?php echo $a->title;?></a>
                        </div>
                    </div>
                <?php
                endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php } else {
    echo 'news not found';
} ?>