<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List T Switching Apikey'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tSwitchingApikey form large-9 medium-8 columns content">
    <?= $this->Form->create($tSwitchingApikey) ?>
    <fieldset>
        <legend><?= __('Add T Switching Apikey') ?></legend>
        <?php
            echo $this->Form->input('api_key');
            echo $this->Form->input('api_secret');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
