<?php if ($comics): ?>
    <h1 class="p-title">Comics</h1>
    <div class="comics-block">
        <?php foreach ($comics as $com) : ?>
            <div class="comics-card">
                <img src="<?= $com['thumbnail']['path'] . "." . $com['thumbnail']['extension'] ?>" alt="img">
                <p><?= $com['title'] ?></p>
                <a class="details" href="index.php?action=comic&comic_id=<?= $com['id'] ?>" target="_blank">Details</a>
            </div>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <p>Error: Unable to fetch character data from the Marvel API.</p>
<?php endif; ?>