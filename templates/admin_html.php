<div class="container">
    <h1>Админка</h1>
    <div class="row">
        <?php $i = 0; ?>
        <?php foreach ($news as $item):
            if($i % 2 == 0){?> <div class="w-100"></div> <?php } ?>
        <div class="col">
            <div class="card">
                <h5 class="card-header">#<?php echo $i+1 ?></php></h5>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $item->getTitle(); ?></h5>
                    <a href="/admin/edit.php?news=edit&id=<?php echo $item->getId(); ?>" class="btn btn-success btn-sm">Редактировать</a>
                    <a href="#" class="btn btn-danger btn-sm">Удалить</a>
                </div>
            </div>
        </div>
        <?php $i++; endforeach; ?>
    </div>
</div>


