<!-- File: /app/View/Songs/index.ctp -->

<h1>Songs</h1>
<?php echo $this->Html->link(
    'Add Song',
    array('controller' => 'songs', 'action' => 'add')
); ?>
<table>
    <tr>
        <th>Artist</th>
        <th>Title</th>
        <th>Year</th>
    </tr>

    <!-- Here is where we loop through our $songs array, printing out post info -->

    <?php foreach ($songs as $song): ?>
    <tr>
        <td><?php echo $song['Song']['band']; ?></td>
        <td>
            <?php echo $this->Html->link($song['Song']['title'],
array('controller' => 'songs', 'action' => 'view', $song['Song']['id'])); ?>
        </td>
        <td><?php echo $song['Song']['year']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($song); ?>
</table>