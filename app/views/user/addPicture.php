<?php
$this->importElement('header');
?>

<?=$this->startForm('upload' , 'post' , 'upload');?>
   <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Dodaj obraz" name="submit">
<?=$this->endForm();?>

