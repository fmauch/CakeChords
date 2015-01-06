<?php

class Song extends AppModel {
	public $validate = array(
    'title' => array('rule' => 'notEmpty'),
    'band' => array('rule' => 'notEmpty'),
    'text' => array('rule' => 'notEmpty')
    );
}

?>