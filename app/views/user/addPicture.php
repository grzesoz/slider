<?php
$this->importElement('header');
?>

<?=$this->startForm('app/controllers/upload', 'post','upload');?>
   <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Dodaj obraz" name="submit">
<?=$this->endForm();?>

