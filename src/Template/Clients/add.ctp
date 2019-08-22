<!-- File: src/Template/Articles/add.ctp -->

<h1>Add Client</h1>
<?php
    echo $this->Form->create($client);
    echo $this->Form->control('name');
    echo $this->Form->control('create_time');
    echo $this->Form->control('update_time');
    echo $this->Form->control('description');
    echo $this->Form->control('sort_order');
    echo $this->Form->button(__('Save Client'));
    echo $this->Form->end();
?>