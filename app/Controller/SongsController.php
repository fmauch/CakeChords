<?php

class SongsController extends AppController {
	public $helpers = array('Html', 'Form', 'Paginator');

	public function index() {
		$this->set('songs', $this->paginate());
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
		$this->set('user_id', $this->Auth->user('id'));
	}

	public function add() {
    if ($this->request->is('post')) {
      $this->Song->create();
      $artist = $this->Song->Artist->find('first', array('conditions' => array('name' => $this->request->data['Artist']['name'])));
      if ($artist) {
        $this->Song->band = $artist['Artist']['id'];
        $this->request->data['Artist']['id'] = $artist['Artist']['id'];
      }
      if ($this->Song->saveAll($this->request->data)) {
        $this->Flash->set(__('Your song has been saved.'));
        return $this->redirect(array('action' => 'index'));
      }
      $this->Flash->set(__('Unable to add your song.'));
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

    $this->set('user_id', $this->Auth->user('id'));
    if ($this->request->is(array('song', 'put'))) {
      $this->Song->id = $id;
      $artist = $this->Song->Artist->find('first', array('conditions' => array('name' => $this->request->data['Artist']['name'])));
      if ($artist) {
        $this->Song->band = $artist['Artist']['id'];
        $this->request->data['Artist']['id'] = $artist['Artist']['id'];
      }
      if ($this->Song->saveAll($this->request->data)) {
        $this->Flash->set(__('Your song has been updated.'));
        return $this->redirect(array('action' => 'view', $id));
      }
      $this->Flash->set(__('Unable to update your song.'));
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
      $this->Flash->set(
        __('The song with id: %s has been deleted.', h($id))
      );
      return $this->redirect(array('action' => 'index'));
    }
  }

  public $paginate = array(
    'limit' => 100,
    'order' => array(
	'title' => 'asc'
    )
  );

}

?>