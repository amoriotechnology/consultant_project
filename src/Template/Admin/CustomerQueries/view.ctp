<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $customerQuery
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer Query'), ['action' => 'edit', $customerQuery->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer Query'), ['action' => 'delete', $customerQuery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerQuery->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customer Queries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Query'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customerQueries view large-9 medium-8 columns content">
    <h3><?= h($customerQuery->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Message') ?></th>
            <td><?= h($customerQuery->message) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultation') ?></th>
            <td><?= h($customerQuery->consultation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Id') ?></th>
            <td><?= h($customerQuery->customer_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($customerQuery->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= h($customerQuery->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customerQuery->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($customerQuery->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($customerQuery->modified) ?></td>
        </tr>
    </table>
</div>
