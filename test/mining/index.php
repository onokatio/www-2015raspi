<?php
//include "function.php";
//session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://www.google.com/recaptcha/api.js"></script>
<title>マイニングゲーム</title>
</head>
<body>
あなたの所持モナ：100Mona<br>
<hr>
<form method='post' action="mine.php">
<table>
<tr><td>ランダムな値<input type="number" name="seed"></input></td></tr>
<tr><td><div class="g-recaptcha" data-theme="light" data-sitekey="6LerDBkTAAAAAOn5dBGanqRMKGi3JQDiMfd2kC_s"></div>
 <noscript>
  <div style="width: 302px; height: 352px;">
   <div style="width: 302px; height: 352px; position: relative;">
    <div style="width: 302px; height: 352px; position: absolute;">
     <iframe src="https://www.google.com/recaptcha/api/fallback?k=6Ldw2BATAAAAAGRgvi82jAqf-ZaJ_35gzXtxAZdT" frameborder="0" scrolling="no" style="width: 302px; height:352px; border-style: none;">
     </iframe>
    </div>
    <div style="width: 250px; height: 80px; position: absolute; border-style: none; bottom: 21px; left: 25px; margin: 0px; padding: 0px; right: 25px;">
     <textarea style="color:#000000" id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"style="width: 250px; height: 80px; border: 1px solid #c1c1c1;margin: 0px; padding: 0px; resize: none;" value="">
     </textarea>
    </div>
   </div>
  </div>
 </noscript></td></tr>
<tr><td><button type="submit">採掘</button></td></tr>
</table>
</form><br>
</body>
</html>
