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
<!-- <div class="message error" onclick="this.classList.add('hidden');"><?= $message ?></div> -->

<!-- <div class="alert alert-fill-danger" role="alert">
    <i class="mdi mdi-alert-circle"></i>
    <?= $message ?>           
</div> -->

<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <?= $message ?> 
</div>
