<!-- File: /app/View/UserViews/edit.ctp -->

<h1>Edit UserView</h1>
<?php
echo $this->Form->create('UserView');
echo '
<table>
  <tr>
    <td>';
      echo $this->Form->input('capo');
      echo $this->Form->input('comment');
//     </td>
//     <td>';
//       echo $this->Form->input('text', array('rows' => '50', 'style' => 'font-family:monospace;'));
      echo '
    </td>
  </tr>
</table>';
echo $this->Form->end('Save UserView');
?>