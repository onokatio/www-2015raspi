<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://www.google.com/recaptcha/api.js"></script>
<title>マイニングゲーム</title>
</head>
<body>
<?php

if(!(isset( $_POST['g-recaptcha-response'])))  exit("キャプチャ認証をしてください。</body></html>");

$date = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=&response=".$_POST['g-recaptcha-response']);
$json = json_decode($date);

if($json->success != "true"){
 header("Location: http://liberate.ddo.jp/test/akazino/" ) ;
 exit();
}

echo "hash値:".hash("sha256",$_POST["seed"]);
?>

</body>
</html>
