<?php
$queue = array();

function enqueue($str){
    global $queue;  //$queueを関数内でも使えるようにしています。
    //ここからソースコードを記載してください。
    //配列に実引数で指定された文字列を末尾に代入
    $queue[] = $str;
    //ここまでソースコードを記載してください。
}

function denqueue(){
    global $queue;  //$queueを関数内でも使えるようにしています。
    //ここからソースコードを記載してください。
    //unset関数で指定の配列を削除
    unset($queue[0]);
    /*unsetで削除した後の歯抜けになった配列を
    arry_values関数で数値添字の配列を返してもらう*/
    $queue = array_values($queue);
    //array_mergeで配列を返してもらう
    //$queue = array_merge($queue);
    //ここまでソースコードを記載してください。
}
echo "<pre>";
enqueue('3');
enqueue('4');
enqueue('5');
print_r($queue);
denqueue();
denqueue();
print_r($queue);
enqueue('6');
enqueue('7');
denqueue();
denqueue();
denqueue();
enqueue('8');
print_r($queue);
echo "</pre>";