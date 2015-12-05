<!-- File: /app/View/Songs/edit.ctp -->
<?php echo $this->Html->script('ckeditor/ckeditor');?>

<h1>Edit Song</h1>
<?php
echo $this->Form->create('Song');
echo '
<table>
  <tr>
    <td>';
      echo $this->Form->input('title');
      echo $this->Form->input('Artist.name', array (
                          'label' => 'Artist name'
                        ));
      echo $this->Form->input('year', array(
                          'type' => 'text'
                        ));
      echo $this->Form->input('capo_original');
      $count=0;
      foreach($this->data['UserViews'] as $view) {
      if ($view['user_id'] == $user_id)
        {
          echo $this->Form->input('UserViews.'.$count.'.capo', array(
                            'label' => 'Capo ('.$view['comment'].')'
          ));
          echo $this->Form->input('UserViews.'.$count.'.comment', array(
                            'label' => 'Comment ('.$view['comment'].')'
          ));
          echo $this->Form->input('UserViews.'.$count.'.id', array('type' => 'hidden'));
        }
        $count++;
      }

      echo '
    </td>
    <td>';
      echo $this->Form->textarea('text',array('class'=>'ckeditor'));
      echo '
    </td>
  </tr>
</table>';
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Song');
?>