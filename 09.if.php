
<?php

$age=21;
if ($age>20) {
echo '참입니다.';
}
echo '<br>';// 새로운 코딩 시작
?>

<?php
$age1=14; // 변수 선언1
$age2=14; // 변수 선언2

if ($age1==$age2){ // if 함수 조건 삽입
    echo '둘은 동갑입니다.'; // if 함수 결과값 삽입
}
echo '<br>';
?>

<?php // 새로운 php 시작
$pocketmon='pikachu';
$digimon='agumon';

if($pocketmon==$digimon){
    echo '서로 같은 종족입니다.';
}
else{
    echo '서로 다른 종족입니다.';
}
echo '<br>';
?>

<?php
$day = 0; // 변수와 스위치(호출)할 값 선언

switch ($day) { // 스위치 함수 선언
     case 1: // 스위치 값 삽입
        echo '월요일';
        break; // 1번 케이스가 끝났음을 의미.
    case 2:
        echo '화요일';
        break;
    case 3:
        echo '수요일';
        break;
    case 4:
        echo '목요일';
        break;
    case 5:
        echo '금요일';
        break;
    case 6:
        echo '토요일';
        break;
    case 7:
        echo '일요일';
        break;
    default:
        echo '유효하지 않은 날입니다.';
}
echo '<br>';
?>

<?php
$hunter= 0;
switch ($hunter){
    case 1:
        echo 'E급 헌터';
        break;

    case 2:
        echo 'SSS급 헌터';
        break;

    default:
        echo '알 수 없는 헌터 등급';    

}
echo '<br>';
?>

<?php
$hunter = 2; // 다른 헌터 등급으로 변경
switch ($hunter) {
    case 1:
        echo 'E급 헌터';
        break;
    case 2:
        echo 'D급 헌터';
        break;
    case 3:
        echo 'C급 헌터';
        break;
    default:
        echo '알 수 없는 헌터 등급';
}
echo '<br>';
?>

<?php
$man='루에리';// 변수 선언 1
$party='전설의 삼용사';// 변수 선언 2

if ($man=='진실과 거짓'){
    echo '루에리는 검은 용기사입니다.';
}
    else{
        echo '사실 루에리는 전설의 삼용사를 그리워하고 있습니다.';
    } 
?>