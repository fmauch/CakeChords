<?php

class UserView extends AppModel {
  public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'dependent' => true
        ),
        'Song' => array(
            'className' => 'Song',
            'dependent' => true
        )
    );
}
?>