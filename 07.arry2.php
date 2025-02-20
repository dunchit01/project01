<?php
// 변수를 배열로 선언해

$po['po'] =array(); 
$po['po'][0]='피카츄';
$po['po'][1]='라이츄';
$po['po'][2]='파이리';

$di['po'] =array(); 
$di['po'][0]='아구몬';
$di['po'][1]='파피몬';
$di['po'][2]='파닥몬';

$co['색상']= array();
$co['색상'][0]='빨강';
$co['색상'][1]='파랑';
$co['색상'][2]='노랑';

echo '<br>';

echo '포켓몬 이름 3마리 말하라<br>';
echo $po['po'][0].'<br>';
echo $po['po'][1].'<br>';
echo $po['po'][2].'<br>';

echo '<br>';

echo '디지몬 이름 3마리 말하라<br>';
echo $di['po'][0].'<br>';
echo $di['po'][1].'<br>';
echo $di['po'][2].'<br>';

echo '<br>';

echo '색깔 3개를 말하라<br>';
echo $co['색상'][0].'<br>';
echo $co['색상'][1].'<br>';
echo $co['색상'][2].'<br>';



?>
