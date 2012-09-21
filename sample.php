<?php
//ライブラリファイル読み込み
include 'sortingUa.php';

$ua = new sortingUa($_SERVER["HTTP_USER_AGENT"]);
$useragent = $ua->getUa();

echo "このUserAgentは";
if($useragent == "sp")
{
    //スマートフォンだった場合の処理
    echo "スマートフォン";
} elseif($useragent == "pc")
{
    //スマホ以外の時の処理
    echo "パソコン、スマホ以外";
}
echo "です。<br>\r\n(".$_SERVER["HTTP_USER_AGENT"].")";