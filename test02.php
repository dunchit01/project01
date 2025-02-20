<?php
for($i=1; $i<3; $i++){
    echo "{$i}단<br>";{
        for($n=1; $n<3; $n++){
            $mul = $i*$n;
            echo "{$i}X{$n}는 $mul 입니다.<br>";
        }
    }
    echo "<br>";
}
?>

<?php 
$pocketmon = ['피카츄','라이츄','파이리','꼬부기'];
foreach($pocketmon as $pm){
    echo $pm.'<br>';
}
echo '<br>';
?>

<?php
$pocketmon[0]=['한글'=>'피카츄', '영어'=>'pickchu'];
$pocketmon[1]=['한글'=>'라이츄', '영어'=>'raichu'];
$pocketmon[2]=['한글'=>'파이리', '영어'=>'fairi'];
$pocketmon[3]=['한글'=>'꼬부기', '영어'=>'Kkobuki'];

foreach($pocketmon as $pk){
echo '한글:'. $pk['한글'];
echo '<br>';
echo '영어:'. $pk['영어'];
echo '<br>';
echo '<br>';
}
?>


<?php
$digimon[0]=['한글'=>'아구몬','영어'=>'AGUMON'];
$digimon[1]=['한글'=>'파닥몬','영어'=>'PADAKMON'];
$digimon[2]=['한글'=>'가트몬', '영어'=>'GATMON'];

foreach($digimon as $di){
    echo '한글 :'. $di['한글'];
    echo '<br>';
    echo '영어 :'. $di['영어'];
    echo '<br>';
    echo '<br>';
}

?>

<?php
$start=0; 
$plus=10;
while($start<=100){
    $start+=$plus;
    $plus++;
}
echo '0부터 10까지의 누계 합은'. $start. '입니다.';
echo "<br><br>";
?>


<?php
for ($i=1; $i<10; $i++){     
   if($i==3){
    continue; 
} 
// 이제 단을 처리하는 구간을 만들어라.
echo "($i)단<br>"; // 단을 말하는데, 반복해서 말해야하니까 for 범위에 해당 코드를 입력
for($n=1; $n<=9; $n++){ //단 안에 반복될 조건 다시 추가, 신규 변수 n 선언
$mul= $i * $n; // 곱셈 연산식 추가
echo "{$i}X{$n}={$mul}<br>"; // 곱셈 연산식을 말하라는 조건 추가, 이 조건도 반복되어야하니 반복문 안에 넣는것
}
echo"<br><br>";
} 
?>


<?php
$i = 00; // 점수를 입력하세요.
if($i>=90){
    echo "A";
}else if($i>=80){
echo "B"; 
}else if($i>=70){
echo "학고입니다.";

}
?>