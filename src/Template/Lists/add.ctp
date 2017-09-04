<?php
  $this->assign('title', 'Add New');
 ?>

<h1>追加</h1>

<ul>
  <li>
    <?= $this->Html->link('一覧', ['action'=>'index']) ?>
  </li>
  <li>
    <?= $this->Html->link('追加', ['action'=>'add']) ?>
  </li>
  <li>
    <?= $this->Html->link('編集', ['action'=>'index']) ?>
  </li>
  <li>
    <?= $this->Html->link('削除', ['action'=>'add']) ?>
  </li>
</ul>

<?= $this->Form->create(); ?>
<?= $this->Form->input('id',['option' =>['value' => 'id']]); ?>
<?= $this->Form->input('name'); ?>
<?= $this->Form->radio('gender', ['男性','女性']); ?>
<?= $this->Form->select(
    'division',
    ["営業","販売","開発","人事"],
    ["empty" => "(一つ選ぶ)"]
  ); ?>
<?= $this->Form->button('Add'); ?>
<?= $this->Form->end(); ?>
