<?php
$number=2; // 이곳에 숫자를 입력
if($number%5==0){
    echo "나머지가 없습니다.\n";
} else {
    echo "풉ㅋ~! 어떻게 이런 숫자를 넣을 생각하신거죠? 세상이 당신의 무지함에 냉소적인 미소를 짓습니다.";
}
echo '<br>';
?>

<?php
$kijun=4; // 이곳에 숫자를 입력
switch($kijun) {
     case 1: 
        echo"입력한 숫자는 조건을 충족하지 않습니다.\n";
        break;
     case 2: 
        echo"아깝다, 정답에 가까웠는데~\n";
        break;
     case 3: 
        echo"올바른 값을 입력하셨습니다. 숨겨진 문이 열립니다.\n";
        break;
     case 4: 
        echo"아이고~ 빗겨나갔네~ 다시 생각해보쇼~\n";
        break;
     case 5: 
        echo"ㅉ\n";
        break;
}
echo '<br>'
?>

<?php
$number=1004;// 숫자 입력하는 구간
if ($number > 0 && $number < 90) {
    echo "정답이 아닙니다.";
 } else{
        echo "올 ㅋ 승영님의 정체가 1004라구요? OMG, 다시 승영님을 관찰하고 오세요.";
    }
    echo "<br>";
?>

<?php
$donghuck=66; // 숫자 입력하는 구간
switch ($donghuck){
    case 1: 
        echo "동혁님은 강아지를 좋아합니다.";
        break;
    case 2:
        echo "동혁님은 타코야끼 만들기 생방송을 한 적이 있고, 그 자리에서 연봉을 올려준다는 말을 들었습니다.";
        break;
 default:
    echo "그러나 동혁님의 연봉은 오르지 않았습니다 ㅠㅠ...";
    break;
}
?>

<?php

for($i=1; $i<=10; $i++){
    echo $i,',';
}
echo "<br>"
?>

<?php
for($i=1; $i<=25; $i++){
    echo $i,',';
}
?>

<?php
$sum=0;
$maxValue=50;
for($i=1; $i<=$maxValue; $i++){
    if($i%2==0){
        $sum+=$i;
    }
}
 echo "0부터 $maxValue 까지의 짝수를 모두 더한 값은 $sum 입니다.";
echo "<br>"
?>


<?php
for($i=0; $i<10; $i++){
    if($i==5){
        break;
    }
    echo $i.',';
}
echo "<br>"
?>

<?php
for($i=0; $i<10; $i++){
    if($i==5){
        continue;
    }
    echo $i.',';
}
echo "<br><br>";

?>


<?php
for($i=1; $i<=3; $i++){ //  1~ 3단까지 만들기 위한 범위를 지정하는 명령어
    echo "{$i} 단 <br>"; // 지정한 범위를 '단'이라는 단어와 함께 말하라는 명령어
    for($n= 1; $n <=9; $n++){   // 단이라는 범위에 작동할 n 값(1~9까지)의 위한 명령어 
    $mul = $i * $n; // 범위를 지정한 숫자끼리 곱하라는 명령어
    echo "{$i} 곱하기 {$n}={$mul}<br>";  //   범위를 정한 것을 문장화하라는 명령어 
}

echo "<br><br>"; // 단 사이의 공백을 만들기 위한 명령어 // <br>을 많이 넣을 수록 단처리를 더한다.
}
?>



<?php
for($i=0; $i<10; $i++){ // 반복할 $i 의 변수 선언 / $i의 반복 횟수 지정 / 처리방식 지정
    echo "제{$i}한국<br>"; // 변수에 대입할 값 선언
    for($s=1; $s<10; $s++){
        echo "{$i}_{$s}만세<br>";
    }
}
?>


<?php
for($i=0; $i<10; $i++){ // 반복할 $i 의 변수 선언 / $i의 반복 횟수 지정 / 처리방식 지정
    echo "제{$i}한국만세<br>"; // 변수에 대입할 값 선언
}
?>

<?php
for($i=1; $i<=9; $i++){ //  1~ 3단까지 만들기 위한 범위를 지정하는 명령어
   if ($i==3){
    continue; // 3단 스킵
   }
    echo "{$i} 단 <br>"; // 지정한 범위를 '단'이라는 단어와 함께 말하라는 명령어
    for($n= 1; $n <=9; $n++){   // 단이라는 범위에 작동할 n 값(1~9까지)의 위한 명령어 
    $mul = $i * $n; // 범위를 지정한 숫자끼리 곱하라는 명령어
    echo "{$i} 곱하기 {$n}={$mul}<br>";  //   범위를 정한 것을 문장화하라는 명령어 
}

echo "<br><br>"; // 단 사이의 공백을 만들기 위한 명령어 // <br>을 많이 넣을 수록 단처리를 더한다.
}
