<?= $_SESSION["year"] ?>

<span id="year-selector">
    (
    <?php foreach (glob(__DIR__."/../app.sqlite3.20*") as $dbFile): ?>
        <?php $exploded = explode(".", $dbFile); ?>
        <?php $year = $exploded[count($exploded) - 1]; ?>
        <a href="?year=<?= $year ?>"><?= $year ?></a>
    <?php endforeach ?>
    )
</span>
