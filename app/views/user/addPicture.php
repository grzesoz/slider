<?php
$this->importElement('header');
?>

<?=$this->startForm('thank_you' , 'post' , 'upload', 'multipart/form-data');?>
   <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Dodaj obraz" name="submit">
<?=$this->endForm();?>

