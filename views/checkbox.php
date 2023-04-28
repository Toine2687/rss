<ul>
    <?php
    require_once __DIR__ . '/../config/const.php';

    foreach (TOPICS as $key => $value) {  ?>
        <li>
            <div class="checkbox">

                <input type="checkbox" name="userTopic[]" value="<?= $value ?>" id="<?= $key ?>">
                <label for="<?= $key ?>"><?= $key ?></label>
            </div>
        </li>
    <?php } ?>
</ul>
<P id="checkboxInfo"><?= $error['topics'] ?? "" ?></P>