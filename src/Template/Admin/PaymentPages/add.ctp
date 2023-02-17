<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $paymentPage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Payment Pages'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="paymentPages form large-9 medium-8 columns content">
    <?= $this->Form->create($paymentPage) ?>
    <fieldset>
        <legend><?= __('Add Payment Page') ?></legend>
        <?php
            echo $this->Form->control('payment_id');
            echo $this->Form->control('customer_id');
            echo $this->Form->control('payment_date');
            echo $this->Form->control('reference_number');
            echo $this->Form->control('bank_name');
            echo $this->Form->control('total_amount');
            echo $this->Form->control('balance_amount');
            echo $this->Form->control('amount_paid');
            echo $this->Form->control('details');
            echo $this->Form->control('attachment');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
