<?php

class Song extends AppModel {
  public $belongsTo = array(
    'Artist' => array(
      'className' => 'Artist',
      'foreignKey' => 'band'
    )
  );
  
	public $validate = array(
    'title' => array('rule' => 'notEmpty'),
    'band' => array('rule' => 'notEmpty',
                    array('comparison', '>', 0)
                   ),
    'text' => array('rule' => 'notEmpty'),
    );
}

?>