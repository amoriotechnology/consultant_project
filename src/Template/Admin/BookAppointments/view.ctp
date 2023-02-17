<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BookAppointment $bookAppointment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Book Appointment'), ['action' => 'edit', $bookAppointment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Book Appointment'), ['action' => 'delete', $bookAppointment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookAppointment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Book Appointments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book Appointment'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bookAppointments view large-9 medium-8 columns content">
    <h3><?= h($bookAppointment->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Visiting Hours') ?></th>
            <td><?= h($bookAppointment->visiting_hours) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultant Name') ?></th>
            <td><?= h($bookAppointment->consultant_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profession') ?></th>
            <td><?= h($bookAppointment->profession) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($bookAppointment->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Specify Address') ?></th>
            <td><?= h($bookAppointment->specify_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($bookAppointment->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile Number') ?></th>
            <td><?= h($bookAppointment->mobile_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bookAppointment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($bookAppointment->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($bookAppointment->modified) ?></td>
        </tr>
    </table>
</div>
