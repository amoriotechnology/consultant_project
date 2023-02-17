<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $enquiry
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Enquiries'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="enquiries form large-9 medium-8 columns content">
    <?= $this->Form->create($enquiry) ?>
    <fieldset>
        <legend><?= __('Add Enquiry') ?></legend>
        <?php
            echo $this->Form->control('enquiry');
            echo $this->Form->control('name');
            echo $this->Form->control('mobile');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
