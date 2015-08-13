<!-- File: /app/View/UserViews/view.ctp -->

<h2><?php echo h($userview['Song']['title']); ?></h2>

<p><small>
  Created: <?php echo $userview['Song']['year']; ?>,&nbsp;
  Capo Original: <?php echo $userview['Song']['capo_original']; ?>
</small></p>


<div id="text" style="-moz-column-count: 1;
-moz-column-gap: 1.5em;
-moz-column-rule: none;
-webkit-column-count: 1;
-webkit-column-gap: 1.5em;
-webkit-column-rule: none;"><p style="font-family:monospace; white-space:pre"><?php echo h($userview['Song']['text']); ?></p></div>


<div style="clear:both;"><p><?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $userview['Song']['id'])
                );
            ?></p></div>