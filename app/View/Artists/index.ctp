<h1>Artists</h1>
<ul>
  <?php foreach ($artists as $artist): ?>
  <li>
    <?php echo $this->Html->link($artist['Artist']['name'],
      array('controller' => 'artists', 'action' => 'view', $artist['Artist']['id'])); ?>
  </li>
  <?php endforeach; ?>
  <?php unset($artist); ?>
</ul>