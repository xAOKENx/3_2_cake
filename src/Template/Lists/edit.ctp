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

<?= $this->Form->create(); ?>
<?= $this->Form->input('id',['option' =>['value' => 'id']]); ?>
<?= $this->Form->input('name'); ?>
<?= $this->Form->radio('gender', ['男性','女性']); ?>
<?= $this->Form->select(
    'division',
    ["営業","販売","開発","人事"],
    ["empty" => "(一つ選ぶ)"]
  ); ?>
<?= $this->Form->button('Update'); ?>
<?= $this->Form->end(); ?>

<ul>
  <?php foreach ($lists as $list): ?>
    <br>
    ID：<?= h($list->id); ?><br>
    名前：<?= h($list->name); ?><br>
    性別：<?= h($list->gender); ?><br>
    部署：<?= h($list->division); ?><br>
  <?php endforeach; ?>
</ul>
