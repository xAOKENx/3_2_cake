<?php

  // /lists/index
  // /lists
  // /(controller)/(action)/(option)

 namespace App\Controller;

 class EditsController extends AppController
 {
   public function index()
   {
     $Edits = $this->Lists->find('all');
     // $this->set('lists', $lists);
     $this->set('edits', $Edits);
   }


 }
