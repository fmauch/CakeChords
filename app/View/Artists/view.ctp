<h1><?php echo h($artist['Artist']['name']); ?></h1>

<table>
    <tr>
        <th>Title</th>
        <th>Year</th>
    </tr>

    <!-- Here is where we loop through our $songs array, printing out post info -->

    <?php foreach ($artist['Songs'] as $song): ?>
    <tr>
        <td>
            <?php echo $this->Html->link($song['title'],
array('controller' => 'songs', 'action' => 'view', $song['id'])); ?>
        </td>
        <td><?php echo $song['year']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($song); ?>
</table>