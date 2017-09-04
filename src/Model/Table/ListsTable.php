<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class ListsTable extends Table
{
  public function initialize(array $config)
  {
    $this->addBehavior('Timestamp');
    $this->hasOne('Masters');
  }

}
