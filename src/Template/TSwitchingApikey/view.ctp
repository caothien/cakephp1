<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit T Switching Apikey'), ['action' => 'edit', $tSwitchingApikey->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete T Switching Apikey'), ['action' => 'delete', $tSwitchingApikey->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tSwitchingApikey->id)]) ?> </li>
        <li><?= $this->Html->link(__('List T Switching Apikey'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New T Switching Apikey'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tSwitchingApikey view large-9 medium-8 columns content">
    <h3><?= h($tSwitchingApikey->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Api Key') ?></th>
            <td><?= h($tSwitchingApikey->api_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Api Secret') ?></th>
            <td><?= h($tSwitchingApikey->api_secret) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tSwitchingApikey->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tSwitchingApikey->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tSwitchingApikey->modified) ?></td>
        </tr>
    </table>
</div>
