<?php
//include "function.php";
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://www.google.com/recaptcha/api.js"></script>
<title>もなだいす!</title>
</head>
<body>
<?
$rand = mt_rand(1,50)+mt_rand(1,50);
if(!(isset( $_POST['g-recaptcha-response']))) exit("キャプチャ認証をしてください。</body></html>");

$date = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LerDBkTAAAAAEXXBVxriGhZQbGR51o0xMJjLviS&response=".$_POST['g-recaptcha-response']);
$json = json_decode($date);

if($json->success != "true"){
 header("Location: http://liberate.ddo.jp/test/akazino/" ) ;
 exit();
}
if(intval($_POST["time"]) <= 1) exit("倍率は2～10の数にしてください。</body></html>");
if(intval($_POST["time"]) > 10) exit("倍率は2～10の数にしてください。</body></html>");
if(intval($_POST["number"]) <= 0) exit("かける額は0以下にしないでください。</body></html>");
$pas = 50/intval($_POST["time"]);
echo "出た乱数".$rand."<br>当たる確率".$pas."<br><br>";
if($pas>$rand){
  echo "あたりです!<br>".$_POST["number"]*intval($_POST["time"])."モナ手に入れました。";
  $k = "あたり";
}else{
  echo "はずれです。<br>またチャレンジしてくださいね。";
  $k = "はずれ";
}
$his = file_get_contents("history.txt");
$his = "<tr><td>".$_POST['number']."</td><td>".$_POST["time"]."</td><td>".$rand."</td><td>".$pas."</td><td>".$k."</td></tr>\n".$his;
file_put_contents("history.txt",$his);

//かけたモナ、倍率、出た乱数、当たる確率、結果
?>
<br><br>
履歴
<table frame="border">
<tr>
<td>賭けた額</td>
<td>倍率</td>
<td>出た乱数</td>
<td>当たる確率</td>
<td>結果</td>
</tr>
<? echo file_get_contents("history.txt"); ?>
</table>
<br>

<form method='post' action='./index.php'>
<button type='submit'>トップに戻る</button>
</form>

</body>
</html>
