<?php
$nums = [100, 5, 2, -10, 8, 10, -1, 15, 1, -100];

// ここにコードを書きましょう
// ここでbubblesort関数を呼び出します
bubblesort();
echo '<pre>';
print_r($nums);
echo '</pre>';

/* 関数を完成させましょう */
function bubblesort() {
    //グローバル領域から変数を引っ張ってくる
    global $nums;
    //$countで配列の数を数える
    $count = count($nums);
    /*全ての配列の要素が並び替え終わるのに必要な回数
    ＝（配列の数ー１）回*/
    for ($i = 0; $i < $count - 1; $i ++) {
        /*一つの配列の要素を並び替え済みにするまで隣と比較する回数
        ＝（配列の数ー１ー＄i)回*/
        for ($j = 0; $j < $count - 1 - $i; $j ++) {
            //今の配列の中身>次の配列の中身であれば
            if ($nums[$j] > $nums[$j + 1]) {
                //$tmpに一時的に中身を保存して入れ替える
                $tmp = $nums[$j];
                $nums[$j] = $nums[$j + 1];
                $nums[$j + 1] = $tmp;
                
                //list関数で中身を入れ替える
                //list($nums[$j],$nums[$j + 1]) = array($nums[$j + 1],$nums[$j]);
            }
        }
    }
}
?>