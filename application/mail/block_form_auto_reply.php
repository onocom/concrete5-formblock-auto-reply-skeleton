<?php 
defined('C5_EXECUTE') or die("Access Denied.");

$submittedData='';
foreach($questionAnswerPairs as $questionAnswerPair){
	$submittedData .= $questionAnswerPair['question']."\r\n".$questionAnswerPair['answerDisplay']."\r\n"."\r\n";
} 

$body = t("
ホームページからのお問い合わせありがとうございます。
以下の内容で承りました。


%s

──────────────────────────────────────────

サンプル株式会社
http://example.com/

住　　所：愛知県名古屋市
電話番号：XXX-XXX-XXXX


", $submittedData);