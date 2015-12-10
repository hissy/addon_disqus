<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<div class="form-group">
    <?php echo $form->label('domain', t('Disqus URL')); ?>
    <?php echo $form->text('domain', $domain); ?>
</div>