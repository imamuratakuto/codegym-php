<?php
$stack = array();

function push($str){
    global $stack;  //$stackを関数内でも使えるようにしています。
    //ここからソースコードを記載してください。
    //配列に実引数で指定された文字列を末尾に代入
    $stack[] = $str;
    //ここまでソースコードを記載してください。
}

function pop(){
    global $stack;  //$stackを関数内でも使えるようにしています。
    //ここからソースコードを記載してください。
    //count関数で配列の要素の数を調べる
    $count = count($stack);
    //unset関数で配列の末尾(配列の要素の数ー１）の要素を削除
    unset($stack[$count - 1]);
    /*unsetで削除した後の歯抜けになった配列を
    arry_values関数で数値添字の配列を返してもらう*/
    $stack = array_values($stack);
    //array_mergeで配列を返してもらう
    //$stack = array_merge($stack);
    //ここまでソースコードを記載してください。
}

echo "<pre>";
push('9');
push('8');
push('7');
print_r($stack);
pop();
pop();
print_r($stack);
push(6);
push(5);
pop();
push(4);
pop();
push(3);
print_r($stack);
echo "</pre>";