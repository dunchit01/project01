<?php
echo'시간외근무 신청서 <br>';
echo'결제라인은 아래와 같다.<br>'; // 일반 텍스트 입력. 코딩 가이드 준수
echo'<br>';
$ca=array(); // array 변수 선언
$ca[0]='1) 신청일';
$ca[1]='2) 작성자 서명';
$ca[2]='3) 승인일';
$ca[3]='4) 부서장 서명'; // array 항목 지정

echo$ca[0].'<br>';
echo$ca[1].'<br>';
echo$ca[2].'<br>';
echo$ca[3].'<br>'; // array 항목 나열

?>