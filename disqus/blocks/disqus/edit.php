<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<div class="form-group">
    <?php echo $form->label('host', t('Disqus URL')); ?>
    <?php echo $form->text('host', $host, array('placeholder' => 'your-disqus-domain.disqus.com')); ?>
</div>