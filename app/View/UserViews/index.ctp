<h1>My custom views</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Comment</th>
    </tr>


    <?php foreach ($userviews as $view): ?>
    <tr>
        <td>
            <?php echo $this->Html->link($view['Song']['title'],
array('controller' => 'songs', 'action' => 'view', $view['Song']['id'])); ?>
        </td>
        <td><?php echo $this->Html->link($view['UserView']['comment'], 
        array('controller' => 'user_views', 'action' => 'view', $view['UserView']['id'])); ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($view); ?>
</table>