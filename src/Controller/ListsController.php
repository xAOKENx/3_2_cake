<?php

  // /lists/index
  // /lists
  // /(controller)/(action)/(option)

 namespace App\Controller;

 class ListsController extends AppController
 {
   public function index()
   {
     $list = $this->Lists->find('all');
     // $this->set('lists', $lists);
     $this->set('lists', $list);
   }

   public function add()
   {
     $list = $this->Lists->newEntity();
     if ($this->request->is('post')){
       $list = $this->Lists->patchEntity($list, $this->request->data);
       $this->Lists->save($list);

       return $this->redirect(['action'=>'index']);
     }
     // $this->set('lists', $lists);
     $list = $this->Lists->find('all');
     $this->set('lists', $list);
   }

   public function edit()
   {
     $list = $this->Lists->newEntity();
     if ($this->request->is('post')){
       $list = $this->Lists->patchEntity($list, $this->request->data);
       $this->Lists->save($list);

       return $this->redirect(['action'=>'index']);
     }
     // $this->set('lists', $lists);
     $list = $this->Lists->find('all');
     $this->set('lists', $list);
   }

   public function delete($id = null)
   {
     $this->request->allowMethod(['post','delete']);
     $list = $this->Lists->get($id);
     if ($this->Lists->delete($list)) {
       return $this->redirect(['action'=>'index']);
     } else{
       //error
       return $this->redirect(['action'=>'index']);
     }
     // $this->set('lists', $lists);
     $list = $this->Lists->find('all');
     $this->set('lists', $list);
   }


 }
