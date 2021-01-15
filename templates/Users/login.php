<style type="text/css">
    a.button {
        background-color: black;
        border: 1px solid #000000;
        border-radius: 5px;
        color: #fff;
        margin-right: 10px;
        padding: 1px 1px 40px -10px;
    }
</style>
<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Login</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <?= $this->Form->control('email', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
    <div class="row">
        <?= $this->Form->submit(__('Login')); ?>
        &emsp;
        <?= $this->Html->link(__('Register'), ['action' => 'register'], ['class' => 'button']) ?></div>
    <u> <?= $this->Html->link(__('Forgot Password'), ['action' => 'forgot']) ?></u>
    <?= $this->Form->end() ?>
</div>
