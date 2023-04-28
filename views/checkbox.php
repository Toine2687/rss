<?php foreach (TOPICS as $key => $value) {  ?>
    <input type="checkbox" name="userTopic[]" value="<?= $value ?>" id="<?= $key ?>">
    <label class="btn btn-outline-primary" for="<?= $key ?>"><?= $key ?></label>
<?php } ?>
<P id="checkboxInfo"><?= $error['topics'] ?? "" ?></P>
<ul>
    <?php
    require_once __DIR__ . '/../config/const.php';

    foreach (TOPICS as $key => $value) {  ?>
        <li>
            <div class="checkbox">

                <input type="checkbox" name="userTopic[]" value="<?= $value ?>" id="<?= $key ?>">
                <label class="btn btn-outline-primary" for="<?= $key ?>"><?= $key ?></label>
            </div>
        </li>
    <?php } ?>
</ul>
<P><?= $error['topics'] ?? "" ?></P>