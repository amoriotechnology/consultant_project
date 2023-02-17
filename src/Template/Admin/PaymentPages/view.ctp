<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $paymentPage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Payment Page'), ['action' => 'edit', $paymentPage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Payment Page'), ['action' => 'delete', $paymentPage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paymentPage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Payment Pages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment Page'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="paymentPages view large-9 medium-8 columns content">
    <h3><?= h($paymentPage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Payment Id') ?></th>
            <td><?= h($paymentPage->payment_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Date') ?></th>
            <td><?= h($paymentPage->payment_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reference Number') ?></th>
            <td><?= h($paymentPage->reference_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bank Name') ?></th>
            <td><?= h($paymentPage->bank_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Amount') ?></th>
            <td><?= h($paymentPage->total_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Balance Amount') ?></th>
            <td><?= h($paymentPage->balance_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount Paid') ?></th>
            <td><?= h($paymentPage->amount_paid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Details') ?></th>
            <td><?= h($paymentPage->details) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Attachment') ?></th>
            <td><?= h($paymentPage->attachment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($paymentPage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Id') ?></th>
            <td><?= $this->Number->format($paymentPage->customer_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($paymentPage->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($paymentPage->modified) ?></td>
        </tr>
    </table>
</div>
