<?php

class Artist extends AppModel {
  public $hasMany = array(
        'Songs' => array(
            'className' => 'Song',
            'foreignKey' => 'band',
            'order' => 'Songs.title',
            'dependent' => true
        )
    );
    
  public $validate = array(
    'name' => array('rule' => 'notEmpty'),
    );
}
?>