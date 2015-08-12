<?php

class Song extends AppModel {
  public $belongsTo = array(
    'Artist' => array(
      'className' => 'Artist',
      'foreignKey' => 'band'
    )
  );
  
	public $validate = array(
    'title' => array('rule' => 'notBlank'),
    'band' => array('rule' => 'notBlank',
                    array('comparison', '>', 0)
                   ),
    'text' => array('rule' => 'notBlank'),
    );
}

?>