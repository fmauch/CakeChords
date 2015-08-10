<!-- File: /app/View/Songs/index.ctp -->

<h1>Songs</h1>
<?php echo $this->Html->link(
    'Add Song',
    array('controller' => 'songs', 'action' => 'add')
); ?>
<table>
    <tr>
	<th><?php echo $this->Paginator->sort('Artist.name'); ?></th>
	<th><?php echo $this->Paginator->sort('title'); ?></th>
	<th><?php echo $this->Paginator->sort('year'); ?></th>

    </tr>

    <!-- Here is where we loop through our $songs array, printing out post info -->

    <?php foreach ($songs as $song): ?>
    <tr>
        <td><?php echo $this->Html->link($song['Artist']['name'],
array('controller' => 'artists', 'action' => 'view', $song['Song']['band'])); ?></td>
        <td>
            <?php echo $this->Html->link($song['Song']['title'],
array('controller' => 'songs', 'action' => 'view', $song['Song']['id'])); ?>
        </td>
        <td><?php echo $song['Song']['year']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($song); ?>
</table>