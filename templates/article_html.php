<section class="container-row" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <div class="head"><h1><?php echo $article->title; ?></h1></div>
            <div class="note">
                <?php echo $article->contents; ?>
            </div>
            <div class="date">
                <blockquote>дата создания: <?php echo $article->created_at; ?></blockquote
            </div>
        </div>
    </div>
</section>