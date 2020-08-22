<section class="container-row" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <div class="head"><h1><?php echo $article->getTitle() ?></h1></div>
            <div class="note">
                <?php echo $article->getContents() ?>
            </div>
            <div class="date">
                <blockquote>дата: <?php echo $article->getCreatedAt() ?></blockquote
            </div>
        </div>
    </div>
</section>