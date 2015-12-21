<!-- File: /app/View/Songs/add.ctp -->

<?php echo $this->Html->script('ckeditor/ckeditor');?>

<h1>Add Song</h1>
<?php
echo $this->Form->create('Song');
echo '
<table>
  <tr>
    <td>';
      echo $this->Form->input('title');
      echo $this->Form->input('Artist.name', array(
          'label' => 'Artist name',
      ));
      echo $this->Form->input('year', array(
                          'type' => 'text'
                        ));
      echo $this->Form->input('capo_original');
      echo '
    </td>
    <td>';
      echo $this->Form->textarea('text',array('class'=>'ckeditor'));
      echo '
    </td>
  </tr>
</table>';
echo $this->Form->end('Save Song');
?>