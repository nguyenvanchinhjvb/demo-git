<!-- File: src/Template/Clients/index.ctp  (delete links added) -->

<h1>Clients</h1>
<p><?= $this->Html->link("Add Client", ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Create Time</th>
        <th>Update Time</th>
        <th>Description</th>
        <th>Sort Order</th>
    </tr>

<!-- Here's where we iterate through our $Clients query object, printing out client info -->
<?php $cout=0; ?>
<?php foreach ($Clients as $client): ?>
    <?php $cout++ ?>
    <tr>
        
        <td>
            <?= $client->id ?>
        </td>
        <td>
            <?= $client->name ?>
        </td>
        <td>
            <?= $client->create_time ?>
        </td>
        <td>
            <?= $client->update_time ?>
        </td>
        <td>
            <?= $client->description ?>
        </td>
        <td>
            <?= $client->sort_order ?>
        </td>
        <td>
            <?=$this->Html->link('View', ['action' => 'view', $client->id]) ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $client->id]) ?>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $client->id],
                ['confirm' => 'Are you sure?'])
            ?>
        </td>
    </tr>
<?php 

endforeach; ?>
<?php printf($cout); ?>
</table>