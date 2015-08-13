<!-- File: /app/View/UserViews/view.ctp -->

<h1><?php echo h($song['Song']['title']); ?></h1>

<p>
  Created: <?php echo $song['Song']['year']; ?>,&nbsp;
  Capo Original: <?php echo $song['Song']['capo_original']; ?>
</p>

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

<!--
<div id="text" style="-moz-column-count: 1;
-moz-column-gap: 1.5em;
-moz-column-rule: none;
-webkit-column-count: 1;
-webkit-column-gap: 1.5em;
-webkit-column-rule: none;"><p style="font-family:monospace; white-space:pre"><?php echo h($song['Song']['text']); ?></p></div>-->


