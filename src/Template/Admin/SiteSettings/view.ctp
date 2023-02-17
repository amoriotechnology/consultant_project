<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $siteSetting
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Site Setting'), ['action' => 'edit', $siteSetting->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Site Setting'), ['action' => 'delete', $siteSetting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $siteSetting->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Site Settings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Site Setting'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="siteSettings view large-9 medium-8 columns content">
    <h3><?= h($siteSetting->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Meta Description') ?></th>
            <td><?= h($siteSetting->meta_description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Meta Title') ?></th>
            <td><?= h($siteSetting->meta_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Meta Keyword') ?></th>
            <td><?= h($siteSetting->meta_keyword) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($siteSetting->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($siteSetting->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($siteSetting->modified) ?></td>
        </tr>
    </table>
</div>
