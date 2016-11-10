<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New T Switching Apikey'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tSwitchingApikey index large-9 medium-8 columns content">
    <h3><?= __('T Switching Apikey') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('api_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('api_secret') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tSwitchingApikey as $tSwitchingApikey): ?>
            <tr>
                <td><?= $this->Number->format($tSwitchingApikey->id) ?></td>
                <td><?= h($tSwitchingApikey->api_key) ?></td>
                <td><?= h($tSwitchingApikey->api_secret) ?></td>
                <td><?= h($tSwitchingApikey->created) ?></td>
                <td><?= h($tSwitchingApikey->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tSwitchingApikey->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tSwitchingApikey->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tSwitchingApikey->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tSwitchingApikey->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
