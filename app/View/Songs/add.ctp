<!-- File: /app/View/Songs/add.ctp -->

<h1>Add Song</h1>
<?php
echo $this->Form->create('Song');
echo '
<table>
  <tr>
    <td>';
      echo $this->Form->input('title');
      echo $this->Form->input('band');
      echo $this->Form->input('year', array(
                          'type' => 'text'
                        ));
      echo $this->Form->input('capo original');
      echo '
    </td>
    <td>';
      echo $this->Form->input('text', array('rows' => '50'));
      echo '
    </td>
  </tr>
</table>';
echo $this->Form->end('Save Song');
?>