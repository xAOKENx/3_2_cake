<h1>社員一覧</h1>

<ul>
  <li>
    <?= $this->Html->link('一覧', ['action'=>'index']) ?>
  </li>
  <li>
    <?= $this->Html->link('追加', ['action'=>'add']) ?>
  </li>
  <li>
    <?= $this->Html->link('編集', ['action'=>'edit']) ?>
  </li>
  <li>
    <?= $this->Html->link('削除', ['action'=>'delete']) ?>
  </li>
</ul>

<ul>
  <?php foreach ($lists as $list): ?>
    <br>
    ID：<?= h($list->id); ?><br>
    名前：<?= h($list->name); ?><br>
    性別：<?php if(($list->gender) === "0"): ?>
            <span>男性</span><br>
          <?php else: ?>
            <span>女性</span><br>
          <?php endif; ?>
    部署：<?= $list->master ? $list->master->div_name: '-' ?><br>
    <?=
        $this->Form->postLink(
          '[x]',
          ['action'=>'delete',$list->id],
          ['confirm'=>'Are you sure?','class'=>'fs12']
        );
    ?><br>
  <?php endforeach; ?>
</ul>
