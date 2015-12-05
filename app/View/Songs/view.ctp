<!-- File: /app/View/Songs/view.ctp -->

<?php 
foreach ($song['UserViews'] as $u){
  if ($u['user_id'] == $user_id) {
    $userview = $u;
    break;
  }
}

?>
<?php echo $this->Html->link($song['Artist']['name'],
array('controller' => 'artists', 'action' => 'view', $song['Song']['band'])); ?>
<h2><?php echo h($song['Song']['title']); ?></h2>

<p><small>
  Created: <?php echo $song['Song']['year']; ?>,&nbsp;
  Capo Original: <?php echo $song['Song']['capo_original']; ?><br/>
  <?php if (isset($userview)) { echo "Capo Me: " . $userview['capo']; } ?>
</small></p>


<div id="text" style="-moz-column-count: 1;
-moz-column-gap: 1.5em;
-moz-column-rule: none;
-webkit-column-count: 1;
-webkit-column-gap: 1.5em;
-webkit-column-rule: none;">
<?php

$beginning = substr($song['Song']['text'], 0, 3);
if ($beginning == "<p>")
{
  echo $song['Song']['text'];
}
else
{
  echo '<p style="font-family:monospace; white-space:pre">';
  echo h($song['Song']['text']);
  echo '</p>';
}

?></div>


<div style="clear:both;"><p><?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $song['Song']['id'])
                );
            ?></p></div>