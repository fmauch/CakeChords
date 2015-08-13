<?php

class UserViewsController extends AppController {
  public $helpers = array('Html', 'Form');

  public function index() {
    $userId = $this->Auth->user('id');
    $views = $this->UserView->find('all', array('conditions' => array('user_id' => $userId)));
    $this->set('userviews', $this->UserView->find('all', array('conditions' => array('user_id' => $userId))));
  }
  
  public function view($id = null) {
    if (!$id) {
      throw new NotFoundException(__('No ID given'));
    }

    $view = $this->UserView->findById($id);
    if (!$view) {
      throw new NotFoundException(__('Invalid ID'));
    }
    $this->set('userview', $view);
  }
  
  public function add($song_id = null) {
    if (!$song_id) {
      throw new NotFoundException(__('Invalid song'));
    }

    $song = $this->UserView->Song->findById($song_id);
    if (!$song) {
        throw new NotFoundException(__('Invalid song'));
    }
    
    $uv = $this->UserView->find('first', array('conditions' => array('user_id' => $this->Auth->user('id'), 'song_id' => $song_id)));
    if ($uv) {
      echo "entry already exists";
      $this->redirect(array('action'=>'edit', $uv['UserView']['id']));
    }
    
    if ($this->request->is('post')) {
        $this->request->data['UserView']['song_id'] = $song_id;
        $this->request->data['UserView']['user_id'] = $this->Auth->user('id');
        $this->UserView->create();
        if ($this->UserView->save($this->request->data)) {
            $this->Session->setFlash('The UserView has been saved.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('Unable to add your post.');
        }
    }
    
    $this->set('song', $song);
  }
  
  public function edit($id = null) {
    if (!$id) {
      throw new NotFoundException(__('Invalid user_view'));
    }

    $user_view = $this->UserView->findById($id);
    if (!$user_view) {
      throw new NotFoundException(__('Invalid user_view'));
    }

    $this->set('user_id', $this->Auth->user('id'));
    if ($this->request->is(array('user_view', 'put'))) {
      $this->UserView->id = $id;
      if ($this->UserView->save($this->request->data)) {
        $this->Session->setFlash(__('Your UserView has been updated.'));
        return $this->redirect(array('action' => 'view', $id));
      }
      $this->Session->setFlash(__('Unable to update your UserView.'));
    }

    if (!$this->request->data) {
      $this->request->data = $user_view;
    }
  }
} 

?>