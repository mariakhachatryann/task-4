<?php if ($character): ?>
    <title>Marvel Information Portal</title>
    <div class="container">
        <div class="character-block">
            <div class="character-thumb">
                <img src="<?= $character[0]['thumbnail']['path'] . "." . $character[0]['thumbnail']['extension'] ?>" alt="img" width="400px" height="400p">
            </div>
            <div class="character-info">
                <p class="title"><?= $character[0]['name'] ?></p>
                <p><?= $character[0]['description'] ?></p>

                <div class="list-group">
                    <?php if ($character[0]['stories']['items']): ?>
                        <div class="list">
                            <p>Stories in which <?= $character[0]['name'] ?> appears</p>
                            <ul>
                                <?php foreach ($character[0]['stories']['items'] as $story): ?>
                                    <li><?= $story['name'] ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php if ($character[0]['comics']['items']): ?>
                        <div class="list">
                            <p>Comics in which <?= $character[0]['name'] ?> appears</p>
                            <ul>
                                <?php foreach ($character[0]['comics']['items'] as $comic): ?>
                                    <li><?= $comic['name'] ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php if ($character[0]['comics']['items']): ?>
                        <div class="list">
                            <p>Series in which <?= $character[0]['name'] ?> appears</p>
                            <ul>
                                <?php foreach ($character[0]['series']['items'] as $ser): ?>
                                    <li><?= $ser['name'] ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <p>Error: Unable to fetch character data from the Marvel API.</p>
<?php endif; ?>