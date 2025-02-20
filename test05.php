
<?php
$i=0;
do{
    echo "안녕하세요.<br>";
    $i++;
}
while($i<5);

?>

<?php
$i= "freedoby";
echo strtoupper($i);
echo "<br>";
?>

<?php
$i="FREEDOBY";
echo strtolower($i);
echo "<br>";
?>

<?php
$i="나는 포켓몬 마스터가 될 꺼야~!";
$changeword=str_replace("포켓몬","디지몬",$i);
echo $changeword;
echo "<br>";
?>

<?php
$i="google";
echo "영문 구글의 대문자는:".ucfirst($i);
echo "<br>";
?>

<?php
$si="Pocketmon master";
$sf="Z";
$pos=strpos($si,$sf);

if($pos!==false){
    echo "{$sf}의 위치는". $pos;
}else{
    echo "{$sf}는 존재하지 않습니다.";
}
echo "<br>";
?>

<?php
echo "1970년 1월 1일 0시부터 지금까지의 시간을 초로 환산하면".time()."초 입니다.";
echo "<br>";
?>

<?php
echo "지금은".date("Y년 m월 d일 h시 m분 s초")."입니다.";
echo "<br>";
?>

<?php
$opentime=mktime(7,20,00,1,21,2025);
$nowtime=time();
$endtime=mktime(9,15,10,1,21,2025);

if($nowtime>=$opentime && $nowtime<=$endtime){
    echo "이벤트 참여할 수 있는 시간이 지났습니다.";
}else{
    echo "아직 이벤트에 참여하실 기회가 있습니다. 참여 하시겠습니까?";
}// 현재 시간이 오픈 시간 또는 엔드시간보다 크면
echo "<br>";
?>

<?php
$nowtime=getdate();
print_r($nowtime);
echo "<br><br>";
?>

<?php
$nowtime=getdate();
echo "현재 년도:".$nowtime['year']."<br>";
echo "현재 월:". $nowtime['mon']."<br>";
echo "현재 시간:".$nowtime['hours']."<br>";
?>

<?php
$pointtime=checkdate(01,99,21);
if($pointtime){
    echo "유효한 날짜입니다.";
}else{
    echo "유효하지 않은 날짜입니다.";
}
echo "<br><br>";
?>

<?php
$arr=max(1,4,5,6,7,8,3123,13123145,1000);
echo "가장 큰 수는".$arr."입니다.<br>";
$axx=min(1,4,5,6,7,8,3123,13123145,1000);
echo "가장 작은 수는".$axx."입니다.<br><br>";
?>

<?php
$round=round(123.234,1);
echo "123.234를 소수 첫째 자리에서 반올림한 값은 $round 입니다.";
echo "<br>";
$num=123.234;
$floor=floor($num);
echo "123.234를 내림한 값은 $floor 입니다."


?>

