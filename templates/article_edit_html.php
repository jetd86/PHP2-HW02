<div class="row justify-content-md-center">
    <div class="col-md-8">
        <h1>Редактирование новости #<?php echo $article->getId()?></h1>
        <form method="post" action="/edit.php/?article_update&id=<?php echo $article->getId()?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">Заголовок</label>
                <input name="title" type="text" class="form-control" value="<?php echo $article->getTitle()?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Полное описание</label>
                <textarea name="contents" class="form-control" id="exampleFormControlTextarea1"
                          rows="10"><?php echo $article->getContents()?></textarea>
            </div>
            <button type="submit" class="btn btn-info">Сохранить</button>
        </form>
    </div>
</div>