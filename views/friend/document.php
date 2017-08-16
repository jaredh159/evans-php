<h3><?= $document->getTitle() ?></h3>
<h4>Editions:</h4>
<ul>
    <?php foreach ($document->getEditions() as $edition): ?>
        <li>
            <b><?= $edition->getType() ?></b>
            <?php foreach ($edition->getFormats() as $format): ?>
                <code><?= $format->getType() ?></code>
            <?php endforeach;?>
        </li>
    <?php endforeach; ?>
<ul>