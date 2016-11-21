<!-- File: /app/View/Users/add.ctp -->

<h1>ユーザー登録</h1>
<p>イベント参加に必要な情報を入力して下さい</p>

<?php

echo $this->Form->create('User');
echo $this->Form->input('name', array('label' => 'ユーザー名'));
echo $this->Form->input('phone_number', array('label' => '電話番号'));
echo $this->Form->input('mail_address', array('label' => 'メールアドレス'));
echo $this->Form->input('sex', array('label' => '性別'));
echo $this->Form->input('password', array('label' => 'パスワード'));
echo $this->Form->end('Save User', array('label' => '登録'));

?>

