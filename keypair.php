<?php
$prkey = "";
$config = array(
  "private_key_bits" => 384,
  "private_key_type" => OPENSSL_KEYTYPE_RSA,
);
$rkey = openssl_pkey_new($config);
//$rkey = openssl_pkey_new();
openssl_pkey_export($rkey, $prkey);
$pukey = openssl_pkey_get_details($rkey);
echo "秘密鍵:<br>\n".$pukey["key"]."<br>\n<br>\n";
echo "公開鍵:<br>\n".$prkey;
/*$keypair = array(
  'PRIVATE' => $prkey,
  'PUBLIC'  => $pukey['key'],
);*/
?>
