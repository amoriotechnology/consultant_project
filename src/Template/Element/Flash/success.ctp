<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- <div class="message success" onclick="this.classList.add('hidden')"><?= $message ?></div> -->

<!-- <div class="alert alert-fill-success" role="alert">
    <i class="mdi mdi-alert-circle"></i>
    <?= $message ?>           
</div> -->


<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <?= $message ?> 
</div>
