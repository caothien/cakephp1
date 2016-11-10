<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tSwitchingApikey->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tSwitchingApikey->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List T Switching Apikey'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tSwitchingApikey form large-9 medium-8 columns content">
    <?= $this->Form->create($tSwitchingApikey) ?>
    <fieldset>
        <legend><?= __('Edit T Switching Apikey') ?></legend>
        <?php
            echo $this->Form->input('api_key');
            echo $this->Form->input('api_secret');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
