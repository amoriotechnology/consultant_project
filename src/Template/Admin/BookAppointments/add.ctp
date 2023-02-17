<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BookAppointment $bookAppointment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Book Appointments'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bookAppointments form large-9 medium-8 columns content">
    <?= $this->Form->create($bookAppointment) ?>
    <fieldset>
        <legend><?= __('Add Book Appointment') ?></legend>
        <?php
            echo $this->Form->control('visiting_hours');
            echo $this->Form->control('consultant_name');
            echo $this->Form->control('profession');
            echo $this->Form->control('location');
            echo $this->Form->control('specify_address');
            echo $this->Form->control('name');
            echo $this->Form->control('mobile_number');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
