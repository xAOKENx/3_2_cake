<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class MastersTable extends Table
{
  public function initialize(array $config)
  {
    $this->addBehavior('Timestamp');
    $this->hasMany('Lists');
  }

}
