<!-- File: /app/View/Songs/add.ctp -->

<h1>Add Song</h1>
<?php
echo $this->Form->create('Song');
echo $this->Form->input('title');
echo $this->Form->input('band');
echo $this->Form->input('year');
echo $this->Form->input('capo original');
echo $this->Form->input('text', array('rows' => '3'));
echo $this->Form->end('Save Song');
?>