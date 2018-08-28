<!DOCTYPE HTML>
<html <?= $this->loadLanguage() ?>>
    <head>
        <title>Error</title>
        <?= $this->charset() ?>
        <?= $this->loadCss($css) ?>
    </head>
    <div class="errorMessage">
        <?= $this->importElement('error', $data); ?>  
    </div>
</body>
</html>


