<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<style>
    .pdf {
        margin-left: 67%;
    }
</style>
<div class="row">
    <aside class="column">
        <?php if ($user_g->role == 1) : ?>
            <div class="side-nav">
                <h4 class="heading"><?= __('Actions') ?></h4>
                <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
                <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
                <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            </div>
        <?php endif; ?>
        <?php if ($user_g->id == $user->id) : ?>
            <div class="side-nav">
                <h4 class="heading"><?= __('Actions') ?></h4>
                <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            </div>
        <?php endif; ?>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($user->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <!-- <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($user->password) ?></td>
                </tr> -->
                <!-- <tr>
                    <th><?= __('Token') ?></th>
                    <td><?= h($user->token) ?></td>
                </tr> -->
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <?php $who = ($user_g->id == $user->id) ? "Your" : "This"; ?>
                    <th><?= __('Verified') ?></th>
                    <td><?= ($user->verified == 0) ? "<div style ='color:#FF3232'>" . $who . " Account is not verified yet. Please check your email.</div>" : "<div style ='color:#198C19'>" . $who . " Account is verified.</div>" ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= ($user->role == 0) ? "User" : "Admin" ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
            </table>
            <br />
            <?php if (($user_g->id == $user->id) || $user_g->role == 1) : ?>
                <?= $this->Html->link(__('Download Your Data as PDF'), ['action' => 'pdf', $user->id], ['class' => 'button pdf']) ?>
            <?php endif; ?>
        </div>
    </div>
</div>
