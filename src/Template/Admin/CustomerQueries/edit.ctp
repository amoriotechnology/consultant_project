<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $customerQuery
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $customerQuery->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $customerQuery->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Customer Queries'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="customerQueries form large-9 medium-8 columns content">
    <?= $this->Form->create($customerQuery) ?>
    <fieldset>
        <legend><?= __('Edit Customer Query') ?></legend>
        <?php
            echo $this->Form->control('message');
            echo $this->Form->control('consultation');
            echo $this->Form->control('customer_id');
            echo $this->Form->control('name');
            echo $this->Form->control('mobile');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
