<?php
$this->importElement('header');
?>

<?php 

use app\lib\view;
use app\lib\post;


foreach ($data['db'] as $one){
?>

<div class="encja">
    <div class="id">
        <?=$one->id?>
    </div>
    <div class="name">
        <?=$one->name?>
    </div>
    <div class="size">
        <?=$one->size?>
    </div>
    <div class="type">
        <?=$one->type?>
    </div>
    <div class="data">
        <?=$one->data?>
    </div>
    <div class="delete">
        <?php 
        $view = new view\View;
        echo $view->startForm('deleteItem');
        ?>
        <input type="hidden" name="toDeleteName" value=<?=$one->name?>>
        <input type="hidden" name="toDeleteId" value=<?=$one->id?>>
        <input type="submit" value="Usuń">
        <?php 
        echo $view->endForm();
         ?>
    </div>
    <div style="clear:both;"></div> 
</div>
 <?php } ?>