<?php if ($character): ?>
    <h1 class="p-title">Characters</h1>
    <div class="characters-block">
        <?php foreach ($character as $char) : ?>
            <div class="character-card">
                <img src="<?= $char['thumbnail']['path'] . "." . $char['thumbnail']['extension'] ?>" alt="img" width="300px" height="300p">
                <p><?= $char['name'] ?></p>
                <a class="details" href="index.php?action=character&character_id=<?= $char['id'] ?>" target="_blank">Details</a>
            </div>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <p>Error: Unable to fetch character data from the Marvel API.</p>
<?php endif; ?>