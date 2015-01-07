<?php

class ArtistsController extends AppController {
  public $helpers = array('Html', 'Form');

  public function index() {
   $this->set('artists', $this->Artist->find('all', array(
      'order' => array('name')
    )));
  }
  
  public function view($id = null) {
    if (!$id) {
      throw new NotFoundException(__('Invalid artist'));
    }

    $artist = $this->Artist->findById($id);
    if (!$artist) {
      throw new NotFoundException(__('Invalid artist'));
    }
    $this->set('artist', $artist);
  }
} 

?>