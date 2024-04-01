<?php if ($comic): ?>
    <div class="container">
        <div class="character-block">
            <div class="character-thumb">
                <img src="<?= $comic[0]['thumbnail']['path'] . "." . $comic[0]['thumbnail']['extension'] ?>" alt="img" width="400px" height="400p">
            </div>
            <div class="character-info">
                <p class="title"><?= $comic[0]['title'] ?></p>
                <p><?= $comic[0]['description'] ?></p>
                <?php foreach ($comic[0]['prices'] as $price): ?>
                    <p>Price - $<?= $price['price'] ?></p>
                <?php endforeach; ?>
                <p>Pages Count - <?= $comic[0]['pageCount'] ?></p>

                <div class="list-group">
                    <?php if ($comic[0]['stories']['items']): ?>
                        <div class="list">
                            <p>Stories in which <?= $comic[0]['title'] ?> appears</p>
                            <ul>
                                <?php foreach ($comic[0]['stories']['items'] as $story): ?>
                                    <li><?= $story['name'] ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php if ($comic[0]['events']['items']): ?>
                        <div class="list">
                            <p>Events in which <?= $comic[0]['title'] ?> appears</p>
                            <ul>
                                <?php foreach ($comic[0]['events']['items'] as $event): ?>
                                    <li><?= $event['name'] ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <p>Error: Unable to fetch comic data from the Marvel API.</p>
<?php endif; ?>
