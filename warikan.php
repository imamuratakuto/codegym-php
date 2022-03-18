<?php
//合計算出
function sum ($cart) {
    $sum = 0;
    /* ここにコードを追加しましょう */
    //配列の要素(品名別)ごとの合計金額の合計金額を求めたい
    //foreachで配列(品名別)の合計金額を足していく
    foreach($cart as $item) {
        $sum += $item["個数"] * $item["単価"];
    }
    
    return $sum;
}

//1人あたりの金額算出
function moneyPerPerson ($sum, $people) {
    $per = 0;
    /* ここにコードを追加しましょう */
    //合計金額を人数で割る
    //小数点以下をceilで切り上げをする
    //キャストによって強制的に型変換する
    $per = $sum / $people;
    $per = ceil($per);
    $per = (int)$per;
    return $per;
}

const JSON_FILE = './warikan.json';    //JSONファイル
$json = file_get_contents('./warikan.json');
if ($json === false) {
    echo 'ファイル入力エラー: ' . JSON_FILE . 'が見つかりません。';
}
$warikan = json_decode($json, true);

//合計
$sum = sum($warikan["cart"]);
//1人辺りの金額
$per = moneyPerPerson($sum,$warikan["people"]);

echo '合計金額は' . $sum . '円です。';
echo '<br>';
echo '1人あたりの金額は' . $per . '円です。';

