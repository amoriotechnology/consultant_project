<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $subSubCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sub Sub Category'), ['action' => 'edit', $subSubCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sub Sub Category'), ['action' => 'delete', $subSubCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subSubCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sub Sub Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sub Sub Category'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subSubCategories view large-9 medium-8 columns content">
    <h3><?= h($subSubCategory->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($subSubCategory->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subSubCategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sub Category Id') ?></th>
            <td><?= $this->Number->format($subSubCategory->sub_category_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($subSubCategory->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($subSubCategory->modified) ?></td>
        </tr>
    </table>
</div>
