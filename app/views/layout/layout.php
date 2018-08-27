<!DOCTYPE HTML>
<html <?= $this->loadLanguage() ?>>
    <head>
        <?= $this->loadTitle((isset($data['title']) ? $data['title'] : null)); ?>
        <?php unset($data['title']) ?>
        <?= $this->charset() ?>
        <?= $this->loadCss($css) ?>
    </head>
    <?= $this->showContent($view, $data); ?>
    
    <?= $this->loadJs($js); ?>
</body>
</html>