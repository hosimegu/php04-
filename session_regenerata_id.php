<?php
// sessionをスタートしてidを再生成しよう．
// 旧idと新idを表示しよう．
session_start(); // セッション開始
$old_session_id = session_id(); // idの取得
session_regenerate_id(true); // id再生成&旧idを破棄
$new_session_id = session_id(); // 新idの取得


echo "<p>{$old_session_id}<rr/p>"; // idの確認
echo "<p>{$new_session_id}</p>";
?>