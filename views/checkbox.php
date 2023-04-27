<?php foreach (TOPICS as $key => $value) {  ?>
    <input type="checkbox" name="userTopic[]" value="<?=$value?>" >
    <label class="btn btn-outline-primary"  for="<?=$value?>"><?=$key?></label>
<?php }

