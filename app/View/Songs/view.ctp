<!-- File: /app/View/Songs/view.ctp -->

<h1><?php echo h($song['Song']['band']); ?></h1>
<h2><?php echo h($song['Song']['title']); ?></h2>

<p><small>Created: <?php echo $song['Song']['year']; ?></small></p>


 <?php
//   // 45 lines per column
//   $lines_per_column = 45;
//   $lines = explode("\n", $song['Song']['text']);
//   $num_lines = substr_count( $song['Song']['text'], "\n" );
//   for ($i=0; $i < $num_lines / $lines_per_column; $i++) {
//     echo '<div style="float:left;padding-right:50px;"><p style="font-family:monospace; white-space:pre">';
//     for ($l = $i * $lines_per_column; $l < ($i+1) * $lines_per_column && $l < count($lines); $l++) {
//       echo h($lines[$l]);
//     }
//     echo '</p></div>';
//   }
?>
<div id="text" style="-moz-column-count: 1;
-moz-column-gap: 1.5em;
-moz-column-rule: none;
-webkit-column-count: 1;
-webkit-column-gap: 1.5em;
-webkit-column-rule: none;"><p style="font-family:monospace; white-space:pre"><?php echo h($song['Song']['text']); ?></p></div>


<div style="clear:both;"><p><?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $song['Song']['id'])
                );
            ?></p></div>