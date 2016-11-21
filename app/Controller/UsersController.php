<?php

// app/Controller/UsersController.php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

    public $helpers = array('Html', 'Form');
    
   public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('情報が登録されました'));
                return $this->redirect(array('action' => 'add'));
            }
            $this->Flash->error(__('情報が登録出来ませんでした'));
        }
  }

	public function index() {

	}
    
}


