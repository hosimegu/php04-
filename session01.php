<?php
// session変数を定義して値を入れよう

session_start(); // session変数を使用する場合も必須!
$_SESSION['num'] = 100; 
echo $_SESSION['text']='hoge';
echo $_SESSION['num'];

