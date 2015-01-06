<?php

class SongsController extends AppController {
	public $helpers = array('Html', 'Form');

	public function index() {
		$this->set('songs', $this->Song->find('all', array(
      'order' => array('band', 'title')
		)));
	}

	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid song'));
		}

		$song = $this->Song->findById($id);
		if (!$song) {
			throw new NotFoundException(__('Invalid song'));
		}
		$this->set('song', $song);
	}
	
	public function add() {
    if ($this->request->is('post')) {
      $this->Song->create();
      if ($this->Song->save($this->request->data)) {
        $this->Session->setFlash(__('Your song has been saved.'));
        return $this->redirect(array('action' => 'index'));
      }
      $this->Session->setFlash(__('Unable to add your song.'));
    }
  }
  
  public function edit($id = null) {
    if (!$id) {
      throw new NotFoundException(__('Invalid song'));
    }

    $song = $this->Song->findById($id);
    if (!$song) {
      throw new NotFoundException(__('Invalid song'));
    }

    if ($this->request->is(array('song', 'put'))) {
      $this->Song->id = $id;
      if ($this->Song->save($this->request->data)) {
        $this->Session->setFlash(__('Your song has been updated.'));
        return $this->redirect(array('action' => 'index'));
      }
      $this->Session->setFlash(__('Unable to update your song.'));
    }

    if (!$this->request->data) {
      $this->request->data = $song;
    }
  }
  
  public function delete($id) {
    if ($this->request->is('get')) {
      throw new MethodNotAllowedException();
    }

    if ($this->Song->delete($id)) {
      $this->Session->setFlash(
        __('The song with id: %s has been deleted.', h($id))
      );
      return $this->redirect(array('action' => 'index'));
    }
  }

} 

?>