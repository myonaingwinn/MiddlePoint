<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<style>
    .input.text {
        width: 40%;
        margin-left: 60%;
    }

    .button {
        margin-left: 15px;
    }
</style>

<div class="users index content">
    <?= $this->Form->create(null, ['type' => 'get']) ?>
    <!-- for search function -->
    <?= $this->Form->control('key', ['label' => '', 'value' => $this->request->getQuery('key')]) ?>
    <?= $this->Form->submit(__('Search'), ['class' => 'button float-right search']) ?>
    <!-- for new user button -->
    <?php if ($user_g->role == 1) : ?>
        <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <?php endif; ?>
    <?= $this->Form->end() ?>

    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <!-- <th><?= $this->Paginator->sort('password') ?></th> -->
                    <!-- <th><?= $this->Paginator->sort('verified') ?></th> -->
                    <!-- <th><?= $this->Paginator->sort('token') ?></th> -->
                    <!-- <th><?= $this->Paginator->sort('role') ?></th> -->
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= h($user->name) ?></td>
                        <td><?= h($user->email) ?></td>
                        <!-- <td><?= h($user->password) ?></td> -->
                        <!-- <td><?= $this->Number->format($user->verified) ?></td> -->
                        <!-- <td><?= h($user->token) ?></td> -->
                        <!-- <td><?= $this->Number->format($user->role) ?></td> -->
                        <td><?= h($user->created) ?></td>
                        <td><?= h($user->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                            <?php if ($user_g->role == 1) : ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p><br />
        <?= $this->Html->link('Download CSV', ['action' => 'csv'], ['class' => 'button']) ?>&ensp;
        <?= $this->Html->link(__('Download PDF'), ['action' => 'pdf'], ['class' => 'button']) ?>
    </div>
</div>
