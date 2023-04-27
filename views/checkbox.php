<?php foreach (TOPICS as $key => $value) {  ?>
    <input type="checkbox" name="userTopic[]" value="<?=$value?>" id="<?=$key?>">
    <label class="btn btn-outline-primary"  for="<?=$key?>"><?=$key?></label>
<?php } ?>
<P id="checkboxInfo"><?= $error['topics'] ?? ""?></P>

