<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Registeration') ?></legend>
                <?php
                echo $this->Form->control('name');
                echo $this->Form->control('email');
                echo $this->Form->control('password');
                // echo $this->Form->control('verified');
                // echo $this->Form->control('token');
                // echo $this->Form->control('role');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Register')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
